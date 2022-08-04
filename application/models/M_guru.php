<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model {

	function get($where=null)
	{
		if ($where) {
			$this->db->where($where);
		}
		return $this->db->get('guru');
	}

	function insert()
	{
		$config['upload_path'] = './assets/guru/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '30000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto_guru')){
			$error = array('error' => $this->upload->display_errors());
			return false;
		}
		else{
			$foto = $this->upload->data();
			$data = [
				'nip' 				=> htmlspecialchars($this->input->post('nip')),
				'nama_guru' 		=> htmlspecialchars($this->input->post('nama_guru')),
				'alamat' 			=> htmlspecialchars($this->input->post('alamat')),
				'no_telepon'		=> htmlspecialchars($this->input->post('no_telepon')),
				'tempat_lahir' 		=> htmlspecialchars($this->input->post('tempat_lahir')),
				'tanggal_lahir'     => htmlspecialchars($this->input->post('tanggal_lahir')),
				'agama' 			=> htmlspecialchars($this->input->post('agama')),
				'jenis_kelamin' 	=> htmlspecialchars($this->input->post('jenis_kelamin')),
				'foto'				=> $foto['file_name'],
				'password'			=> htmlspecialchars(password_hash($this->input->post('password'), PASSWORD_DEFAULT, ['cost' => 10]))
			];
			$this->db->insert('guru', $data);
			return $this->db->insert_id();
		}
	}

	function update($id)
	{
		$config['upload_path'] = './assets/guru/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '30000';
		
		$this->load->library('upload', $config);

		$result = $this->get(['md5(id_guru)' => $id])->row();
		if ($this->input->post('password')) {
			$this->db->update('guru', ['password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT, ['cost' => 10])], ['md5(id_guru)' => $id]);
		}
		if ( ! $this->upload->do_upload('foto_guru')){
			$data = [
				'nip' 				=> htmlspecialchars($this->input->post('nip')),
				'nama_guru' 		=> htmlspecialchars($this->input->post('nama_guru')),
				'no_telepon'		=> htmlspecialchars($this->input->post('no_telepon')),
				'alamat' 			=> htmlspecialchars($this->input->post('alamat')),
				'tempat_lahir' 		=> htmlspecialchars($this->input->post('tempat_lahir')),
				'tanggal_lahir'     => htmlspecialchars($this->input->post('tanggal_lahir')),
				'agama' 			=> htmlspecialchars($this->input->post('agama')),
				'jenis_kelamin' 	=> htmlspecialchars($this->input->post('jenis_kelamin'))
			];
		}
		else{
			unlink('./assets/guru/'.$result->foto);
			$foto = $this->upload->data();
			$data = [
				'nip' 				=> htmlspecialchars($this->input->post('nip')),
				'nama_guru' 		=> htmlspecialchars($this->input->post('nama_guru')),
				'no_telepon'		=> htmlspecialchars($this->input->post('no_telepon')),
				'alamat' 			=> htmlspecialchars($this->input->post('alamat')),
				'tempat_lahir' 		=> htmlspecialchars($this->input->post('tempat_lahir')),
				'tanggal_lahir'     => htmlspecialchars($this->input->post('tanggal_lahir')),
				'agama' 			=> htmlspecialchars($this->input->post('agama')),
				'jenis_kelamin' 	=> htmlspecialchars($this->input->post('jenis_kelamin')),
				'foto'				=> $foto['file_name']
			];
		}
		$this->db->update('guru', $data, ['md5(id_guru)' => $id]);
		return $result->id_guru;
	}

	function delete($id)
	{
		$result = $this->get(['md5(id_guru)' => $id])->row();
		unlink('./assets/guru/'.$result->foto);
		$this->db->delete('mengajar', ['md5(id_guru)' => $id]);
		return $this->db->delete('guru', ['md5(id_guru)' => $id]);
		
	}

}

/* End of file M_guru.php */
/* Location: ./application/models/M_guru.php */