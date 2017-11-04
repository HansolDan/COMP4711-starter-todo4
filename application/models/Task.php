<?php

/**
 * Task entity class, with setter methods for each task property from tasks.csv
 * id,task,priority,size,group,deadline,status,flag
 */
class Task extends Entity
{
	var $id,
		$task,
		$priority,
		$size,
		$group,
		$deadline,
		$status,
		$flag;

	public function __construct()
	{
		parent::__construct();
	}

	public function setId($value)
	{
		if ((is_numeric($value)) && ($value > 0))
		{
			$this->id = $value;
		} else {
			return false;
		}
	}

	public function setTask($task, $value)
	{
		// alphanumeric, below 64 characters
		// check for spaces str_replace ' '  with  ''
		$value = str_replace(' ', '', $value);
		if ((ctype_alnum($value)) && (strlen($value) < 64))
		{
			$this->task = $value;
			return true;
		} else {
			// throw exception or handle error
			return false;
		}
	}

	public function setPriority($value)
	{
		// integer, positive, less than 4
		if ((is_numeric($value)) && ($value > 0) && ($value < 4))
		{
			$this->priority = $value;
			return true;
		} else {
			// throw exception or handle error
			return false;
		}
	}

	public function setSize($value)
	{
		// integer, positive, less than 4
		if ((is_numeric($value)) && ($value > 0) && ($value < 4))
		{
			$this->size = $value;
			return true;
		} else {
			// throw exception or handle error
			return false;
		}
	}

	public function setGroup($value)
	{
		// integer, positive, less than 5
		if ((is_numeric($value)) && ($value > 0) && ($value < 5))
		{
			$this->group = $value;
			return true;
		} else {
			// throw exception or handle error
			return false;
		}
	}

	public function setDeadline($value)
	{
		$this->deadline = $value;
		return true;
	}

	public function setStatus($value)
	{
		// has to be either 1 or 2
		if ((is_numeric($value)) && ($value > 0) && ($value < 3))
		{
			$this->status = $value;
			return true;
		} else {
			return false;
		}
	}

	public function setFlag($value)
	{
		if ((is_numeric($value)) && ($value == 1))
		{
			$this->flag = $value;
			return true;
		} else {
			return false;
		}
	}
}
