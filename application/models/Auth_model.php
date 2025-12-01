<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Auth_model extends CI_Model
{
	public function login($nip,$password)
	{	
		$pengacak= "!pjmpjatbrhmunfks014579*prvcycoatke$";
		$this->db->select("nip,password,level,nama");
		$this->db->from('user');
		$this->db->where('nip',$nip);
		$this->db->where('password',md5($pengacak.md5($password).$pengacak));

		$query = $this->db->get();

		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}
	public function get_by_id($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('utama')->row();
	}

    public function getFileById($id)
    {
        // Ambil informasi file berdasarkan ID
        $this->db->select('files');
        $this->db->from('utama'); // Ganti "nama_tabel" dengan nama tabel yang sesuai
        $this->db->where('id', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }


	public function get_all()
	{
		return $this->db->get('utama')->result();
	}	

	public function get_pemeriksa_bongkar()
	{
		$stat_loket='1';
		$jenisdok='1';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

		public function get_pemeriksa_timbun()
	{
		$stat_loket='1';
		$jenisdok='2';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

		public function get_pemeriksa_muat()
	{
		$stat_loket='1';
		$jenisdok='3';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_kasubsi_bongkar()
	{
		$stat_loket='2';
		$jenisdok='1';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

		public function get_kasubsi_timbun()
	{
		$stat_loket='2';
		$jenisdok='2';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

		public function get_kasubsi_muat()
	{
		$stat_loket='2';
		$jenisdok='3';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_kasi_bongkar()
	{
		$stat_loket='3';
		$jenisdok='1';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

		public function get_kasi_timbun()
	{
		$stat_loket='3';
		$jenisdok='2';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

		public function get_kasi_muat()
	{
		$stat_loket='3';
		$jenisdok='3';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_kk_bongkar()
	{
		$stat_loket='5';
		$jenisdok='1';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

		public function get_kk_timbun()
	{
		$stat_loket='5';
		$jenisdok='2';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

		public function get_kk_muat()
	{
		$stat_loket='5';
		$jenisdok='3';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_setuju_bongkar()
	{
		$stat_loket='9';
		$jenisdok='1';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

		public function get_setuju_timbun()
	{
		$stat_loket='9';
		$jenisdok='2';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

		public function get_setuju_muat()
	{
		$stat_loket='9';
		$jenisdok='3';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_tolak_bongkar()
	{
		$stat_loket='8';
		$jenisdok='1';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

		public function get_tolak_timbun()
	{
		$stat_loket='8';
		$jenisdok='2';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}

		public function get_tolak_muat()
	{
		$stat_loket='8';
		$jenisdok='3';
		$options=array(
			'stat_loket'=>$stat_loket,
			'jenisdok'=>$jenisdok,
		);
		return $this->db->get_where('utama',$options)->result();
	}


	public function get_belum_selesai()
	{
		$pemeriksa='1';
		$kasubsi= '2';
		$options=array(
			'stat_loket'=>$pemeriksa,
		);
		$options2=array(
			'stat_loket'=>$kasubsi,
		);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_ditolak()
	{
		$stat_loket='8';
		$options=array(
			'stat_loket'=>$stat_loket,
		);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_disetujui()
	{
		$stat_loket='9';
		$options=array(
			'stat_loket'=>$stat_loket,
		);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_where_stat_total_pemeriksa()
	{
		$stat_loket='11';
		//$stat_loket11='11';
		$options=array(
			'stat_loket'=>$stat_loket,
			//'stat_loket11'=>$stat_loket11,
		);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_where_stat()
	{
		$stat_loket='0';
		$options=array('stat_loket'=>$stat_loket);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_where_stat_pemeriksa()
	{
		$stat_loket='1';
		$options=array('stat_loket'=>$stat_loket);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_where_stat_kasubsi()
	{
		$stat_loket='2';
		$options=array('stat_loket'=>$stat_loket);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_where_stat_kasi()
	{
		$stat_loket='3';
		$options=array('stat_loket'=>$stat_loket);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_where_stat_kk()
	{
		$stat_loket='5';
		$options=array('stat_loket'=>$stat_loket);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_where_stat_dikembalikan_kasubsi()
	{
		$stat_loket='21';
		$options=array('stat_loket'=>$stat_loket);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_where_stat_dikembalikan_pemeriksa()
	{
		$stat_loket='11';
		$options=array('stat_loket'=>$stat_loket);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_where_stat_dikembalikan_kasi()
	{
		$stat_loket='31';
		$options=array('stat_loket'=>$stat_loket);
		return $this->db->get_where('utama',$options)->result();
	}

	public function get_where_stat_ditolak_kk()
	{
		$stat_loket='8';
		$options=array('stat_loket'=>$stat_loket);
		return $this->db->get_where('utama',$options)->result();
	}

	//insert
	public function insert($data)
	{
		$this->db->insert('utama', $data);
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('utama', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('utama');
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('utama');
		$this->db->like('namapersh',$keyword);
		$this->db->or_like('jenisdok',$keyword);
		$this->db->or_like('nomohon',$keyword);
		return $this->db->get()->result();

	}

	public function get_keyword_pengguna_jasa($keyword){
		$this->db->select('*');
		$this->db->from('utama');
		$this->db->where('nomohon',$keyword);

		return $this->db->get()->result();

	}

	function tampil_data(){
    return $this->db->get('persh');
    }
    
    function cari($id){
        $query= $this->db->get_where('persh',array('nama'=>$id));
        return $query;
    }

    public function get_all_perusahaan()
	{
		return $this->db->get('persh')->result();
	}
}		