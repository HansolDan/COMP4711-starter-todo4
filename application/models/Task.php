<?php

/**
 * Task entity class, with setter methods for each task property from tasks.csv
 * id,task,priority,size,group,deadline,status,flag
 */
class Task extends Entity
{
	public function __construct()
	{
		parent::__construct();
	}

	public function setId($id, $value)
	{
		echo "<script>
				console.log('Setting $id to $value');
				</script>";
		if ((is_numeric($value)) && ($value > 0))
		{
			$this->data[$id] = $value;
		}
	}

	public function setTask($task, $value)
	{
		echo "<script>
				console.log('Setting $task to $value');
				</script>";
		// alphanumeric, below 64 characters
		// check for spaces str_replace ' '  with  ''
		$value = str_replace(' ', '', $value);
		if ((ctype_alnum($value)) && (strlen($value) < 64))
		{
            $this->data[$task] = $value;
        }
	}

	public function setPriority($priority, $value)
	{
		echo "<script>
				console.log('Setting $priority to $value');
				</script>";
		// integer, positive, less than 4
		if ((is_numeric($value)) && ($value > 0) && ($value < 4))
		{
            $this->data[$priority] = $value;
        }
	}

	public function setSize($size, $value)
	{
		echo "<script>
				console.log('Setting $size to $value');
				</script>";
		// integer, positive, less than 4
		if ((is_numeric($value)) && ($value > 0) && ($value < 4))
		{
            $this->data[$size] = $value;
        }
	}

	public function setGroup($group, $value)
	{
		echo "<script>
				console.log('Setting $group to $value');
				</script>";
		// integer, positive, less than 5
		if ((is_numeric($value)) && ($value > 0) && ($value < 5))
		{
			$this->data[$group] = $value;
		}
	}

	public function setDeadline($deadline, $value)
	{
		echo "<script>
				console.log('Setting $deadline to $value');
				</script>";
		$this->data[$deadline] = $value;
	}

	public function setStatus($status, $value)
	{
		echo "<script>
				console.log('Setting $status to $value');
				</script>";
		// has to be either 1 or 2
		if ((is_numeric($value)) && ($value > 0) && ($value < 3))
		{
            $this->data[$status] = $value;
        }
	}

	public function setFlag($flag, $value)
	{
		echo "<script>
				console.log('Setting $flag to $value');
				</script>";
		// has to be 1?
		if ((is_numeric($value)) && ($value == 1))
		{
            $this->data[$flag] = $value;
        }
	}
}
