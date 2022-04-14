<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct()
	{
		parent::__construct();

		$this->load->model('Login_model','login');

	}
    function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/footer');
    }

    function beranda()
    {
        $this->load->view('template/header');
        $this->load->view('beranda');
        $this->load->view('template/footer');
    }

    
    function dsm()
    {
        $data['data_surat_masuk'] = $this->login->data_surat_masuk();

        $this->load->view('template/header');
        $this->load->view('data_surat_masuk', $data);
        $this->load->view('template/footer');
    }
    function tambah_surat_masuk()
    {
        $this->load->view('template/header');
        $this->load->view('tambah_surat_masuk');
        $this->load->view('template/footer');    
    }
    function proses_tambah_surat()
    {
        $this->login->proses_tambah_surat();
        redirect('Admin/dsm');
    }
    function hapus_surat($nik)
    {
        $this->login->proses_hapus_surat($nik);
        redirect('Admin/dsm');
    }
    function edit_surat($id)
    {
        $data['edit_surat_masuk'] = $this->login->edit_surat_masuk($id);
        $this->load->view('template/header');
        $this->load->view('edit_surat_masuk', $data);
        $this->load->view('template/footer');    
    }
    function proses_edit_surat_masuk()
    {
        $this->login->simpan_edit_surat_masuk();
        redirect('Admin/dsm');
    }
    function dsk()
    {
        $data['data_surat_keluar'] = $this->login->data_surat_keluar();
        $this->load->view('template/header');
        $this->load->view('data_surat_keluar', $data);
        $this->load->view('template/footer');
    }
    function tambah_surat_keluar()
    {
        $this->load->view('template/header');
        $this->load->view('tambah_surat_keluar');
        $this->load->view('template/footer');    
    }
    function proses_tambah_data_surat()
    {
        $this->login->proses_tambah_data_surat();
        redirect('Admin/dsk');
    }
    function hapus_data_surat($nik)
    {
        $this->login->proses_hapus_data_surat($nik);
        redirect('Admin/dsk');
    }
    function edit_surat_data_keluar($id)
    {
        $data['edit_surat_keluar'] = $this->login->edit_surat_data_keluar($id);
        $this->load->view('template/header');
        $this->load->view('edit_surat_keluar', $data);
        $this->load->view('template/footer');    
    }
    function proses_edit_surat_keluar()
    {
        $this->login->simpan_edit_surat_keluar();
        redirect('Admin/dsk');
    }
}