<?php

    class Change
    {
        function calculateChange($input_cents)
        {
            $quarters = $input_cents/25;
            return floor($quarters);

        }
    }


?>
