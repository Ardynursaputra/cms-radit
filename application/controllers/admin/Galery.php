<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Galery extends CI_Controller {

public function index(){
    
    $this->db->from('galery');
    $galery = $this->db->get()->result_array();
    $data = array(
        'judul_halaman' => 'Halaman galery',
        'galery'      => $galery,
    );
		$this->template->load('template_admin', 'admin/Galery',$data);
}


public function simpan(){
        $namafoto = date('YmHis').'.jpg';
        $config['upload_path']        = 'assets/upload/galery/';
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
            redirect('admin/galery');
        }elseif( !$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors()); 
        }else{
            $data = array('upload_data' => $this->upload->data()); 
        }
        $data   = array(
            'judul'          =>  $this->input->post('judul'),
            'tanggal'       =>  date('Y-m-d'),
            'foto'          =>  $namafoto,
        );
        $this->db->insert('galery',$data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert dismissible fade show" role="alert"> 
            <i class= "fa fa-exclamation-circle me-2"></i>
            Add galery Successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/galery');
    }
    public function delete_data($id){
        $filename=FCPATH.'/assets/upload/galery/'.$id;
            if(file_exists($filename)){
                unlink("./assets/upload/galery/".$id);
            }
        $where = array(
            'foto'   => $id
        );
        $this->db->delete('galery',$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert dismissible fade show" role="alert"> 
            <i class= "fa fa-exclamation-circle me-2"></i>
            successfully deleted konten
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('admin/galery');
    }
}