<?php 
class Hr extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('user_m');
        $this->load->model('hr_m');
        $this->load->library('session');
        $this->load->helper('form', 'url');
        $this->load->library('form_validation');
        if ($this->user_m->loggedin() == FALSE) {
            $this->session->set_userdata('page_url', current_url());
              redirect('user');
        }else
            return true;
	}

	function index($userid){
        

        $data["userid"] = $userid;
		//$data["emp"]= $this->hr_m->getuser($userid); old tables
		
		$data["emp"]= $this->hr_m->newgetuser($userid);//new tables
		//$data['']
        // print_r($data['emp']);
		// exit;
        
		$data["clu"]= $this->hr_m->getrank();
		$data["ran"]= $this->hr_m->getcluster();
		$data["des"]= $this->hr_m->getdesignation(); 
		// $data["cities"] = $this->hr_m->get_cities();
		// $this->load->view('include/header');
		// $this->load->view('include/footer');
		// $this->load->view('employee-profile-fill',$data); //this line is for old view of employee registration
		$this->load->view('employeeCVfill',$data);    //this line is for new view of employee registration
	   // $this->load->view('emp_module_1_view',$data);
    }
    public function upload_files($table)
    {
    //upload file

        $tableid = explode("-", $table);

        $table = $tableid['0'];
        $id = $tableid['1'];
        $config['upload_path'] = 'uploads/associated_documents/';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = FALSE;
        $config['max_size'] = '1024'; //1 MB
 
        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error during file upload' . $_FILES['file']['error'];
            } else {
                if (file_exists('uploads/' . $_FILES['file']['name'])) {
                    echo 'File already exists : uploads/' . $_FILES['file']['name'];
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('file')) {
                        echo $this->upload->display_errors();
                    } else {
                        // $table = 'filename';

                        $data = array(
                        'documents_id' => '',
                        'userid' => $id,
                        'image' => $_FILES['file']['name'],
                        'type' => $table
                        );
                        // $this->db->where('userid', $id);
                        if($this->db->insert('bm_users_documents',$data)){
                        // if ($this->hr_m->insertDocs($data) == TRUE) {
                            echo $table.' Successfully uploaded :' . $_FILES['file']['name'];
                        }
                    }
                }
            }
        } else {
            echo 'Please choose a file';
        }
    }

    function employee_profile($userid = NULL)
    {  

        if(! $this->input->post())
        {
            redirect('hr/index/'.$userid);
        }
        else
        {  
            $this->form_validation->set_rules('empName', 'Name', 'trim|required');
            // $this->form_validation->set_rules('empGender', 'Gender', 'required');
            // $this->form_validation->set_rules('empDob', 'Date of Birth', 'required');
            // $this->form_validation->set_rules('empEmail', 'Email', 'trim|required|valid_email');
            // $this->form_validation->set_rules('empPhone', 'Mobile', 'required');
            // $this->form_validation->set_rules('empResidence', 'Residence Country', 'required');
            // $this->form_validation->set_rules('empCity', 'City', 'required');
            // // $this->form_validation->set_rules('targetJobTitle', 'City', 'required');
            // // $this->form_validation->set_rules('jobLocation', 'Location', 'required');
            // // $this->form_validation->set_rules('careerLevel', 'Career Level', 'required');
            // // $this->form_validation->set_rules('empObjective', 'Career Objective', 'required');
            // // $this->form_validation->set_rules('empType', 'Employment Type', 'required');
            // // $this->form_validation->set_rules('empStatus', 'Employment Status', 'required');
            // // $this->form_validation->set_rules('targetSalary', 'Target Salary', 'required|numeric');
            // // $this->form_validation->set_rules('noticePeriod', 'Notice Period', 'required');
            // // $this->form_validation->set_rules('lastSalary', 'Last Salary', 'required|numeric');
            // // $this->form_validation->set_rules('targetIndustry', 'Target Industry', 'required');
            // $this->form_validation->set_rules('rEmail', 'Referal Email', 'trim|required|valid_email');

            // $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            if ($this->form_validation->run() == FALSE)
            {
                redirect('hr/index/'.$userid);
            }
            else
            {   
                $data = array(
                    'careerobj' => $this->input->post('empCareer'),
                    'jobobj' => $this->input->post('empJobObj'),
                    'name' => $this->input->post('empName'),
                    'gender' => $this->input->post('empGender'),
                    'dob' => $this->input->post('empDob'),
                    'phone' => $this->input->post('empPhone'),
                    'maritalstatus' => $this->input->post('maritalStatus'),
                    'email' => $this->input->post('empEmail'),
                    'address' => $this->input->post('empCareer'),
                    'city' => $this->input->post('empCity'),
                    'nationalities' => $this->input->post('empAddNationalities'),
                    'numofdep' => $this->input->post('numOfDep'),
                    'country' => $this->input->post('empResidence'),
                    'website' => $this->input->post('empWebsite'),
                    'userid' => $userid
                    );

                $data3 = array(
                    'organization' => $this->input->post('expComp'),
                    'position' => $this->input->post('expPosition'),
                    'from' => $this->input->post('expDateFrom'),
                    'till' => $this->input->post('expDateTO'),
                    'description' => $this->input->post('expDescription'),
                    'userid' => $userid
                    );

                $data4 = array(
                    'institute' => $this->input->post('eduInst'),
                    'country' => $this->input->post('empCountry'),
                    'city' => $this->input->post('empCity'),
                    'degree' => $this->input->post('empEducation'),
                    'userid' => $userid
                    
                    );

                $data5 = array(
                    'communicationskills' => $this->input->post('commSkills'),
                    'managerialskills' => $this->input->post('mangSkills'),
                    'computer' => $this->input->post('computer'),
                    'technicalskills' => $this->input->post('techSkills'),
                    'motherlanguage' => $this->input->post('motherLang'),
                    'otherlanguage' => $this->input->post('otherLang'),
                    'userid' => $userid
                    );
// UNTILL NOW
                $data6 = array(
                    'certtitle' => $this->input->post('certiTitle'),
                    'certdate' => $this->input->post('certiDate'),
                    'certdescription' => $this->input->post('certiDesc'),
                    'userid' => $userid
                    );


                $data7 = array(
                    'hobbies' => $this->input->post('hobbAndInter'),
                    'whyme' => $this->input->post('whyMe'),
                    'rpersonname' => $this->input->post('rpersonName'),
                    'roccupation' => $this->input->post('roccupation'),
                    'raddress' => $this->input->post('rAddress'),
                    'remail' => $this->input->post('rEmail'),
                    'rnumber' => $this->input->post('rNumber'),
                    'userid' => $userid
                    );

                // $data8 = array(
                    
                //     'userid' => $this->session->userdata('id')
                //     );
// THREE FIELDS REMINED
                if ($this->hr_m->insert_employee_profile($data)) {
                       //echo "Employee added";
                }
                if ($this->hr_m->insert_work_exp($data3)) {
                           //echo "WORK EXP ADDED";
                }
                if ($this->hr_m->insert_edu($data4)) {
                    //echo "edu ADDED";
                }

                if ($this->hr_m->insert_skills($data5)) {
                       //echo "skills added";
                }

                if ($this->hr_m->insert_certifications($data6)) {
                    //echo "CERTIFICATIONS ADDED";
                }

                if ($this->hr_m->insert_why($data7)) {
                    //echo "Why field added";
                }
                redirect('hr/employee_edit/'.$userid);
                }

                
        }   
    }

    public function organization_info($userid)
    {
// ORGANIZATIONAL INFORMATION 
                $data = array(
                'initials' => $this->input->post('initials'),
                'hired_for_project' => $this->input->post('hired-for'),
                'cluster' => $this->input->post('cluster'),
                'placement_level' => $this->input->post('placement-level'),
                'title' => $this->input->post('title'),
                'designation' => $this->input->post('designation'),
                'possible_salary' => $this->input->post('possible-salary'),
                'actual_salary' => $this->input->post('actual-salary'),
                'step' => $this->input->post('step'),
                'hired_on' => $this->input->post('hired-on'),
                'shift' => $this->input->post('shift'),
                'timings' => $this->input->post('timing'),
                'curricular_unit' => $this->input->post('c-unit'),
                'academic_club' => $this->input->post('a-club'),
                'academic_club_role' => $this->input->post('a-club-role'),
                'userid' => $userid
                );

                if ($this->hr_m->insert_organization_info($data)) {
                    // echo "Record Entered Successfully";
                    redirect('hr/index/'.$userid);
                }

// ORGANIZATIONAL INFORMATION ENDS HERE 
    }
