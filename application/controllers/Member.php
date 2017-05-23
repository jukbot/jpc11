<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	private $password='cssitkmutt';
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function login(){
		$this->load->view('login');
	}

	public function post_login(){
		echo $this->input->post('password');
		if(md5($this->input->post('password'))==md5($this->password)){
			$this->session->set_userdata('login',1);
			redirect('/member/index');
		}else{
			redirect('/member/login');
		}
	}

	public function logout(){
		$this->session->unset_userdata('login');
		redirect('/member/login');
	}

	public function index($id=0){
		if(!$this->session->has_userdata('login')) { redirect('/member/login');}
		$this->load->database();
		$res['data']=$this->db->select('id,fname,lname')->from('members')->where('id >',$id)->get();
		$this->load->view('member',$res);
	}

	public function get($id=0){
		if(!$this->session->has_userdata('login')) { redirect('/member/login');}
		$this->load->database();
		$res['data']=$this->db->select('*')->from('members')->where('id =',$id)->get();
		$ssid=$res['data']->result();
		$ssid=$ssid[0]->ssid;
		$res['file']=array();
		$type=array('jpg','jpeg','gif','png','pdf');
		for($i=0;$i<3;$i++){
			for($j=0;$j<sizeof($type);$j++) {
				$name='/upload/'.$ssid.'_'.$i.'.'.$type[$j];
				if(file_exists('.'.$name)){
					$res['file'][]=$name;
					$j=9; // to break this loop
				}
			}
		}
		$this->load->view('detail',$res);
	}
}
