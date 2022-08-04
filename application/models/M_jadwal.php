<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model {

	public function get($where = NULL)
	{
		$this->db->select('*');
		$this->db->from('jadwal_pelajaran');
		$this->db->join('kelas', 'jadwal_pelajaran.id_kelas = kelas.id_kelas');
		if ($where) {
			$this->db->where($where);
		}
		return $this->db->get();
	}

	function getjadwal($where=null)
	{
		$this->db->select('*');
		$this->db->from('jadwal_pelajaran');
		$this->db->join('kelas', 'jadwal_pelajaran.id_kelas = kelas.id_kelas');
		if ($where) {
			$this->db->where($where);
		}
		return $this->db->get();
	}


	public function update()
	{
		$id_kelas = $this->input->post('id_kelas');
		return $this->db->update('jadwal_pelajaran', [
			's1_guru' => $this->input->post('s1_guru'),
			's2_guru' => $this->input->post('s2_guru'),
			's3_guru' => $this->input->post('s3_guru'),
			's4_guru' => $this->input->post('s4_guru'),
			's5_guru' => $this->input->post('s5_guru'),
			't1_guru' => $this->input->post('t1_guru'),
			't2_guru' => $this->input->post('t2_guru'),
			't3_guru' => $this->input->post('t3_guru'),
			't4_guru' => $this->input->post('t4_guru'),
			't5_guru' => $this->input->post('t5_guru'),
			'r1_guru' => $this->input->post('r1_guru'),
			'r2_guru' => $this->input->post('r2_guru'),
			'r3_guru' => $this->input->post('r3_guru'),
			'r4_guru' => $this->input->post('r4_guru'),
			'r5_guru' => $this->input->post('r5_guru'),
			'k1_guru' => $this->input->post('k1_guru'),
			'k2_guru' => $this->input->post('k2_guru'),
			'k3_guru' => $this->input->post('k3_guru'),
			'k4_guru' => $this->input->post('k4_guru'),
			'k5_guru' => $this->input->post('k5_guru'),
			'j1_guru' => $this->input->post('j1_guru'),
			'j2_guru' => $this->input->post('j2_guru'),
			'j3_guru' => $this->input->post('j3_guru'),
			'j4_guru' => $this->input->post('j4_guru'),
			'j5_guru' => $this->input->post('j5_guru'),
			'p1_guru' => $this->input->post('p1_guru'),
			'p2_guru' => $this->input->post('p2_guru'),
			'p3_guru' => $this->input->post('p3_guru'),
			'p4_guru' => $this->input->post('p4_guru'),
			'p5_guru' => $this->input->post('p5_guru'),
			's1_pelajaran' => $this->input->post('s1_pelajaran'),
			's2_pelajaran' => $this->input->post('s2_pelajaran'),
			's3_pelajaran' => $this->input->post('s3_pelajaran'),
			's4_pelajaran' => $this->input->post('s4_pelajaran'),
			's5_pelajaran' => $this->input->post('s5_pelajaran'),
			't1_pelajaran' => $this->input->post('t1_pelajaran'),
			't2_pelajaran' => $this->input->post('t2_pelajaran'),
			't3_pelajaran' => $this->input->post('t3_pelajaran'),
			't4_pelajaran' => $this->input->post('t4_pelajaran'),
			't5_pelajaran' => $this->input->post('t5_pelajaran'),
			'r1_pelajaran' => $this->input->post('r1_pelajaran'),
			'r2_pelajaran' => $this->input->post('r2_pelajaran'),
			'r3_pelajaran' => $this->input->post('r3_pelajaran'),
			'r4_pelajaran' => $this->input->post('r4_pelajaran'),
			'r5_pelajaran' => $this->input->post('r5_pelajaran'),
			'k1_pelajaran' => $this->input->post('k1_pelajaran'),
			'k2_pelajaran' => $this->input->post('k2_pelajaran'),
			'k3_pelajaran' => $this->input->post('k3_pelajaran'),
			'k4_pelajaran' => $this->input->post('k4_pelajaran'),
			'k5_pelajaran' => $this->input->post('k5_pelajaran'),
			'j1_pelajaran' => $this->input->post('j1_pelajaran'),
			'j2_pelajaran' => $this->input->post('j2_pelajaran'),
			'j3_pelajaran' => $this->input->post('j3_pelajaran'),
			'j4_pelajaran' => $this->input->post('j4_pelajaran'),
			'j5_pelajaran' => $this->input->post('j5_pelajaran'),
			'p1_pelajaran' => $this->input->post('p1_pelajaran'),
			'p2_pelajaran' => $this->input->post('p2_pelajaran'),
			'p3_pelajaran' => $this->input->post('p3_pelajaran'),
			'p4_pelajaran' => $this->input->post('p4_pelajaran'),
			'p5_pelajaran' => $this->input->post('p5_pelajaran'),
		], ['id_kelas' => $id_kelas]);
	}

}

/* End of file M_jadwal.php */
/* Location: ./application/models/M_jadwal.php */