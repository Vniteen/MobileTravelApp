<?php
namespace App\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBController
 *
 * @author niteen
 */
use Cake\Datasource\ConnectionManager;
class DBController {
   
    public function getConnect() {
        return  $conn = ConnectionManager::get('default');
    }
}
