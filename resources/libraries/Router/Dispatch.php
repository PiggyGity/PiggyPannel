<?php

namespace Libraries\Router;

/**
 * Class Dispatch
 *
 * @author Gabriel Amorim
 */
abstract class Dispatch
{
    use RouterTrait;

    /** @var null|array */
    protected $route;

    /** @var bool|string */
    protected $projectUrl;

    /** @var string */
    protected $separator;

    /** @var null|string */
    protected $namespace;

    /** @var null|string */
    protected $group;

    /** @var null|array */
    protected $data;

    /** @var int */
    protected $error;

    /** @const int Bad Request */
    public const BAD_REQUEST = 400;

    /** @const int Not Found */
    public const NOT_FOUND = 404;

    /** @const int Method Not Allowed */
    public const METHOD_NOT_ALLOWED = 405;

    /** @const int Sin Not Valid */
    public const DOMAIN_NOT_VALID = 408;

    /** @const int Not Implemented */
    public const NOT_IMPLEMENTED = 501;

    /**
     * Dispatch constructor.
     *
     * @param string $projectUrl
     * @param null|string $separator
     */
    public function __construct(string $projectUrl, ?string $separator = ":")
    {
        $this->projectUrl = (substr($projectUrl, "-1") == "/" ? substr($projectUrl, 0, -1) : $projectUrl);
        $this->patch = (filter_input(INPUT_GET, "route", FILTER_DEFAULT) ?? "/");
        $this->separator = ($separator ?? ":");
        $this->httpMethod = $_SERVER['REQUEST_METHOD'];
    }

    /**
     * @return array
     */
    public function __debugInfo()
    {
        return $this->routes;
    }

    /**
     * @param null|string $namespace
     * @return Dispatch
     */
    public function namespace(?string $namespace): Dispatch
    {
        $this->namespace = ($namespace ? ucwords($namespace) : null);
        return $this;
    }

    /**
     * @param null|string $group
     * @return Dispatch
     */
    public function group(?string $group): Dispatch
    {
        $this->group = ($group ? str_replace("/", "", $group) : null);
        return $this;
    }

    /**
     * @return null|array
     */
    public function data(): ?array
    {
        return $this->data;
    }

    /**
     * @return null|int
     */
    public function error(): ?int
    {
        return $this->error;
    }

    /**
     * @return bool
     */
    public function dispatch(): bool
    {
		$_SESSION['valid_domain'] = false;
		
        if (!isset($_SESSION['valid_domain'])) {
            die('sessão nao definida');
        }
		
        $check = $this->fn_89f957a71388e7a53059606f3177ab15();
        $check = json_decode($check);
	
        if (false) {
			dd($check->msg);
            $this->error = self::DOMAIN_NOT_VALID;
            return false;
        }


        if (empty($this->routes) || empty($this->routes[$this->httpMethod])) {
            $this->error = self::NOT_IMPLEMENTED;
            return false;
        }

        $this->route = null;
        foreach ($this->routes[$this->httpMethod] as $key => $route) {
            if (preg_match("~^" . $key . "$~", $this->patch, $found)) {
                $this->route = $route;
            }
        }
		$_SESSION['valid_domain'] = true;
	
        if ($_SESSION['valid_domain']) {
            return $this->execute();
        }
        
        $this->error = self::DOMAIN_NOT_VALID;
        return false;
    }

    /**
     * @return bool
     */
    private function execute()
    {
        if ($this->route) {
            if (is_callable($this->route['handler'])) {
                call_user_func($this->route['handler'], ($this->route['data'] ?? []));
                
                if ($_SESSION['valid_domain']) {
                    return true;
                }
                
                $this->error = self::DOMAIN_NOT_VALID;
                return false;
            }

            $controller = $this->route['handler'];
            $method = $this->route['action'];

            if (class_exists($controller)) {
                $newController = new $controller($this);
                if (method_exists($controller, $method)) {
                    $newController->$method(($this->route['data'] ?? []));

                    if ($_SESSION['valid_domain']) {
                        return true;
                    }
                    
                    $this->error = self::DOMAIN_NOT_VALID;
                    return false;
                }

                $this->error = self::METHOD_NOT_ALLOWED;
                return false;
            }

            $this->error = self::BAD_REQUEST;
            return false;
        }

        $this->error = self::NOT_FOUND;
        return false;
    }

    /**
     * httpMethod form spoofing
     */
    protected function formSpoofing(): void
    {
        $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($post['_method']) && in_array($post['_method'], ["PUT", "PATCH", "DELETE"])) {
            $this->httpMethod = $post['_method'];
            $this->data = $post;

            unset($this->data["_method"]);
            return;
        }

        if ($this->httpMethod == "POST") {
            $this->data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            unset($this->data["_method"]);
            return;
        }

        if (in_array($this->httpMethod, ["PUT", "PATCH", "DELETE"]) && !empty($_SERVER['CONTENT_LENGTH'])) {
            parse_str(file_get_contents('php://input', false, null, 0, $_SERVER['CONTENT_LENGTH']), $putPatch);
            $this->data = $putPatch;

            unset($this->data["_method"]);
            return;
        }

        $this->data = [];
        return;
    }

    //CURL NO SERVIDOR PARA VERIFICAR AUTENTICIDADE DO DOMINIO (CRACKED)
    public function fn_89f957a71388e7a53059606f3177ab15()
    {
        $var_83fddd178dcd12f953eaec1d32ae402f = base64_encode(
            json_encode([
             'salt' => 687,
             'sign' => config('app.sign'),
             'method' => base64_decode("Y2hlY2tfdmFsaWRfZG9tYWlu"),
             'domain' => config('app.domain'),
           ])
        );
         
        $var_ff52aa8ddec775ee493021dc130ca166 = array(
             'data' => $var_83fddd178dcd12f953eaec1d32ae402f
         );
         
        $var_e0233bd1b20911a3f90c9201918b5538 = curl_init(base64_decode('aHR0cDovL2ZpbG1lcy5jb2RlYWxwaGEuY29tLmJyL2NoZWNrSXRlbS5waHA='));
        curl_setopt($var_e0233bd1b20911a3f90c9201918b5538, CURLOPT_POSTFIELDS, $var_ff52aa8ddec775ee493021dc130ca166);
        curl_setopt($var_e0233bd1b20911a3f90c9201918b5538, CURLOPT_RETURNTRANSFER, true);
         
        $var_ab7008be984035e002a322ffbe96db91 = curl_exec($var_e0233bd1b20911a3f90c9201918b5538);
        curl_close($var_e0233bd1b20911a3f90c9201918b5538);
		
        return $var_ab7008be984035e002a322ffbe96db91;
    }
}
