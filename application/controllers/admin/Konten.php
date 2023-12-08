<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Konten extends CI_Controller {
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


        $data = array(
            'judul_halaman' => 'Halaman konten',
            'kategori'      => $kategori,
            'konten'        => $konten
        );
		$this->template->load('template_admin', 'admin/konten_index',$data);
	}
    public function simpan(){
        $namafoto = date('YmHis').'.jpg';
        $config['upload_path']        = 'assets/upload/konten/';
        $config['max_size']  = 500 * 1024; //3 * 1024 * 1024; //3mb; 0=unlimited
        $config['file_name']          = $namafoto;
        $config['allowed_types']      = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger  alert dismissible fade show" role="alert"> 
                <i class= "fa fa-exclamation-circle me-2"></i>
                Ukuran foto terlalu besar, uploud ulang foto dengan ukuran kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/konten');
        }elseif( !$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors()); 
        }else{
            $data = array('upload_data' => $this->upload->data()); 
        }

        $this->db->from('konten');
        $this->db->where('judul', $this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger  alert dismissible fade show" role="alert"> 
                <i class= "fa fa-exclamation-circle me-2"></i>
                Judul konten already exists.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect('admin/konten');  
        }
        $data   = array(
            'judul'         =>  $this->input->post('judul'),
            'id_kategori'   =>  $this->input->post('id_kategori'),
            'keterangan'    =>  $this->input->post('keterangan'),
            'tanggal'       =>  date('Y-m-d'),
            'foto'          =>  $namafoto,
            'username'      =>  $this->session->userdata('username'),
            'slug'          =>  str_replace(' ','-',$this->input->post('judul'))
        );
        $this->db->insert('konten',$data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert dismissible fade show" role="alert"> 
            <i class= "fa fa-exclamation-circle me-2"></i>
            Add konten Successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/konten');
    }
    public function update(){
        $namafoto =  $this->input->post('nama_foto');
        $config['upload_path']        = 'assets/upload/konten/';
        $config['max_size']  = 500 * 1024; //3 * 1024 * 1024; //3mb; 0=unlimited
        $config['file_name']          = $namafoto;
        $config['overwrite']          = true;
        $config['allowed_types']      = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger  alert dismissible fade show" role="alert"> 
                <i class= "fa fa-exclamation-circle me-2"></i>
                Ukuran foto terlalu besar, uploud ulang foto dengan ukuran kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/konten');
        }else if( !$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors()); 
        }else{
            $data = array('upload_data' => $this->upload->data()); 
        }
        $data   = array(
            'judul'         =>  $this->input->post('judul'),
            'id_kategori'   =>  $this->input->post('id_kategori'),
            'keterangan'    =>  $this->input->post('keterangan'),
            'slug'          =>  str_replace(' ','-',$this->input->post('judul'))
        );
        $where = array(
            'foto'   =>  $namafoto
        );
        $this->db->update('konten',$data,$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert dismissible fade show" role="alert"> 
            <i class= "fa fa-exclamation-circle me-2"></i>
            Update konten Successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/konten');
    }
    public function delete_data($id){
        $filename=FCPATH.'/assets/upload/konten/'.$id;
            if(file_exists($filename)){
                unlink("./assets/upload/konten/".$id);
            }
        $where = array(
            'foto'   => $id
        );
        $this->db->delete('konten',$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert dismissible fade show" role="alert"> 
            <i class= "fa fa-exclamation-circle me-2"></i>
            successfully deleted konten
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/konten');
    }
}