// EMERGENCY CONTACTS
    public function emergency_contact($userid)
    {

        $data = array(
        'eperson_name   ' => $this->input->post('pname'),
        'erelationship' => $this->input->post('relationship'),
        'eoccupation' => $this->input->post('roccupation'),
        'enumber' => $this->input->post('contact1'),
        'eaddress' => $this->input->post('address1'),
        'eemail' => $this->input->post('e-email'),
        'userid' => $userid
            );

        if($this->hr_m->insert_emergency_contact($data)){
            // echo "Record Entered Successfully";
            redirect('hr/index/'.$userid);
        }
    }

    public function emp_profile_fill_view(){
        // $data['userid'] = $userid;
        $data['emp_profile'] = $this->hr_m->emp_profile();
        $data['emp_deactive'] = $this->hr_m->emp_deactive();
        $this->load->view('employee-profile-fill-view', $data);
    }
    public function UpdateSocialPlatforms($id){
        if($this->input->post()){
            $status=0;
            if($this->input->post('status')=="on"){
                $status=1;
            }
            $data=array(
                'name'=>$this->input->post('name'),
                'status'=>$status,
                'modified_at'=>date('Y-m-d H:i:s')
                );
            $this->hr_m->updatesocial($id,$data);
        }
        redirect('Hr/SocialPlatforms');
    }
    public function deleteSocial($id){

        $this->hr_m->deleteSocial($id);
        redirect('Hr/SocialPlatforms');
    }
    public function SocialPlatforms($id=null){
        if($id!=null){
            $data['social']= $this->hr_m->getSocial($id);    
        // print_r($data['social']);exit;   
        }
        if($this->input->post()){
            $status=0;
            if($this->input->post('status')=="on"){
                $status=1;
            }
            $data=array(
                'name'=>$this->input->post('name'),
                'status'=>$status
                );
            $this->hr_m->insertsocial($data);
        }
        $data['social_platforms']=$this->hr_m->getSocialPlatforms();
        $this->load->view('social_platforms',$data);
    }
    public function AssignedPasswords($id=null){
        if($id!=null){
            $data['assigned']=$this->hr_m->getSocialAssigned($id);
            if($this->input->get()){
                $data['passwordChanged']="1";
            }    
        }
        if($this->input->post()){
            
            $data=array('assigned_to'=>$this->input->post('userid'),
            'password'=>$this->input->post('password'),
            'social_platform_id'=>$this->input->post('platform'),
            'username'=>$this->input->post('username'));
            // print_r($data);exit;
            $this->hr_m->NewSocialAssigned($data);

        }
        $data['socialAssigned']=$this->hr_m->SocialAssigned();
        $data["users"]= $this->hr_m->newget_users();//new tables
        $data['social_platforms']=$this->hr_m->getActiveSocialPlatforms();
        $this->load->view('assignedpasswords_view',$data);
    }
    public function UpdateAssignedPasswords($id=null){
          // print_r($this->input->post());exit;
            $password='password';
        if($this->input->post('changed')){
                $password='changed_password';
        }
        $data=array(
            'assigned_to'=>$this->input->post('userid'),
            $password=>$this->input->post('password'),
            'social_platform_id'=>$this->input->post('platform'),
            'username'=>$this->input->post('username')
            );
        // print_r($data);exit;
        $this->hr_m->UpdateSocialAssigned($id,$data);
        redirect('Hr/AssignedPasswords');
    }
    public function DeleteAssignedPasswords($id){
            $this->hr_m->DeleteSocialAssigned($id);
                redirect('Hr/AssignedPasswords');
    }

    public function employee_edit($userid){
        $data['userid'] = $userid;
        $data['emp_profile1'] = $this->hr_m->emp_profile1($userid);
        $data['work_exp'] = $this->hr_m->work_exp($userid);
        $data['education'] = $this->hr_m->education($userid);

        $data['skills'] = $this->hr_m->skills($userid);
        $data['certification'] = $this->hr_m->certification($userid);
        $data['hobbies_to_why_I'] = $this->hr_m->hobbies($userid);

        $data['org_info'] = $this->hr_m->org_info($userid);
        $data['emergency_contact'] = $this->hr_m->emergency_contact($userid);

        $this->load->view('employee_edit', $data);
    }
