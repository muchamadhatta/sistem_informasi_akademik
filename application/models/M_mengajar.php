<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mengajar extends CI_Model {

	function get($where=null)
	{
		$this->db->select('*');
		$this->db->from('mengajar');
		$this->db->join('kelas', 'mengajar.id_kelas = kelas.id_kelas');
		$this->db->join('pelajaran', 'mengajar.id_pelajaran = pelajaran.id_pelajaran');
		if ($where) {
			$this->db->where($where);
		}
		return $this->db->get();
	}

	function insert($data)
	{
		return $this->db->insert('mengajar', $data);
	}

	// function update($id)
	// {
	// 	return $this->db->update('megajar', ['nama_megajar' => $this->input->post('nama_megajar')], ['md5(id_megajar)' => $id]);
	// }

	// function delete($id)
	// {
	// 	if ($this->M_siswa->get(['md5(siswa.id_megajar)' => $id])->num_rows() > 0) {
	// 		return false;
	// 	}else{
	// 		return $this->db->delete('megajar', ['md5(id_megajar)' => $id]);
	// 	}
	// }

}

/* End of file M_megajar.php */
/* Location: ./application/models/M_megajar.php */