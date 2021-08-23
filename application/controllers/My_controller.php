<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }
    
    public function page_not_found(){
        $this->load->view('includes/page');
    }

    public function login(){
            $data['title']="login";
            $this->load->view('includes/login',$data);
        }
       
        public function check_login(){
            $login=$this->My_model->check_log();
            
            if($login==1){
                echo '<script>window.location="'.base_url()."Dashboard".'"</script>';
                $this->session->set_flashdata('login',"login successfull");
            }elseif ($login==0) {
                echo '<script>window.location="'.base_url()."user_dashboard".'"</script>';
                $this->session->set_flashdata('login',"login successfull");
        }else {
            echo '<script>window.location="'.base_url().'log'.'"</script>';
            $this->session->set_flashdata('logout',"user not found");
           }
        }
        
        public function logout(){
               $this->session->sess_destroy();
               echo '<script>window.location="'. base_url()."log".'"</script>';
          
          }

        public function index()
	{
		$data['title']="Admin Dashboard";
                $this->load->view('includes/header',$data);
                $this->load->view('includes/index');
                $this->load->view('includes/footer');
	}
        
        
        public function branch(){
            $data['title']="Branches";
            $data['get_branch']=$this->My_model->getbranch();
            $this->load->view('includes/header',$data);
            $this->load->view('branch');
            $this->load->view('includes/footer');
        }
        
        public function branchadd(){
            $this->My_model->addbranch();
            $this->session->set_flashdata('success',"Details Added Successfully");
        }
        
        public function delete_branch(){
            $a=$this->uri->segment(3);
            $this->My_model->deletebranch($a);
            $this->session->set_flashdata('danger',"Details Removed Successfully");
        }
        
        public function edit_branch(){
            $data['title']="Branches";
            $a=$this->uri->segment(3);
            $data['get_branchdetails']=$this->My_model->getbranches($a);
            $this->load->view('includes/header',$data);
            $this->load->view('edit_branch');
            $this->load->view('includes/footer');
        }
        
        public function update_branch(){
            $a=$this->input->post('id');
            $this->My_model->update_branch($a);
            $this->session->set_flashdata('success',"Details Updated Successfully");
        }
        
        public function users(){
            $data['title']="Users";
            $data['get_branch']=$this->My_model->get_branch();
            $data['get_branch_id']=$this->My_model->get_branch_1();
            $data['get_user']=$this->My_model->user_get();
            $this->load->view('includes/header',$data);
            $this->load->view('users');
            $this->load->view('includes/footer');
        }
        
        public function useradd(){
            $this->My_model->adduser();
            $this->session->set_flashdata('success',"Details Added Successfully");
        }
        
        public function delete_users(){
            $a=$this->uri->segment(3);
            $this->My_model->deleteuser($a);
            $this->session->set_flashdata('danger',"Details Removed Successfully");
        }
        
        public function edit_users(){
            $data['title']="Users";
            $a=$this->uri->segment(3);
            $data['get_userdetails']=$this->My_model->getusers($a);
             $data['get_branch']=$this->My_model->get_branch();
            $data['get_branch_id']=$this->My_model->get_branch_1();
            $this->load->view('includes/header',$data);
            $this->load->view('edit_user');
            $this->load->view('includes/footer');
        }
        
        public function user_update(){
            $a=$this->input->post('id');
            $this->My_model->update_user($a);
            $this->session->set_flashdata('success',"Details Updated Successfully");
        }
        
        
        
        public function years(){
            $this->My_model->addyears();
            $this->session->set_flashdata('success',"Details Added Successfully");
            
        }
        
        public function years_show(){
            $data['title']="Years";
            $data['get_year']=$this->My_model->year_get();
            $this->load->view('includes/header',$data);
            $this->load->view('show_years');
            $this->load->view('includes/footer');
        }
        
       public function delete_years(){
           $a=$this->uri->segment(3);
           $this->My_model->deleteyears($a);
           $this->session->set_flashdata('danger',"Details removed Successfully");
       }
       
       public function edit_year(){
            $data['title']="Years";
            $a=$this->uri->segment(3);
            $data['get_yeardetails']=$this->My_model->getyear($a);
            $this->load->view('includes/header',$data);
            $this->load->view('edit_year');
            $this->load->view('includes/footer'); 
       }
       
       public function update_year(){
            $a=$this->input->post('id');
            $this->My_model->year_update($a);
            $this->session->set_flashdata('success',"Details Updated Successfully");
       }
       
       public function students(){
            $data['title']="Students";
            $data['get_stud']=$this->My_model->get_studs();
            $data['get_branch']=$this->My_model->get_branch();
            $this->load->view('includes/header',$data);
            $this->load->view('students');
            $this->load->view('includes/footer');
       }
       
       public function add_students(){
           $this->My_model->addstudents();
            $this->session->set_flashdata('success',"Details Added Successfully");
       }
       public function delete_studs(){
           $a=$this->uri->segment(3);
           $this->My_model->delete_stud($a);
           $this->session->set_flashdata('danger',"Details removed Successfully");  
       }
       
       public function edit_stud(){
            $data['title']="Students";
            $a=$this->uri->segment(3);
            $data['get_stud_det']=$this->My_model->getstud($a);
            $data['get_branch']=$this->My_model->get_branch();
            $this->load->view('includes/header',$data);
            $this->load->view('edit_students');
            $this->load->view('includes/footer'); 
       }
       
       public function up_stud(){
            $a=$this->input->post('id');
            $this->My_model->stud_update($a);
            $this->session->set_flashdata('success',"Details Updated Successfully");
       }
       
       public function fee_particular(){
            $data['title']="Fee-Particulars";
            $data['get_particular']=$this->My_model->get_part();
            $this->load->view('includes/header',$data);
            $this->load->view('particular');
            $this->load->view('includes/footer');
       }
       
       public function add_particular(){
            $this->My_model->particular_add();
            $this->session->set_flashdata('success',"Details Added Successfully");
       }
       
       public function delete_particular(){
           $a=$this->uri->segment(3);
           $this->My_model->delete_parti($a);
           $this->session->set_flashdata('danger',"Details removed Successfully");
       }
       
       public function edit_particular(){
            $data['title']="Fee-Particulars";
            $a=$this->uri->segment(3);
            $data['get_part_det']=$this->My_model->getpart($a);
            $this->load->view('includes/header',$data);
            $this->load->view('edit_particulars');
            $this->load->view('includes/footer');
       }
       
       public function update_particular(){
            $a=$this->input->post('id');
            $this->My_model->parti_update($a);
            $this->session->set_flashdata('success',"Details Updated Successfully");
       }
       
       public function fees(){
            $data['title']="Fees";
            $data['id']=$this->uri->segment(2);
            $data['payment_his']=$this->My_model->get_payment($data);
            $data['get_particular']=$this->My_model->get_part();
            $this->load->view('includes/header',$data);
            $this->load->view('fees');
            $this->load->view('includes/footer');
       }
       
       public function fee_add(){
           $this->My_model->fees_add();
            $this->session->set_flashdata('success',"Details Added Successfully");
       }
       
       public function delete_payment(){
           $a=$this->uri->segment(3);
           $this->My_model->delete_pay($a);
           $this->session->set_flashdata('danger',"Details removed Successfully");
       }
       
       public function edit_payment(){
           $data['title']="Fees";
            $a=$this->uri->segment(3);
            $data['get_fee_det']=$this->My_model->getfee($a);
            $this->load->view('includes/header',$data);
            $this->load->view('edit_fee');
            $this->load->view('includes/footer');
       }
       
       public function fee_update(){
            $a=$this->input->post('id');
            $this->My_model->fees_update($a);
            $this->session->set_flashdata('success',"Details Updated Successfully");
       }
}
