<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class I_with_c extends CI_Controller {

  public function __Construct() {
    parent::__Construct();
    $this->load->model('iwithc_m');
  }

  public function ajax_checking() {
    if (!$this->input->is_ajax_request()) { //abaikan
      redirect(base_url());
    }
  }

  public function index() {
    $data['title'] = 'Daftar Barang'; //memberikan judul dalam bentuk array utuk laman header
    $data['table'] = $this->iwithc_m->daftar_table(); //mengambil seluruh data dari database melalui model dengan fungsi daftar_table()
    $this->load->view('frame/header', $data); //meload frontend sekaligus mengirim data yang sudah didefinisikan.
    $this->load->view('frame/sidebar_navbar');
    $this->load->view('inventory/v_iwithc', $data);
    $this->load->view('frame/footer');
  }

  public function tambah() {
      if($this->input->post('tambah')) { //menambah table jika submit tambah di pencet maka
        $this->iwithc_m->tambah_table(); //akan memberikan fungsi dari model yaitu tambah_table() untuk menambah tabel yang sudah disubmit sebelumnya
        redirect('inventory/i_with_c', 'refresh');
      } else if ($this->input->post('save')==null) {//apabila tidak dipencet makattidak akan ada yang terjadi
        redirect('inventory/i_with_c/', 'refresh');
      }
  }

  // public function pilih() {
  //   $kd = $this->uri->segment(4);
  //   if($kd == null) {
  //     redirect('inventory/i_with_c');
  //   }
  //   $dt = $this->iwithc_m->ambil_data($kd);
  //
  //   $data_edit['nama'] = $dt->nama;
  //   $data_edit['kode'] = $dt->kode;
  //   $data_edit['asal'] = $dt->asal;
  //   $data_edit['id'] = $kd;
  //   $data_edit['title'] = "Edit Data Barang";
  //   $this->load->view('frame/header', $data_edit);
  //   $this->load->view('frame/sidebar_navbar');
  //   $this->load->view('inventory/v_iwithc_form', $data_edit);
  //   $this->load->view('frame/footer');
  // }

  public function ganti() {
    if(isset($_POST['save'])) { //jika
      $kd   = $this->input->post('id');
      $kode = $this->input->post('kode');
      $nama = $this->input->post('nama');
      $asal = $this->input->post('asal');
      $data = array(
        'id'  =>$kd,
        'kode'=>$kode,
        'nama'=>$nama,
        'asal'=>$asal
      );
      $this->iwithc_m->ganti_data($data, $kd);
      redirect('inventory/i_with_c', 'refresh');
    } else {
        $kd = $this->uri->segment(4);
        $dt = $this->iwithc_m->ambil_data($kd);

        $data_edit['nama'] = $dt->nama;
        $data_edit['kode'] = $dt->kode;
        $data_edit['asal'] = $dt->asal;
        $data_edit['id'] = $kd;
        $data_edit['title'] = "Edit Data Barang";
        $this->load->view('frame/header', $data_edit);
        $this->load->view('frame/sidebar_navbar');
        $this->load->view('inventory/v_iwithc_form', $data_edit);
        $this->load->view('frame/footer');
    }
  }

  public function hapus() {
    $u = $this->uri->segment(4);
    $this->iwithc_m->hapus($u);
    redirect('inventory/i_with_c', 'refresh');
  }

}
