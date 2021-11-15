<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class tokosepatu extends CI_Controller
{   
    public function __construct()
    {
        parent ::__construct();
        $this->load->model('model_tokosepatu');
    }
    public function index()
    {
        $this->load->view('view-tokosepatu/v_input');
    }
    public function cetak()
    {
        $data=[
            'nama' => $this->input->post('nama'),
            'telp' => $this->input->post('telp'),
            'merk' => $this->input->post('merk'),
            'uk' => $this->input->post('uk'),
            'harga' => $this->model_tokosepatu->proses($this->input->post('merk'))
            ];

            $this->load->view('view-tokosepatu/v_output', $data);
    }
}