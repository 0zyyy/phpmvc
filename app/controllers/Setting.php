<?php

class Setting extends Controller{
    public function index(){
        $data['judul'] = 'Setting';
        $this->view('templates/header',$data);
        $this->view('setting/index');
        $this->view('templates/footer');
    }
}