//UPDATE RECORDS
    public function employee_profile_update($userid)
{
    $userid = $this->input->post('userid');
    if(! $this->input->post())
    {
        redirect('hr/employee_edit/'.$userid);
    }
    else
    {  
        $this->form_validation->set_rules('empName', 'Name', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
            redirect('hr/employee_edit/'.$userid);
        }
        else
        {   
            $emp = array(
                'careerobj' => $this->input->post('empCareer'),
                'jobobj' => $this->input->post('empJobObj'),
                'name' => $this->input->post('empName'),
                'gender' => $this->input->post('empGender'),
                'dob' => $this->input->post('empDob'),
                'phone' => $this->input->post('empPhone'),
                'maritalstatus' => $this->input->post('maritalStatus'),
                'email' => $this->input->post('empEmail'),
                'address' => $this->input->post('empCareer'),
                'city' => $this->input->post('empCity'),
                'nationalities' => $this->input->post('empAddNationalities'),
                'numofdep' => $this->input->post('numOfDep'),
                'country' => $this->input->post('empResidence'),
                'website' => $this->input->post('empWebsite'),
                'userid' => $userid
                );

            if($this->hr_m->update_employee_profile($emp,$userid)){
                // echo "User Updated";
            }

           $work_exp = array(
                'organization' => $this->input->post('expComp'),
                'position' => $this->input->post('expPosition'),
                'from' => $this->input->post('expDateFrom'),
                'till' => $this->input->post('expDateTO'),
                'description' => $this->input->post('expDescription'),
                'userid' => $userid
                );
            if ($this->hr_m->update_work_exp($work_exp,$userid)) {
                // echo "Work exp updated";
            }

            $edu = array(
                'institute' => $this->input->post('eduInst'),
                'country' => $this->input->post('empCountry'),
                'city' => $this->input->post('empCity'),
                'degree' => $this->input->post('empEducation'),
                'userid' => $userid
                );
            if ($this->hr_m->update_edu($edu,$userid)) {
                // echo "Edu updated";
            }

            $skills = array(
                'communicationskills' => $this->input->post('commSkills'),
                'managerialskills' => $this->input->post('mangSkills'),
                'computer' => $this->input->post('computer'),
                'technicalskills' => $this->input->post('techSkills'),
                'motherlanguage' => $this->input->post('motherLang'),
                'otherlanguage' => $this->input->post('otherLang'),
                'userid' => $userid
                );

            if ($this->hr_m->update_skills($skills, $userid)) {
                // echo "Skills updated";
            }

            $cert = array(
                'certtitle' => $this->input->post('certiTitle'),
                'certdate' => $this->input->post('certiDate'),
                'certdescription' => $this->input->post('certiDesc'),
                'userid' => $userid
                );
            if ($this->hr_m->update_certifications($userid,$cert)) {
                // echo "certification updated";
            }

            $hob_ref_why = array(
                'hobbies' => $this->input->post('hobbAndInter'),
                'whyme' => $this->input->post('whyMe'),
                'rpersonname' => $this->input->post('rpersonName'),
                'roccupation' => $this->input->post('roccupation'),
                'raddress' => $this->input->post('rAddress'),
                'remail' => $this->input->post('rEmail'),
                'rnumber' => $this->input->post('rNumber'),
                'userid' => $userid
                );
            if ($this->hr_m->update_hobs($userid,$hob_ref_why)) {
                // echo "hobbies updated";
            }
            
            redirect('hr/employee_edit/'.$userid); 
        }
            
       }   
    }

    public function organization_info_update($userid)
    {
        // $userid = $this->input->post('userid');

        $org_info = array(
                'initials' => $this->input->post('initials'),
                'hired_for_project' => $this->input->post('hired-for'),
                'cluster' => $this->input->post('cluster'),
                'placement_level' => $this->input->post('placement-level'),
                'title' => $this->input->post('title'),
                'designation' => $this->input->post('designation'),
                'possible_salary' => $this->input->post('possible-salary'),
                'actual_salary' => $this->input->post('actual-salary'),
                'step' => $this->input->post('step'),
                'hired_on' => $this->input->post('hired-on'),
                'shift' => $this->input->post('shift'),
                'timings' => $this->input->post('timing'),
                'curricular_unit' => $this->input->post('c-unit'),
                'academic_club' => $this->input->post('a-club'),
                'academic_club_role' => $this->input->post('a-club-role'),
                'userid' => $userid
                );

                if ($this->hr_m->update_organization_info($org_info,$userid)) {
                    // echo "Record Entered Successfully";
                    // $this->load->view('employee-profile-fill');
                    redirect('hr/employee_edit/'.$userid);
                }
    }
    public function emergency_contact_update($userid)
    {
        $this->form_validation->set_rules('pname', 'Person Name', 'trim|required|alpha');
        $this->form_validation->set_rules('contact1', 'Contact', 'trim|required|numeric');
        $this->form_validation->set_rules('e-email','Email', 'trim|required|valid_email');
        
        if ($this->form_validation->run() == FALSE) {
            redirect('hr/employee_edit/'.$userid);
        }
        else{

        $userid = $this->input->post('userid');
        $emgr = array(
        'eperson_name   ' => $this->input->post('pname'),
        'erelationship' => $this->input->post('relationship'),
        'eoccupation' => $this->input->post('roccupation'),
        'enumber' => $this->input->post('contact1'),
        'eaddress' => $this->input->post('address1'),
        'eemail' => $this->input->post('e-email'),
        'userid' => $userid,
            );

        $this->hr_m->update_emergency_contact($emgr,$userid);
        
        redirect('hr/employee_edit/'.$userid);
        // $data['emp_profile'] = $this->hr_m->emp_profile();
        // $this->load->view('employee-profile-fill-view', $data);
        }
    }

    public function employee_view($userid)
    {
        $data['userid'] = $userid;
        $data['emp_profile1'] = $this->hr_m->emp_profile1($userid);
        $data['work_exp'] = $this->hr_m->work_exp($userid);
        $data['education'] = $this->hr_m->education($userid);

        $data['skills'] = $this->hr_m->skills($userid);
        $data['certification'] = $this->hr_m->certification($userid);
        $data['hobbies_to_why_I'] = $this->hr_m->hobbies($userid);

        $data['org_info'] = $this->hr_m->org_info($userid);
        $data['emergency_contact'] = $this->hr_m->emergency_contact($userid);
        $this->load->view('employee-view',$data);
    }
    public function salaryRanges($id=null){
        if($this->input->post('salary')){
            $data=array(

            );
        }
         $data['projects']=$this->hr_m->getProjects();
         $data['positions']=$this->hr_m->getPosition();
        $this->load->view('salaryRangeInTitle',$data);
    }
    public function hash($hash)
    {
        $hashed = $this->hr_m->hash($hash);
        echo $hashed;
    }

    function addEmployee($userid = NULL)
    {  

        if(! $this->input->post())
        {
            redirect('hr/index/'.$userid);
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
                if($this->hr_m->addEmployee($data)){
                    // $this->session->set_flashdata('msg', "Record Entered Successfully!");
                // redirect('hr/addEmployee/'.$userid);
                    echo "Record Entered Successfully";
                }
                else{
                    echo "OPPS an error occurred.<br> Please Try again latter....";
                }
                }

                
        }   
    }
	
	function addemployeenewold()
	{
                $target_dir =   "".base_url() . "photos/";
        

$target_file = $target_dir . basename($_FILES["dp"]["name"]);
//print_r($target_file);

//print_r($this->input->post());
//    exit;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
   
    $config['upload_path'] = 'photos/';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = FALSE;
        $config['max_size'] = '1024'; //1 MB
 
        if (isset($_FILES['dp']['name'])) {
            if (0 < $_FILES['dp']['error']) {
                echo 'Error during file upload' . $_FILES['file']['error'];
            } else {
                if (file_exists('photos/' . $_FILES['dp']['name'])) {
                    echo 'File already exists : photos/' . $_FILES['dp']['name'];
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('dp')) {
                        echo $this->upload->display_errors();
                    } else {
                    //     // $table = 'filename';

                                         
                        // 'image' => $_FILES['dp']['name']
                      
                        // );
                        // $this->db->where('userid', $id);                        
                    }
                }
            }
        } else {
            echo 'Please choose a file';
        }

		$userid=$this->input->post('uid');
		$data = array(
                    'career'=>$this->input->post('career'),
                    'objective' => $this->input->post('objective'),
                    'upload_picture'=>$target_file,
                    
                    'gender' => $this->input->post('emp_gender'),
                    'marital_status' => $this->input->post('marital_status'),
                    'dependance'=>$this->input->post('dependance'),
                    
					'cnic_no'=>$this->input->post('cnic'),
                    'contact_no' => $this->input->post('emp_phone'),
                    
                    'website' => $this->input->post('emp_website'),
                    'address' => $this->input->post('address'),
                    'add_nationality' => $this->input->post('nationality'),
                    'res_country' => $this->input->post('country'),
                    
                    'job_title'=>$this->input->post('title'),
                    'rankid'=>$this->input->post('ran'),
                    'clusterid'=>$this->input->post('clu'),
                    'designationid'=>$this->input->post('des'),
                    'initials'=>$this->input->post('initials'),
                   // 'designationid'=$this->input->post(),
                    //'designationid'=$this->input->post(),
                    'time_out' => $this->input->post('timeOut'),
                    'time_in' => $this->input->post('timeIn'),
                    'break_out' => $this->input->post('breakout'),
                    'break_in' => $this->input->post('breakin'),
                    'hired_for_project' => $this->input->post('hired-for'),
                    'age' => $this->input->post('age'),
                    'actual_salary' => $this->input->post('salary'),
                    'hired_on' => $this->input->post('hired-on'),
                    /*'userid' => $this->input->post('userid'),
                    'initials' => $this->input->post('initials'),                    
                    'hired_for_project' => $this->input->post('hired-for'),
                    'cluster' => $this->input->post('cluster'),
                    'placement_level' => $this->input->post('placement-level'),
                    'title' => $this->input->post('title'),
                    'designation' => $this->input->post('designation'),
                    'possible_salary' => $this->input->post('possible-salary'),
                    'actual_salary' => $this->input->post('actual-salary'),
                    'step' => $this->input->post('step'),
                    'hired_on' => $this->input->post('hired-on'),
                    'shift' => $this->input->post('shift'),
                    'timings' => $this->input->post('timeIn')." ".$this->input->post('timeOut'),
                    'curricular_unit' => $this->input->post('c-unit'),
                    'academic_club' => $this->input->post('a-club'),
                    'academic_club_role' => $this->input->post('a-club-role'),*/
                    
                    
                    /*'emergency_person_name   ' => $this->input->post('pname'),
                    'relationship_to_person' => $this->input->post('relationship'),
                    // 'eoccupation' => $this->input->post('eoccupation'),
                    'emergency_contact_1' => $this->input->post('contact1'),
                    'emergency_person_address_1' => $this->input->post('address1'),
                    'e_email' => $this->input->post('e-email'),
                    'e_city' => $this->input->post('city'),*/
                    'userid' => $userid
                    );
		$data2=array(
			'fname'=>$this->input->post('fname'),
			'lname'=>$this->input->post('lname'),
			'email'=>$this->input->post('email')
			);
		
        // print_r($this->input->post());
    //             $fn=$_FILES["dp"]["name"];
    //     print_r( $_FILES["dp"]["name"]);
    //     exit;
    // if(!empty($fn))
    // {
    //     $res = move_uploaded_file($_FILES["dp"]["tmp_name"],"photos/".$fn);
        
    // }


    //phpinfo();




		echo "Record Added";
	$this->hr_m->updatenewbausers($userid,$data2);
	$this->hr_m->newaddnew($data);
    }

