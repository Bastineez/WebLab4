<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function Demonstration</title>
</head>
<body>
    <h1>PHP Function Demonstration</h1>
    
<form method="post">
    <h2>1. Sum and Product</h2>
    <label>Number 1: <input type="number" name="sum_prod_a"></label>
    <label>Number 2: <input type="number" name="sum_prod_b"></label>
    <button type="submit" name="action" value="sum_and_product">Calculate</button>

    <h2>2. Sum of Squares</h2>
    <label>Number 1: <input type="number" name="sum_sq_a"></label>
    <label>Number 2: <input type="number" name="sum_sq_b"></label>
    <button type="submit" name="action" value="sum_of_squares">Calculate</button>

    <h2>3. Average</h2>
    <label>Number 1: <input type="number" name="avg_a"></label>
    <label>Number 2: <input type="number" name="avg_b"></label>
    <label>Number 3: <input type="number" name="avg_c"></label>
    <button type="submit" name="action" value="average">Calculate</button>

    <h2>4. Calculate Expression</h2>
    <label>X: <input type="number" name="calc_expr_x"></label>
    <label>Y: <input type="number" name="calc_expr_y"></label>
    <label>K: <input type="number" name="calc_expr_k"></label>
    <button type="submit" name="action" value="calculate_expression">Calculate</button>

    <h2>5. Divisions of Sums</h2>
    <label>Number 1: <input type="number" name="div_sum_a"></label>
    <label>Number 2: <input type="number" name="div_sum_b"></label>
    <label>Number 3: <input type="number" name="div_sum_c"></label>
    <button type="submit" name="action" value="divisions_of_sums">Calculate</button>

    <h2>6. Remainders</h2>
    <label>Number: <input type="number" name="remainders_n"></label>
    <button type="submit" name="action" value="remainders">Calculate</button>

    <h2>7. Increase by Percent</h2>
    <label>Number: <input type="number" name="percent_n"></label>
    <button type="submit" name="action" value="increase_by_percent">Calculate</button>

    <h2>8. Weighted Sum</h2>
    <label>Number 1: <input type="number" name="weighted_a"></label>
    <label>Number 2: <input type="number" name="weighted_b"></label>
    <button type="submit" name="action" value="weighted_sum">Calculate</button>

    <h2>9. Sum of Digits</h2>
    <label>Number: <input type="number" name="digits_n"></label>
    <button type="submit" name="action" value="sum_of_digits">Calculate</button>

    <h2>10. Replace Middle Digit</h2>
    <label>Number: <input type="number" name="replace_middle_n"></label>
    <button type="submit" name="action" value="replace_middle_digit">Calculate</button>

    <h2>11. Reverse Number</h2>
    <label>Number: <input type="number" name="reverse_n"></label>
    <button type="submit" name="action" value="reverse_number">Calculate</button>

    <h2>12. Day of Week</h2>
    <label>Day Number (1-7): <input type="number" name="day_number"></label>
    <button type="submit" name="action" value="day_of_week">Show Day</button>

    <h2>13. Greeting by Age</h2>
    <label>Age: <input type="number" name="age"></label>
    <button type="submit" name="action" value="greeting_by_age">Greet</button>

    <h2>14. Highlight Day</h2>
    <label>Day Number (1-7): <input type="number" name="highlight_day"></label>
    <button type="submit" name="action" value="highlight_day">Highlight</button>

    <h2>15. Triangle Validation</h2>
    <label>Side 1: <input type="number" name="side1"></label>
    <label>Side 2: <input type="number" name="side2"></label>
    <label>Side 3: <input type="number" name="side3"></label>
    <button type="submit" name="action" value="is_triangle">Validate</button>

    <h2>16. Generate Square</h2>
    <label>X: <input type="number" name="square_x"></label>
    <label>Y: <input type="number" name="square_y"></label>
    <label>Side Length: <input type="number" name="square_length"></label>
    <button type="submit" name="action" value="generate_square">Generate</button>

    <h2>17. Draw Circles</h2>
    <label>Size 1: <input type="number" name="circle_size1"></label>
    <label>Color 1: <input type="text" name="circle_color1"></label>
    <label>Size 2: <input type="number" name="circle_size2"></label>
    <label>Color 2: <input type="text" name="circle_color2"></label>
    <button type="submit" name="action" value="draw_circles">Draw</button>

    <h2>18. Point in Triangle</h2>
    <label>X1: <input type="number" name="x1"></label>
    <label>Y1: <input type="number" name="y1"></label>
    <label>X2: <input type="number" name="x2"></label>
    <label>Y2: <input type="number" name="y2"></label>
    <label>X3: <input type="number" name="x3"></label>
    <label>Y3: <input type="number" name="y3"></label>
    <button type="submit" name="action" value="point_in_triangle">Check</button>

    <h2>19. Lucky Ticket</h2>
    <label>Ticket Number: <input type="number" name="ticket_number"></label>
    <button type="submit" name="action" value="is_lucky_ticket">Check</button>
