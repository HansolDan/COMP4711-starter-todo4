<?php

/**
 * Task Model specifying /data/tasks.csv as the table and id as the primary key
 */
class Tasks extends CSV_Model {

	public function __construct()
	{
		parent::__construct(APPPATH . '../data/tasks.csv', 'id');
	}

}
