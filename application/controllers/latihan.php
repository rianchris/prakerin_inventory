<?php

Class Latihan extends CI_Controller {
  public function __construct() {
    parent:: __Construct();
    // $this->load->model('latihan');
  }

  public function index() {
    if(isset($_POST['insert'])) {
      $nisn        = $this->input->post('nisn');
      $n_lengkap   = $this->input->post('n_lengkap');
      $n_panggilan = $this->input->post('n_panggilan');
      $n_alamat    = $this->input->post('alamat');
      $n_umur      = $this->input->post('umur');
      $data = array (
        'nisn'=>$nisn,
        'lengkap'=>$n_lengkap,
        'panggilan'=>$n_panggilan,
        'alamat'=>$n_alamat,
        'umur'=>$n_umur
      );
      $this->load->view('v_latihan', $data);
    } else {
      $this->load->view('v_latihan_form');
    }
  }


  public function matematika() {
    if(isset($_POST['jumlah'])) {
      $angk1 = $this->input->pot('angka1');
    }
  }
}


 ?>
