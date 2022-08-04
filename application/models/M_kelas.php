<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {

	function get($where=null)
	{
		if ($where) {
			$this->db->where($where);
		}
		return $this->db->get('kelas');
	}

	function insert()
	{
		return $this->db->insert('kelas', [
			'nama_kelas' => htmlspecialchars($this->input->post('nama_kelas')),
			'keterangan' => $this->input->post('keterangan'),
			'wali_kelas' => $this->input->post('wali_kelas'),
			'ruang' => $this->input->post('ruang')
			]);
	}

	function update($id)
	{
		return $this->db->update('kelas', [
			'nama_kelas' => htmlspecialchars($this->input->post('nama_kelas')),
			'keterangan' => $this->input->post('keterangan'),
			'wali_kelas' => $this->input->post('wali_kelas'),
			'ruang' => $this->input->post('ruang')
		], ['md5(id_kelas)' => $id]);
	}

	// function delete($id)
	// {
	// 	if ($this->M_siswa->get(['md5(siswa.id_kelas)' => $id])->num_rows() > 0 || $this->M_wali_kelas->get(['md5(wali_kelas.id_kelas)' => $id])->num_rows() > 0 || $this->M_mengajar->get(['md5(mengajar.id_kelas)' => $id])->num_rows() > 0 ){
	// 		return false;
	// 	}else{
	// 		return $this->db->delete('kelas', ['md5(id_kelas)' => $id]);
	// 	}
	// }
	function delete($id){
		$this->get(['md5(id_kelas)' => $id])->row();
		return $this->db->delete('kelas', ['md5(id_kelas)' => $id]);
	}

}

/* End of file M_kelas.php */
/* Location: ./application/models/M_kelas.php */