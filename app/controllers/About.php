<?php 

class About extends Controller {
    public function index($status="penyanyi, aktor, dan song maker", $umur = 20)
    {
        $data['pekerjaan']= $status;
		$data['umur']= $umur;
        $data['judul'] = 'About';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}