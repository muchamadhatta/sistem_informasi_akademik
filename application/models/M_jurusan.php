<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jurusan extends CI_Model {

	function get($where=null)
	{
		if ($where) {
			$this->db->where($where);
		}
		return $this->db->get('jurusan');
	}

	function insert()
	{
		$config['upload_path'] = './assets/jurusan/';
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
				'nama_jurusan'		=> htmlspecialchars($this->input->post('nama_jurusan')),
				'foto'				=> $foto['file_name'],
				'keterangan_jurusan'=> htmlspecialchars($this->input->post('keterangan_jurusan'))
			];	
		}
		return $this->db->insert('jurusan', $data);
	}

	function update($id)
	{
		$config['upload_path'] = './assets/jurusan/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '30000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto')){
			$data = [
				'nama_jurusan'		=> htmlspecialchars($this->input->post('nama_jurusan')),
				'keterangan_jurusan'=> htmlspecialchars($this->input->post('keterangan_jurusan'))
			];	
		}
		else{
			$foto = $this->upload->data();
			$result = $this->get(['md5(id_jurusan)' => $id])->row();
			unlink('./assets/jurusan/'.$result->foto);
			$data = [
				'nama_jurusan'				=> htmlspecialchars($this->input->post('nama_jurusan')),
				'foto'						=> $foto['file_name'],
				'keterangan_jurusan'		=> htmlspecialchars($this->input->post('keterangan_jurusan'))
			];	
		}
		return $this->db->update('jurusan', $data, ['md5(id_jurusan)' => $id]);
	}

	function delete($id)
	{
		$result = $this->get(['md5(id_jurusan)' => $id])->row();
		unlink('./assets/jurusan/'.$result->foto);
		return $this->db->delete('jurusan', ['md5(id_jurusan)' => $id]);
	}

}

/* End of file M_jurusan.php */
/* Location: ./application/models/M_jurusan.php */