<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class CodeController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Code');
        
    }

    public function index(){
        $form = new BootstrapForm();
        $codes = $this->Code->last();
        $this->render('admin.code.index', compact('codes','form'));
        
        
    }

    public function add(){
        if ($_SESSION['user']->role == 'ROLE_ADMIN') {
            $code='';
            for ($i=0; $i < 10; $i++) { 
                if (rand(0, 1) == 0)
                {
                    $code.= chr(rand(97, 122)); //ASCII code from **a(97)** to **z(122)**
                }
                else
                {
                    $code.= rand(0, 9); //Numbers!!
                }
            }

            $result = $this->Code->create([
                'code' => $code,
            ]);
            if($result){
                unset($_POST);
                return header('Location: index.php?p=admin.code.index');
            }
        }
        return header('Location: index.php?p=admin.code.index');
    }


}