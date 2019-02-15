<?php
namespace Henry\Lib;

use Henry\Init\App;

class Helpers
{
    protected $app;
    private $request;

    public function setApp(App $app)
    {
        $this->app = $app;
    }

    public function setRequest()
    {
        $this->request = $this->app->request;
    }

    public function app()
    {
        return $this->app;
    }

    public function request()
    {
        return $this->request;
    }
}