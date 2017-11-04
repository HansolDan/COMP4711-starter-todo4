
<?php

require_once '../application/models/Task.php';

class TaskTest extends PHPUnit_Framework_TestCase
{
    private $CI;
    private $task;

    public function setUp()
    {
        $this->CI = &get_instance();
        $this->task = new Task;
    }

    // Test Task Id
    public function testSetId()
    {
       // Valid test Id
        $this->task->Id = 2;
        $this->assertEquals(2, $this->task->task);

        // Invalid test Id (No numeric type)
        $this->task->Id = "2";
        $this->assertEquals("2", $this->task->task);
    }

    // Test for task name
    public function testSetTask()
    {
        // This is valid name.
        $this->task->Task="This is valid name.";
        $this->assertEquals("This is valid name.", $this->task->task);

        // This is invalid name
        $this->task->Task="This is test task name, this shouldn't work -------------------------------------------------";
        $this->assertEquals("his is test task name, this shouldn't work -------------------------------------------------", $this->task->task);

        // Valid example at the maximum character limit.
        $this->task->Task="63 Character limit... This should work with 63 characters------";
        $this->assertEquals("63 Character limit... This should work with 63 characters------", $this->task->task);

    }

    // Test for Priority
    public function testSetPriority()
    {
        // 3 Valid Priority
        $this->task->Priority = 3;
        $this->assertEquals(3, $this->task->priority);

        // '3' InValid Priority - not a number
        $this->task->Priority = '3';
        $this->assertEquals('3', $this->task->priority);

        // 4 is invalid priority.
        $this->task->Priority = 4;
        $this->assertEquals(4, $this->task->priority);

        // -1 is invalid priority
        $this->task->Priority = -1;
        $this->assertEquals(-1, $this->task->priority);
    }


    // Test for size
    public function testSetSize()
    {
        // 3 valid size.
        $this->task->Size = 3;
        $this->assertEquals(3, $this->task->size);

        // '3' is invalid  size - not a number
        $this->task->Size = '3';
        $this->assertEquals('3', $this->task->size);

        // 4 is invalid  size.
        $this->task->Size = 4;
        $this->assertEquals(4, $this->task->size);

        // -1 is invalid size
        $this->task->Size = -1;
        $this->assertEquals(-1, $this->task->size);
    }


    // Test for Group
    public function testSetGroup()
    {
        // 4 is valid group.
        $this->task->Group = 4;
        $this->assertEquals(4, $this->task->group);

        // 1 is valid group.
        $this->task->Group = 1;
        $this->assertEquals(1, $this->task->group);

        // '4' is invalid group - not a number
        $this->task->Group = '4';
        $this->assertEquals('4', $this->task->group);

        // 5 is invalid  group
        $this->task->Group= 5;
        $this->assertEquals(5, $this->task->group);

        // -1 is invalid  group
        $this->task->Group = -1;
        $this->assertEquals(-1, $this->task->group);

    }


    // Test for Status
    public function testSetStatus()
    {
        // 2 is valid Status.
        $this->task->Status = 2;
        $this->assertEquals(2, $this->task->status);

        // '2' is invalid Status - not a number
        $this->task->Status = '2';
        $this->assertEquals('2', $this->task->status);

        // 3 is invalid Status
        $this->task->Status = 3;
        $this->assertEquals(3, $this->task->status);

        // -1 is invalid Status
        $this->task->Status = -1;
        $this->assertEquals(-1, $this->task->status);

    }

    /*
     * if ((is_numeric($value)) && ($value == 1))
		{
            $this->data[$flag] = $value;
        }


     */
    // Test for Flag
    public function testSetFlag()
    {
        // 1 is valid Flag.
        $this->task->Flag = 1;
        $this->assertEquals(1, $this->task->flag);

        // '1' is invalid Flag - not a number
        $this->task->Flag = '1';
        $this->assertEquals('1', $this->task->flag);

        // 3 is invalid Flag
        $this->task->Flag = 3;
        $this->assertEquals(3, $this->task->flag);

    }
}
