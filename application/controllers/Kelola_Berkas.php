<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_Berkas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Kelola_Berkas_model', 'diversi');
	}

	public function index()
	{
		//konfigurasi pagination
		$config['base_url'] = site_url('kelola_berkas/index'); //site url
		$config['total_rows'] = $this->db->count_all('litmas_diversi'); //total row
		$config['per_page'] = 5;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = '&raquo;';
		$config['prev_link']        = '&laquo;';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
		$this->pagination->initialize($config);

		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['title'] = 'Litmas Diversi';
		$data['user'] = $this->diversi->getuser();
		$data['litmas_diversi'] = $this->diversi->paglitmasdiversi($config['per_page'], $data['page'] );

		//untuk pesan topbar
//		$data['surat_diversi'] = $this->diversi->getlitmasdiversi();
//		$data['hitung_surat_diversi'] = $this->diversi->hitunglitmasdiversi();
		//sampe sini

		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('kelola_berkas/index', $data);
		$this->load->view('templates/footer');
	}

	public function addlitmasdiversi()
	{

		$data['title'] = 'Litmas Diversi';
		$data['user'] = $this->diversi->getuser();

		$this->form_validation->set_rules('nama_klien', 'Nama', 'trim|required');
		$this->form_validation->set_rules('no_surat_masuk', 'No Surat', 'trim|required');
		$this->form_validation->set_rules('tgl_surat_masuk', 'Tanggal Surat', 'trim|required');
		$this->form_validation->set_rules('perihal', 'Ringkasan', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kelola_berkas/addlitmasdiversi', $data);
			$this->load->view('templates/footer');
		} else {
			$this->diversi->addlitmasdiversi();
			$this->session->set_flashdata('message', 'data litmas diversi berhasil ditambahkan');
			redirect('kelola_berkas');
		}

	}

	public function editlitmasdiversi($id)
	{
		$data['title'] = 'Litmas Diversi';
		$data['user'] = $this->diversi->getuser();
		$data['litmas_diversi'] = $this->diversi->getdetaillitmasdiversi($id);
//		$data['surat_masuk_belum_disposisi'] = $this->diversi->getsuratmasukbelumdisposisi();
//		$data['hitung_surat_masuk_belum_disposisi'] = $this->diversi->hitungsuratmasukbelumdisposisi();

		$this->form_validation->set_rules('pengirim', 'Pengirim', 'trim|required');
		$this->form_validation->set_rules('no_surat', 'No Surat', 'trim|required');
		$this->form_validation->set_rules('tgl_surat', 'Tanggal Surat', 'trim|required');
		$this->form_validation->set_rules('ringkasan', 'Ringkasan', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kelola_berkas/editlitmasdiversi', $data);
			$this->load->view('templates/footer');
		} else {
			$this->diversi->editlitmasdiversi($id);
			$this->session->set_flashdata('message', 'data litmas diversi berhasil diedit');
			redirect('kelola_berkas');
		}

	}

	public function deletelitmasdiversi($id)
	{
		$data['title'] = 'Litmas Diversi';
		$data['user'] = $this->diversi->getuser();
		$data['litmas_diversi'] = $this->diversi->getdetaillitmasdiversi($id);

		$this->diversi->deletelitmasdiversi($id);
		$this->session->set_flashdata('message', 'data Litmas Diversi berhasil dihapus');
		redirect('kelola_berkas');
	}


	public function searchlitmasdiversi()
	{
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
		$this->form_validation->set_rules('keyword', 'keyword', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger role="alert">Terjadi kesalahan mencari</div>');
			redirect('kelola_berkas');
		} else {
			$kategori = $this->input->post('kategori');
			$keyword = htmlspecialchars($this->input->post('keyword'));
			$data['title'] = 'Litmas Diversi';
			$data['user'] = $this->diversi->getuser();
			$data['litmas_diversi']= $this->diversi->searchlitmasdiversi($kategori, $keyword);
//			$data['surat_masuk_belum_disposisi'] = $this->diversi->getsuratmasukbelumdisposisi();
//			$data['hitung_surat_masuk_belum_disposisi'] = $this->diversi->hitungsuratmasukbelumdisposisi();

			if($data){
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('kelola_berkas/index', $data);
				$this->load->view('templates/footer');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata kunci dalam kategori tersebut tidak ditemukan</div>');
				redirect('kelola_berkas');
			}
		}
	}

	public function trash()
	{
		//konfigurasi pagination
		$config['base_url'] = site_url('kelola_berkas/trash'); //site url
		$config['total_rows'] = $this->db->count_all('litmas_diversi'); //total row
		$config['per_page'] = 5;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = '&raquo;';
		$config['prev_link']        = '&laquo;';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
		$this->pagination->initialize($config);

		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['title'] = 'Trash';
		$data['user'] = $this->diversi->getuser();
		$data['trash'] = $this->diversi->pagtrash($config['per_page'], $data['page'] );
//		$data['surat_masuk_belum_disposisi'] = $this->diversi->getsuratmasukbelumdisposisi();
//		$data['hitung_surat_masuk_belum_disposisi'] = $this->diversi->hitungsuratmasukbelumdisposisi();
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('kelola_berkas/trash', $data);
		$this->load->view('templates/footer');
	}

	public function restore($id)
	{
		$data['user'] = $this->diversi->getuser();
		$data['litmas_diversi'] = $this->diversi->getdetaillitmasdiversi($id);

		$this->diversi->restore($id);
		$this->session->set_flashdata('message', 'data berhasil dikembalikan');
		redirect('kelola_berkas/trash');
	}

	public function deletepermanent($id)
	{
		$data['user'] = $this->diversi->getuser();
		$data['litmas_diversi'] = $this->diversi->getdetaillitmasdiversi($id);

		$this->diversi->deletepermanent($id);
		$this->session->set_flashdata('message', 'data berhasil dihapus permanen');
		redirect('kelola_berkas/trash');
	}

	public function viewmail($id)
	{
		$this->diversi->viewmail($id);
	}

	public function viewlitmasdiversi($id)
	{
		$this->diversi->viewlitmasdiversi($id);
	}















	public function disposisimail($id)
	{
		$this->surat_masuk->disposisimail($id);
		$this->session->set_flashdata('message', 'surat masuk berhasil didisposisi');
		redirect('surat_masuk');
	}

	public function searchtrash()
	{
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
		$this->form_validation->set_rules('keyword', 'keyword', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger role="alert">Terjadi kesalahan mencari pegawai</div>');
			redirect('surat_masuk');
		} else {
			$kategori = $this->input->post('kategori');
			$keyword = htmlspecialchars($this->input->post('keyword'));
			$data['title'] = 'Trash';
			$data['user'] = $this->surat_masuk->getuser();
			$data['trash']= $this->surat_masuk->searchtrash($kategori, $keyword);
			$data['surat_masuk_belum_disposisi'] = $this->surat_masuk->getsuratmasukbelumdisposisi();
			$data['hitung_surat_masuk_belum_disposisi'] = $this->surat_masuk->hitungsuratmasukbelumdisposisi();

			if($data){
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('surat_masuk/trash', $data);
				$this->load->view('templates/footer');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata kunci dalam kategori tersebut tidak ditemukan</div>');
				redirect('pegawai');
			}
		}
	}


}
