<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->model('mProduk');
        #tampilkan data
        $data['isi'] = $this->mProduk->produk();
        $this->load->view('vProduk', $data);
    }
    function tambahProduk()
    {
        $this->load->view('vTambahProduk');
    }
    function saveTambah()
    {

        $nama_produk = $this->input->post('nama_produk');
        $keterangan = $this->input->post('keterangan');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');

        $data = array(
            'nama_produk' => $nama_produk,
            'keterangan' => $keterangan,
            'harga' => $harga,
            'jumlah' => $jumlah,
        );
        $this->form_validation->set_rules('nama_produk', 'nama_produk', 'required|is_unique[produk.nama_produk]');
        //if ($this->mProduk->checkNamaProdukExist($data['nama_produk'])) {
        if ($this->form_validation->run() != true) {
            $this->load->view('vTambahProduk');
        } else {
            $this->mProduk->input_data($data, 'produk');
            redirect('Produk');
        }
    }
    function delete()
    {
        $nama_produk = $_GET['nm_produk'];

        $where = array('nama_produk' => $nama_produk);

        $this->mProduk->delete($where, 'produk');
        redirect('Produk');
    }
    function updateProduk()
    {
        $nama_produk = $_GET['nm_produk'];

        $where = array('nama_produk' => $nama_produk);

        $data['produk'] = $this->mProduk->updateProduk($where, 'produk')->result();
        $this->load->view('vUpdateProduk', $data);
    }
    function saveUpdate()
    {
        $nama_produk = $this->input->post('nama_produk');
        $keterangan = $this->input->post('keterangan');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');

        $data = array(
            'nama_produk' => $nama_produk,
            'keterangan' => $keterangan,
            'harga' => $harga,
            'jumlah' => $jumlah,
        );

        $where = array(
            'nama_produk' => $nama_produk
        );

        $this->mProduk->saveUpdate($where, $data, 'produk');
        redirect('Produk');
    }
}
