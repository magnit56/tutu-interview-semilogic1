<?php

function distributeSmoothies($m, $n) {
    return ($m == 0) ? 0 : ($n - $n % $m)/ $m;
}

$line = trim(fgets(STDIN));
[$m, $n] = explode(' ', $line);
print_r(distributeSmoothies($m, $n));