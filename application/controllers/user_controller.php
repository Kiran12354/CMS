<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_controller extends CI_Controller {
         public function user_index(){
           $data['title']="User Dashboard";
           $this->load->view('users/u_header',$data);
           $this->load->view('users/u_index');
           $this->load->view('users/u_footer');
          }
          public function logout(){
               $this->session->sess_destroy();
               echo '<script>window.location="'. base_url()."log".'"</script>';
          
          }
          public function students(){
            $data['title']="Students";
            $data['get_stud']=$this->My_model->get_studs();
            $data['get_branch']=$this->My_model->get_branch();
            $this->load->view('users/u_header',$data);
            $this->load->view('students');
            $this->load->view('users/u_footer');
          }
          
          public function edit_students(){
            $data['title']="Students";
            $a=$this->uri->segment(3);
            $data['get_stud_det']=$this->My_model->getstud($a);
            $data['get_branch']=$this->My_model->get_branch();
            $this->load->view('users/u_header',$data);
            $this->load->view('edit_students');
            $this->load->view('users/u_footer'); 
          }
          
          public function fee_particular(){
            $data['title']="Fee-Particulars";
            $data['get_particular']=$this->My_model->get_part();
            $this->load->view('users/u_header',$data);
            $this->load->view('particular');
            $this->load->view('users/u_footer');
          }
          
          public function edit_particular(){
            $data['title']="Fee-Particulars";
            $a=$this->uri->segment(3);
            $data['get_part_det']=$this->My_model->getpart($a);
            $this->load->view('users/u_header',$data);
            $this->load->view('edit_particulars');
            $this->load->view('users/u_footer');
          }
          
         public function s_fees(){
            $data['title']="Fees";
            $data['id']=$this->uri->segment(2);
            $data['payment_his']=$this->My_model->get_payment($data);
            $data['get_particular']=$this->My_model->get_part();
            $this->load->view('users/u_header',$data);
            $this->load->view('fees');
            $this->load->view('users/u_footer');
       }
       
       public function edit_payment(){
            $data['title']="Fees";
            $a=$this->uri->segment(3);
            $data['get_fee_det']=$this->My_model->getfee($a);
            $this->load->view('users/u_header',$data);
            $this->load->view('edit_fee');
            $this->load->view('users/u_footer');
       }
}