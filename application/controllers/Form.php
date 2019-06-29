<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function index()
	{
		$this->load->view('header');
		$this->load->view('form');
		$this->load->view('footer');
	}

	public function addMahasiswa()
	{

		if ($this->form_validation->run() == false) {
			$this->load->view('header');
			$this->load->view('form');
			$this->load->view('footer');
		} else {
			$data = [
				'nama_mhs' 				=> $this->input->post('nama_mhs'),
				'jurusan_mhs' 			=> $this->input->post('jurusan_mhs'),
				'npm_mhs' 				=> $this->input->post('npm_mhs'),
				'tempat_lahir_mhs' 		=> $this->input->post('tempat_lahir_mhs'),
				'tanggal_lahir_mhs' 	=> $this->input->post('tanggal_lahir_mhs'),
				'jenis_kelamin_mhs' 	=> $this->input->post('jenis_kelamin_mhs'),
				'nik_ktp_mhs' 			=> $this->input->post('nik_ktp_mhs'),
				'asal_sekolah_mhs' 		=> $this->input->post('asal_sekolah_mhs'),
				'jurusan_sekolah_mhs' 	=> $this->input->post('jurusan_sekolah_mhs'),
				'alamat_sekolah_mhs' 	=> $this->input->post('alamat_sekolah_mhs'),
				'nomor_sttb' 			=> $this->input->post('nomor_sttb'),
				'nilai_ijazah' 			=> $this->input->post('nilai_ijazah'),
				'nilai_nem' 			=> $this->input->post('nilai_nem'),
				'nisn' 					=> $this->input->post('nisn'),
				'perguruan_tinggi_asal' => $this->input->post('perguruan_tinggi_asal'),
				'jurusan_asal' 			=> $this->input->post('jurusan_asal'),
				'npm_asal' 				=> $this->input->post('npm_asal'),
				'tahun_lulus_asal' 		=> $this->input->post('tahun_lulus_asal'),
				'alamat_mhs' 			=> $this->input->post('alamat_mhs'),
				'rt_mhs' 				=> $this->input->post('rt_mhs'),
				'rw_mhs' 				=> $this->input->post('rw_mhs'),
				'kelurahan_mhs' 		=> $this->input->post('kelurahan_mhs'),
				'kecamatan_mhs' 		=> $this->input->post('kecamatan_mhs'),
				'kota_mhs' 				=> $this->input->post('kota_mhs'),
				'kode_pos_mhs' 			=> $this->input->post('kode_pos_mhs'),
				'nomor_telpon_mhs' 		=> $this->input->post('nomor_telpon_mhs'),
				'nomor_hp_mhs' 			=> $this->input->post('nomor_hp_mhs'),
				'email_mhs' 			=> $this->input->post('email_mhs'),
				'nomor_kps'				=> $this->input->post('nomor_kps'),
				'agama_mhs' 			=> $this->input->post('agama_mhs'),
				'urutan_anak' 			=> $this->input->post('urutan_anak'),
				'jumlah_saudara' 		=> $this->input->post('jumlah_saudara'),
				'nama_ayah' 			=> $this->input->post('nama_ayah'),
				'tempat_lahir_ayah' 	=> $this->input->post('tempat_lahir_ayah'),
				'tanggal_lahir_ayah' 	=> $this->input->post('tanggal_lahir_ayah'),
				'nik_ktp_ayah' 			=> $this->input->post('nik_ktp_ayah'),
				'pendidikan_ayah' 		=> $this->input->post('pendidikan_ayah'),
				'alamat_ayah' 			=> $this->input->post('alamat_ayah'),
				'pekerjaan_ayah' 		=> $this->input->post('pekerjaan_ayah'),
				'penghasilan_ayah' 		=> $this->input->post('penghasilan_ayah'),
				'nama_ibu' 				=> $this->input->post('nama_ibu'),
				'tempat_lahir_ibu' 		=> $this->input->post('tempat_lahir_ibu'),
				'tanggal_lahir_ibu' 	=> $this->input->post('tanggal_lahir_ibu'),
				'nik_ktp_ibu' 			=> $this->input->post('nik_ktp_ibu'),
				'pendidikan_ibu' 		=> $this->input->post('pendidikan_ibu'),
				'alamat_ibu' 			=> $this->input->post('alamat_ibu'),
				'pekerjaan_ibu' 		=> $this->input->post('pekerjaan_ibu'),
				'penghasilan_ibu' 		=> $this->input->post('penghasilan_ibu'),
				'nama_wali' 			=> $this->input->post('nama_wali'),
				'tempat_lahir_wali' 	=> $this->input->post('tempat_lahir_wali'),
				'tanggal_lahir_wali' 	=> $this->input->post('tanggal_lahir_wali'),
				'nik_ktp_wali' 			=> $this->input->post('nik_ktp_wali'),
				'pendidikan_wali' 		=> $this->input->post('pendidikan_wali'),
				'alamat_wali' 			=> $this->input->post('alamat_wali'),
				'pekerjaan_wali' 		=> $this->input->post('pekerjaan_wali'),
				'penghasilan_wali' 		=> $this->input->post('penghasilan_wali')
			];

			$this->db->insert('mahasiswa', $data);
			redirect('Form');
		}
	}
}
