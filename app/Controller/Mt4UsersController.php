<?php
App::uses('AppController', 'Controller');
/**
 * Mt4Users Controller
 *
 * @property Mt4User $Mt4User
 */
class Mt4UsersController extends AppController {

/**
 * index method
 *
 * @return void
 */	
	public function trader() {
		$this->paginate = array('limit' => 30, 'order'=>'Mt4User.REGDATE desc', 'recursive'=>0);
		$mt4Users = $this->paginate('Mt4User', array('Mt4User.GROUP LIKE' => 'IK%'));
		$i=0;
		$this->set('mt4Users', $mt4Users);
		
		if($this->RequestHandler->isAjax()) {
			$this->layout = 'ajax';
			$this->render('/Elements/all_traders');
		}
	}

	public function partner() {
		$this->paginate = array('limit' => 30, 'order'=>'Mt4User.REGDATE desc', 'recursive'=>0);
		$mt4Users = $this->paginate('Mt4User', array('Mt4User.COMMENT LIKE' => 'ML%'));
		$i=0;
		$this->set('mt4Users', $mt4Users);

		if($this->RequestHandler->isAjax()) {
			$this->layout = 'ajax';
			$this->render('/Elements/all_partners');
		}

	}

	public function partner_client($acc = null) {
		$this->Mt4User->recursive = -1;
		$this->set('mt4Users', $this->paginate('Mt4User', array('Mt4User.AGENT_ACCOUNT LIKE' => ''.$acc.'%')));

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		if (!$this->Mt4User->exists($id)) {
			throw new NotFoundException(__('Invalid mt4 user'));
		}
		$options = array('conditions' => array('Mt4User.' . $this->Mt4User->primaryKey => $id));
		$this->set('mt4User', $this->Mt4User->find('first', $options));
		
		if ($this->request->is('post')) {
			$this->redirect(array('action' => 'index'));
		}
	}

}
