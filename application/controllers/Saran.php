<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Saran extends CI_Controller {
   
public function index(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();
        $data = array(
            'judul'         => 'Beranda | Radit',
            'konfig'        =>  $konfig,     
            'caraousel'     =>  $caraousel,     
            'kategori'      =>  $kategori,     
            'konten'        =>  $konten,     
        );
		$this->load->view('saran', $data);
    }

    public function simpan(){
        $nama = $this->input->post('name');
        $email = $this->input->post('email');
        $isi_saran = $this->input->post('isi_saran');
        $data = array(
            'nama' => $nama,
            'email' => $email,
            'isi_saran' => $isi_saran,
            'tanggal' => date('Y-m-d')
        );
        $this->db->insert('saran',$data);
        redirect('saran');
    }
}