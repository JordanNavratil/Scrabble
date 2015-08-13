<?php
    class Scrabble
    {
        function findScore($user_word)
        {
            $group1 = ['a', 'e', 'i', 'o' , 'u', 'l', 'n', 'r', 's', 't'];
            $result = 0;
            foreach ($group1 as $letter) {
                if ($user_word == $letter) {
                    $result = $result + 1;
                }
            }

            return $result;

        }
    }

?>
