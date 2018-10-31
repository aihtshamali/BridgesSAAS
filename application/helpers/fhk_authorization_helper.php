<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function fhkAuthContactDetails(){
	return "<br/>Contact your system administrator to resolve your issue. 
	<br/>Name: dummyPerson
	<br/>Contact: 0000-0000000
	<br/>Email: dummy@somedomain.com";
}

function fhkAuthTest() {
	echo "FHK Authentication Test";
}

function fhkCheckAuthentication(){
	if(!isset($_SESSION["id"]))
		return null;
	return $_SESSION["id"];
}

//fhk authorization middleware
function fhkCheckAuthRole($roles) {	

	if(!isset($_SESSION["Roles"]))
		return false;
		
	if (count(array_intersect($_SESSION["Roles"], $roles))==0)
		return false;

	return true;
}

function fhkCheckAuthPermission($permissions) {	

	if(!isset($_SESSION["Permissions"]))
		return false;

	if (count(array_intersect($_SESSION["Permissions"], $permissions))==0)
		return false;

	return true;
}

function fhkAuthPage($roles, $permissions) {

	if(fhkCheckAuthentication()===null)
		die("Not authenticated!");

	if($roles!==null) {
		if(!fhkCheckAuthRole($roles))
			die("You lack authorization role to perform this action.". fhkAuthContactDetails());			
	}
	if($permissions!==null) {
		if(!fhkCheckAuthPermission($permissions))
			die("You lack authorization permission to perform this action.". fhkAuthContactDetails());
		
	}
}

//====================================================================================
function fhkGenerateError($context, $heading, $message, $additional) {
	$context->load->view('errors/html/error_general', array(
		'heading' => $heading,
		'message' => $message,
		'additional' => $additional,
		'redirection' => base_url('')
	));
}

function fhkAuthPageExtended($roles, $permissions, $context) {

	if(fhkCheckAuthentication()===null) {
		fhkGenerateError($context, "Authentication error!", "Not authenticated", "");
	}

	if($roles!==null) {
		if(!fhkCheckAuthRole($roles)) {
			fhkGenerateError($context, "Authorization Role", "You lack authorization role to perform this action.", fhkAuthContactDetails());
		}
	}
	if($permissions!==null) {
		if(!fhkCheckAuthPermission($permissions)) {
			fhkGenerateError($context, "Authorization Permissions", "You lack authorization permission to perform this action.", fhkAuthContactDetails());
		}
	}
}