</form>


    <?php
    include 'functions.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $action = $_POST['action'] ?? '';

        switch ($action) {
            case 'sum_and_product':
                $result = sumAndProduct($_POST['sum_prod_a'], $_POST['sum_prod_b']);
                echo "<h3>Result: Sum = {$result['sum']}, Product = {$result['product']}</h3>";
                break;

            case 'sum_of_squares':
                echo "<h3>Result: " . sumOfSquares($_POST['sum_sq_a'], $_POST['sum_sq_b']) . "</h3>";
                break;

            case 'average':
                echo "<h3>Result: " . average($_POST['avg_a'], $_POST['avg_b'], $_POST['avg_c']) . "</h3>";
                break;

            case 'calculate_expression':
                echo "<h3>Result: " . calculateExpression($_POST['calc_expr_x'], $_POST['calc_expr_y'], $_POST['calc_expr_k']) . "</h3>";
                break;

            case 'divisions_of_sums':
                $results = divisionsOfSums($_POST['div_sum_a'], $_POST['div_sum_b'], $_POST['div_sum_c']);
                echo "<h3>Results: " . implode(', ', $results) . "</h3>";
                break;

            case 'remainders':
                $remainders = remainders($_POST['remainders_n']);
                echo "<h3>Remainders: Mod 3 = {$remainders['mod3']}, Mod 5 = {$remainders['mod5']}</h3>";
                break;

            case 'increase_by_percent':
                $increases = increaseByPercent($_POST['percent_n']);
                echo "<h3>Results: +30% = {$increases['plus30']}, +120% = {$increases['plus120']}</h3>";
                break;

            case 'weighted_sum':
                echo "<h3>Result: " . weightedSum($_POST['weighted_a'], $_POST['weighted_b']) . "</h3>";
                break;

            case 'sum_of_digits':
                echo "<h3>Result: " . sumOfDigits($_POST['digits_n']) . "</h3>";
                break;

            case 'replace_middle_digit':
                echo "<h3>Result: " . replaceMiddleDigitWithZero($_POST['replace_middle_n']) . "</h3>";
                break;

            case 'reverse_number':
                echo "<h3>Result: " . reverseNumber($_POST['reverse_n']) . "</h3>";
                break;
            
            case 'day_of_week':
                echo "Day: " . dayOfWeek($_POST['day_number']) . "<br>";
                break;
    
            case 'greeting_by_age':
                echo greetingByAge($_POST['age']) . "<br>";
                break;
    
            case 'highlight_day':
                echo highlightDay($_POST['highlight_day']);
                break;
    
            case 'is_triangle':
                $isValid = isTriangle($_POST['side1'], $_POST['side2'], $_POST['side3']);
                echo $isValid ? "Yes, it's a valid triangle." : "No, it's not a valid triangle.";
                break;
    
            case 'generate_square':
                echo generateSquare($_POST['square_x'], $_POST['square_y'], $_POST['square_length']);
                break;
    
             case 'draw_circles':
                echo drawCircles($_POST['circle_size1'], $_POST['circle_size2'], $_POST['circle_color1'], $_POST['circle_color2']);
                break;
    
            case 'point_in_triangle':
                $inTriangle = isPointInTriangle($_POST['x1'], $_POST['y1'], $_POST['x2'], $_POST['y2'], $_POST['x3'], $_POST['y3']);
                echo $inTriangle ? "Yes, the point is inside the triangle." : "No, the point is outside the triangle.";
                break;
    
            case 'is_lucky_ticket':
                $isLucky = isLuckyTicket($_POST['ticket_number']);
                echo $isLucky ? "Yes, it's a lucky ticket!" : "No, it's not a lucky ticket.";
                break;
    
            default:
                echo "Invalid action!";
            }
        }
    ?>

</body>
</html>