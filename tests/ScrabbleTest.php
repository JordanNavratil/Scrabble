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

    }
?>
