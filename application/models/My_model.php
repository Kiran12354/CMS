<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class My_model extends CI_Model{
    
   public function check_log(){
        $get_user=$this->db->get_where('users',array('user_id'=>$this->input->post('user_id'),'password'=>$this->input->post('password')))->row();
        if(!empty($get_user)){
            
        if($get_user->special==1){
            $set_session=array(
                'branch'=>$get_user->branch,
                'branch_id'=>$get_user->branch_id,
                'user_id'=>$get_user->user_id,
                'name'=>$get_user->name,
                'special'=>$get_user->special,
                'admin'=>true,
            );
            $this->session->set_userdata($set_session);
            return 1;
        }elseif($get_user->special==0) {
            $set_session=array(
                'branch'=>$get_user->branch,
                'branch_id'=>$get_user->branch_id,
                'user_id'=>$get_user->user_id,
                'name'=>$get_user->name,
                'special'=>$get_user->special,
                'user'=>true,
            );
            $this->session->set_userdata($set_session);
            return 0;
        }
   }else{
       echo '<script>window.location="'.base_url().'log'.'"</script>';
       $this->session->set_flashdata('logout',"user not found");
   }
    }
    
    public function addbranch(){
        $var=array(
                'branch_name'=>$this->input->post('bname'),
                'branch_id'=>$this->input->post('bid'),
                );
            $this->db->insert('branch',$var);
            echo '<script>window.location="'.base_url().'Branches'.'"</script>';
    }
    
    public function getbranch(){
        $this->db->select();
        $a=$this->db->get('branch');
        return $a->result();
    }
    
    public function deletebranch($a){
        $this->db->where('id',$a);
        $this->db->delete('branch');
        echo '<script>window.location="'.base_url().'Branches'.'"</script>';
    }
    
    public function getbranches($a){
        $b=$this->db->get_where('branch',array('id'=>$a))->row();
        return $b;
    }
    
    public function update_branch($a){
        $var=array(
                'branch_name'=>$this->input->post('bname'),
                'branch_id'=>$this->input->post('bid'),
                );
            $this->db->where('id',$a);
            $this->db->update('branch',$var);
            echo '<script>window.location="'.base_url().'Branches'.'"</script>';
    }
    
    public function adduser(){
        $var=array(
            'name'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
            'city'=>$this->input->post('city'),
            'phone'=>$this->input->post('number'),
            'branch'=>$this->input->post('branch'),
            'branch_id'=>$this->input->post('branch_id'),
            'user_id'=>$this->input->post('user_id'),
            'password'=>$this->input->post('user_password'),
            'address'=>$this->input->post('address'),
            );
        $photo=$this->submenu_img('image');

         if(!empty($photo)){
            $var['user_photo']=$photo;
        }
      $this->db->insert('users',$var);
      echo '<script>window.location="'.base_url().'User'.'"</script>';
    }
    
    public function user_get(){
        $this->db->select();
        $a=$this->db->get('users');
        return $a->result();   
    }
    public function deleteuser($a){
        $getdata=$this->db->get_where('users',array('id'=>$a))->row();
        $this->delete_temp_image($getdata->user_photo);
        $this->db->where('id',$a);
        $this->db->delete('users');
        echo '<script>window.location="'.base_url().'User'.'"</script>';
    }
    
    public function getusers($a){
        $b=$this->db->get_where('users',array('id'=>$a))->row();
        return $b;
    }
    
    public function update_user($a){
        $var=array(
            'name'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
            'city'=>$this->input->post('city'),
            'phone'=>$this->input->post('number'),
            'user_id'=>$this->input->post('user_id'),
            'password'=>$this->input->post('user_password'),
            'address'=>$this->input->post('address'),
        );
        $photo=$this->submenu_img('image');
        if(!empty($photo)){
            $var['user_photo']=$photo;
        }
        if(!empty($var['user_photo'])){
            $getimg=$this->db->get_where('users',array('id'=>$a))->row();
            $this->delete_temp_image($getimg->user_photo);
            $this->db->where('id',$a);
            $this->db->update('users',$var);
            echo '<script>window.location="'.base_url()."User".'"</script>';
            } else{
            $this->db->where('id',$a);
            $this->db->update('users',$var);
            echo '<script>window.location="'.base_url()."User".'"</script>';
        }
    }

    public function submenu_img($file_name){
        
        $config['upload_path'] = './uploads/Users/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $config['file_name'] = $file_name;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_name)) {
            $data = array('upload_data' => $this->upload->data());
            if (isset($data['upload_data']['full_path'])) {
                return 'uploads/Users/' . $data['upload_data']['file_name'];
            }
            return null;
        } else {
            return null;
        }
        
    }
    public function delete_temp_image($path)
    {
        $full_path = FCPATH . $path;
        if (file_exists($full_path)) {
            @unlink($full_path);
        }
    }
    
    public function addyears(){
        $var=array(
            'year'=>$this->input->post('year'),
            'start_date'=>$this->input->post('s_date'),
            'end_date'=>$this->input->post('e_date'),
            'status'=>$this->input->post('status')
        );
        
        $this->db->insert('years',$var);
        echo '<script>window.location="'.base_url().'show_year'.'"</script>';
    }
    
    public function year_get(){
        $this->db->select();
        $a=$this->db->get('years');
        return $a->result();
        
    }
    
    public function deleteyears($a){
        $this->db->where('id',$a);
        $this->db->delete('years');
        echo '<script>window.location="'.base_url().'show_year'.'"</script>';
    }
    
    public function getyear($a){
        $b=$this->db->get_where('years',array('id'=>$a))->row();
        return $b;
    }
    public function year_update($a){
       $var=array(
            'year'=>$this->input->post('year'),
            'start_date'=>$this->input->post('s_date'),
            'end_date'=>$this->input->post('e_date'),
            'status'=>$this->input->post('status')
        );
       $this->db->where('id',$a);
        $this->db->update('years',$var);
        echo '<script>window.location="'.base_url().'show_year'.'"</script>';
    }
    
   public function get_branch(){
        $a='';
        $x=$this->db->select()->from('branch')->get();
        foreach ($x->result_array() as $row){
            $a.='<option>'.$row['branch_name'].'</option>';
        }
        return $a;
    }
    
    public function get_branch_1(){
      $a='';
        $x=$this->db->select()->from('branch')->get();
        foreach ($x->result_array() as $row){
            $a.='<option>'.$row['branch_id'].'</option>';
        }
        return $a;  
    }
   
    public function addstudents(){
            $var=array(
            'academic_year'=>$this->input->post('year'),
            'reg_no'=>$this->input->post('reg'),
            'admision_date'=>$this->input->post('date'),
            'branch'=>$this->input->post('branch'),
            'class'=>$this->input->post('class'),
            'section'=>$this->input->post('sec'),
            's_name'=>$this->input->post('s_name'),
            'gender'=>$this->input->post('gender'),
            'dob'=>$this->input->post('dob'),
            'email'=>$this->input->post('email'),
            'g_name'=>$this->input->post('g_name'),
            'relation'=>$this->input->post('relation'),
            'f_name'=>$this->input->post('f_name'),
            'm_name'=>$this->input->post('m_name'),
            'num1'=>$this->input->post('num1'),
            'num2'=>$this->input->post('num2'),
            'p_add'=>$this->input->post('p_add'),
            't_add'=>$this->input->post('t_add')
        );
        $photo=$this->submenu_img('file');
        if(!empty($photo)){
            $var['photo']=$photo;
        }
         $this->db->insert('student',$var);
         if($this->session->userdata('special')==1){
            echo '<script>window.location="'.base_url()."student".'"</script>';
            }else{
            echo '<script>window.location="'.base_url()."user_students".'"</script>';
            }
    }
    
        public function get_studs(){
              $this->db->select();
              $a=$this->db->get('student');
              return $a->result();
          }
          
          public function delete_stud($a){
              $get_img=$this->db->get_where('student',array('id'=>$a))->row();
              $this->delete_temp_image($get_img->photo);
              $this->db->where('id',$a);
              $this->db->delete('student');
              if($this->session->userdata('special')==1){
            echo '<script>window.location="'.base_url()."student".'"</script>';
            }else{
            echo '<script>window.location="'.base_url()."user_students".'"</script>';
            }
          }
          
          public function getstud($a){
              $b=$this->db->get_where('student',array('id'=>$a))->row();
              return $b;
          }
          
          public function stud_update($a){
              $var=array(
            'academic_year'=>$this->input->post('year'),
            'reg_no'=>$this->input->post('reg'),
            'admision_date'=>$this->input->post('date'),
            'branch'=>$this->input->post('branch'),
            'class'=>$this->input->post('class'),
            'section'=>$this->input->post('sec'),
            's_name'=>$this->input->post('s_name'),
            'gender'=>$this->input->post('gender'),
            'dob'=>$this->input->post('dob'),
            'email'=>$this->input->post('email'),
            'g_name'=>$this->input->post('g_name'),
            'relation'=>$this->input->post('relation'),
            'f_name'=>$this->input->post('f_name'),
            'm_name'=>$this->input->post('m_name'),
            'num1'=>$this->input->post('num1'),
            'num2'=>$this->input->post('num2'),
            'p_add'=>$this->input->post('p_add'),
            't_add'=>$this->input->post('t_add'),
            'status'=>$this->input->post('status')      
        );
        $photo=$this->submenu_img('file');
        if(!empty($photo)){
            $var['photo']=$photo;
        }
        
        if(!empty($var['photo'])){
            $getimg=$this->db->get_where('student',array('id'=>$a))->row();
            $this->delete_temp_image($getimg->photo);
            $this->db->where('id',$a);
            $this->db->update('student',$var);
            if($this->session->userdata('special')==1){
            echo '<script>window.location="'.base_url()."student".'"</script>';
            }else{
            echo '<script>window.location="'.base_url()."user_students".'"</script>';
            }
            } else{
            $this->db->where('id',$a);
            $this->db->update('student',$var);
            if($this->session->userdata('special')==1){
            echo '<script>window.location="'.base_url()."student".'"</script>';
            }else{
            echo '<script>window.location="'.base_url()."user_students".'"</script>';
            }
            }
          }
          
          public function particular_add(){
           extract($_POST);
           for($i=0; $i<count($particular); $i++){
            $var=array(
              'particular'=>$particular[$i],
            );
            
            $this->db->insert('particulars',$var);
            if($this->session->userdata('special')==1){
            echo '<script>window.location="'.base_url()."particulars".'"</script>';
            }else{
            echo '<script>window.location="'.base_url()."fee_particulars".'"</script>';
            }
        }
       }
       
       public function get_part(){
           $this->db->select();
           $a=$this->db->get('particulars');
           return $a->result();
       }
       
       public function delete_parti($a){
           $this->db->where('id',$a);
           $this->db->delete('particulars');
            if($this->session->userdata('special')==1){
            echo '<script>window.location="'.base_url()."particulars".'"</script>';
            }else{
            echo '<script>window.location="'.base_url()."fee_particulars".'"</script>';
            }
       }
       
       public function getpart($a){
            $b=$this->db->get_where('particulars',array('id'=>$a))->row();
              return $b;
       }
       
       public function parti_update($a){
           $var=array(
                'particular'=>$this->input->post('particular'),
                );
           $this->db->where('id',$a);
           $this->db->update('particulars',$var);
           if($this->session->userdata('special')==1){
            echo '<script>window.location="'.base_url()."particulars".'"</script>';
            }else{
            echo '<script>window.location="'.base_url()."fee_particulars".'"</script>';
            }
       }
       
       public function get_part_list(){
           $a='';
        $x=$this->db->select()->from('particulars')->get();
        foreach ($x->result_array() as $row){
            $a.='<option>'.$row['particular'].'</option>';
        }
        return $a;
       }
       
       public function regSerNumber()
                {
                    $result = $this->db->select("max(bill_no) as bill_id")->get('payment')->row_array();
                    $k = $result["bill_id"];
                    if (!empty($k)) {
                        $maxNum = str_pad($k + 1, 5, '0', STR_PAD_LEFT);
                    } else {
                        $maxNum = '00001';
                    }
                    return  $maxNum;
                }
       
                public function bill_ref_no(){
                    $result = $this->db->select("max(bill_no) as bill_ref")->get('payment')->row_array();
                    $k = $result["bill_ref"];
                    return $k;
                }

             public function fees_add(){
           extract($_POST);
           $var2=array(
                'student_id'=>$s_id,
                'p_date'=>$date,   
               'p_method'=>$method,
               'description'=>$des,
                'bill_no' => $this->regSerNumber(),
               );
           
           $this->db->insert('payment',$var2);
           for($i=0; $i<count($particular); $i++){
            $var=array(
                'bill_no' => $this->bill_ref_no(),
               'particular'=>$particular[$i],
               'fees'=>$fee[$i],
              );
            
           $this->db->insert('bill_details',$var);
           if($this->session->userdata('special')==1){
            echo '<script>window.location="'.base_url()."fees/$s_id".'"</script>';
            }else{
            echo '<script>window.location="'.base_url()."s_fees/$s_id".'"</script>';
            }
       }
       }
       
       public function get_payment($data){
           $a=$this->db->get_where('payment',array('student_id'=>$data['id']));
           return $a->result();
       }
       
       public function delete_pay($a){
           $get=$this->db->get_where('payment',array('bill_no'=>$a))->row()->student_id;
           $this->db->where('bill_no',$a);
           $this->db->delete('payment');
           $this->db->where('bill_no',$a);
           $this->db->delete('bill_details');
           if($this->session->userdata('special')==1){
            echo '<script>window.location="'.base_url()."fees/$get".'"</script>';
            }else{
            echo '<script>window.location="'.base_url()."s_fees/$get".'"</script>';
            }
       }
       
       public function getfee($a){
              $b=$this->db->get_where('bill_details',array('bill_no'=>$a))->result();
              return $b;
       }
       
       public function fees_update($a){
           extract($_POST);
           $get=$this->db->get_where('payment',array('bill_no'=>$b_id))->row()->student_id;
           for($i=0; $i<count($particular); $i++){
            $var=array(
                'particular'=>$particular[$i],
               'fees'=>$fee[$i],
              );
            $this->db->where('id',$a++);
           $this->db->update('bill_details',$var);
           if($this->session->userdata('special')==1){
            echo '<script>window.location="'.base_url()."fees/$get".'"</script>';
            }else{
            echo '<script>window.location="'.base_url()."s_fees/$get".'"</script>';
            }
            
            }
       }
}
