<?php

class RegisterController extends AppController
{
	public function index()
	{
		if ($this->isConnected) return $this->redirect('/');
		$this->set('title_for_layout', $this->Lang->get('USER__REGISTER'));
		return true;
	}
}
