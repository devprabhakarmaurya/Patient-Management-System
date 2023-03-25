<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$query= $this->session->userdata('admin');
		if(empty($query))
		{
			$this->session->set_flashdata('error','session expired');
			return redirect('Admin');
		}
	}
    public function index()
	{
		$data['total']= $this->db->select('*')
		->from('patient_record')
		->get()->result();
		$data['admitted']= $this->db->select('*')
		->from('admitted')
		->where('status',1)
		->get()->result();
		$data['discharged']= $this->db->select('*')
		->from('admitted')
		->where('status',0)
		->get()->result();
		$this->load->view('admin/index',$data);
	}
    public function admit()
	{
		$this->load->view('admin/admit');
	}
	public function admission()
	{
		$pid = $this->input->post('pid');
        $query['p_detail'] = $this->db->get_where('patient_record', ['pid' => $pid])->row();
		// print_r($query); exit();
		if(!empty($query['p_detail'])){
			$this->load->view('admin/admission_form', $query);
		}else{
			$this->session->set_flashdata('error', 'Invalid credentials.');
			return redirect('Dashboard/admit');
		}
	}
	public function saveAdmit()
	{
		$data = $_POST;
		// print_r($data); exit();
		$this->db->insert('admitted',$data);
        $this->session->set_flashdata('success','Patient Admitted Successfully !!');
        return redirect('Dashboard/admit');
	}
	public function p_discharge()
	{
		$this->load->view('admin/discharge');
	}
	public function discharge($table="", $id="")
	{
		$pid = $this->input->post('pid');
        $query['update_detail'] = $this->db->get_where('admitted', ['pid' => $pid])->row();
		$query['p_detail'] = $this->db->get_where('patient_record', ['pid' => $pid])->row();
		// print_r($query); 
		// print_r($id);exit();
		if(!empty($query['update_detail'])){
			$this->load->view('admin/discharge_form', $query);
		}else{
			$this->session->set_flashdata('error', 'Invalid credentials.');
			return redirect('Dashboard/admit');
		}
	}
	public function updateDischarge($table="",$id=""){
        $data= $_POST;
        // print_r($data); exit();
		$a = $_FILES['image']['name'];
        if($a)
        {
            $config = array(
                'upload_path' => "./assets/uploads",
                'allowed_types' => "jpg|png|jpeg|pdf",
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('image');
            $img = $this->upload->data();
            $data['image'] = $img['file_name'];
        } 
        $this->db->where('id',$id);
        $query = $this->db->update('admitted',$data);
        if($query)
        {
            $this->session->set_flashdata('updateMsg','Patient Discharged Successfully');
            return redirect('Dashboard/p_discharge');
        }
        else{
            return redirect('Dashboard/p_discharge');
        }
    }
	
}
?>