<?php

namespace App\Controllers;

class LandingController extends BaseController
{
    public function landing(): void
    {
        echo $this->view->render('landing');
        return;
    }
	
	public function simple_auth(): void
    {
        if (isset($_SESSION['uid']) && !empty($_SESSION['uid'])) {
            $this->router->redirect('web.lobby');
            return;
        }
        
        echo $this->view->render('simple_auth');
        return;
    }
}