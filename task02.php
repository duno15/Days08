<?php
function dog_bark(int $woof_nb)
{
    $woofs = array();
    for ($i = 0; $i < $woof_nb; $i++) {
        $woofs[] = "woof";
    }
    echo implode(" ", $woofs) . "\n";
}
