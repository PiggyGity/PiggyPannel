<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Visit;
use League\Plates\Engine;

class BaseController
{
    protected $router;

    protected $udata;

    protected $udetail;

    protected $request;

    public function __construct($router)
    {
        $request = filter_var_array($_REQUEST, FILTER_SANITIZE_STRIPPED);
        
        $this->request = (object) $request;
		$this->router = $router;
        $this->visit();
        $this->view = new Engine(realpath(dirname(__DIR__, 2) . "/resources/views"));
        $this->view->addData([
            'r' => $router,
        ]);
        
        if (isset($_SESSION['uid']) && !empty($_SESSION['uid'])) {
			
			//check player sesison
			if(!(new User)->GetUserDetail($_SESSION['uid'])){
				$this->logout();
				return;
			}
			
			//check user person
			if(!$ug = (new User)->GetUserDetail($_SESSION['uid'])){
				$this->logout();
				return;
			}
			
            checkPayments($_SESSION['uid']);
            $this->udata = (new User)->findById($_SESSION['uid']);
            $this->udetail = (new User)->GetUserDetail($_SESSION['uid']);
            $this->view->addData([
                'udata' => $this->udata,
                'udetail' => $this->udetail,
            ]);
        }

       
    }

    public function response(string $param, array $values): string
    {
        return json_encode([$param => $values]);
    }

    public function getimage()
    {
        $data = explode('/', $_GET['path']);

        $path = config('paths.uploads');

        if ($data[0] === 'profile') {
            if (file_exists($final_path = "$path/profile/{$data[1]}")) {
                header("Content-Type: " . mime_content_type($final_path));
                echo file_get_contents($final_path);
            }
            return;
        }

        return;
    }

    public function state_check()
    {
        if (isset($_GET['uid'])) {
            checkPayments($_GET['uid']);
            return;
        }

        if (isset($_SESSION['uid'])) {
            checkPayments($_SESSION['uid']);
            return;
        }
    }

    public function logout(): void
    {
        unset($_SESSION['uid']);
        $this->router->redirect('web.landing');
        return;
    }

    protected function visit(): void
    {
		
        $v = new Visit;

        if (!$day = $v->find("date = :current", "current=" . date("Y-m-d") . "")->fetch()) {
            $v->date = date("Y-m-d");
            $v->count = 1;
            $v->save();
            return;
        }

        $day->date = date("Y-m-d");
        $day->count = $day->_data->count + 1;
        $day->save();

        return;
    }
}
