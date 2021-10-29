<?php

function distributeSmoothies(int $m, int $n): int {
    return ($m == 0) ? 0 : ($n - $n % $m)/ $m;
}

$line = trim(fgets(STDIN));
[$m, $n] = explode(' ', $line);
print_r(distributeSmoothies((int) $m, (int) $n));