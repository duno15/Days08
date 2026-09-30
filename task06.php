<?php
function sequence(int $n): void
{
    if ($n < 0) {
        return;
    }
    $current = "1";
    for ($i = 0; $i <= $n; $i++) {
        echo $current . "\n";
        $next = "";
        $len = strlen($current);
        $j = 0;
        while ($j < $len) {
            $digit = $current[$j];
            $count = 0;
            while ($j < $len && $current[$j] == $digit) {
                $count++;
                $j++;
            }
            $next .= $count . $digit;
        }
        $current = $next;
    }
}
