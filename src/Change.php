<?php

    class Change
    {
        function calculateChange($input_cents)
        {
            if ($input_cents >= 5) {
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
