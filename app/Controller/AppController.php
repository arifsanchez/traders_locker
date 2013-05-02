<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {
	
	var $helpers = array('Form', 'Html', 'Session', 'Js', 'Usermgmt.UserAuth', 'Usermgmt.Image');
	public $components = array('Session', 'RequestHandler', 'Usermgmt.UserAuth','Security');
	function beforeFilter() {
		$this->userAuth();
	}
	private function userAuth() {
		$this->UserAuth->beforeFilter($this);
	}
}