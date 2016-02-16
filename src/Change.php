<?php

    class Change
    {
        function calculateChange($input_cents)
        {
            if($input_cents >=25) {
                $output = array('pennies' => 0, 'nickels' => 0, 'dimes' => 0, 'quarters' => floor($input_cents/25));
                $remainder = $input_cents % 25;
                $output['dimes'] = floor($remainder/10);
                $remainder = $remainder % 10;
                $output['nickels'] = floor($remainder/5);
                $remainder = $remainder % 5;
                $output['pennies'] = $remainder;
            } elseif($input_cents >=10 && $input_cents < 25) {
                $output = array('pennies' => 0, 'nickels' => 0, 'dimes' => floor($input_cents/10));
                $remainder = $input_cents % 10;
                $output['nickels'] = floor($remainder/5);
                $remainder = $remainder % 5;
                $output['pennies'] = $remainder;
            } elseif ($input_cents >= 5 && $input_cents < 10) {
                $output = array('pennies' => 0, 'nickels' => floor($input_cents/5));
                $remainder = $input_cents % 5;
                $output['pennies'] = $remainder;
            } else {
                $output = array('pennies' => $input_cents);
            }
            return $output;
        }


    }


?>
