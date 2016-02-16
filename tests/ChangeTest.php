<?php

    require_once "src/Change.php";

    class ChangeTest extends PHPUnit_Framework_TestCase
    {

        function test_calculateChange_quarters()
        {
            //Arrange
            $test_Change = new Change;
            $input = 80;
            $input2 = 125;

            //Act
            $result = $test_Change->calculateChange($input);
            $result2 = $test_Change->calculateChange($input2);

            //Assert
            $this->assertEquals(3, $result);
            $this->assertEquals(5, $result2);
        }



    }



?>
