<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->session->set_userdata('level', 'admin');
	}


	public function test()
	{

		$this->load->view('test');
	}

	public function tesindex()
	{
		$this->load->view('head');
		$this->load->view('indexfix.php');
	}

	public function index()
	{

		$this->load->view('head');
		$this->load->view('index');
	}

	public function respon()
	{

		$this->load->view('head');
		$this->load->view('respon');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/index');
	}

	public function laporan()
	{
		$this->load->view('head');
		if (
			$this->session->userdata('level') == 'admin' or
			$this->session->userdata('level') == 'pemeriksa' or
			$this->session->userdata('level') == 'kasubsi' or
			$this->session->userdata('level') == 'kasi' or
			$this->session->userdata('level') == 'kk'
		) {

			$this->load->view('head');
			$this->load->model('Auth_model');
			$utama = $this->Auth_model->get_all();
			$total = $this->Auth_model->get_belum_selesai();

			$data = array('utama' => $utama,);


			if ($this->session->userdata('level') == 'admin') {
				$this->load->view('sidebar_admin', $total);
			} elseif ($this->session->userdata('level') == 'pemeriksa') {
				$this->load->view('sidebar_pemeriksa', $total);
			} elseif ($this->session->userdata('level') == 'kasubsi') {
				$this->load->view('sidebar_kasubsi', $total);
			} elseif ($this->session->userdata('level') == 'kasi') {
				$this->load->view('sidebar_kasi', $total);
			} elseif ($this->session->userdata('level') == 'kk') {
				$this->load->view('sidebar_kk', $total);
			}
			$this->load->view('laporan', $data);
		} else {
			redirect('auth/login');
		}
	}

	public function dashboard()
	{
		$this->load->view('head');
		if (
			$this->session->userdata('level') == 'admin' or
			$this->session->userdata('level') == 'pemeriksa' or
			$this->session->userdata('level') == 'kasubsi' or
			$this->session->userdata('level') == 'kasi' or
			$this->session->userdata('level') == 'kk'
		) {
			$this->load->view('head');
			$this->load->model('Auth_model');
			$belum = $this->Auth_model->get_belum_selesai();
			$utama = $this->Auth_model->get_all();

			$pemeriksa = $this->Auth_model->get_where_stat_pemeriksa();
			$kembali_pemeriksa = $this->Auth_model->get_where_stat_dikembalikan_pemeriksa();
			$total = $this->Auth_model->get_where_stat_total_pemeriksa();
			$pemeriksa_b = $this->Auth_model->get_pemeriksa_bongkar();
			$pemeriksa_t = $this->Auth_model->get_pemeriksa_timbun();
			$pemeriksa_m = $this->Auth_model->get_pemeriksa_muat();

			$kasubsi = $this->Auth_model->get_where_stat_kasubsi();
			$kembali_kasubsi = $this->Auth_model->get_where_stat_dikembalikan_kasubsi();
			$kasubsi_b = $this->Auth_model->get_kasubsi_bongkar();
			$kasubsi_t = $this->Auth_model->get_kasubsi_timbun();
			$kasubsi_m = $this->Auth_model->get_kasubsi_muat();


			$kasi = $this->Auth_model->get_where_stat_kasi();
			$kembali_kasi = $this->Auth_model->get_where_stat_dikembalikan_kasi();
			$kasi_b = $this->Auth_model->get_kasi_bongkar();
			$kasi_t = $this->Auth_model->get_kasi_timbun();
			$kasi_m = $this->Auth_model->get_kasi_muat();

			$kk = $this->Auth_model->get_where_stat_kk();
			$kk_b = $this->Auth_model->get_kk_bongkar();
			$kk_t = $this->Auth_model->get_kk_timbun();
			$kk_m = $this->Auth_model->get_kk_muat();

			$disetujui = $this->Auth_model->get_disetujui();
			$setuju_b = $this->Auth_model->get_setuju_bongkar();
			$setuju_t = $this->Auth_model->get_setuju_timbun();
			$setuju_m = $this->Auth_model->get_setuju_muat();

			$ditolak = $this->Auth_model->get_ditolak();
			$tolak_b = $this->Auth_model->get_tolak_bongkar();
			$tolak_t = $this->Auth_model->get_tolak_timbun();
			$tolak_m = $this->Auth_model->get_tolak_muat();


			//var_dump($pemeriksa);

			$data = array(
				'pemeriksa' => $pemeriksa,
				'kembali_pemeriksa' => $kembali_pemeriksa,
				'pemeriksa_b' => $pemeriksa_b,
				'pemeriksa_t' => $pemeriksa_t,
				'pemeriksa_m' => $pemeriksa_m,
				'kasubsi' => $kasubsi,
				'kembali_kasubsi' => $kembali_kasubsi,
				'kasubsi_b' => $kasubsi_b,
				'kasubsi_t' => $kasubsi_t,
				'kasubsi_m' => $kasubsi_m,
				'kasi' => $kasi,
				'kembali_kasi' => $kembali_kasi,
				'kasi_b' => $kasi_b,
				'kasi_t' => $kasi_t,
				'kasi_m' => $kasi_m,
				'kk' => $kk,
				'kk_b' => $kk_b,
				'kk_t' => $kk_t,
				'kk_m' => $kk_m,
				'belum' => $belum,
				'disetujui' => $disetujui,
				'setuju_b' => $setuju_b,
				'setuju_t' => $setuju_t,
				'setuju_m' => $setuju_m,
				'ditolak' => $ditolak,
				'tolak_b' => $tolak_b,
				'tolak_t' => $tolak_t,
				'tolak_m' => $tolak_m,
			);
			if ($this->session->userdata('level') == 'admin') {
				$this->load->view('sidebar_admin');
			} elseif ($this->session->userdata('level') == 'pemeriksa') {
				$this->load->view('sidebar_pemeriksa', $data);
			} elseif ($this->session->userdata('level') == 'kasubsi') {
				$this->load->view('sidebar_kasubsi');
			} elseif ($this->session->userdata('level') == 'kasi') {
				$this->load->view('sidebar_kasi');
			} elseif ($this->session->userdata('level') == 'kk') {
				$this->load->view('sidebar_kk');
			}

			$this->load->view('dashboard', $data);
		} else {
			redirect('auth/login');
		}
	}



	public function administrator()
	{
		$this->load->view('head');
		if ($this->session->userdata('level') != 'admin') {
			redirect('auth/login');
		}

		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_where_stat_pemeriksa();

		$kembali = $this->Auth_model->get_where_stat_dikembalikan_pemeriksa();

		$data = array(
			'kembali' => $kembali,
			'utama' => $utama,
		);

		$this->load->view('head');
		$this->load->view('sidebar_admin');
		$this->load->view('pemeriksa', $data);
	}

	public function login()
	{
		$this->load->view('head');
		$this->load->view('login');
	}

	public function proses_login()
	{
		$this->load->view('head');
		$nip = $this->input->post('nip');
		$password = $this->input->post('password');

		$this->load->model('Auth_model');
		$ceklogin = $this->Auth_model->login($nip, $password);

		if ($ceklogin) {
			foreach ($ceklogin as $row);
			$this->session->set_userdata('nip', $row->nip);
			$this->session->set_userdata('level', $row->level);
			$this->session->set_userdata('nama', $row->nama);

			// var_dump($this->session->userdata("level"));

			if ($this->session->userdata("level") == "pemeriksa") {
				redirect('auth/dashboard');
			} elseif ($this->session->userdata("level") == "kasubsi") {
				redirect('auth/dashboard');
			} elseif ($this->session->userdata("level") == "kasi") {
				redirect('auth/dashboard');
			} elseif ($this->session->userdata("level") == "kk") {
				redirect('auth/dashboard');
			} elseif ($this->session->userdata("level") == "admin") {
				redirect('auth/dashboard');
			}
		} else {
			$data['pesan'] = "Nip dan Password Tidak Sesuai";
			$this->load->view('login', $data);
			$this->load->view('head');
		}
	}

	public function directory_test()
	{
		$this->session->set_userdata('level', 'admin');
		//var_dump($this->session->userdata("level"));
	}

	public function login_pengguna_jasa()
	{
		$this->load->view('head');
		$this->load->view('login_pengguna_jasa');
	}

	public function daftar_perusahaan_baru()
	{
		$this->load->view('head');
		$this->load->view('daftar_perusahaan_baru');
	}

	public function pemeriksa()
	{
		$this->load->view('head');
		if ($this->session->userdata('level') == 'pemeriksa' or $this->session->userdata('level') == 'admin') {
			$this->load->model('Auth_model');
			$utama = $this->Auth_model->get_where_stat_pemeriksa();
			$kembali = $this->Auth_model->get_where_stat_dikembalikan_pemeriksa();

			$data = array(
				'kembali' => $kembali,
				'utama' => $utama,
			);

			$this->load->view('head');
			if ($this->session->userdata('level') != 'pemeriksa') {
				$this->load->view('sidebar_admin');
			} elseif ($this->session->userdata('level') != 'admin') {
				$this->load->view('sidebar_pemeriksa');
			}
			$this->load->view('pemeriksa', $data);
		} else {
			redirect('auth/login');
		}
	}

	public function kasubsi()
	{
		$this->load->view('head');
		if ($this->session->userdata('level') == 'kasubsi' or $this->session->userdata('level') == 'admin') {
			$this->load->model('Auth_model');
			$utama = $this->Auth_model->get_where_stat_kasubsi();
			$kembali = $this->Auth_model->get_where_stat_dikembalikan_kasubsi();


			$data = array(
				'kembali' => $kembali,
				'utama' => $utama,
			);
		} else {

			redirect('auth/login');
		}

		if ($this->session->userdata('level') != 'kasubsi') {
			$this->load->view('sidebar_admin');
		} elseif ($this->session->userdata('level') != 'admin') {
			$this->load->view('sidebar_kasubsi');
		}
		$this->load->view('head');

		$this->load->view('kasubsi', $data);
	}

	public function kasi()
	{
		$this->load->view('head');
		if ($this->session->userdata('level') == 'kasi' or $this->session->userdata('level') == 'admin') {
			$this->load->model('Auth_model');
			$utama = $this->Auth_model->get_where_stat_kasi();
			$kembali = $this->Auth_model->get_where_stat_dikembalikan_kasi();


			$data = array(
				'kembali' => $kembali,
				'utama' => $utama,
			);
			if ($this->session->userdata('level') != 'kasi') {
				$this->load->view('sidebar_admin');
			} elseif ($this->session->userdata('level') != 'admin') {
				$this->load->view('sidebar_kasi');
			}
			$this->load->view('head');
			$this->load->view('kasi', $data);
		} else {

			redirect('auth/login');
		}
	}

	public function kk()
	{
		$this->load->view('head');
		if ($this->session->userdata('level') == 'kk' or $this->session->userdata('level') == 'admin') {
			$this->load->view('head');
			$this->load->model('Auth_model');
			$utama = $this->Auth_model->get_where_stat_kk();
			$kembali = $this->Auth_model->get_where_stat_ditolak_kk();

			$data = array(
				'utama' => $utama,
				'kembali' => $kembali,
			);
			if ($this->session->userdata('level') != 'admin') {
				$this->load->view('sidebar_kk');
			} elseif ($this->session->userdata('level') != 'kk') {
				$this->load->view('sidebar_admin');
			}

			$this->load->view('kk', $data);
		} else {
			redirect('auth/login');
		}
	}

	public function browse_status()
	{
		$this->load->view('head');
		$this->load->helper('form');
		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_all();

		$data = array(
			'utama' => $utama,
		);

		$this->load->view('head');
		$this->load->view('sidebar_pengguna_jasa');
		$this->load->view('browse_status', $data);
	}

	public function browse_status_pemeriksa()
	{
		$this->load->view('head');
		if ($this->session->userdata('level') != 'pemeriksa') {
			redirect('auth/login');
		}
		$this->load->helper('form');
		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_all();

		$data = array(
			'utama' => $utama,
		);

		$this->load->view('head');
		$this->load->view('sidebar_pemeriksa');
		$this->load->view('browse_status', $data);
	}

	public function browse_status_kasubsi()
	{
		$this->load->view('head');
		if ($this->session->userdata('level') != 'kasubsi') {
			redirect('auth/login');
		}
		$this->load->helper('form');
		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_all();

		$data = array(
			'utama' => $utama,
		);

		$this->load->view('head');
		$this->load->view('sidebar_kasubsi');
		$this->load->view('browse_status', $data);
	}

	public function browse_status_kasi()
	{
		$this->load->view('head');
		if ($this->session->userdata('level') != 'kasi') {
			redirect('auth/login');
		}
		$this->load->helper('form');
		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_all();

		$data = array(
			'utama' => $utama,
		);

		$this->load->view('head');
		$this->load->view('sidebar_kasi');
		$this->load->view('browse_status', $data);
	}

	public function browse_status_kk()
	{
		$this->load->view('head');
		if ($this->session->userdata('level') != 'kk') {
			redirect('auth/login');
		}
		$this->load->helper('form');
		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_all();

		$data = array(
			'utama' => $utama,
		);

		$this->load->view('head');
		$this->load->view('sidebar_kk');
		$this->load->view('browse_status', $data);
	}

	public function browse_status_admin()
	{
		$this->load->view('head');
		if ($this->session->userdata('level') != 'admin') {
			redirect('auth/login');
		}
		$this->load->helper('form');
		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_all();

		$data = array(
			'utama' => $utama,
		);

		$this->load->view('head');
		$this->load->view('sidebar_admin');
		$this->load->view('browse_status', $data);
	}

	public function pengguna_jasa()

	{
		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_where_stat();
		$perusahaan = $this->Auth_model->get_all_perusahaan();
		$data["record"] =  $this->Auth_model->tampil_data();

		//var_dump($utama);

		$data = array(
			'utama' => $utama,
			'perusahaan' => $perusahaan,
		);
		$data["record"] =  $this->Auth_model->tampil_data();
		//var_dump($data);
		$this->load->view('head', $data);
		$this->load->view('sidebar_pengguna_jasa');
		$this->load->view('pengguna_jasa', $data);
	}

	public function cari_perusahaan()
	{
		$this->load->model("Auth_model");
		$cari = $this->Auth_model->cari($_GET['nama'])->result();
		$cari=htmlspecialchars($cari);
		echo json_encode($cari);
	}

	public function pengguna_jasa_action()
	{
		$this->load->view('head');
		//form validation
		$this->form_validation->set_rules(
			'jenisdok',
			'Jenis Izin',
			'required',
			array('required' => 'Pilih Jenis Permohonan!')
		);
		$this->form_validation->set_rules(
			'agenda',
			'Nomor Agenda',
			'required',
			array('required' => 'Nomor Agenda tidak boleh kosong!')
		);
		$this->form_validation->set_rules(
			'nama',
			'Nama Perusahaan',
			'required',
			array('required' => 'Nama Perusahaan tidak boleh kosong!')
		);
		$this->form_validation->set_rules(
			'alamat',
			'Alamat',
			'required',
			array('required' => 'Alamat tidak boleh kosong!')
		);
		$this->form_validation->set_rules(
			'npwp',
			'NPWP',
			'required',
			array('required' => 'NPWP tidak boleh kosong!')
		);
		$this->form_validation->set_rules(
			'nomohon',
			'Nomor Surat',
			'required',
			array('required' => 'Nomor Surat tidak boleh kosong!')
		);
		$this->form_validation->set_rules(
			'tglmohon',
			'Tanggal Surat',
			'required',
			array('required' => 'Tanggal Surat tidak boleh kosong!')
		);
		$this->form_validation->set_rules(
			'nama_pemohon',
			'Nama Pemohon',
			'required',
			array('required' => 'Nama Pemohon tidak boleh kosong!')
		);
		$this->form_validation->set_rules(
			'jabatan_pemohon',
			'Jabatan Pemohon',
			'required',
			array('required' => 'Jabatan Pemohon tidak boleh kosong!')
		);
		$this->form_validation->set_rules(
			'nm_brg',
			'Nama Barang',
			'required',
			array('required' => 'Nama Barang tidak boleh kosong')
		);
		$this->form_validation->set_rules(
			'muatan',
			'Jumlah Muat',
			'required',
			array('required' => 'Jumlah Muat tidak boleh kosong')
		);
		$this->form_validation->set_rules(
			'satuan',
			'Satuan Muat',
			'required',
			array('required' => 'Satuan Muat tidak boleh kosong')
		);
		$this->form_validation->set_rules(
			'jum_kemasan',
			'Jumlah Kemasan',
			'required',
			array('required' => 'Jumlah Kemasan tidak boleh kosong')
		);
		$this->form_validation->set_rules(
			'sat_kemasan',
			'Satuan Kemasan',
			'required',
			array('required' => 'Satuan Kemasan tidak boleh kosong')
		);
		$this->form_validation->set_rules(
			'sarkut',
			'Nama Pengangkut',
			'required',
			array('required' => 'Nama Pengangkut tidak boleh kosong')
		);
		$this->form_validation->set_rules(
			'negara_asal',
			'Negara Asal',
			'required',
			array('required' => 'Negara Asal tidak boleh kosong')
		);
		$this->form_validation->set_rules(
			'negara_tujuan',
			'Negara Tujuan',
			'required',
			array('required' => 'Negara Tujuan tidak boleh kosong')
		);
		$this->form_validation->set_rules(
			'tgl_kira_muat',
			'Tanggal Perkiraan',
			'required',
			array('required' => 'Tanggal Perkiraan tidak boleh kosong')
		);
		$this->form_validation->set_rules(
			'lokasi_muat',
			'Lokasi Kegiatan',
			'required',
			array('required' => 'Lokasi Kegiatan tidak boleh kosong')
		);
		$this->form_validation->set_rules(
			'alasan',
			'Alasan 1',
			'required',
			array('required' => 'Alasan 1 tidak boleh kosong')
		);
		$this->form_validation->set_rules(
			'alasan1',
			'Alasan 2',
			'required',
			array('required' => 'Alasan 2 tidak boleh kosong')
		);

		//if function
		if ($this->form_validation->run() == FALSE) {
			$this->pengguna_jasa();
		} else {
			$jenisdok = $this->input->post('jenisdok');
			$agenda = $this->input->post('agenda');
			$namapersh = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$npwp = $this->input->post('npwp');
			$nomohon = $this->input->post('nomohon');
			$tglmohon = tgl_sql($this->input->post('tglmohon'));
			$nama_pemohon = $this->input->post('nama_pemohon');
			$jabatan_pemohon = $this->input->post('jabatan_pemohon');
			$nm_brg = $this->input->post('nm_brg');
			$muatan = $this->input->post('muatan');
			$satuan = $this->input->post('satuan');
			$jum_kemasan = $this->input->post('jum_kemasan');
			$sat_kemasan = $this->input->post('sat_kemasan');
			$sarkut = $this->input->post('sarkut');
			$negara_asal = $this->input->post('negara_asal');
			$negara_tujuan = $this->input->post('negara_tujuan');
			$tgl_kira_muat = tgl_sql($this->input->post('tgl_kira_muat'));
			$lokasi_muat = $this->input->post('lokasi_muat');
			$alasan = $this->input->post('alasan');
			$alasan1 = $this->input->post('alasan1');

			// save files 
			$config['upload_path']          = './file_pdf/';
			$config['allowed_types']        = 'gif|jpg|png|pdf';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('files')) {
				$this->pengguna_jasa();
			} else {
				$data = array(
					'jenisdok' => $jenisdok,
					'agenda' => $agenda,
					'namapersh' => $namapersh,
					'alamat' => $alamat,
					'npwp' => $npwp,
					'nomohon' => $nomohon,
					'tglmohon' => $tglmohon,
					'nama_pemohon' => $nama_pemohon,
					'jabatan_pemohon' => $jabatan_pemohon,
					'nm_brg' => $nm_brg,
					'muatan' => $muatan,
					'satuan' => $satuan,
					'jum_kemasan' => $jum_kemasan,
					'sat_kemasan' => $sat_kemasan,
					'sarkut' => $sarkut,
					'negara_asal' => $negara_asal,
					'negara_tujuan' => $negara_tujuan,
					'tgl_kira_muat' => $tgl_kira_muat,
					'lokasi_muat' => $lokasi_muat,
					'alasan' => $alasan,
					'alasan1' => $alasan1,
					'files' =>  $this->upload->data('file_name'), // ini untuk ambil full path dari file yg disimpan, contoh: [full_path] => /path/to/your/upload/filename.jpg
				);

				$this->load->model('Auth_model');
				$this->Auth_model->insert($data);

				redirect(site_url('auth/pengguna_jasa'));
			}
		}
	}

	public function update_pengguna_jasa()
	{

		$id = $this->input->get('id');
		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_by_id($id);
		$perusahaan = $this->Auth_model->get_all_perusahaan();
		$data["record"] =  $this->Auth_model->tampil_data();

		//var_dump($utama);
		$data = array(
			'utama' => $utama,
		);
		$data["record"] =  $this->Auth_model->tampil_data();
		$this->load->view('head', $data);
		$this->load->view('sidebar_pengguna_jasa');
		$this->load->view('pengguna_jasa_update', $data);
	}

	public function delete_pengguna_jasa()
	{
		$this->load->view('head');
		$id = $this->input->get('id');
		$this->load->model('Auth_model');
		$this->Auth_model->delete($id);

		redirect(site_url('auth/pengguna_jasa'));
	}

	public function update_action_pengguna_jasa()
	{
		$this->load->view('head');
		$id = $this->input->post('id');
		$jenisdok = $this->input->post('jenisdok');
		$agenda = $this->input->post('agenda');
		$namapersh = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$npwp = $this->input->post('npwp');
		$nomohon = $this->input->post('nomohon');
		$tglmohon = tgl_sql($this->input->post('tglmohon'));
		$nama_pemohon = $this->input->post('nama_pemohon');
		$jabatan_pemohon = $this->input->post('jabatan_pemohon');
		$nm_brg = $this->input->post('nm_brg');
		$muatan = $this->input->post('muatan');
		$satuan = $this->input->post('satuan');
		$jum_kemasan = $this->input->post('jum_kemasan');
		$sat_kemasan = $this->input->post('sat_kemasan');
		$sarkut = $this->input->post('sarkut');
		$negara_asal = $this->input->post('negara_asal');
		$negara_tujuan = $this->input->post('negara_tujuan');
		$tgl_kira_muat = tgl_sql($this->input->post('tgl_kira_muat'));
		$lokasi_muat = $this->input->post('lokasi_muat');
		$alasan = $this->input->post('alasan');
		$alasan1 = $this->input->post('alasan1');
	
		

		$data = array(
			'jenisdok' => $jenisdok,
			'agenda' => $agenda,
			'namapersh' => $namapersh,
			'alamat' => $alamat,
			'npwp' => $npwp,
			'nomohon' => $nomohon,
			'tglmohon' => $tglmohon,
			'nama_pemohon' => $nama_pemohon,
			'jabatan_pemohon' => $jabatan_pemohon,
			'nm_brg' => $nm_brg,
			'muatan' => $muatan,
			'satuan' => $satuan,
			'jum_kemasan' => $jum_kemasan,
			'sat_kemasan' => $sat_kemasan,
			'sarkut' => $sarkut,
			'negara_asal' => $negara_asal,
			'negara_tujuan' => $negara_tujuan,
			'tgl_kira_muat' => $tgl_kira_muat,
			'lokasi_muat' => $lokasi_muat,
			'alasan' => $alasan,
			'alasan1' => $alasan1,
			
		);

		$this->load->model('Auth_model');
		$this->Auth_model->update($id, $data);

		redirect(site_url('auth/pengguna_jasa'));
	}


	public function ajukan_pemeriksa()
	{
		$this->load->view('head');
		$id = $this->input->get('id');
		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_by_id($id);

		//var_dump($utama);
		$data = array(
			'utama' => $utama,
		);

		$this->load->view('head');
		$this->load->view('ajukan_pemeriksa', $data);
	}

	public function pdf()
	{
		$this->load->view('head');
		$id = $this->input->get('id');
		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_by_id($id);

		//var_dump($utama);
		$data = array(
			'utama' => $utama,
		);

		$this->load->view('head');
		$this->load->view('pdf', $data);
	}

