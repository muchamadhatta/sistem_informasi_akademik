<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_extra extends CI_Model {

	function get($where=null)
	{
		if ($where) {
			$this->db->where($where);
		}
		return $this->db->get('extra');
	}

	function insert()
	{
		$config['upload_path'] = './assets/extra/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '30000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			return false;
		}
		else{
			$foto = $this->upload->data();
			$data = [
				'nama_extra'		=> htmlspecialchars($this->input->post('nama_extra')),
				'hari'				=> htmlspecialchars($this->input->post('hari')),
				'jam'				=> htmlspecialchars($this->input->post('jam')),
				'foto'				=> $foto['file_name'],
				'keterangan'		=> htmlspecialchars($this->input->post('keterangan')),
				'nama_pembimbing'	=> htmlspecialchars($this->input->post('nama_pembimbing'))
			];	
		}
		return $this->db->insert('extra', $data);
	}

	function update($id)
	{
		$config['upload_path'] = './assets/extra/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '30000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto')){
			$data = [
				'nama_extra'		=> htmlspecialchars($this->input->post('nama_extra')),
				'hari'				=> htmlspecialchars($this->input->post('hari')),
				'jam'				=> htmlspecialchars($this->input->post('jam')),
				'keterangan'		=> htmlspecialchars($this->input->post('keterangan')),
				'nama_pembimbing'	=> htmlspecialchars($this->input->post('nama_pembimbing'))
			];	
		}
		else{
			$foto = $this->upload->data();
			$result = $this->get(['md5(id_extra)' => $id])->row();
			unlink('./assets/extra/'.$result->foto);
			$data = [
				'nama_extra'		=> htmlspecialchars($this->input->post('nama_extra')),
				'hari'				=> htmlspecialchars($this->input->post('hari')),
				'jam'				=> htmlspecialchars($this->input->post('jam')),
				'foto'				=> $foto['file_name'],
				'keterangan'		=> htmlspecialchars($this->input->post('keterangan')),
				'nama_pembimbing'	=> htmlspecialchars($this->input->post('nama_pembimbing'))
			];	
		}
		return $this->db->update('extra', $data, ['md5(id_extra)' => $id]);
	}

	function delete($id)
	{
		$result = $this->get(['md5(id_extra)' => $id])->row();
		unlink('./assets/extra/'.$result->foto);
		return $this->db->delete('extra', ['md5(id_extra)' => $id]);
	}

}

/* End of file M_extra.php */
/* Location: ./application/models/M_extra.php */