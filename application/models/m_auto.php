<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class M_auto extends CI_Model
{
	public function get_persh($title)
	{
		$this->db->like('nama', $title, 'BOTH');
		$this->db->order_by('id', 'asc');
		$this->db->limit(10);
		return $this->db->get('perusahaan')->result();

	}
}