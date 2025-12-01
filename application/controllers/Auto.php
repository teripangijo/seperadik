<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Auto extends CI_Controller
{
	public function index()
	{
		$this->load->view('auto/v_auto');
		$this->load->model('m_auto');

		if (isset($_GET['term'])) 
		{
			$result = $this->m_auto->get_persh($_GET['term']);
			if (count($result)>0) {
				foreach ($result as $key) {
					$result_array[]= array(
						'nama'=> $row->nama,
						'alamat' => $row->alamat
					);				}
				echo json_encode($result_array);
			}
		}
	}

}