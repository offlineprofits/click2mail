<?php
class Click2mail_Mailingonline_Api{

	public $client;
	protected $upload_url;
	protected $url;

	public function Click2mail_Mailingonline_Api($url, $username, $password){
		$this->url = $url;
		$this->client_app_id = $username;
		$this->client_app_pwd = $password;
		$this->upload_url = $this->url . "/upload.aspx?clientid=" . $username . "&clientpwd=" . $password;
		$this->client = new SoapClient($this->url . "/molapi.asmx?WSDL");
	}

	public function GetDocuments(){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd); 

		$response = $this->client-> __soapCall('GetDocuments',array($u));

		return $response;

	}

	public function GetDataTemplates(){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd); 

		$response = $this->client-> __soapCall('GetDataTemplates',array($u));

		return $response;

	}

	public function GetDataLists(){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd); 

		$response = $this->client-> __soapCall('GetDataLists',array($u));

		return $response;

	}

	public function GetProjects(){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd); 

		$response = $this->client-> __soapCall('GetProjects',array($u));

		return $response;

	}

	public function CreateDataList($template_id, $data){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'data_template_id' => $template_id,
					'calculate_persistent_values' => 1,
					'data' => $data); 

		$response = $this->client-> __soapCall('CreateDataList',array($u));

		return $response;

	}

	public function CreateDataListSimple($template_id, $data){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'data_template_id' => $template_id,
					'calculate_persistent_values' => 1,
					'xmlstring' => $data); 

		$response = $this->client-> __soapCall('CreateDataListSimple',array($u));

		return $response;

	}

	public function UploadFile($data){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'data_string' => $data);   
			
		$response = $this->client-> __soapCall('UploadFile',array($u));

		return $response;

	}

	public function UploadFileAppend($file_id, $data){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'file_id' => $file_id,
					'data' => $data); 

		$response = $this->client-> __soapCall('UploadFileAppend',array($u));

		return $response;

	}

	public function CreateDataList2($data_template_id, $data_list_name, $address_file_type, $upload_file_id){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'data_template_id' => $data_template_id,
					'data_list_name' => $data_list_name, 
					'address_file_type' => $address_file_type,
					'upload_file_id' => $upload_file_id); 

		$response = $this->client-> __soapCall('CreateDataList2',array($u));

		return $response;

	}

	public function CreateBitmapImage($image_name, $project_id, $image_file_type, $uploaded_file_id){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'image_name' => $image_name,
					'project_id' => $project_id, 
					'image_file_type' => $image_file_type,
					'uploaded_file_id' => $uploaded_file_id); 

		$response = $this->client-> __soapCall('CreateBitmapImage',array($u));

		return $response;

	}

	public function CheckListStatus($list_id){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'list_id' => $list_id); 

		$response = $this->client-> __soapCall('CheckListStatus',array($u));

		return $response;

	}

	public function SubmitJob($document_id, $data_list_id, $mailing_type_code, $testing){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'document_id' => $document_id,
					'data_list_id' => $data_list_id,
					'mailing_type_code' => $mailing_type_code); 
		if($testing == false){
		$response = $this->client-> __soapCall('SubmitJob',array($u));
	    }else{
		$response = $this->GenTestJobNumber();
	}

		return $response;

	}

	public function SubmitJob2($document_id, $data_list_id, $mailing_type_code, $preferred_schedule_date, $testing){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'document_id' => $document_id,
					'data_list_id' => $data_list_id,
					'mailing_type_code' => $mailing_type_code,
					'preferred_schedule_date' => $preferred_schedule_date,
					'billing_details' => $billing_details); 
	if($testing == false){
		$response = $this->client-> __soapCall('SubmitJob2',array($u));
	    }else{
		$response = $this->GenTestJobNumber();
	}
		return $response;

	}

	public function SubmitJob3($document_id, $data_list_id, $mailing_type_code, $preferred_schedule_date, $billing_details, $return_address, $testing){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'document_id' => $document_id,
					'data_list_id' => $data_list_id,
					'mailing_type_code' => $mailing_type_code,
					'preferred_schedule_date' => $preferred_schedule_date,
					'billing_details' => $billing_details,
					'return_address' => $return_address); 
	
	    if($testing == false){
		$response = $this->client-> __soapCall('SubmitJob3',array($u));
	    }else{
		$response = $this->GenTestJobNumber();
	}
		return $response;

	}

	public function CheckJobStatus($job_id){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'job_id' => $job_id); 

		$response = $this->client-> __soapCall('CheckJobStatus',array($u));

		return $response;

	}

	public function GetJobCost($job_id){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'job_id' => $job_id); 

		$response = $this->client-> __soapCall('GetJobCost',array($u));

		return $response;

	}

	public function SubmitPreview($document_id, $data_list_id){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'document_id' => $document_id,
					'data_list_id' => $data_list_id); 

		$response = $this->client-> __soapCall('SubmitPreview',array($u));

		return $response;

	}

	public function CheckPreviewStatus($preview_id){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'preview_id' => $preview_id); 

		$response = $this->client-> __soapCall('CheckPreviewStatus',array($u));

		return $response;

	}

	public function GetPreviewPDFURL($preview_id){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'preview_id' => $preview_id); 

		$response = $this->client-> __soapCall('GetPreviewPDFURL',array($u));

		return $response;

	}

	public function DeleteImage($image_id){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'image_id' => $image_id); 

		$response = $this->client-> __soapCall('DeleteImage',array($u));

		return $response;

	}

	public function DeleteList($list_id){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'list_id' => $list_id); 

		$response = $this->client-> __soapCall('DeleteImage',array($u));

		return $response;

	}

	public function CreateDocumentFromTemplate($new_document_name, $new_document_id, $image_file_type, $uploaded_file_id){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'new_document_name' => $new_document_name,
					'template_document_id' => $new_document_id,
					'image_file_type' => $image_file_type,
					'uploaded_file_id' => $uploaded_file_id); 

		$response = $this->client-> __soapCall('CreateDocumentFromTemplate',array($u));

		return $response;

	}

	public function CheckDocumentCreateStatus($document_creation_token){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'document_creation_token' => $document_creation_token);

		$response = $this->client-> __soapCall('CheckDocumentCreateStatus',array($u));

		return $response;

	}

	public function CompleteDocumentCreation($document_creation_token){
		$u = array('client_app_id' => $this->client_app_id,
					'client_app_pwd' => $this->client_app_pwd,
					'document_creation_token' => $document_creation_token);

		$response = $this->client-> __soapCall('CompleteDocumentCreation',array($u));

		return $response;

	}



	public function UploadDocument($filePath) {
		 
		$postParams["uplFile"] = "@" . $filePath;
		 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_URL, $this->upload_url);
		curl_setopt($ch, CURLOPT_POST, 1 );
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postParams);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);

		if (curl_errno($ch)) {
			print curl_error($ch);
			print "<br>Unable to upload file.";
			exit();
		}
		curl_close($ch);
		 
		return $response;

	}

	// Debug methods
	public function lastRequest(){
		return $this->client->__getLastRequest();
	}

	public function lastResponse(){
		return $this->client->__getLastResponse();
	}

	public function getApiMethods(){
		return $this->client->__getFunctions();
	}

	public function Debug($data){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
	
	public function GenTestJobNumber(){
		$obj = new stdClass();
		$obj->job_id = rand(00000001, 99999999);
		
		return $obj;
	}



}