/*
	public function download_file($id){
	    $this->load->helper('download');
	    $files = $this->db->query("SELECT*FROM utama WHERE id='$id'");
	    foreach($files->result() as $files){
	    $files = './file_pdf/'.$files->files;
	    force_download($files, NULL);
	    }
	}
*/

    function download($id)
	{
		$this->load->helper('download');
		$id = $this->input->get('id');
		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_by_id($id);

		//var_dump($utama);
		$data = array(
			'utama' => $utama,
		);

		force_download('./file_pdf/'.$data->files,NULL);
	}

	public function ajukan_pemeriksa_action()
	{
		$this->load->view('head');
		$id = $this->input->post('id');
		$stat_loket = '1';
		$wk_loket = $this->input->post('wk_loket');

		$data = array(
			'id' => $id,
			'stat_loket' => $stat_loket,
			'wk_loket' => $wk_loket,
		);

		$this->load->model('Auth_model');
		$this->Auth_model->update($id, $data);

		redirect(site_url('auth/pengguna_jasa'));
	} 

	public function proses_pemeriksa()

	{
		$this->load->view('head');
		if ($this->session->userdata('level') == 'pemeriksa' or $this->session->userdata('level') == 'admin') {
			$id = $this->input->get('id');
			$this->load->model('Auth_model');
			$utama = $this->Auth_model->get_by_id($id);

			//var_dump($utama);
			$data = array(
				'utama' => $utama,
			);

			$this->load->view('head');

			if ($this->session->userdata('level') != 'admin') {
				$this->load->view('sidebar_pemeriksa', $data);
			} elseif ($this->session->userdata('level') != 'pemeriksa') {
				$this->load->view('sidebar_admin');
			}

			$this->load->view('proses_pemeriksa', $data);
		} else {
			redirect('auth/login');
		}
	}

	public function proses_pemeriksa_action()
	{
		$this->load->view('head');
		$id = $this->input->post('id');
		$petugas = $this->input->post('petugas');
		$stat_loket = '2';
		//$jenisdok = $this->input->post('jenisdok');
		//$agenda = $this->input->post('agenda');
		//$namapersh = $this->input->post('namapersh');
		//$alamat = $this->input->post('alamat');
		//$npwp = $this->input->post('npwp');
		//$nomohon = $this->input->post('nomohon');
		//$tglmohon = $this->input->post('tglmohon');
		//$nama_pemohon = $this->input->post('nama_pemohon');
		//$jabatan_pemohon = $this->input->post('jabatan_pemohon');
		//$nm_brg = $this->input->post('nm_brg');
		//$muatan = $this->input->post('muatan');
		//$satuan = $this->input->post('satuan');
		//$jum_kemasan = $this->input->post('jum_kemasan');
		//$sat_kemasan = $this->input->post('sat_kemasan');
		//$sarkut = $this->input->post('sarkut');
		//$negara_asal = $this->input->post('negara_asal');
		//$negara_tujuan = $this->input->post('negara_tujuan');
		//$tgl_kira_muat = $this->input->post('tgl_kira_muat');
		//$lokasi_muat = $this->input->post('lokasi_muat');
		//$alasan = $this->input->post('alasan');
		//$alasan1 = $this->input->post('alasan1');
		//$files = $this->input->post('files');
		$nondp2 = $this->input->post('nondp2');
		$tp2 = tgl_sql($this->input->post('tp2'));
		$hasilp2 = $this->input->post('hasilp2');




		$data = array(
			'id' => $id,
			"petugas" => $petugas,
			'stat_loket' => $stat_loket,
			//'jenisdok' => $jenisdok,
			//'agenda' => $agenda,
			//'namapersh' => $namapersh,
			//'alamat' => $alamat,
			//'npwp' => $npwp,
			//'nomohon' => $nomohon,
			//'tglmohon' => $tglmohon,
			//'nama_pemohon' => $nama_pemohon,
			//'jabatan_pemohon' => $jabatan_pemohon,
			//'nm_brg' => $nm_brg,
			//'muatan' => $muatan,
			//'satuan' => $satuan,
			//'jum_kemasan' => $jum_kemasan,
			//'sat_kemasan' => $sat_kemasan,
			//'sarkut' => $sarkut,
			//'negara_asal' => $negara_asal,
			//'negara_tujuan' => $negara_tujuan,
			//'tgl_kira_muat' => $tgl_kira_muat,
			//'lokasi_muat' => $lokasi_muat,
			//'alasan' => $alasan,
			//'alasan1' => $alasan1,
			//'files' => $files,
			'nondp2' => $nondp2,
			'tp2' => $tp2,
			'hasilp2' => $hasilp2,

		);

		$this->load->model('Auth_model');
		$this->Auth_model->update($id, $data);

		redirect(site_url('auth/pemeriksa'));
	}

	public function kembalikan_pemeriksa()
	{
		$this->load->view('head');
		$id = $this->input->post('id');
		$catatan = $this->input->post('catatan');
		$stat_loket = '11';

		$data = array(
			'id' => $id,
			"catatan" => $catatan,
			'stat_loket' => $stat_loket,
		);

		$this->load->model('Auth_model');
		$this->Auth_model->update($id, $data);

		redirect(site_url('auth/kasubsi'));
	}

	public function kembalikan_kasubsi()
	{
		$this->load->view('head');
		$id = $this->input->post('id');
		$catatan = $this->input->post('catatan');
		$stat_loket = '21';

		$data = array(
			'id' => $id,
			"catatan" => $catatan,
			'stat_loket' => $stat_loket,
		);

		$this->load->model('Auth_model');
		$this->Auth_model->update($id, $data);

		redirect(site_url('auth/kasi'));
	}

	public function kembalikan_kasi()
	{
		$this->load->view('head');
		$id = $this->input->post('id');
		$catatan = $this->input->post('catatan');
		$stat_loket = '31';

		$data = array(
			'id' => $id,
			"catatan" => $catatan,
			'stat_loket' => $stat_loket,
		);

		$this->load->model('Auth_model');
		$this->Auth_model->update($id, $data);

		redirect(site_url('auth/kk'));
	}

	public function tolak_permohonan()
	{
		$this->load->view('head');
		$id = $this->input->post('id');
		$catatan = $this->input->post('catatan');
		$stat_loket = '8';

		$data = array(
			'id' => $id,
			"catatan" => $catatan,
			'stat_loket' => $stat_loket,
		);

		$this->load->model('Auth_model');
		$this->Auth_model->update($id, $data);

		redirect(site_url('auth/kk'));
	}

	public function proses_kasubsi()

	{
		$this->load->view('head');
		if ($this->session->userdata('level') == 'kasi' or $this->session->userdata('level') == 'admin') {
			$id = $this->input->get('id');
			$this->load->model('Auth_model');
			$utama = $this->Auth_model->get_by_id($id);

			//var_dump($utama);
			$data = array(
				'utama' => $utama,
			);

			$this->load->view('head');
			if ($this->session->userdata('level') != 'admin') {
				$this->load->view('sidebar_kasubsi');
			} elseif ($this->session->userdata('level') != 'kasubsi') {
				$this->load->view('sidebar_admin');
			}

			$this->load->view('proses_kasubsi', $data);
		} else {
			redirect('auth/login');
		}
	}


	public function proses_kasubsi_action()
	{
		$this->load->view('head');
		$id = $this->input->post('id');
		//$petugas = $this->input->post('petugas');
		$stat_loket = '3';

		$data = array(
			'id' => $id,
			//"petugas" => $petugas,
			'stat_loket' => $stat_loket,
		);

		$this->load->model('Auth_model');
		$this->Auth_model->update($id, $data);

		redirect(site_url('auth/kasubsi'));
	}

	public function proses_kasi()

	{
		$this->load->view('head');
		if ($this->session->userdata('level') == 'kasi' or $this->session->userdata('level') == 'admin') {
			$id = $this->input->get('id');
			$this->load->model('Auth_model');
			$utama = $this->Auth_model->get_by_id($id);

			//var_dump($utama);
			$data = array(
				'utama' => $utama,
			);

			$this->load->view('head');
			if ($this->session->userdata('level') != 'kasi') {
				$this->load->view('sidebar_admin');
			} elseif ($this->session->userdata('level') != 'admin') {
				$this->load->view('sidebar_kasi');
			}

			$this->load->view('proses_kasi', $data);
		} else {
			redirect('auth/login');
		}
	}

	public function proses_kasi_action()
	{
		$this->load->view('head');
		$id = $this->input->post('id');
		$petugas = $this->input->post('petugas');
		$stat_loket = '5';

		$data = array(
			'id' => $id,
			"petugas" => $petugas,
			'stat_loket' => $stat_loket,
		);

		$this->load->model('Auth_model');
		$this->Auth_model->update($id, $data);

		redirect(site_url('auth/kasi'));
	}

	public function proses_kk()

	{
		$this->load->view('head');
		if ($this->session->userdata('level') == 'kk' or $this->session->userdata('level') == 'admin') {
			$id = $this->input->get('id');
			$this->load->model('Auth_model');
			$utama = $this->Auth_model->get_by_id($id);

			//var_dump($utama);
			$data = array(
				'utama' => $utama,
			);
			if ($this->session->userdata('level') == 'admin') {
				$this->load->view('sidebar_admin');
			} elseif ($this->session->userdata('level') == 'kk') {
				$this->load->view('sidebar_kk');
			}

			$this->load->view('head');
			$this->load->view('proses_kk', $data);
		} else {
			redirect('auth/login');
		}
	}


	public function proses_kk_action()
	{
		$this->load->view('head');
		$id = $this->input->post('id');
		$petugas = $this->input->post('petugas');
		$wk_selesai = $this->input->post('wk_selesai');
		$stat_loket = '9';

		$data = array(
			'id' => $id,
			"petugas" => $petugas,
			'stat_loket' => $stat_loket,
			'wk_selesai' => $wk_selesai,
		);

		$this->load->model('Auth_model');
		$this->Auth_model->update($id, $data);

		redirect(site_url('auth/kk'));
	}

	public function cari()
	{
		$this->load->view('head');
		$this->load->view('head');
		if (
			$this->session->userdata('level') == 'admin' or
			$this->session->userdata('level') == 'pemeriksa' or
			$this->session->userdata('level') == 'kasubsi' or
			$this->session->userdata('level') == 'kasi' or
			$this->session->userdata('level') == 'kk'
		) {
			$this->load->helper('form');
			$this->load->model('Auth_model');
			$keyword = $this->input->post('keyword');
			$utama = $this->Auth_model->get_keyword($keyword);
			$all = $this->Auth_model->get_all();

			$data = array(
				'utama' => $utama,
				'all' => $all,
			);
			if ($this->session->userdata('level') == 'admin') {
				$this->load->view('sidebar_admin');
			} elseif ($this->session->userdata('level') == 'pemeriksa') {
				$this->load->view('sidebar_pemeriksa', $data);
			} elseif ($this->session->userdata('level') == 'kasubsi') {
				$this->load->view('sidebar_kasubsi');
			} elseif ($this->session->userdata('level') == 'kasi') {
				$this->load->view('sidebar_kasi');
			} elseif ($this->session->userdata('level') == 'kk') {
				$this->load->view('sidebar_kk');
			}
			$this->load->view('head');
			$this->load->view('browse_status', $data);
		} else {
			$this->load->helper('form');
			$this->load->model('Auth_model');
			$keyword = $this->input->post('keyword');
			$utama = $this->Auth_model->get_keyword($keyword);

			$data = array(
				'utama' => $utama,
			);
			$this->load->view('head');
			$this->load->view('respon', $data);
		}
	}

	public function cari_status()
	{
		$this->load->view('head');
		$this->load->helper('form');
		$this->load->model('Auth_model');
		$keyword = $this->input->post('keyword');
		$utama = $this->Auth_model->get_keyword_pengguna_jasa($keyword);

		$data = array(
			'utama' => $utama,
		);
		$this->load->view('head');
		$this->load->view('respon', $data);
	}

	//admin


	public function pemeriksa_admin()
	{
		$this->load->view('head');
		if ($this->session->userdata('level') != 'admin') {
			redirect('auth/login');
		}
		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_where_stat_pemeriksa();

		$kembali = $this->Auth_model->get_where_stat_dikembalikan_pemeriksa();

		$data = array(
			'kembali' => $kembali,
			'utama' => $utama,
		);

		$this->load->view('head');
		$this->load->view('sidebar_admin');
		$this->load->view('pemeriksa', $data);
	}

	public function kasubsi_admin()
	{
		$this->load->view('head');
		if ($this->session->userdata('level') != 'admin') {
			redirect('auth/login');
		}


		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_where_stat_kasubsi();
		$kembali = $this->Auth_model->get_where_stat_dikembalikan_kasubsi();


		$data = array(
			'kembali' => $kembali,
			'utama' => $utama,
		);

		$this->load->view('head');
		$this->load->view('sidebar_admin');
		$this->load->view('kasubsi', $data);
	}

	public function kasi_admin()
	{
		$this->load->view('head');
		if ($this->session->userdata('level') != 'admin') {
			redirect('auth/login');
		}
		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_where_stat_kasi();
		$kembali = $this->Auth_model->get_where_stat_dikembalikan_kasi();


		$data = array(
			'kembali' => $kembali,
			'utama' => $utama,
		);

		$this->load->view('head');
		$this->load->view('sidebar_admin');
		$this->load->view('kasi', $data);
	}

	public function kk_admin()
	{
		$this->load->view('head');
		if ($this->session->userdata('level') != 'admin') {
			redirect('auth/login');
		}
		$this->load->model('Auth_model');
		$utama = $this->Auth_model->get_where_stat_kk();
		$kembali = $this->Auth_model->get_where_stat_ditolak_kk();

		$data = array(
			'utama' => $utama,
			'kembali' => $kembali,
		);

		$this->load->view('head');
		$this->load->view('sidebar_admin');
		$this->load->view('kk', $data);
	}


	public function laporan_admin()
	{
		$this->load->view('head');
		if (
			$this->session->userdata('level') == 'admin' or
			$this->session->userdata('level') == 'pemeriksa' or
			$this->session->userdata('level') == 'kasubsi' or
			$this->session->userdata('level') == 'kasi' or
			$this->session->userdata('level') == 'kk'
		) {

			$this->load->view('head');
			$this->load->model('Auth_model');
			$utama = $this->Auth_model->get_all();

			$data = array('utama' => $utama);

			if ($this->session->userdata('level') == 'admin') {
				$this->load->view('sidebar_admin');
			} elseif ($this->session->userdata('level') == 'pemeriksa') {
				$this->load->view('sidebar_pemeriksa');
			} elseif ($this->session->userdata('level') == 'kasubsi') {
				$this->load->view('sidebar_kasubsi');
			} elseif ($this->session->userdata('level') == 'kasi') {
				$this->load->view('sidebar_kasi');
			} elseif ($this->session->userdata('level') == 'kk') {
				$this->load->view('sidebar_kk');
			}
			$this->load->view('laporan', $data);
		} else {
			redirect('auth/login');
		}
	}
}
