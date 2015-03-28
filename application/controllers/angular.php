<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Auteur Yirou
 */
class Angular extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = "Angular";
        $this->load->view('index', $data);
    }

    public function add() {
        $this->load->model('user_model');
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        $name = $request->name;
        $city = $request->city;

        $id = $this->user_model->addUser($name, $city);
        if ($id) {
            echo $result = '{"status":"success"}';
        } else {
            echo $result = '{"status":"danger"}';
        }
    }

}
