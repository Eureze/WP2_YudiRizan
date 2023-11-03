<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Mata Kuliah', 'required|min_length[3]', [
            'required' => 'Kode MataKuliah Harus Diisi',
            'min_legth' => 'Kode Terlalu Pendek'
        ]);

        $this->form_validation->set_rules('nama', 'Nama Mata Kuliah', 'required|min_length[3]', [
            'required' => 'Nama MataKuliah Harus Diisi',
            'min_legth' => 'Node Terlalu Pendek'
        ]);
        
        if ($this->form_validation->run() !=true) {
            $this->load->view('view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}

