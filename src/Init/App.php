<?php
namespace Henry\Init;

class App {
    public $request;
    public $session;
    public $accessor;

    public function __construct()
    {
        $this->request = $_REQUEST;
        $this->session = $_SESSION;
        $this->accessor = "";
    }
}