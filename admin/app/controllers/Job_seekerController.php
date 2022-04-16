<?php 
/**
 * Job_seeker Page Controller
 * @category  Controller
 */
class Job_seekerController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "job_seeker";
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function index($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("id", 
			"name", 
			"nrc_no", 
			"email", 
			"phone", 
			"age", 
			"gender", 
			"registration_date", 
			"passport", 
			"expire_date");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				job_seeker.id LIKE ? OR 
				job_seeker.name LIKE ? OR 
				job_seeker.nrc_no LIKE ? OR 
				job_seeker.email LIKE ? OR 
				job_seeker.phone LIKE ? OR 
				job_seeker.date_of_birth LIKE ? OR 
				job_seeker.age LIKE ? OR 
				job_seeker.gender LIKE ? OR 
				job_seeker.health_status LIKE ? OR 
				job_seeker.height LIKE ? OR 
				job_seeker.weight LIKE ? OR 
				job_seeker.education LIKE ? OR 
				job_seeker.skill LIKE ? OR 
				job_seeker.current_address LIKE ? OR 
				job_seeker.registration_date LIKE ? OR 
				job_seeker.language LIKE ? OR 
				job_seeker.passport LIKE ? OR 
				job_seeker.expire_date LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "job_seeker/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("job_seeker.id", ORDER_TYPE);
		}
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $pagination, $fields);
		$records_count = count($records);
		$total_records = intval($tc->totalCount);
		$page_limit = $pagination[1];
		$total_pages = ceil($total_records / $page_limit);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = $records_count;
		$data->total_records = $total_records;
		$data->total_page = $total_pages;
		if($db->getLastError()){
			$this->set_page_error();
		}
		$page_title = $this->view->page_title = "Job Seeker";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("job_seeker/list.php", $data); //render the full page
	}
	/**
     * View record detail 
	 * @param $rec_id (select record by table primary key) 
     * @param $value value (select record by value of field name(rec_id))
     * @return BaseView
     */
	function view($rec_id = null, $value = null){
		$request = $this->request;
		$db = $this->GetModel();
		$rec_id = $this->rec_id = urldecode($rec_id);
		$tablename = $this->tablename;
		$fields = array("id", 
			"name", 
			"nrc_no", 
			"email", 
			"phone", 
			"date_of_birth", 
			"age", 
			"gender", 
			"health_status", 
			"height", 
			"weight", 
			"education", 
			"skill", 
			"current_address", 
			"registration_date", 
			"language", 
			"passport", 
			"expire_date");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("job_seeker.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Job Seeker";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		}
		else{
			if($db->getLastError()){
				$this->set_page_error();
			}
			else{
				$this->set_page_error("No record found");
			}
		}
		return $this->render_view("job_seeker/view.php", $record);
	}
	/**
     * Insert new record to the database table
	 * @param $formdata array() from $_POST
     * @return BaseView
     */
	function add($formdata = null){
		if($formdata){
			$db = $this->GetModel();
			$tablename = $this->tablename;
			$request = $this->request;
			//fillable fields
			$fields = $this->fields = array("name","nrc_no","email","phone","date_of_birth","age","gender","health_status","height","weight","education","skill","current_address","registration_date","language","passport","expire_date");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'name' => 'required',
				'nrc_no' => 'required',
				'email' => 'required|valid_email',
				'phone' => 'required',
				'date_of_birth' => 'required',
				'age' => 'required',
				'gender' => 'required',
				'health_status' => 'required',
				'height' => 'required',
				'weight' => 'required',
				'education' => 'required',
				'skill' => 'required',
				'current_address' => 'required',
				'registration_date' => 'required',
				'language' => 'required',
				'passport' => 'required',
				'expire_date' => 'required',
			);
			$this->sanitize_array = array(
				'name' => 'sanitize_string',
				'nrc_no' => 'sanitize_string',
				'email' => 'sanitize_string',
				'phone' => 'sanitize_string',
				'date_of_birth' => 'sanitize_string',
				'age' => 'sanitize_string',
				'gender' => 'sanitize_string',
				'health_status' => 'sanitize_string',
				'height' => 'sanitize_string',
				'weight' => 'sanitize_string',
				'education' => 'sanitize_string',
				'skill' => 'sanitize_string',
				'current_address' => 'sanitize_string',
				'registration_date' => 'sanitize_string',
				'language' => 'sanitize_string',
				'passport' => 'sanitize_string',
				'expire_date' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("job_seeker");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Job Seeker";
		$this->render_view("job_seeker/add.php");
	}
	/**
     * Update table record with formdata
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function edit($rec_id = null, $formdata = null){
		$request = $this->request;
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		 //editable fields
		$fields = $this->fields = array("id","name","nrc_no","email","phone","date_of_birth","age","gender","health_status","height","weight","education","skill","current_address","registration_date","language","passport","expire_date");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'name' => 'required',
				'nrc_no' => 'required',
				'email' => 'required|valid_email',
				'phone' => 'required',
				'date_of_birth' => 'required',
				'age' => 'required',
				'gender' => 'required',
				'health_status' => 'required',
				'height' => 'required',
				'weight' => 'required',
				'education' => 'required',
				'skill' => 'required',
				'current_address' => 'required',
				'registration_date' => 'required',
				'language' => 'required',
				'passport' => 'required',
				'expire_date' => 'required',
			);
			$this->sanitize_array = array(
				'name' => 'sanitize_string',
				'nrc_no' => 'sanitize_string',
				'email' => 'sanitize_string',
				'phone' => 'sanitize_string',
				'date_of_birth' => 'sanitize_string',
				'age' => 'sanitize_string',
				'gender' => 'sanitize_string',
				'health_status' => 'sanitize_string',
				'height' => 'sanitize_string',
				'weight' => 'sanitize_string',
				'education' => 'sanitize_string',
				'skill' => 'sanitize_string',
				'current_address' => 'sanitize_string',
				'registration_date' => 'sanitize_string',
				'language' => 'sanitize_string',
				'passport' => 'sanitize_string',
				'expire_date' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("job_seeker.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("job_seeker");
				}
				else{
					if($db->getLastError()){
						$this->set_page_error();
					}
					elseif(!$numRows){
						//not an error, but no record was updated
						$page_error = "No record updated";
						$this->set_page_error($page_error);
						$this->set_flash_msg($page_error, "warning");
						return	$this->redirect("job_seeker");
					}
				}
			}
		}
		$db->where("job_seeker.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Job Seeker";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("job_seeker/edit.php", $data);
	}
	/**
     * Update single field
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function editfield($rec_id = null, $formdata = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		//editable fields
		$fields = $this->fields = array("id","name","nrc_no","email","phone","date_of_birth","age","gender","health_status","height","weight","education","skill","current_address","registration_date","language","passport","expire_date");
		$page_error = null;
		if($formdata){
			$postdata = array();
			$fieldname = $formdata['name'];
			$fieldvalue = $formdata['value'];
			$postdata[$fieldname] = $fieldvalue;
			$postdata = $this->format_request_data($postdata);
			$this->rules_array = array(
				'name' => 'required',
				'nrc_no' => 'required',
				'email' => 'required|valid_email',
				'phone' => 'required',
				'date_of_birth' => 'required',
				'age' => 'required',
				'gender' => 'required',
				'health_status' => 'required',
				'height' => 'required',
				'weight' => 'required',
				'education' => 'required',
				'skill' => 'required',
				'current_address' => 'required',
				'registration_date' => 'required',
				'language' => 'required',
				'passport' => 'required',
				'expire_date' => 'required',
			);
			$this->sanitize_array = array(
				'name' => 'sanitize_string',
				'nrc_no' => 'sanitize_string',
				'email' => 'sanitize_string',
				'phone' => 'sanitize_string',
				'date_of_birth' => 'sanitize_string',
				'age' => 'sanitize_string',
				'gender' => 'sanitize_string',
				'health_status' => 'sanitize_string',
				'height' => 'sanitize_string',
				'weight' => 'sanitize_string',
				'education' => 'sanitize_string',
				'skill' => 'sanitize_string',
				'current_address' => 'sanitize_string',
				'registration_date' => 'sanitize_string',
				'language' => 'sanitize_string',
				'passport' => 'sanitize_string',
				'expire_date' => 'sanitize_string',
			);
			$this->filter_rules = true; //filter validation rules by excluding fields not in the formdata
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("job_seeker.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount();
				if($bool && $numRows){
					return render_json(
						array(
							'num_rows' =>$numRows,
							'rec_id' =>$rec_id,
						)
					);
				}
				else{
					if($db->getLastError()){
						$page_error = $db->getLastError();
					}
					elseif(!$numRows){
						$page_error = "No record updated";
					}
					render_error($page_error);
				}
			}
			else{
				render_error($this->view->page_error);
			}
		}
		return null;
	}
	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
     * @return BaseView
     */
	function delete($rec_id = null){
		Csrf::cross_check();
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$this->rec_id = $rec_id;
		//form multiple delete, split record id separated by comma into array
		$arr_rec_id = array_map('trim', explode(",", $rec_id));
		$db->where("job_seeker.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("job_seeker");
	}
}
