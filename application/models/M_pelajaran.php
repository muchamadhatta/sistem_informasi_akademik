<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelajaran extends CI_Model {

	function get($where = NULL){
		if ($where) {
			$this->db->where($where);
		}
		return $this->db->get('pelajaran');
	}	

	public function insert()
	{
		$this->db->insert('pelajaran', [
			'kode_pelajaran' => $this->input->post('kode_pelajaran'),
			'nama_pelajaran' => $this->input->post('nama_pelajaran'),
			'jam' => $this->input->post('jam'),
			'tahun_ajaran' => $this->input->post('tahun_ajaran')
		]);
		$id = $this->db->insert_id();
		foreach ($this->M_siswa->get()->result() as $key) {
			if ($this->M_nilai->get(['nilai.id_pelajaran' => $id, 'nilai.id_siswa' => $key->id_siswa])->num_rows() == 0) {
				$this->db->insert('nilai', ['id_siswa' => $key->id_siswa, 'id_pelajaran' => $id]);
			}
		}
		return 1;
	}

	public function update($id)
	{
		return $this->db->update('pelajaran', [
			'kode_pelajaran' => $this->input->post('kode_pelajaran'),
			'nama_pelajaran' => $this->input->post('nama_pelajaran'),
			'jam' => $this->input->post('jam'),
			'tahun_ajaran' => $this->input->post('tahun_ajaran')
		], ['md5(id_pelajaran)' => $id]);
	}

	// public function delete($id)
	// {
	// 	if ($this->M_nilai->get(['md5(nilai.id_pelajaran)' => $id])->num_rows() > 0 || $this->M_mengajar->get(['md5(mengajar.id_pelajaran)' => $id])->num_rows() > 0) {
	// 		return false;
	// 	}else{
	// 		return $this->db->delete('pelajaran', ['md5(id_pelajaran)' => $id]);
	// 	}
	// }

	function delete($id){
		$this->get(['md5(id_pelajaran)' => $id])->row();
		return $this->db->delete('pelajaran', ['md5(id_pelajaran)' => $id]);
	}

}

/* End of file M_pelajaran.php */
/* Location: ./application/models/M_pelajaran.php */