// read
public  function addemployeenew()
{
    // print_r($this->input->Post());exit;
    $userid=$this->input->post('userid');
    $data=array(

        'fname'=>$this->input->post('fname'),
        'lname'=>$this->input->post('lname')
    );
    $this->hr_m->updatenewbausers($userid,$data);
    // $cnic_scan=$this->doupload('employeedata/','employement_profile_boarding_cnic_scan');
    // $boarding_payslip=$this->doupload('employeedata/','employement_profile_boarding_pay_slip');
    // $upload_degree=$this->doupload('employeedata/','employement_profile_boarding_latest_degree');
    // $upload_picture=$this->doupload('employeedata/','employee_image');
    $newba_users=array(
        'cnic_no'=>$this->input->post('cnic'),
        'reference'=>$this->input->post('reference_letter'),
        // 'upload_cnic'=>$cnic_scan,
        // 'previous_payslip'=>$boarding_payslip,
        // 'upload_degree'=>$upload_degree,
        // 'upload_picture'=>$upload_picture,
        'address'=>$this->input->post('address'),
        'date_of_birth'=>$this->input->post('dob'),
        'userid'=>$userid,
        // 'reference_id'=>$reference
    );
    $this->hr_m->newaddnew($newba_users);

}


public function addemergency()
{
    $data=array(
        'emergency_person_name'=>$this->input->post('employement_profile_emergency_name'),
        'relationship_to_person'=>$this->input->post('employement_profile_emergency_relation'),
        'emergency_contact_1'=>$this->input->post(' emergency_contact_1'),
        'emergency_person_address_1'=>$this->input->post('employement_profile_emergency_address')
        
        // 'reference_id'=>$reference
    );

    $userid=$this->input->post('userid');
    $this->hr_m->addemergency($userid,$data);

}
public function addposition()
{
    $data=array(
        //'job_title'=>$this->input->post('boarding_position_project'),
        'job_title'=>$this->input->post('on_boarding_title_by_project'),
        //'emergency_contact_1'=>$this->input->post('on_boarding_level_by_project'),
        'suggested_salary'=>$this->input->post('boarding_position_sg_sal'),
        'actual_salary'=>$this->input->post('boarding_position_ac_sal'),
        //'emergency_contact_1'=>$this->input->post('boarding_position_shift'),
        //'emergency_contact_1'=>$this->input->post('boarding_position_break'),
        'hired_on'=>$this->input->post('boarding_position_dt_emp'),
        'uniform'=>$this->input->post('boarding_position_uniform'),
        'office'=>$this->input->post('boarding_position_office'),
        //'emergency_contact_1'=>$this->input->post('boarding_position_pass'),
        'equipment'=>$this->input->post('equipment')
        // 'reference_id'=>$reference
    );

    $userid=$this->input->post('userid');
    $this->hr_m->addposition($userid,$data);

}
public function checklist()
{
    $this->load->view('checklist');
}
public function printOnboarding($id)
{
    $this->load->model('the_bridg_employee');
    $this->load->model('Employee_model');
        $data['equipments']=$this->the_bridg_employee->getEquipments($id);
        // print_r($data['equipments']);exit;
        $this->load->library('word');//load librerry as usual
        $data['id']=$id;
        //$data["userid"] = $userid;//  by juniaid nees to be changed
        // $data["emp"]= $this->hr_m->newgetuser($id);//new tables
        $data["emp"]= $this->Employee_model->newgetuser_row($id);//new tables
        $data["clu"]= $this->hr_m->getrank();
        $data["ran"]= $this->hr_m->getcluster();
        $data["des"]= $this->hr_m->getdesignation();
        $data["project"]= $this->Employee_model->get_projects();
        $data["levels"]= $this->Employee_model->get_levels();
        $data["office"]= $this->Employee_model->get_offices();
        $data["user_details"]= $this->Employee_model->get_user_details($id);
        $data["user_benefits"]= $this->Employee_model->get_user_benefits($id);
        $data["shifts"]= $this->Employee_model->get_shifts();
        $data["user_project_title"]= $this->Employee_model->get_user_project($id);
    $this->load->view('print_onboarding',$data);
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


public function insertPosition($id=null)
{

    if($this->input->post('position')){
        // print_r($this->input->post('position'));exit;
        $data=array(
            'project_id'=>$this->input->post('project_id'),
            'level_id'=>$this->input->post('level_id'),
            'salary_range'=>$this->input->post('salary_range'),
            'name'=>$this->input->post('position')
        );
        $this->hr_m->insertPosition($data);
        // $this->load->view('NewPosition',$data);

    }
    $data['projects']=$this->hr_m->getProjects ();
    $data['levels']=$this->hr_m->getLevels ();
    $this->load->view('NewPosition',$data);

}
public function insertCluster($id=null)
{

    if($this->input->post('cluster')){
        $data=array(
            'level_id'=>$this->input->post('level_id'),
            'name'=>$this->input->post('cluster')
        );
        $this->hr_m->insertCluster($data);
        // $this->load->view('NewPosition',$data);

    }
    $data['levels']=$this->hr_m->getLevels ();
    $this->load->view('NewCluster',$data);

}

public function savetitlePage_data(){

    // echo $job_title =$this->input->post('job_title');

if(!$this->hr_m->gettitlePage_data($this->input->post('userid'))){
    $data=array(
        'job_title'=>strip_tags($this->input->post('job_title')),
        'userid'=>$this->input->post('userid'),
        'known_issues'=>$this->input->post('known_issues'),
        'position_id'=>$this->input->post('position_id'),
        'potential_issue'=>$this->input->post('potential_issue'),
        'skills_set'=>$this->input->post('skills_set'),
        'relief'=>$this->input->post('relief'),
        'cluster_id'=>$this->input->post('cluster_id'),
        'LeftCluster_id'=>$this->input->post('LeftCluster_id'),
        'RightCluster_id'=>$this->input->post('RightCluster_id'),
        'project_id'=>$this->input->post('project_id'),
        'level_id'=>$this->input->post('level_id'),
        'overall_goals'=>$this->input->post('overall_goals'),
        'salary'=>$this->input->post('salary'),
        'particular_level'=>$this->input->post('particular_level')
    );
    
    $id=$this->hr_m->savetitlePage_data($data);
  echo $id;  
}
    else {
        // print_r("hell");exit;
        redirect('/Hr/updatetitlePage_data/'.$this->input->post('userid'));
    }
 }
 public function updatetitlePage_data($id=null){
    if($id){
        $id=$this->input->post('userid');
    $data=array(
        'job_title'=>strip_tags($this->input->post('job_title')),
        'userid'=>$this->input->post('userid'),
        'known_issues'=>$this->input->post('known_issues'),
        'position_id'=>$this->input->post('position_id'),
        'potential_issue'=>$this->input->post('potential_issue'),
        'LeftCluster_id'=>$this->input->post('LeftCluster_id'),
        'RightCluster_id'=>$this->input->post('RightCluster_id'),
        'skills_set'=>$this->input->post('skills_set'),
        'modified_at'=>date('Y-m-d H:i:s'),
        'relief'=>$this->input->post('relief'),
        'cluster_id'=>$this->input->post('cluster_id'),
        'project_id'=>$this->input->post('project_id'),
        'level_id'=>$this->input->post('level_id'),
        'overall_goals'=>$this->input->post('overall_goals'),
        'salary'=>$this->input->post('salary'),
        'particular_level'=>$this->input->post('particular_level')
    );
    $v=$this->hr_m->updatetitlePage_data($data,$id);
    echo $v;
}
 
 }
 public function getUserReviews($id){
     $data['projects']=$this->hr_m->getProjects ();
    $data['levels']=$this->hr_m->getLevels ();
    $data['clusters']=$this->hr_m->getcluster ();
    $data['positions']=$this->hr_m->getPosition ();
 $data['reviews']=$this->hr_m->gettitlePage_data($id);
 print_r(  $data['reviews']);    
 }
public function UserReviews($id){

    $data['reviews']=$this->hr_m->getUserDescriptionData($id);
    // print_r($data['reviews']);    
    $this->load->view('users_reviews_data', $data);
}
public function titleByProject_view($id){
   if($this->hr_m->getJobDescription($id))
        redirect('/Hr/UserReviews/'.$id);   
    $data['projects']=$this->hr_m->getProjects ();
    $data['levels']=$this->hr_m->getLevels();
    $data['clusters']=$this->hr_m->getcluster ();
    $data['positions']=$this->hr_m->getPosition ();
    $data['user_description']=$this->hr_m->getAlltitlePage_data();
    $data['userid']=$id;    
    $this->load->view('titleByProject_view',$data);
}

public function EdittitleByProject_view($id=null){
    if(!$this->input->post()){
    $data['projects']=$this->hr_m->getProjects ();
    $data['levels']=$this->hr_m->getLevels ();
    $data['clusters']=$this->hr_m->getcluster ();
    $data['positions']=$this->hr_m->getPosition ();
    $data['user_description']=$this->hr_m->getAlltitlePage_data();
    $data['reviews']=$this->hr_m->getUserDescriptionData($id);
    $data['userid']=$id;    
    $this->load->view('edittTitleByProject_view',$data);
   }
   else{

    redirect('/titleByProject_view');
    }
}

    public function updatelevel($id){
        $this->hr_m->updateLevel($this->input->post('data'),$id);
        
    }
    public function updatecluster($id){
        $this->hr_m->updatecluster($this->input->post('data'),$id);

    }
    public function updateposition($id){
        $this->hr_m->updateposition($this->input->post('data'),$id);
    }
     public function updateSalary(){
      $id=$this->input->post('position_id');
      $data=array( 
      'salary_range'=> $this->input->post('salary_range'));
        $this->hr_m->updateSalary($data,$id);
    }

function payslip_monetized($id,$mon){

        $this->load->model('Attendance_model');
        $mon=@explode("-", $mon);
        // print_r($mon);
        // exit;
        $monetized=0;
        $this->load->model('taskmanagement_m');
        
        $moneti=$this->taskmanagement_m->getHoliday($id,$mon[1]);
        foreach ($moneti as $h ) {
            if($h->monetize_day){
                $monetized+=$h->monetize_day;
            }
        }
    return $monetized;
    }
   function leave_Assigned($id){



        // exit;
        $this->load->model('Salaryslip_m');
            // echo "val: ".$data['userdetails']['healthIsnuranceEmp'];
            // print_r($empBenefits);
        
        // exit;

        $data['userdetails'] = $this->Salaryslip_m->newpayslip($id);
        // $data['attendance_leave']=Taskmanagement::taskmanagement_mgetLeaveData($id);
   
        $data['template'] = 'leave_view';
        
// print_r($data['public_holidays']);
        // $data['template'] = 'payslip-new';
        $data['monetized']=$this->payslip_monetized($id,date('Y-m-01',strtotime('-1 months')));
        $this->load->model('taskmanagement_m');
        $data['attendance_leave']=$this->taskmanagement_m->getLeaveData($id);
        // $data['userPerformance'] = $this->Salaryslip_m->getUserPerformance($id);
        $this->load->view('include/template',$data);
    }


    function payslip_getAttendance()    
    {   
        $this->load->model('taskmanagement_m');

                // print_r($this->input->post());
        $userId                  = $this->input->post('userId');
        $data['userPerformance'] = $this->taskmanagement_m->getUserPerformance($userId);
        $data['attendance_leave']=$this->taskmanagement_m->getLeaveData($userId);

        $month = isset($_POST['month']) ? $_POST['month'] : date('m');
        $year = isset($_POST['year']) ? $_POST['year'] : date('Y');
        // print_r($month);
        // exit;
        // //$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : 9;
        $this->load->model('attendance_model');
        $data['mont']=$month;
// Month changed
    $data['public_holidays']=$this->attendance_model->getPublicHolidays(date('Y-'.$month.'-',strtotime('months')));
        $chart = $this->attendance_model->by_user($year, $month+1, $userId);
        // echo'<pre>';print_r($chart);
        // exit();
        $days = cal_days_in_month(CAL_GREGORIAN, $month, 2017);
        // print_r($days); 
    $data['userid']=$userId;
            foreach($chart as $day){
                //echo"<pre>";              
                $sunday = date_create($day->date);
                $sunday = $sunday->format('D');
                $late = date_diff(date_create($day->time_in), date_create($day->check_in));
                //print_r($late->format('%R%i'));echo "<br>";
                $late = $late->format('%R%i') + ($late->format('%R%h') * 60);
                //print_r($late);
                $day1 = date_create($day->date);
                
                if ($day->project_title ==  "The Bridges School" && $sunday == "Sat") {
                    $data['attendance'][$day1->format('j')] = "sunday";
                }
                elseif ($sunday == "Sun") {
                    $data['attendance'][$day1->format('j')] = "sunday";
                } elseif ($day->check_in == "00:00:00") {
                    continue;
                } elseif ($late < 0) {
                    $data['attendance'][$day1->format('j')] = "intime";
                } elseif ($late <= 15) {
                    $data['attendance'][$day1->format('j')] = "intime";
                } elseif ($late >= 15 && $late <= 59) {
                    $data['attendance'][$day1->format('j')] = "late15";
                } elseif ($late >= 60 && $late <= 179) {
                    $data['attendance'][$day1->format('j')] = "latehr";
                } elseif ($late >= 180 && $late <= 299 ) {
                    $data['attendance'][$day1->format('j')] = "half";
                } elseif ($late >= 400) {
                    $data['attendance'][$day1->format('j')] = "absent";
                } else {
                    $data['attendance'][$day1->format('j')] = "absent";
                }
            }
            // echo '<pre>';var_dump($data);
        // for($i=1;$i<=$days;$i++)
        // {
                
        // }

        $this->load->view('leave_Attendance', $data);
    }
   
    public function AssignForLeave(){

        $userid=$this->input->post('userid');
        $month=$this->input->post('month');
          $this->load->model('Salaryslip_m');

        $data['userdetails'] = $this->Salaryslip_m->newpayslip($userid);
        $data['template'] = 'leave_view';
        $data['selected_month']=$month;
// print_r($data['public_holidays']);
        $data['monetized']=$this->payslip_monetized($userid,date('Y-'.$month.'-01'));
        $this->load->model('taskmanagement_m');
        $data['attendance_leave']=$this->taskmanagement_m->getLeaveDataMon($userid,$month);
        // print_r($data['attendance_leave']);
        // $data['userPerformance'] = $this->Salaryslip_m->getUserPerformance($userid);
        $this->load->view('include/template',$data);

    }


    public function Opencnic(){
       $data['upload_cnic']=$this->input->get('upload_cnic');
       $data['upload_cnic_back']=$this->input->get('upload_cnic_back');
        $this->load->view('Onboarding_CNIC',$data);
    }
     public function OpencnicBack(){
       $data['upload_cnic_back']=$this->input->get('upload_cnic_back');
        $this->load->view('back_cnic',$data);
    }
      public function Openrefrenceletter(){
       $data['upload_reference_letter']=$this->input->get('upload_reference_letter');
        $this->load->view('refrence_letter',$data);
    }
    public function BusinessCard($userid){
       $data['user']=$this->hr_m->newgetEmployee($userid);
       $data['designation']=$this->hr_m->get_user_designation($userid);
        $this->load->view('businesscard',$data);
    }

    public function Opencv(){
       $data['upload_cv']=$this->input->get('upload_cv'); 
        $this->load->view('Onboarding_CV',$data);
    }
    public function promotionLetter($id){
   
        if(file_exists('uploads/Promotionletters/'.$id.'.html')){
                $this->load->view("../../uploads/Promotionletters/$id.html");
        }
        $this->load->model('user_m');
        $this->load->model('Employee_model');
        $data["project"]= $this->Employee_model->get_projects();
        $data["user_project_title"]= $this->Employee_model->get_user_project($id);
        $data['employee']=$this->user_m->newgetuserbyid($id);
        $data['id']=$id;
        $this->load->view('promotion_letter',$data);
    
    }
    public function PromoteAnEmployee($id){
        // print_r($this->input->post());exit;

        $office=null;
        if($this->input->post('office'))
            $office=$this->input->post('office');
        $project_location=null;
        if($this->input->post('project_location'))
            $project_location=$this->input->post('project_location');
        $data = array(
            'userid' => $id,
            'project_location' => $project_location,
            'user_description_id' => $this->input->post('user_description_id'),
            'suggested_salary' => $this->input->post('suggested_salary'),
            'actual_salary' => $this->input->post('actual_salary'),
            'time_in' => $this->input->post('time_in'),
            'job_title' => $this->input->post('job_title'),
            'time_out' => $this->input->post('time_out'),
            'break_in' => $this->input->post('break_in'),
            'break_out' => $this->input->post('break_out'),
            'uniform' => $this->input->post('uniform'),
            'office' => $office,
            'paperwork_share' => $this->input->post('paperwork_share'),
            'remarks' => $this->input->post('remarks'),
            'hired_on' => $this->input->post('hired_on'),
            'hired_for_project' => $this->input->post('hired_for_project')
            );
        // print_r();exit;
       $this->hr_m->AddToPromotionHistory($this->hr_m->getEmployeePromotion($id));
        $this->load->model('Employee_model');
        $this->Employee_model->save_form($id, $data);
        redirect($_SERVER['HTTP_REFERER']);

    }
    public function ReOnboardAnEmployee($id){
        // print_r($this->input->post());exit;

        $office=null;
        if($this->input->post('office'))
            $office=$this->input->post('office');
        $project_location=null;
        if($this->input->post('project_location'))
            $project_location=$this->input->post('project_location');
        $data = array(
            'userid' => $id,
            'project_location' => $project_location,
            'user_description_id' => $this->input->post('user_description_id'),
            'suggested_salary' => $this->input->post('suggested_salary'),
            'actual_salary' => $this->input->post('actual_salary'),
            'time_in' => $this->input->post('time_in'),
            'time_out' => $this->input->post('time_out'),
            'break_in' => $this->input->post('break_in'),
            'break_out' => $this->input->post('break_out'),
            'uniform' => $this->input->post('uniform'),
            'office' => $office,
            'paperwork_share' => $this->input->post('paperwork_share'),
            'remarks' => $this->input->post('remarks'),
            'hired_on' => $this->input->post('hired_on'),
            'hired_for_project' => $this->input->post('hired_for_project'),
            'status'=>1
            );
        // print_r($this->hr_m->getEmployeeReOnboarding($id));exit;
        $this->hr_m->AddToOnboardingHistory($this->hr_m->getEmployeeReOnboarding($id),$id);
        $this->load->model('Employee_model');
        $this->Employee_model->save_form($id, $data);
        redirect($_SERVER['HTTP_REFERER']);

    }
    public function UploadPrePayslip(){
       $data['upload_payslip_prev']=$this->input->get('upload_payslip_prev'); 
        $this->load->view('previousSalarySlip.php',$data);
    }
    public function UploadDegree(){
       $data['upload_degree']=$this->input->get('upload_degree'); 
        $this->load->view('Onboardinguploaded_degree.php',$data);
    } 
    public function UploadPicture(){
       $data['upload_picture']=$this->input->get('upload_picture'); 
        $this->load->view('OnboardinguploadPicture.php',$data);
    } 
    public function voucher($id=null){
        $data['voucher']=$this->hr_m->GetPaymentVoucher($id);
        $this->load->view('voucher',$data);
    }
    public function insertPaymentvoucher($id=null){
        // print_r($_POST);exit;
        $data=array(
            'paid_to'=>$this->input->post('paid_to'),
            'amount1'=>$this->input->post('amount1'),
            'amount2'=>$this->input->post('amount2'),
            'amount3'=>$this->input->post('amount3'),
            'total_amount'=>$this->input->post('total_amount'),
            'description1'=>$this->input->post('description1'),
            'description2'=>$this->input->post('description2'),
            'description3'=>$this->input->post('description3'),
            'created_at'=>$this->input->post('date'),
            'paid_to'=>$this->input->post('paidTo')
            );
        if($id!=null){
            $this->hr_m->updatePaymentVoucher($id,$data);
        }else
            $this->hr_m->insertPaymentVoucher($data);
        redirect('Hr/allvouchers');

    }   
    public function allvouchers(){
        $data['vouchers']=$this->hr_m->GetPaymentVouchers();
        $this->load->view('payment_vouchers',$data);

    }   
    public function label()
        {
            $this->load->view('label');
        }
}
?>