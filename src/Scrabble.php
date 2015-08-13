<?php
    class Scrabble
    {
        function findScore($user_word)
        {
            $group1 = ['a', 'e', 'i', 'o' , 'u', 'l', 'n', 'r', 's', 't'];
            $group2 = ['d', 'g'];
            $group3 = ['b', 'c', 'm', 'p'];
            $group4 = ['f', 'h', 'v', 'w', 'y'];
            $group5 = ['k'];
            $result = 0;
            $user_letters = str_split($user_word);

            foreach ($user_letters as $letter) {
                if (in_array($letter, $group1)) {
                    $result = $result + 1;
                } elseif (in_array($letter, $group2)) {
                    $result = $result + 2;
                } elseif (in_array($letter, $group3)) {
                    $result = $result +3;
                } elseif (in_array($letter, $group4)) {
                    $result = $result +4;
                } elseif (in_array($letter, $group)) {
                    $result = $result +5;

                }


            }
            return $result;
        }

    }


?>
