<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>PHP Calculator</h2>
    <form action="calculate.php" method="post">
        <input type="number" name="num1" required placeholder="First number">
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" required placeholder="Second number">
        <button type="submit">calculate</button>
    </form>
</body>
</html>