<?php

class LoginController extends AppController
{
	public function index()
	{
		if ($this->isConnected) return $this->redirect('/');
		$this->set('title_for_layout', $this->Lang->get('USER__LOGIN'));
		return true;
	}
}
