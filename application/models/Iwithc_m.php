<?php

Class Iwithc_m extends CI_Model {

	function __construct() {
		parent::__Construct();
	}

	function daftar_table() {
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where('status', 1);
		$ambil = $this->db->get();
		if($ambil->num_rows()>0) {
			foreach ($ambil->result() as $data) {
				$hasil[]= $data;
			} return $hasil;
		}
	}

	function tambah_table() {
			// $no = $this->input->post('no');
		$na = $this->input->post('na');
		$ko = $this->input->post('ko');
		$as = $this->input->post('as');
		$data = array(
			// 'no' => $no,
			'nama' => $na,
			'kode' => $ko,
			'asal' => $as
			);
		$this->db->insert('produk', $data);
	}

	function ambil_data($a) {
		$data = $this->db->get_where('produk', array('id' => $a))->row();
		return $data;
	}

	function ganti_data($data, $kd) {
		$this->db->where('id', $kd);
		$this->db->update('produk', $data);
	}

	function hapus($a) {
		$this->db->delete('produk', array('id'=>$a));
		return;
	}
}
