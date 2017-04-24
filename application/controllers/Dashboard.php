<?php

  /*******************************************
  * Codeigniter 3 Project Prakerin           *
  * Copywriter : chrissesario.rian@gmail.com *
  * Copyright : rudliucs1@gmail.com          *
  ********************************************/

if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class Dashboard extends CI_Controller {

  public function __Construct() {
    parent::__Construct();
    $this->load->helper('url');
    if(!$this->session->userdata('logged_in')) {
      redirect(base_url());
    }
  }

  public function index() {
    $title = "Dashboard";

    $data = ['dashboard'=>'Dashboard'];
    $data = ['title'=>$title];
    $this->load->view('frame/header', $data);
    $this->load->view('frame/sidebar_navbar');
    $this->load->view('dashboard');
    $this->load->view('frame/footer');
  }
}
