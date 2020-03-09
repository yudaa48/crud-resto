<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class awal extends CI_Controller {

	public function index()
	{ 
		$this->load->view('header');
		$this->load->view('blank');
		$this->load->view('footer');
	}

	function restoran()
	{
		$isi['poi_resto'] = $this->M_resto->get_data('poi_resto')->result_array();	
		$this->load->view('header');
		$this->load->view('restoran', $isi);
		$this->load->view('footer');
	}

	function simpan_data()
	{
		
		$nama = $this->input->post('nama');
		$jenis = $this->input->post('jenis');
		$alamat = $this->input->post('alamat');
		$waktu = $this->input->post('waktu');

		$data = array(
			'nama' => $nama,
			'jenis' => $jenis,
			'alamat' => $alamat,
			'waktu' => $waktu,
		);

		$this->M_resto->simpan_data($data, 'poi_resto');
		redirect(base_url().'awal/restoran');

	}

	function update_data()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jenis = $this->input->post('jenis');
		$alamat = $this->input->post('alamat');
		$waktu = $this->input->post('waktu');

		$where = array('id_poi' => $id);
		$data = array(
			'nama' => $nama,
			'jenis' => $jenis,
			'alamat' => $alamat,
			'waktu' => $waktu,
		);

		$this->M_resto->update_data('poi_resto', $data, $where);
		redirect(base_url().'awal/restoran');

	}

	function delete_data($id){
        $where = array('id_poi' => $id);
        $this->M_resto->delete_data($where,'poi_resto');
        redirect(base_url().'awal/restoran');
      }
}
 ?>