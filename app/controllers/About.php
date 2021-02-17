<?php 

class About extends Controller{
    public function index($nama = "Risky", $job = "developer", $awal = "1bulan"){
        $data['nama'] = $nama;
        $data['job'] = $job;
        $data['awal'] = $awal;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page() {
        $data['judul'] = 'My Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }

}



