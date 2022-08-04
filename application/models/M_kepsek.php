<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kepsek extends CI_Model {

	public function get(){
		return $this->db->get('kepsek');
	}

	public function update(){
		$config['upload_path'] = './assets/biodata/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '5000';
		
		$this->load->library('upload', $config);
		
		$result = $this->get()->row();
		if ( ! $this->upload->do_upload('foto')){
			$check = $this->db->update('kepsek', [
				'nip'			=> $this->input->post('nip'),
				'fullname'		=> $this->input->post('fullname'),
				'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
				'tempat_lahir'  => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'no_telepon'	=> $this->input->post('no_telepon'),
				'email'			=> $this->input->post('email'),
				'alamat'		=> $this->input->post('alamat'),
				'kata_sambutan'	=> $this->input->post('kata_sambutan')
			], ['id_kepsek' => $result->id_kepsek]);
		}else{
			$foto = $this->upload->data();
			unlink('./assets/biodata/'.$result->foto);
			$check = $this->db->update('kepsek', [
				'nip'			=> $this->input->post('nip'),
				'fullname'		=> $this->input->post('fullname'),
				'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
				'tempat_lahir'  => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'no_telepon'	=> $this->input->post('no_telepon'),
				'email'			=> $this->input->post('email'),
				'alamat'		=> $this->input->post('alamat'),
				'foto'			=> $foto['file_name'],
				'kata_sambutan'	=> $this->input->post('kata_sambutan')
			], ['id_kepsek' => $result->id_kepsek]);
		}
		return $check;
	}
	

}

/* End of file M_kepsek.php */
/* Location: ./application/models/M_kepsek.php */