<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Basic Calculator</h1>
    <form method="post">
        <input type="text" name="num1" placeholder="Enter first number">
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="text" name="num2" placeholder="Enter second number">
        <input type="submit" name="calculate" value="Calculate">
    </form>

    
</body>
</html>

<?php 
    if(isset($_POST['calculate'])) {
        $num1 = floatval($_POST['num1']); // Convert to float to handle decimal inputs
        $num2 = floatval($_POST['num2']);
        $operator = $_POST['operator'];
        
        switch($operator) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            default:
                $result = "Invalid Operator";
        }
        echo "Result: " . $result;
    }
    ?>