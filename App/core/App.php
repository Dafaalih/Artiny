<?php

class App {
  protected $controller = 'Home'; // Default controller
  protected $method = 'index';    // Default method
  protected $params = [];

  public function __construct() {
    $url = $this->parseURL();

    // Check if controller exists in the URL
    if (isset($url[0])) {
      if (file_exists("../App/controllers/" . $url[0] . ".php")) {
        $this->controller = $url[0];
        unset($url[0]);
      }
    }

    // Require the controller file
    require_once "../App/controllers/" . $this->controller . ".php";
    $this->controller = new $this->controller;

    // Check if method exists in the controller
    if (isset($url[1])) {
      if (method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }
    
    // Capture any remaining URL parameters
    if (!empty($url)) {
      $this->params = array_values($url);
    }

    // Call the controller's method with the given parameters
    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  public function parseURL() {
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
  }
}
