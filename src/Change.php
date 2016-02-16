<?php

    class Change
    {
        function calculateChange($input_cents)
        {
            $change_given = array();
            $change_given['quarters'] = floor($input_cents/25);
            $input_cents = $input_cents % 25;
            $change_given['dimes'] = floor($input_cents/10);
            $input_cents = $input_cents % 10;


            return $change_given;

        }


    }


?>
