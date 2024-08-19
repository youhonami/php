<?php
function exam($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
        echo $total . "なので合格です";
    } else {
        echo $total . "なので不合格です";
    }
}
echo (exam(80, 60, 60));
