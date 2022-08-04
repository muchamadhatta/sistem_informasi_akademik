<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

	function get($where =null){
		if ($where) {
			$this->db->where($where);
		}
		$this->db->order_by('id_berita', 'desc');
		return $this->db->get('berita');
	}

	function insert(){

		$config['upload_path'] = './assets/berita/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '2000';
		
		$this->load->library('upload', $config);
		

		if ( ! $this->upload->do_upload('foto')){
			return $this->db->insert('berita', [
				'tanggal_terbit'	=> date('Y-m-d H:m:s'),
				'slogan'			=> $this->input->post('slogan'),
				'content'			=> $this->input->post('content')
			]);	
		}
		else{
			$data = $this->upload->data();
			return $this->db->insert('berita', [
				'tanggal_terbit'	=> date('Y-m-d H:m:s'),
				'slogan'			=> $this->input->post('slogan'),
				'content'			=> $this->input->post('content'),
				'foto'				=> $data['file_name']
			]);	
		}
		
	}


	function update($id){

		$config['upload_path'] = './assets/berita/';
		$config['allowed_types'] = 'gif|jpg|png|png|jpeg';
		$config['max_size']  = '20000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto')){
			return $this->db->update('berita', [
				'tanggal_terbit'	=> date('Y-m-d H:m:s'),
				'slogan'			=> $this->input->post('slogan'),
				'content'			=> $this->input->post('content'),
			], ['md5(id_berita)' => $id]);
		}
		else{
			$result = $this->get(['md5(id_berita)' => $id])->row();
			if ($result->foto) {
				unlink('./assets/berita/'.$result->foto);
			}
			$data = $this->upload->data();
			return $this->db->update('berita', [
				'tanggal_terbit'	=> date('Y-m-d H:m:s'),
				'slogan'			=> $this->input->post('slogan'),
				'content'			=> $this->input->post('content'),
				'foto'				=> $data['file_name']
			], ['md5(id_berita)' => $id]);	
		}
		
	}


	function delete($id){
		$result  = $this->get(['md5(id_berita)' => $id])->row();
		if ($result->foto) {
			unlink('./assets/berita/'.$result->foto);
		}
		return $this->db->delete('berita', ['md5(id_berita)' => $id]);
	}

	public function search($cari)
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->like('slogan', $cari);
		return $this->db->get();
	}

}

/* End of file M_berita.php */
/* Location: ./application/models/M_berita.php */