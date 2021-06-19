<?php
namespace app\controllers;
use app\core\Controller;

class MaintenanceController extends Controller
{
    public function index()
    {
        $dados          = [];
        $view           = "maintenance";
        $this->load($view, $dados);
    }
}
