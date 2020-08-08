<?php

class LostPasswordController extends AppController
{
	public function index()
	{
		if ($this->isConnected) return $this->redirect('/');
		return true;
	}
}