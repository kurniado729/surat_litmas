<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_Berkas_model extends CI_Model
{
	public function getuser(){
		$this->db->SELECT('*');
		$this->db->FROM('user');
		$this->db->WHERE('email', $this->session->userdata('email'));
		$data = $this->db->get();
		return $data->row_array();
	}

	public function paglitmasdiversi($limit, $start)
	{
		$this->db->order_by('id', 'DESC');
		$data = $this->db->get_where('litmas_diversi', ['hapus' => '0'], $limit, $start);
		return $data->result_array();
	}

	public function getlitmasdiversi(){
		$query = "SELECT * FROM litmas_diversi WHERE hapus = '0' ORDER BY id ";
		return $this->db->query($query)->result_array();
	}

	public function hitunglitmasdiversi(){
		$query = "SELECT * FROM litmas_diversi WHERE hapus = '0'";
		return count($this->db->query($query)->result_array());
	}

	public function getlallitmasdiversi(){
		$query = "SELECT * FROM litmas_diversi";
		return $this->db->query($query)->result_array();
	}

	public function addlitmasdiversi(){
		$config ['upload_path'] = './assets/upload/litmasdiversi';
		$config ['allowed_types'] = 'pdf';
		$config ['max_size'] = 0;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file_surat_masuk')) {
			$this->session->set_flashdata('message', 'File yang diinputkan harus PDF');
			redirect('kelola_berkas/addlitmasdiversi');
		} else {
			$file = $this->upload->data('file_name');
		}

		$data = [
			//data klien
			'nama_klien' => $this->input->post('nama_klien'),
			'tempat_lahir_klien' => $this->input->post('tempat_lahir_klien'),
			'tanggal_lahir_klien' => $this->input->post('tanggal_lahir_klien'),
			'jenis_kelamin_klien' => $this->input->post('jenis_kelamin_klien'),
			'agama_klien' => $this->input->post('agama_klien'),
			'suku_klien' => $this->input->post('suku_klien'),
			'bangsa_klien' => $this->input->post('bangsa_klien'),
			'warga_negara_klien' => $this->input->post('warga_negara_klien'),
			'pendidikan_terakhir_klien' => $this->input->post('pendidikan_terakhir_klien'),
			'status_perkawinan_klien' => $this->input->post('status_perkawinan_klien'),
			'ciri_klien' => $this->input->post('ciri_klien'),

			//data ayah
			'nama_ayah' => $this->input->post('nama_ayah'),
			'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
			'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
			'agama_ayah' => $this->input->post('agama_ayah'),
			'suku_ayah' => $this->input->post('suku_ayah'),
			'bangsa_ayah' => $this->input->post('bangsa_ayah'),
			'warga_negara_ayah' => $this->input->post('warga_negara_ayah'),
			'pendidikan_terakhir_ayah' => $this->input->post('pendidikan_terakhir_ayah'),
			'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
			'alamat_ayah' => $this->input->post('alamat_ayah'),
			'hubungan_ayah' => $this->input->post('hubungan_ayah'),

			//data ibu
			'nama_ibu' => $this->input->post('nama_ibu'),
			'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
			'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
			'agama_ibu' => $this->input->post('agama_ibu'),
			'suku_ibu' => $this->input->post('suku_ibu'),
			'bangsa_ibu' => $this->input->post('bangsa_ibu'),
			'warga_negara_ibu' => $this->input->post('warga_negara_ibu'),
			'pendidikan_terakhir_ibu' => $this->input->post('pendidikan_terakhir_ibu'),
			'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
			'alamat_ibu' => $this->input->post('alamat_ibu'),
			'hubungan_ibu' => $this->input->post('hubungan_ibu'),

			//data wali
			'nama_wali' => $this->input->post('nama_wali'),
			'tempat_lahir_wali' => $this->input->post('tempat_lahir_wali'),
			'tanggal_lahir_wali' => $this->input->post('tanggal_lahir_wali'),
			'agama_wali' => $this->input->post('agama_wali'),
			'suku_wali' => $this->input->post('suku_wali'),
			'bangsa_wali' => $this->input->post('bangsa_wali'),
			'warga_negara_wali' => $this->input->post('warga_negara_wali'),
			'pendidikan_terakhir_wali' => $this->input->post('pendidikan_terakhir_wali'),
			'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
			'status_perkawinan_wali' => $this->input->post('status_perkawinan_wali'),
			'alamat_wali' => $this->input->post('alamat_wali'),
			'hubungan_wali' => $this->input->post('hubungan_wali'),

			//data suami/istri
			'nama_suami/istri' => $this->input->post('nama_suami/istri'),
			'tempat_lahir_suami/istri' => $this->input->post('tempat_lahir_suami/istri'),
			'tanggal_lahir_suami/istri' => $this->input->post('tanggal_lahir_suami/istri'),
			'agama_suami/istri' => $this->input->post('agama_suami/istri'),
			'suku_suami/istri' => $this->input->post('suku_suami/istri'),
			'bangsa_suami/istri' => $this->input->post('bangsa_suami/istri'),
			'warga_negara_suami/istri' => $this->input->post('warga_negara_suami/istri'),
			'pendidikan_terakhir_suami/istri' => $this->input->post('pendidikan_terakhir_suami/istri'),
			'pekerjaan_suami/istri' => $this->input->post('pekerjaan_suami/istri'),
			'status_perkawinan_suami/istri' => $this->input->post('status_perkawinan_suami/istri'),

			//data suami/istri
			'nama_pegawai' => $this->input->post('nama_pegawai'),
			'nip_pegawai' => $this->input->post('nip_pegawai'),
			'nip_pegawai' => $this->input->post('nip_pegawai'),

			//data surat
			'file_surat_masuk' => $file,
			'pengirim' => $this->input->post('pengirim'),
			'no_surat' => $this->input->post('no_surat_masuk'),
			'tgl_surat' => $this->input->post('tgl_surat_masuk'),
			'ringkasan' => $this->input->post('perihal'),
		];

		var_dump($data);die;

		$data = $this->diversi->getlallitmasdiversi();
		$tidaksama = true;
		foreach ($data as $d) {
			unset($d['id']);
			if ($d['no_surat'] == $this->input->post('no_surat')) {
				$tidaksama = false;
			}
		}
		if ($tidaksama) {
			$this->db->insert('litmas_diversi', [
				'file' => $file,
				'pengirim' => $this->input->post('pengirim'),
				'no_surat' => $this->input->post('no_surat'),
				'tgl_surat' => $this->input->post('tgl_surat'),
				'ringkasan' => $this->input->post('ringkasan'),
				'hapus' => '0'
			]);
		} else {
			$this->session->set_flashdata('message', 'NO Surat  yang diinputkan sudah ada');
			redirect('kelola_berkas/addlitmasdiversi');
		}

	}

	public function getdetaillitmasdiversi($id){
		$query = "SELECT * FROM litmas_diversi WHERE id = $id ";
		return $this->db->query($query)->row_array();
	}

	public function editlitmasdiversi($id){
		$config ['allowed_types'] = 'pdf';
		$config ['max_size'] = '2048';
		$config ['upload_path'] = './assets/upload/litmasdiversi/';

		$this->load->library('upload', $config);

		$data = $this->db->get_where('litmas_diversi', ['id' => $id]);
		foreach($data->result_array() AS $ld) {
			$file = $ld['file'];
		}

		if ($this->upload->do_upload('file')) {
			$surat_lama = $file;
			if ($surat_lama) {
				unlink(FCPATH . 'assets/upload/litmasdiversi/' . $surat_lama);
			}

			$file_litmas_diversi = $this->upload->data('file_name');
			$this->db->set('file', $file_litmas_diversi);

		} else {
			echo $this->upload->display_errors();
		}

		$pengirim = $this->input->post('pengirim');
		$no_surat_masuk = $this->input->post('no_surat');
		$tgl_surat_masuk = $this->input->post('tgl_surat');
		$ringkasan = $this->input->post('ringkasan');

		$this->db->set('pengirim', $pengirim);
		$this->db->set('no_surat', $no_surat_masuk);
		$this->db->set('tgl_surat', $tgl_surat_masuk);
		$this->db->set('ringkasan', $ringkasan);
		$this->db->where('id', $id);
		$this->db->update('litmas_diversi');
	}

	public function deletelitmasdiversi($id){
		$this->db->set('hapus', '1');
		$this->db->where('id', $id);
		$this->db->update('litmas_diversi');
	}

	public function searchlitmasdiversi($kategori, $keyword)
	{

		$this->db->SELECT('*');
		$this->db->FROM('litmas_diversi');
		$this->db->WHERE('hapus','0');

		if ($kategori == 'pengirim') {
			$this->db->LIKE('pengirim', $keyword);
		}
		else{
			$this->db->LIKE('no_surat', $keyword);
		}
		$data = $this->db->get();
		return $data->result_array();
	}

	public function pagtrash($limit, $start)
	{
		$this->db->order_by('id', 'DESC');
		$data = $this->db->get_where('litmas_diversi', ['hapus' => '1'], $limit, $start);
		return $data->result_array();
	}

	public function restore($id){
		$this->db->set('hapus', '0');
		$this->db->where('id', $id);
		$this->db->update('litmas_diversi');
	}

	public function deletepermanent($id){
		$this->db->where('id', $id);
		$this->db->delete('litmas_diversi');
	}

	public function viewmail($id){
		$data['litmas_diversi'] = $this->diversi->getdetaillitmasdiversi($id);

		$file = $data['litmas_diversi']['file'];

		$filename = "./assets/upload/litmasdiversi/".$file;
		header("Content-type: application/pdf");
		header("Content-Length: " . filesize($filename));
		readfile($filename);
	}

	public function viewlitmasdiversi($id){
		$data['litmas_diversi'] = $this->diversi->getdetaillitmasdiversi($id);

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = $data['litmas_diversi']['id'];
		$this->pdf->load_view('kelola_berkas/viewlitmasdiversi', $data);
	}












	public function getallsuratmasuk(){
		$query = "SELECT * FROM surat_masuk";
		return $this->db->query($query)->result_array();
	}

	//untuk pesan topbar
	public function getsuratmasukbelumdisposisi(){
		$query = "SELECT * FROM surat_masuk WHERE hapus = '0' AND disposisi = '0' ";
		return $this->db->query($query)->result_array();
	}

	//smpe sini

	public function gettrash(){
		$query = "SELECT * FROM surat_masuk WHERE hapus = '1' ORDER BY id_surat_masuk DESC";
		return $this->db->query($query)->result_array();
	}

	public function getsubmenu(){
		$query = "SELECT user_sub_menu.*, user_menu.menu
				FROM user_sub_menu JOIN user_menu
				ON user_sub_menu.menu_id = user_menu.id
				";
		return $this->db->query($query)->result_array();
	}

	public function getdetailsubmenu($id){
		$query = "SELECT user_sub_menu.*, user_menu.menu
				FROM user_sub_menu JOIN user_menu
				ON user_sub_menu.menu_id = user_menu.id
				WHERE user_sub_menu.id = $id
				";
		return $this->db->query($query)->row_array();
	}

	public function searchtrash($kategori, $keyword)
	{

		$this->db->SELECT('*');
		$this->db->FROM('surat_masuk');
		$this->db->WHERE('hapus','1');

		if ($kategori == 'pengirim') {
			$this->db->LIKE('pengirim', $keyword);
		}
		else{
			$this->db->LIKE('no_surat_masuk', $keyword);
		}
		$data = $this->db->get();
		return $data->result_array();
	}

	public function disposisimail($id){
		$data['surat_masuk'] = $this->surat_masuk->getdetailsuratmasuk($id);

		$pengirim = $data['surat_masuk']['pengirim'];
		$no_surat_masuk = $data['surat_masuk']['no_surat_masuk'];
		$tgl_surat_masuk = $data['surat_masuk']['tgl_surat_masuk'];
		$ringkasan = $data['surat_masuk']['ringkasan'];

		$this->db->insert('surat_disposisi', [
			'pengirim' => $pengirim,
			'no_surat_masuk' => $no_surat_masuk,
			'tgl_surat_masuk' => $tgl_surat_masuk,
			'ringkasan' => $ringkasan,
			'tujuan' => NULL

		]);

		$this->db->set('disposisi', '1');
		$this->db->where('id_surat_masuk', $id);
		$this->db->update('surat_masuk');
	}

}
