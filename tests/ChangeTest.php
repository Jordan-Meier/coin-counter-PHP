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
            $this->assertEquals(
                array('quarters' =>3),$result);
            $this->assertEquals(
                array('quarters' =>5),$result2);
        }
        function test_calculateChange_dimes()
        {
            //Arrange
            $test_Change = new Change;
            $input = 95;
            $input2 = 125;
            $input3 = 20;

            //Act
            $result = $test_Change->calculateChange($input);
            $result2 = $test_Change->calculateChange($input2);
            $result2 = $test_Change->calculateChange($input3);

            //Assert
            $this->assertEquals(array('quarters' => 3, 'dimes' =>2), $result);
            $this->assertEquals(array('quarters' => 5, 'dimes' =>0), $result2);
            $this->assertEquals(array('quarters' => 0, 'dimes' =>2), $result3);
        }



    }



?>
