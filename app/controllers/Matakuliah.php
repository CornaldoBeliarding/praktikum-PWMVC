<?php 

class Matakuliah extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Matakuliah';
        $data['mkt'] = $this->model('Matakuliah_model')->getAllMatakuliah();
        $this->view('templates/header', $data);
        $this->view('matakuliah/index', $data);
        $this->view('templates/footer');
    }

    public function gettambah()
    {
        echo json_encode($this->model('Matakuliah_model')->getMatakuliahId($_POST['id']));
    }

}