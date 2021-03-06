<?php

class About extends Controller {
    public function index($nama="Jalu",$kerjo="Pemrograman",$umur="20"){
        $data = [
            'nama' => $this->model('User_model')->getNama(),
            'kerja' => $kerjo,
            'umur' => $umur,
            'judul' => 'About'
        ];
        $this->view('templates/header',$data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'About';
        $this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}