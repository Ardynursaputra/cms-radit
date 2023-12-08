<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Saran extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }
	public function index(){
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori','ASC');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();

        $this->db->from('saran');
        $saran = $this->db->get()->result_array();


        $data = array(
            'judul_halaman' => 'Halaman konten',
            'kategori'      => $kategori,
            'konten'        => $konten,
            'saran'         => $saran,
        );
		$this->template->load('template_admin', 'admin/saran',$data);
	}

    public function delete_data($id){
        $this->db->where('id_saran',$id);
        $this->db->delete('saran');
        redirect('admin/saran');
    }
}
