<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_findScore_oneLetter()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $user_word = "a";

            //Act
            $result = $test_Scrabble->findScore($user_word);

            //Assert
            $this->assertEquals("1", $result);
        }

        function test_findScore_twoLetter()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $user_word = "an";

            //Act
            $result = $test_Scrabble->findScore($user_word);

            //Assert
            $this->assertEquals("2", $result);
        }

        function test_findScore_threeLetter()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $user_word = "egg";

            //Act
            $result = $test_Scrabble->findScore($user_word);

            //Assert
            $this->assertEquals("5", $result);
        }

        function test_findScore_fourLetter()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $user_word = "adbf";

            //Act
            $result = $test_Scrabble->findScore($user_word);

            //Assert
            $this->assertEquals("10", $result);
        }




    }
?>
