<?php

namespace app\controller;

class TesteController{

    public function __construct()
    {
    
    }

    public function seta()
    {
        $objName = array('nome' => 'Daniel', 'idade' => 41);

        return  json_encode($objName);
    }
}
