<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DemoController
 *
 * @author niteen
 */

namespace App\Controller;

//use Cake\View\Exception\MissingTemplateException;

use Cake\Network;
use Cake\Datasource\ConnectionManager;

class UserController extends AppController {

    public $user_status = null;

    public function index() {

        //echo 'Heyy You are In index Function of Demo Controller';
    }

    public function show() {

        $path = func_get_args();
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));
        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }

    //to activate user
    public function user_tatus($param) {
        
    }

    public function activation() {
        $data = $this->request->input('json_decode');
        print_r($data);
        $db = DBController::getconnect();
        $rows = $db->select('UserID')
                ->from('User');
        foreach ($rows as $row){
            echo $row->UserID;
        }
        }
    public function getOtp(){
        return uniqid(1000,9999);
        
    }

}
