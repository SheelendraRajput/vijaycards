<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

    
	public function add()
	{
        date_default_timezone_set("Asia/Kolkata");
        //print_r($_POST);die;
        $this->load->view('back/header');
        if(!empty($_POST)) {
            $data = array(
                'title1' => $this->input->post('title1'),
                'title2' => $this->input->post('title2'),
                'date' => $this->input->post('date'),
                'status' => $this->input->post('status'),
                'created' => date('y-m-d H:i:s'),
                 
                );
 
           
          if(!empty($_FILES)){
               $uploadPath ='upload_images/';
                $config['encrypt_name'] = TRUE; 
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                 if($this->upload->do_upload('image')){
                     $error = $this->upload->display_errors();
                        if(!empty($error)){

                            echo $error;
                            die;
                            }
                        $fileData = $this->upload->data();
                            
                        $data['image'] = $fileData['file_name'];
                    }
            }
         $this->db->insert('slider', $data);
         redirect('Slider/list');
 
        }
         
		$this->load->view('back/slider/add');
        $this->load->view('back/footer');
	}
 



    public function list()
	{
		$this->load->view('back/header');

        $this->db->select('*');
        $query = $this->db->get('slider');
        $data['slider'] =  $query->result();
        $this->load->view('back/slider/list', $data);

        $this->load->view('back/footer');
        
	}

    public function delete($id)
	{
		// $id = $this->input->post('id');
        // print_r($id);die;
        $this->db->where('id',$id);
        $this->db->delete('slider');
        redirect('slider/list');
         
	}

     public function edit($id)
	{  
       // print_r($_POST);die;
       $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('slider');
        $data1['slider'] =  $query->result();
        date_default_timezone_set("Asia/Kolkata");
        
        $this->load->view('back/header');
         if(!empty($_POST)) {
         $data = array(
            'title1' => $this->input->post('title1'),
            'title2' => $this->input->post('title2'),
            'image' => $this->input->post('image'),
            'date' => $this->input->post('date'),
            'status' => $this->input->post('status'),
             'updated' => date('y-m-d H:i:s'),
            
         );
          

         if($_FILES['image']['size'] != 0){
            $uploadPath ='upload_images/';
            $config['encrypt_name'] = TRUE; 
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('image')){
            $error = $this->upload->display_errors();
            if(!empty($error)){

                echo $error;
                die;
                }
            $fileData = $this->upload->data();
            $data['image'] = $fileData['file_name'];
            }
         } else {
            $data['image'] = $data1['slider'][0]->image;  
           
        }
 
       
            $this->db->where('id',$id);
            $this->db->update('slider',$data); 
            redirect('slider/list'); 
        }
        
       $this->load->view('back/slider/edit', $data1);
       $this->load->view('back/footer', $data1);
        

	}


 

}