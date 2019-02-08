<?php

namespace Controllers;

use Kernel\mvcs\Controller;
use Kernel\mvcs\View;
use Services\SampleService;

class HomeController extends Controller
{

    public function get()
    {
        View::render('index', [
            'title'          => 'Home',
            'company_name'   => 'Target Clock',
            'assistant_name' => SampleService::getSomething(),
        ]);
    }

}
