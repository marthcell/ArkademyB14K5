<?php
function HighestProfit($n)
{

    if ($n == 0)

        return 0;

    else

        return ($n - 1) + HighestProfit($n - 1);
}

$n = 10;

echo(HighestProfit($n));
?>
