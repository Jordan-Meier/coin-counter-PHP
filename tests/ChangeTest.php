<?php

    require_once "src/Change.php";

    class ChangeTest extends PHPUnit_Framework_TestCase
    {

        function test_calculatePennies()
        {
            //Arrange
            $test_Change = new Change;
            $input = 1;

            //Act
            $result = $test_Change->calculateChange($input);

            //Assert
            $this->assertEquals(
                array('pennies' => 1), $result);
        }

        function test_calculateTwoPennies()
        {
            //Arrange
            $test_Change = new Change;
            $input = 2;

            //Act
            $result = $test_Change->calculateChange($input);

            //Assert
            $this->assertEquals(
                array('pennies' => 2), $result);
        }

        function test_calculateOneNickel()
        {
            //Arrange
            $test_Change = new Change;
            $input = 5;

            //Act
            $result = $test_Change->calculateChange($input);

            //Assert
            $this->assertEquals(
                array('pennies' => 0, 'nickels' => 1), $result);
        }
        function test_calculateOneNickelThreePennies()
        {
            //Arrange
            $test_Change = new Change;
            $input = 8;

            //Act
            $result = $test_Change->calculateChange($input);

            //Assert
            $this->assertEquals(
                array('pennies' => 3, 'nickels' => 1), $result);
        }
        function test_calculateOneDime()
        {
            //Arrange
            $test_Change = new Change;
            $input = 10;

            //Act
            $result = $test_Change->calculateChange($input);

            //Assert
            $this->assertEquals(
                array('pennies' => 0, 'nickels' => 0, 'dimes' => 1), $result);
        }
        function test_calculateOneDimeOneNickelThreePennies()
        {
            //Arrange
            $test_Change = new Change;
            $input = 18;

            //Act
            $result = $test_Change->calculateChange($input);

            //Assert
            $this->assertEquals(
                array('pennies' => 3, 'nickels' => 1, 'dimes' => 1), $result);
        }






    }



?>
