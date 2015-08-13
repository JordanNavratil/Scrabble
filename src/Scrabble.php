<?php
    class Scrabble
    {
        function findScore($user_word)
        {
            $group1 = ['a', 'e', 'i', 'o' , 'u', 'l', 'n', 'r', 's', 't'];
            $group2 = ['d', 'g'];
            $result = 0;
            $user_letters = str_split($user_word);

            foreach ($user_letters as $letter) {
                if (in_array($letter, $group1)) {
                    $result = $result + 1;
                } elseif (in_array($letter, $group2)) {
                    $result = $result + 2;
                }


            }
            return $result;
        }

    }


?>
