<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index(){
		$this->load->view('login');
	}
    public function login(){
        $password = md5($this->input->post('password'));
        $username = $this->input->post('username');
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $cek = $this->db->get()->row_array();
        
        if($cek==NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger  alert dismissible fade show" role="alert"> 
                <i class= "fa fa-exclamation-circle me-2"></i>
                Username Tidak ada.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');  
        }else if($cek['password'] == $password){
            $data = array(
                'username' => $cek['username'],
                'nama'     => $cek['nama'],
                'level'    => $cek['level'],
                'id_user'  => $cek['id_user']
            );
            $this->session->set_userdata($data);
            redirect('admin/home');
        }else{
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger  alert dismissible fade show" role="alert"> 
                <i class= "fa fa-exclamation-circle me-2"></i>
                Pasword salah.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');  
        }
    }
    public function logout(){
		$this->session->sess_destroy();
        redirect('home');  
	}
}
