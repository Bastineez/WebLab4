<?php
// functions.php
function sumAndProduct($a, $b) {
    $sum = $a + $b;
    $product = $a * $b;
    return ["sum" => $sum, "product" => $product];
}

function sumOfSquares($a, $b) {
    return $a ** 2 + $b ** 2;
}

function average($a, $b, $c) {
    return ($a + $b + $c) / 3;
}

function calculateExpression($x, $y, $k) {
    return ($x + 1) ** 4 - 2 * ($k - 2 * $x ** 2 + $y ** 2);
}

function divisionsOfSums($a, $b, $c) {
    return [
        ($a + $b) / $c,
        ($a + $c) / $b,
        ($b + $c) / $a
    ];
}

function remainders($n) {
    return ["mod3" => $n % 3, "mod5" => $n % 5];
}

function increaseByPercent($n) {
    return ["plus30" => $n * 1.3, "plus120" => $n * 2.2];
}

function weightedSum($a, $b) {
    return $a * 0.4 + $b * 0.84;
}

function sumOfDigits($n) {
    $digits = str_split((string) abs($n));
    return array_sum($digits);
}

function replaceMiddleDigitWithZero($n) {
    $n = abs($n);
    $digits = str_split((string) $n);
    $digits[1] = 0;
    return (int) implode("", $digits);
}

function reverseNumber($n) {
    return (int) strrev((string) abs($n));
}

function dayOfWeek($day) {
    $days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    return $days[$day - 1] ?? "Invalid day";
}

function greetingByAge($age) {
    return $age > 80 ? "Вітаю, Вас, шановний" : "Успіхів!";
}

function highlightDay($day) {
    $days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    $output = "";
    foreach ($days as $index => $dayName) {
        if ($index + 1 == $day) {
            $output .= "<strong style='font-size:1.5em;color:red;'>$dayName</strong><br>";
        } else {
            $output .= "$dayName<br>";
        }
    }
    return $output;
}

function isTriangle($a, $b, $c) {
    return ($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a);
}

function generateSquare($x, $y, $sideLength) {
    $colors = ["red", "blue", "green", "yellow", "purple"];
    shuffle($colors);
    $bgColor = $colors[0];
    $borderColor = $colors[1];
    $squareColor = $colors[2];

    return "<div style='position:absolute; left:{$x}px; top:{$y}px; 
    width:{$sideLength}px; height:{$sideLength}px; background-color:$squareColor; 
    border:2px solid $borderColor;'></div><style>body{background-color:$bgColor;}</style>";
}

function drawCircles($size1, $size2, $color1, $color2) {
    $x1 = rand(50, 500);
    $y1 = rand(50, 500);
    $x2 = rand(50, 500);
    $y2 = rand(50, 500);

    return "<div style='position:absolute; left:{$x1}px; top:{$y1}px; 
    width:{$size1}px; height:{$size1}px; background-color:$color1; border-radius:50%;'></div>
    <div style='position:absolute; left:{$x2}px; top:{$y2}px; 
    width:{$size2}px; height:{$size2}px; background-color:$color2; border-radius:50%;'></div>";
}

function isPointInTriangle($x1, $y1, $x2, $y2, $x3, $y3) {
    $detT = abs($x1 * ($y2 - $y3) + $x2 * ($y3 - $y1) + $x3 * ($y1 - $y2));
    $det1 = abs(0 * ($y2 - $y3) + $x2 * ($y3 - 0) + $x3 * (0 - $y2));
    $det2 = abs($x1 * (0 - $y3) + 0 * ($y3 - $y1) + $x3 * ($y1 - 0));
    $det3 = abs($x1 * ($y2 - 0) + $x2 * (0 - $y1) + 0 * ($y1 - $y2));

    return $detT == $det1 + $det2 + $det3;
}

function isLuckyTicket($ticketNumber) {
    $ticket = str_pad($ticketNumber, 6, "0", STR_PAD_LEFT);
    $firstHalf = array_sum(str_split(substr($ticket, 0, 3)));
    $secondHalf = array_sum(str_split(substr($ticket, 3, 3)));
    return $firstHalf === $secondHalf;
}
?>