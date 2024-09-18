<?php
function calc_interest($loan_amount, $interest_rate = 5)
{
    $interest = $loan_amount * ($interest_rate / 100);
    echo "Loan Amount = \${$loan_amount} <br/>";
    echo "Interest: = {$interest_rate}% <br>";
    echo "Total Amount =  $" . $interest . "/year <br/>";

    echo '<hr>';
}

calc_interest(10000, 7);
