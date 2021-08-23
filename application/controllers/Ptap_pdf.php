<?php

class Ptap_pdf extends CI_Controller {

        function __construct() {
        parent::__construct();
        $this->load->library('pdf'); // Load library
        $this->pdf->fontpath = 'pdf/font/'; // Specify font folder
       
        }
        
        public function fee_report() {
            $get_details=$this->db->get_where('bill_details',array('bill_no'=>$this->uri->segment(3)))->result();
            $get_payment=$this->db->get_where('payment',array('bill_no'=>$this->uri->segment(3)))->row();
            $get_student=$this->db->get_where('student',array('id'=>$get_payment->student_id))->result();
            var_dump($get_payment);
            var_dump($get_details);
            var_dump($get_student);
            exit();
        $this->pdf->AddPage('L');
        $this->pdf->SetFont('Arial', 'B', 15);
        $this->pdf->Line(0,15,297,15);
        $this->pdf->Cell(89,0,'Copy 1',0,0,'C',0);
        $this->pdf->Cell(89,0,'Copy 2',0,0,'C',0);
        $this->pdf->Cell(89,0,'Copy 3',0,0,'C',0);
        $this->pdf->Output();
        }

}