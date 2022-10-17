<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groom extends CI_Controller {

    											 
	public function add()
	{ 
        date_default_timezone_set("Asia/Kolkata");	
        // print_r($_POST[]);die;
        $this->load->view('back/header');
        if(!empty($_POST)) {
            $data = array(
                'gr_name' => $this->input->post('gr_name'),
                'nickname' => $this->input->post('nickname'),
                'father_name' => $this->input->post('father_name'),
                'mother_name' => $this->input->post('mother_name'),
                'g_f_name' => $this->input->post('g_f_name'),
                'g_m_name' => $this->input->post('g_m_name'),
                'content' => $this->input->post('content'),
                'age' => $this->input->post('age'),
                'education' => $this->input->post('education'),
                'social_link' => $this->input->post('social_link'),
                'address' => $this->input->post('address'),
                'status' => $this->input->post('status'),
                'created' => date('y-m-d H:i:s'),
                // 'updated' => date('y-m-d H:i:s'),
                
                );
 
           
          if(!empty($_FILES)){
               $uploadPath ='upload_images/';
                $config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                 if($this->upload->do_upload('gr_image')){
                     $error = $this->upload->display_errors();
                        if(!empty($error)){

                            echo $error;
                            die;
                            }
                        $fileData = $this->upload->data();
                            
                        $data['gr_image'] = $fileData['file_name'];
                    }
            }
         $this->db->insert('groom', $data);
         redirect('groom/list');
 
        }
         
		$this->load->view('back/groom/add');
        $this->load->view('back/footer');
	}
 



    public function list()
	{
		$this->load->view('back/header');

        $this->db->select('*');
        $query = $this->db->get('groom');
        $data['groom'] =  $query->result();
        $this->load->view('back/groom/list', $data);

        $this->load->view('back/footer');
        
	}

    public function delete($id)
	{
		// $id = $this->input->post('id');
        // print_r($id);die;
        $this->db->where('id',$id);
        $this->db->delete('groom');
        redirect('groom/list');
         
	}

     public function edit($id)
	{  
        // print_r($_POST);die;
       $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('groom');
        $data1['groom'] =  $query->result();
        date_default_timezone_set("Asia/Kolkata");
        
        $this->load->view('back/header');

         if(!empty($_POST)) {
         $data = array(
            'gr_name' => $this->input->post('gr_name'),
            'nickname' => $this->input->post('nickname'),
            'father_name' => $this->input->post('father_name'),
            'mother_name' => $this->input->post('mother_name'),
            'g_f_name' => $this->input->post('g_f_name'),
            'g_m_name' => $this->input->post('g_m_name'),
            'content' => $this->input->post('content'),
            'age' => $this->input->post('age'),
            'education' => $this->input->post('education'),
            'social_link' => $this->input->post('social_link'),
            'address' => $this->input->post('address'),
            'status' => $this->input->post('status'),
            // 'created' => date('d-m-y H:i:s'),
            'updated' => date('y-m-d H:i:s'),
            
         );
          

         if($_FILES['gr_image']['size'] != 0){
            $uploadPath ='upload_images/';
            $config['encrypt_name'] = TRUE; 
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('gr_image')){
            $error = $this->upload->display_errors();
            if(!empty($error)){

                echo $error;
                die;
                }
            $fileData = $this->upload->data();
            $data['gr_image'] = $fileData['file_name'];
            }
         } else {
            $data['gr_image'] = $data1['groom'][0]->gr_image;  
           
        }
 
       
            $this->db->where('id',$id);
            $this->db->update('groom',$data); 
            redirect('groom/list'); 
        }
        
       $this->load->view('back/groom/edit', $data1);
       $this->load->view('back/footer', $data1);
        

	}


 

}