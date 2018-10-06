<?php 
class CorporateProfile extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('taskmanagement_m');
		$this->load->model('User_m');
		$this->load->library('session');
		$this->load->model('Jobs_m');
		$this->load->library('session');
		$this->load->helper('form', 'url');
		$this->load->library('form_validation');
	}
	public function index(){
		$data['jobs']=$this->Jobs_m->getjobs();
		//print_r($data['jobs']);
		$this->load->view('alljobs',$data);


	}
	public function CompanyAdd($id=NULL){
		if($id==NULL)
		{
			$data['company']=NULL;
			$data['job']=NULL;
			$this->load->view('company_profile',$data);
		}
		else
		{
			// print_r('heelo');exit;
			$data['company']=$this->Jobs_m->getcompany($id);
			$data['job']=$this->Jobs_m->getjob($id);
			$this->load->view('company_profile',$data);	
		}
	}

	public function Apply($id=null){
		$this->load->view('emp_module_1_view_jobs',$id);
	}
    public function Applied($id=null){
       
       $target_file=$this->doupload('audio/','video_profile');
        //$this->load->view('jobCVFill',$id);
    }
    public function saveProfessionalProfile(){
    	$data=array(
    		// 'job_objective'=>$this->input->post('job_objective'),
    		// 'career_objective'=>$this->input->post('career_objective'),
    		'fname'=>$this->input->post('fname'),
    		'lname'=>$this->input->post('lname'),
    		'initials'=>$this->input->post('initials'),
    		'CNIC'=>$this->input->post('cnic'),
    		'gender'=>$this->input->post('gender'),
    		'marital_status'=>$this->input->post('marital_status'),
    		'no_of_dependance'=>$this->input->post('dependence'),
    		'email'=>$this->input->post('email'),
    		'mobile'=>$this->input->post('mobile'),
    		'website'=>$this->input->post('website'),
    		'nationality'=>$this->input->post('nationality'),
    		'country'=>$this->input->post('residence_country'),
    		'address'=>$this->input->post('home_address'),
    	);
    	// print_r($data);
    	$data['jb_users_id']= $this->Jobs_m->saveProfessionalProfile($data);
        echo $data['jb_users_id'];
    }
    public function saveexperience()
    {
       for($i=0;$i<sizeof($this->input->post('company_name'));$i++)
        {
            $from=$this->input->post('from['.$i.']');
            $date=new DateTime($from);
            $from=$date->format( 'Y-m-d');
            //$from=date('Y-m-d',strtotime($from));

            if($this->input->post('present['.$i.']')=="on")
            {
                $till=date('Y-m-d');
            }
            else
            {
                $till=$this->input->post('till['.$i.']');
                $date=new DateTime($from);
                $from=$date->format( 'Y-m-d');
                //$from=date('Y-m-d',strtotime($from));
                //echo $till;
                //exit;
            }

          $data=array(
            // 'job_objective'=>$this->input->post('job_objective'),
            // 'career_objective'=>$this->input->post('career_objective'),
            'user_id'=>$this->input->post('userid'),
            'company_name'=>$this->input->post('company_name['.$i.']'),
            'from_'=>$from,
            'till'=>$till,
            'position'=>$this->input->post('experience_position['.$i.']'),
            
        );
        $this->Jobs_m->savejobexperience($data);  
        }
    }
    public function saveeducation()
    {
       for($i=0;$i<sizeof($this->input->post('institute_name'));$i++)
        {
            //$from=date('Y-m-d',strtotime($from));

            

          $data=array(
            // 'job_objective'=>$this->input->post('job_objective'),
            // 'career_objective'=>$this->input->post('career_objective'),
            'user_id'=>$this->input->post('userid'),
            'institute'=>$this->input->post('institute_name['.$i.']'),
            'city'=>$this->input->post('city_name['.$i.']'),
            'country'=>$this->input->post('country['.$i.']'),
            'year'=>$this->input->post('year['.$i.']'),
            'degree_title'=>$this->input->post('degree['.$i.']')
            );
        $this->Jobs_m->saveeducation($data);  
        }
    }
    
    public function savelanguage()
    {
       
          $userid=$this->input->post('userid');
          $data=array(
            //'job_objective'=>$this->input->post('job_objective'),
            //'career_objective'=>$this->input->post('career_objective'),
            
            'mother_tongue'=>$this->input->post('mother_tongue'),
            'other_language'=>$this->input->post('other_language')
            
            );
        $this->Jobs_m->savelanguage($userid,$data);  
        
    }

    public function saveawards()
    {
       for($i=0;$i<sizeof($this->input->post('certificate_title'));$i++)
        {
            //$from=date('Y-m-d',strtotime($from));

                $awarddate=$this->input->post('date['.$i.']');
                $date=new DateTime($awarddate);
                $award=$date->format( 'Y-m-d');

          $data=array(
            // 'job_objective'=>$this->input->post('job_objective'),
            // 'career_objective'=>$this->input->post('career_objective'),
            'userid'=>$this->input->post('userid'),
            'title'=>$this->input->post('certificate_title['.$i.']'),
            'date'=>$award,
            'description'=>$this->input->post('awards_description['.$i.']')
        
            );
        $this->Jobs_m->saveaward($data);  
        }
    }
    public function savecertificate()
    {
       for($i=0;$i<sizeof($this->input->post('certificate_title'));$i++)
        {
            $from=date('Y-m-d',strtotime($from));

                $awarddate=$this->input->post('date['.$i.']');
                $date= new DateTime($awarddate);
                $award=$date->format( 'Y-m-d');

          $data=array(
            // 'job_objective'=>$this->input->post('job_objective'),
            // 'career_objective'=>$this->input->post('career_objective'),
            'userid'=>$this->input->post('userid'),
            'title'=>$this->input->post('certificate_title['.$i.']'),
            'date'=>$award,
            'description'=>$this->input->post('awards_description['.$i.']')
        
            );
        $this->Jobs_m->savecertification($data);  
        }
    }

    public function savesocialCapital()
    {
        $target_file2=$this->doupload('jobs/social/','video');
        $userid=$this->input->post('userid');
        $text=$this->input->post('description');
        $target_file1=$this->doupload('jobs/social/','audio');
        $data=array(
            // 'job_objective'=>$this->input->post('job_objective'),
            // 'career_objective'=>$this->input->post('career_objective'),
            'usp_description'=>$text,
            'audio'=>$target_file1,
            'video'=>$target_file2
            
        
            );
        $this->Jobs_m->savesocial($userid,$data);  
    }
     public function savereference()
    {
        $userid=$this->input->post('userid');
        
         $data=array(
            // 'job_objective'=>$this->input->post('job_objective'),
            // 'career_objective'=>$this->input->post('career_objective'),
            'ref_name'=>$this->input->post('person_name'),
            'ref_occupation'=>$this->input->post('occupation'),
            'ref_address'=>$this->input->post('address'),
            'ref_email'=>$this->input->post('email'),
            'ref_contact'=>$this->input->post('contact_number')
        
            );
        $this->Jobs_m->savereference($userid,$data);  
    }

    public function savehobbies()
    {
        $userid=$this->input->post('userid');
        foreach($this->input->post('hobbies') as $hobby)
        {
            

          $data=array(
            // 'job_objective'=>$this->input->post('job_objective'),
            // 'career_objective'=>$this->input->post('career_objective'),
            'userid'=>$userid,
            'name'=>$hobby
        
            );
        $this->Jobs_m->savehobbies($data);  
        }
    }

     public function savecandidacy()
    {
        $userid=$this->input->post('userid');
        
         $data=array(
            // 'job_objective'=>$this->input->post('job_objective'),
            // 'career_objective'=>$this->input->post('career_objective'),
            'uniqueness'=>$this->input->post('uniqueness')
            
        
            );
        $this->Jobs_m->savecandidacy($userid,$data);  
    }


    

    public function EmployeeData($userid = NULL)
    {  

        if(!$this->input->post())
        {
            $this->load->view('jobCVFill',$userid);
        }
        else
        {  
            $this->form_validation->set_rules('empName', 'Name', 'trim|required');

            if ($this->form_validation->run() == FALSE)
            {
                redirect('hr/index/'.$userid);
            }
            else
            {   
                $data = array(
                    'firstname' => $this->input->post('empName'),
                    'lastname' => $this->input->post('lastName'),
                    'gender' => $this->input->post('empGender'),
                    'cnic_no' => $this->input->post('cnic'),
                    'date_of_birth' => $this->input->post('empDob'),
                    'p_email' => $this->input->post('empEmail'),
                    'contact_no' => $this->input->post('empPhone'),
                    'address' => $this->input->post('address'),
                    'p_city' => $this->input->post('empCity'),
                    
                    'time_in' => $this->input->post('timeIn'),
                    'time_out' => $this->input->post('timeOut'),
                    'userid' => $this->input->post('userid'),
                    'initials' => $this->input->post('initials'),                    
                    'hired_for_project' => $this->input->post('hired-for'),
                    'cluster' => $this->input->post('cluster'),
                    'placement_level' => $this->input->post('placement-level'),
                    'title' => $this->input->post('title'),
					'rankid' => $this->input->post('ran'),
					'clusterid' => $this->input->post('clu'),
					'designationid' => $this->input->post('des'),
                    
                    'possible_salary' => $this->input->post('possible-salary'),
                    'actual_salary' => $this->input->post('actual-salary'),
                    'step' => $this->input->post('step'),
                    'hired_on' => $this->input->post('hired-on'),
                    'shift' => $this->input->post('shift'),
                    'timings' => $this->input->post('timeIn')." ".$this->input->post('timeOut'),
                    'curricular_unit' => $this->input->post('c-unit'),
                    'academic_club' => $this->input->post('a-club'),
                    'academic_club_role' => $this->input->post('a-club-role'),
                    'emp_code' => $this->input->post('empCode'),
                    
                    'emergency_person_name   ' => $this->input->post('pname'),
                    'relationship_to_person' => $this->input->post('relationship'),
                    // 'eoccupation' => $this->input->post('eoccupation'),
                    'emergency_contact_1' => $this->input->post('contact1'),
                    'emergency_person_address_1' => $this->input->post('address1'),
                    'e_email' => $this->input->post('e-email'),
                    'e_city' => $this->input->post('city'),
                    'userid' => $this->input->post('userid')
                    );
                // if($this->hr_m->addEmployee($data)){
                    // $this->session->set_flashdata('msg', "Record Entered Successfully!");
                // redirect('hr/addEmployee/'.$userid);
                    echo "Record Entered Successfully";
                // }
                // else{
                    echo "OPPS an error occurred.<br> Please Try again latter....";
                // }
                }

                
        }   
    }


    public function doupload($targetdir,$fieldName){
    // $target_dir =   "".base_url() . "companyJobsImages/";
    $target_dir =   "".base_url() . $targetdir;
        

$target_file = $target_dir . basename($_FILES[$fieldName]["name"]);
//print_r($target_file);

  //  exit;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
   
    $config['upload_path'] = $targetdir;
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = FALSE;
        $config['max_size'] = '80024'; //8 MB
 
        if (isset($_FILES[$fieldName]['name'])) {
            if (0 < $_FILES[$fieldName]['error']) {
                echo 'Error during file upload' . $_FILES['file']['error'];
            } else {
                if (file_exists( $targetdir. $_FILES[$fieldName]['name'])) {
                    echo 'File already exists : '.$targetdir . $_FILES[$fieldName]['name'];
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload($fieldName)) {
                        echo $this->upload->display_errors();
                    } else {
                    //     // $table = 'filename';

                                         
                        // 'image' => $_FILES['dp']['name']
                      
                        // );
                        // $this->db->where('userid', $id);                        
                    }
                }
            }
            return $target_file;
        } else {
            echo 'Please choose a file';
        }
    }



	public function saveCompanyAdd($id=NULL)
	{
		// print_r($this->input->post());exit;	
		$companyid=$id;
		// echo $companyid;exit;
		// exit;
		if($companyid==NULL)
		{
// Do_upload()
		$target_file=$this->doupload('companyJobsImages/','dp');
			$data = array(
                    'company_description'=>$this->input->post('description'),
                    'company_image'=>$target_file,
                    'company_industry' => $this->input->post('company_industry'),                    
                    'company_type' => $this->input->post('company_type'),
                    'location' => $this->input->post('location'),
                    'email'=>$this->input->post('company_email'),
					'phone'=>$this->input->post('company_phone'),
					'total_employees'=>$this->input->post('company_employeeQty'),
                    );

				// echo "add";
				// exit;
				$data['company_id']=$this->Jobs_m->addcompany($data);
				redirect('CorporateProfile/CompanyAdd/'.$data['company_id']);
				// $messge = array('message' => 'Saved Successfully','class' => 'alert alert-danger fade in');
				// $this->session->keep_flashdata('item',$messge);
				//echo $data['company_id'];//it is used in ajax for getting company id and setting that id in jb_jobs table
		}
	
		else
		{

					$target_file=$this->doupload('companyJobsImages/','dp');

			$data = array(
                    'company_description'=>$this->input->post('description'),
                    'company_industry' => $this->input->post('company_industry'),                    
                    'company_type' => $this->input->post('company_type'),
                    'location' => $this->input->post('location'),
                    'email'=>$this->input->post('company_email'),
                    'company_image'=>$target_file,

					'phone'=>$this->input->post('company_phone'),
					'total_employees'=>$this->input->post('company_employeeQty'),
                    );
				$data['company_id']=$this->Jobs_m->updatecompany($data,$id);
				// $messge = array('message' => 'Saved Successfully','class' => 'alert alert-danger fade in');
				// $this->session->keep_flashdata('item',$messge);
				//echo $data['company_id'];//it is used in ajax for getting company id and setting that id in jb_jobs table
		}
		redirect('CorporateProfile');
	}
	public function viewjob($id=null){
		$data['company']=$this->Jobs_m->getcompany($id);
		$data['jobs']=$this->Jobs_m->getjob($id);
		$this->load->view('company_profile_view',$data);
	} 
	public function savejob($id=NULL)
	{
	//echo'<pre>';print_r($this->input->post());exit;	
		if($this->input->post('company_id')<0)
		{
			redirect('CorporateProfile/CompanyAdd');
		}
		if($id==NULL)
		{
			for ($i=0;$i<sizeof($this->input->post('job_title'));$i++) {
					$dat=date('Y-m-d', strtotime($this->input->post('pdate['.$i.']')));
					$dat=$dat.' '.date('H:i:s');
					//$dat=date('Y-m-d', strtotime($dat));
					$data=array(
			'company_add_id'=>$this->input->post('company_id'),			
			'title'=>$this->input->post('job_title['.$i.']'),
			'salary'=>$this->input->post('salary['.$i.']'),
			'experience'=>$this->input->post('experience['.$i.']'),
			'residence'=>$this->input->post('location['.$i.']'),
			'gender'=>$this->input->post('gender['.$i.']'),
			'industry'=>$this->input->post('industry['.$i.']'),
			'employement_type'=>$this->input->post('emptype['.$i.']'),
			'created_at'=>$dat
			);
					// print_r($dat);exit;
			if($this->input->post('jobid'))
			{
				//echo $this->input->post('jobid['.$i.']');
				$id=$this->input->post('jobid['.$i.']');
				$this->Jobs_m->updatejob($data,$id);	
			}
			else{
			$this->Jobs_m->savejob($data);
		}
			redirect('CorporateProfile/index');
			}
		//$this->User_m->addcompany($data);
		}
		
	}

    public function column1()
    {
        $this->load->view('emp_column_1_jobs');

    }
    public function column2()
    {
        $this->load->view('emp_column_2_jobs');

    }
    public function column3()
    {
        $this->load->view('emp_column_3_jobs');

    }
    public function column4()
    {
        $this->load->view('EmploymentSelectionView');

    }
    public function column5()
    {
        $this->load->view('emp_column_5_jobs');

    }


}


?>