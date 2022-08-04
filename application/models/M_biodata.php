<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_biodata extends CI_Model {

	public function get()
	{
		return $this->db->get('biodata');
	}

	public function setting()
	{	
		$result = $this->get()->row();
		$data = [
			'nama_sekolah'	=> htmlspecialchars($this->input->post('nama_sekolah')),
			'visi'			=> $this->input->post('visi'),
			'misi'			=> $this->input->post('misi'),
			'email_sekolah'	=> htmlspecialchars($this->input->post('email_sekolah')),
			'no_telepon_sekolah'	=> htmlspecialchars($this->input->post('no_telepon_sekolah')),
			'keterangan'	=> htmlspecialchars($this->input->post('keterangan')),
			'alamat_sekolah'	=> htmlspecialchars($this->input->post('alamat_sekolah')),
		];
		if ($this->upload_poto('slider_1')) {
			unlink('./assets/biodata/'.$result->slider_1);
			$data['slider_1'] = $this->upload_poto('slider_1');
		}else{
			$data['slider_1'] = $result->slider_1;
		}
		if ($this->upload_poto('slider_2')) {
			unlink('./assets/biodata/'.$result->slider_2);
			$data['slider_2'] = $this->upload_poto('slider_2');
		}else{
			$data['slider_2'] = $result->slider_2;
		}
		if ($this->upload_poto('logo_sekolah')) {
			unlink('./assets/biodata/'.$result->logo_sekolah);
			$data['logo_sekolah'] = $this->upload_poto('logo_sekolah');
		}else{
			$data['logo_sekolah'] = $result->logo_sekolah; 
		}
		return $this->db->update('biodata', $data, ['id_biodata' => 1]);
	}	


	function upload_poto($foto){
		$config['upload_path'] = './assets/biodata/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '20000';
		
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload($foto)){
			return FALSE;
		}
		else{
			$data = $this->upload->data();
			return $data['file_name'];
		}
	}

}

/* End of file M_biodata.php */
/* Location: ./application/models/M_biodata.php */