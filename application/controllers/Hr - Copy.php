<?php 

class hr extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('hr_m');
		$this->load->library('session');
		$this->load->helper('form', 'url');
		$this->load->library('form_validation');
	}

	function index($userid){
        
        $data["userid"] = $userid;
		// $data["cities"] = $this->hr_m->get_cities();
		// $this->load->view('include/header');
		// $this->load->view('include/footer');
		$this->load->view('employee-profile-fill',$data);
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

    public function hash($hash)
    {
        $hashed = $this->hr_m->hash($hash);
        echo $hashed;
    }
}
?>