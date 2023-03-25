<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()

	{
       
		$this->load->view('website/admin_login');
	}
	public function authenticate()
	{
        $username = $this->input->post('username');
		$password = $this->input->post('password');
        $query = $this->db->get_where('login', ['username' => $username, 'password' => $password])->row();
		if(!empty($query)){
			$this->session->set_userdata('admin',$query);
			return redirect('Dashboard');
		}else{
			$this->session->set_flashdata('error', 'Invalid credentials.');
			return redirect('Admin');
		}
	}
	
	public function listDetail()
    {   
        $data['list'] = $this->db->select('*')->from('patient_record')->get()->result_array();
        // $data['admit_list'] = $this->db->select('*')->get_where('admitted',['status'=>1])->row_array();

        // print_r($data); exit();
        $this->load->view('admin/records', $data);

    }
	public function viewDetail($table="", $id="")
    {
        $query['view_detail'] = $this->db->get_where('patient_record',['id'=>$id])->row_array();
        $this->load->view('admin/view_record', $query);
    }
	public function editDetail($table="", $id="")
    {
        $query['update_detail'] = $this->db->get_where('patient_record',['id'=>$id])->row_array();
        $this->load->view('admin/edit_record', $query);
    }
    
    public function updateDetail($table="",$id=""){
        $data= $_POST;
        // print_r($data);exit();
        
        $this->db->where('id',$id);
        $query = $this->db->update('patient_record',$data);
        if($query)
        {
            $this->session->set_flashdata('updateMsg','Updated Successfully');
            return redirect('Admin/listDetail');
        }
        else{
            return redirect('Admin/listDetail');
        }
    }
    public function deleteDetail($table="",$id="")
    {
        $query= $this->db->delete('patient_record',['id'=>$id]);
        $this->session->set_flashdata('deleteMsg','Deleted Successfully');
        return redirect('Admin/listDetail');

    }
    public function admitDetail()
    {   
        $data['admit_list'] = $this->db->select('*')
                            ->from('admitted')
                            ->join('patient_record','admitted.user_id = patient_record.id')
                            ->where('admitted.status', 1)
                            ->get()->result_array();
        // $data['admit_list'] = $this->db->select('*')->get_where('admitted',['status'=>1])->row_array();

        // print_r($data); exit();
        $this->load->view('admin/admit_record',$data);

    }
    public function dischargeDetail()
    {   
        $data['discharge_list'] = $this->db->select('*')
        ->from('admitted')
        ->join('patient_record','admitted.user_id = patient_record.id')
        ->where('admitted.status', 0)
        ->get()->result_array();
// $data['admit_list'] = $this->db->select('*')->get_where('admitted',['status'=>1])->row_array();

// print_r($data); exit();
$this->load->view('admin/discharge_record',$data);

    }
	public function logout(){
		$this->session->unset_userdata('admin');
		$this->session->set_flashdata('success', 'Successfully logged out.');
		return redirect('Admin');
	}
}
