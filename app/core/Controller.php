<?php

class Controller
{
    public function model($model)
    {
        // add file check
        if (file_exists("../app/models/$model.php")) {
            require_once "../app/models/$model.php";
            return new $model();
        } else {
            #model or file does not exists
            return false;
        }
    }
    public function view($view, $data = [])
    {
        if (file_exists("../app/views/$view.php")) { 
            require_once "../app/views/$view.php";
            
        } else {
            return false;
        }
    }
}
