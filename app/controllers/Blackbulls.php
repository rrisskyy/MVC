<?php 

class Blackbulls extends Controller {
    public function index()
    {
        $data['judul'] = "Daftar Member";
        $data['member'] = $this->model('Blackbulls_model')->getAllMembers();
        $this->view('templates/header', $data);
        $this->view('blackbulls/index', $data);
        $this->view('templates/footer');
    }
    public function detail($Rank)
    { 
        $data['judul'] = "Detail Member";
        $data['member'] = $this->model('Blackbulls_model')->getMemberByRank($Rank);
        $this->view('templates/header', $data);
        $this->view('blackbulls/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah(){
        if ($this-> model('Blackbulls_model')->tambahMember($_POST) > 0){
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header ('Location: ' . BASEURL . '/blackbulls');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header ('Location: ' . BASEURL . '/blackbulls');
            exit;
        }

    }

    public function delete($Rank){
        if ($this-> model('Blackbulls_model')->hapusMember($Rank) > 0){
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header ('Location: ' . BASEURL . '/blackbulls');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header ('Location: ' . BASEURL . '/blackbulls');
            exit;
        }

    }

    public function getubah(){
        echo json_encode($this->model('Blackbulls_model')->getMemberByRank($_POST['Rank']));
    }

    public function ubah(){
        var_dump($_POST);
        if ($this-> model('Blackbulls_model')->ubahDataMember($_POST) > 0){
            Flasher::setFlash('Berhasil', 'Diubah', 'success');
            header ('Location: ' . BASEURL . '/blackbulls');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'danger');
            header ('Location: ' . BASEURL . '/blackbulls');
            exit;
        }
    }

    public function cari(){
        $data['judul'] = "Daftar Member";
        $data['member'] = $this->model('Blackbulls_model')->cariDataMembers();
        $this->view('templates/header', $data);
        $this->view('blackbulls/index', $data);
        $this->view('templates/footer');
    }




}

?>