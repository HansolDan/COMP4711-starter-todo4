<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Views controller interacting with the secondary view template.
 */
class Views extends Application
{

	public function index()
	{
		$this->data['pagetitle'] = 'Ordered TODO List';
		$tasks = $this->tasks->all();   // get all the tasks
		$this->data['content'] = 'Ok'; // so we don't need pagebody
		$this->data['leftside'] = 'by_priority';
		$this->data['rightside'] = 'by_category';

		$this->render('template_secondary');
	}

}
