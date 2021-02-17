<?php 
# MERAPIKAN URL
class App {
    protected $controller = 'home',
              $method = 'index',
              $parameters = [];

              
    public function __construct()
    {

        $url = $this->ParseURL();
        
        // Controller
        // Kalau Controller ada
        if ( isset($url[0])) {
            if (file_exists('../app/controllers/' . $url[0] . '.php')){
                $this->controller = $url[0];
                unset($url[0]);
            }
        }

        // Kalau tidak ada pakai DEFAULT
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

 
        // Method
        // Kalau Method ada
        if ( isset($url[1]) ) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        // Kalau Method tidak ada pakai default

        
        // Parameters 
        if (!empty($url)) {
            $this->parameters = array_values($url);
        }


        // Jalankan controller & method serta kirimkan parameters jika ada
        
        call_user_func_array([$this->controller, $this->method], $this->parameters);
    
    }
    
    public function ParseURL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}


