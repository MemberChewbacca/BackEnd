<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

	public function index()
	{
		$result = 'IT\'S A TRAP!';
		$this->data['content'] = $result;
		$this->render();
	}

}
