<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
	}

	public function register(){
		$this->load->database();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->form_validation->set_message('required', 'กรุณากรอก{field}');
		$this->form_validation->set_rules('fname','ชื่อ','required');
		$this->form_validation->set_rules('lname','นามสกุล','required');
		$this->form_validation->set_rules('nickname','ชื่อเล่น','required');
		$this->form_validation->set_rules('gender','เพศ','required');
		$this->form_validation->set_rules('age','อายุ','required');
		$this->form_validation->set_rules('dob','วันเกิด','required');
		$this->form_validation->set_rules('religion','ศาสนา','required');
		$this->form_validation->set_rules('nationality','สัญชาติ','required');
		$this->form_validation->set_rules('weight','น้ำหนัก','required');
		$this->form_validation->set_rules('height','ส่วนสูง','required');
		$this->form_validation->set_rules('tel','หมายเลขโทรศัพท์','required');
		$this->form_validation->set_rules('mom_tel','หมายเลขโทรศัพท์ผู้ปกครอง 1','required');
		// $this->form_validation->set_rules('dad_tel','หมายเลขโทรศัพท์ผู้ปกครอง 2','required');
		// $this->form_validation->set_rules('disease','โรคประจำตัว','required');
		// $this->form_validation->set_rules('allergy','','required');
		$this->form_validation->set_rules('address','ที่อยู่ปัจจุบัน','required');
		$this->form_validation->set_rules('email','อีเมลล์','required');
		$this->form_validation->set_rules('facebook','Facebook','required');
		// $this->form_validation->set_rules('line','Line','required');
		$this->form_validation->set_rules('class','ระดับชั้น','required');
		$this->form_validation->set_rules('grade','เกรดเฉลี่ย','required');
		$this->form_validation->set_rules('school','โรงเรียน','required');
		$this->form_validation->set_rules('plan','แผนการเรียน','required');
		// $this->form_validation->set_rules('plang','','required');
		$this->form_validation->set_rules('university','คณะหรือมหาวิทยาลัยที่ใฝ่ฝัน','required');
		// $this->form_validation->set_rules('camp','','required');
		// $this->form_validation->set_rules('award','','required');
		$this->form_validation->set_rules('q1','คำถามข้อ 1.)','required');
		$this->form_validation->set_rules('q2','คำถามข้อ 2.)','required');
		$this->form_validation->set_rules('q3','คำถามข้อ 3.)','required');
		$this->form_validation->set_rules('q4','คำถามข้อ 4.)','required');
		$this->form_validation->set_rules('q5','คำถามข้อ 5.)','required');
		$this->form_validation->set_rules('q6','คำถามข้อ 6.)','required');
		$this->form_validation->set_rules('q7','คำถามข้อ 7.)','required');
		// $this->form_validation->set_rules('size','ขนาดเสื้อ','required');
		$this->form_validation->set_rules('student_photo','รูปนักเรียน','file');
		$this->form_validation->set_rules('result_photo','ป.พ. 1','file');
		$this->form_validation->set_rules('school_photo','ใบรับรองความเป็นนักเรียน','file');
		if($this->form_validation->run()){

			$config['upload_path'] = './upload/';
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
	        $config['max_size'] = 10240000;
	        $config['overwrite'] = TRUE;

	        $photos=array('student_photo','result_photo','school_photo');
	        for($i=0;$i<3;$i++){
	        	$name = $_FILES[$photos[$i]]['name'];
				$ext = end((explode(".", $name)));
		        $config['file_name'] = $this->session->ssid.'_'.($i).'.'.$ext;
		 		
		        $this->load->library('upload', $config);
		 		$this->upload->initialize($config);
		        if (!$this->upload->do_upload($photos[$i])){
		           echo 'กรุณาเลือกรูปภาพให้ครบถ้วน (รูปถ่ายชุดนักเรียน, ป.พ.1, ใบรับรองความเป็นนักเรียน) ไฟล์ jpg, png, jpeg, pdf และขนาดภาพไม่เกิน 10 MB';
		        	exit();
		        }
		    }

			$this->db->insert('members',array(
				'fname'=>$this->input->post('fname',TRUE),
				'lname'=>$this->input->post('lname',TRUE),
				'nickname'=>$this->input->post('nickname',TRUE),
				'gender'=>$this->input->post('gender',TRUE),
				'age'=>$this->input->post('age',TRUE),
				'dob'=>$this->input->post('dob',TRUE),
				'religion'=>$this->input->post('religion',TRUE),
				'nationality'=>$this->input->post('nationality',TRUE),
				'weight'=>$this->input->post('weight',TRUE),
				'height'=>$this->input->post('height',TRUE),
				'tel'=>$this->input->post('tel',TRUE),
				'mom_tel'=>$this->input->post('mom_tel',TRUE),
				'dad_tel'=>$this->input->post('dad_tel',TRUE),
				'disease'=>$this->input->post('disease',TRUE),
				'allergy'=>$this->input->post('allergy',TRUE),
				'address'=>$this->input->post('address',TRUE),
				'email'=>$this->input->post('email',TRUE),
				'facebook'=>$this->input->post('facebook',TRUE),
				'line'=>$this->input->post('line',TRUE),
				'class'=>$this->input->post('class',TRUE),
				'grade'=>$this->input->post('grade',TRUE),
				'school'=>$this->input->post('school',TRUE),
				'plan'=>$this->input->post('plan',TRUE),
				'plang'=>$this->input->post('plang',TRUE),
				'university'=>$this->input->post('university',TRUE),
				'camp'=>$this->input->post('camp',TRUE),
				'award'=>$this->input->post('award',TRUE),
				'q1'=>$this->input->post('q1',TRUE),
				'q2'=>$this->input->post('q2',TRUE),
				'q3'=>$this->input->post('q3',TRUE),
				'q4'=>$this->input->post('q4',TRUE),
				'q5'=>$this->input->post('q5',TRUE),
				'q6'=>$this->input->post('q6',TRUE),
				'q7'=>$this->input->post('q7',TRUE),
				// 'size'=>$this->input->post('size',TRUE),
				'ip'=>$this->input->ip_address(),
				'created_at'=>date("Y-m-d H:i:s"),
				'ssid'=>$this->session->ssid,
				'agent'=>$_SERVER['HTTP_USER_AGENT']
				)
			);
			$id=$this->db->insert_id();
			$this->session->set_userdata('ssid', uniqid());
			echo 'success';
		}else{
			echo  strip_tags(validation_errors());
		}
	}
}
