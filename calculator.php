<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background: #f0f2f5; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .calculator { background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); width: 380px; }
        h2 { text-align: center; margin-bottom: 20px; color: #333; }
        label { display: block; margin-bottom: 5px; font-weight: bold; color: #555; }
        input[type="number"] { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 6px; font-size: 16px; }
        .buttons { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 15px; }
        button { padding: 12px; font-size: 16px; border: none; border-radius: 6px; cursor: pointer; color: #fff; font-weight: bold; }
        button[value="add"] { background: #4CAF50; }
        button[value="subtract"] { background: #2196F3; }
        button[value="multiply"] { background: #FF9800; }
        button[value="divide"] { background: #9C27B0; }
        button:hover { opacity: 0.85; }
        .result { text-align: center; padding: 15px; border-radius: 6px; font-size: 20px; font-weight: bold; }
        .result.success { background: #e8f5e9; color: #2e7d32; }
        .result.error { background: #ffebee; color: #c62828; }
    </style>
</head>
<body>
<div class="calculator">
    <h2>Simple Calculator</h2>
    <form method="post">
        <label for="num1">Number 1</label>
        <input type="number" name="num1" id="num1" step="any" required value="<?= htmlspecialchars($_POST['num1'] ?? '') ?>">

        <label for="num2">Number 2</label>
        <input type="number" name="num2" id="num2" step="any" required value="<?= htmlspecialchars($_POST['num2'] ?? '') ?>">

        <div class="buttons">
            <button type="submit" name="operation" value="add">+ Add</button>
            <button type="submit" name="operation" value="subtract">- Subtract</button>
            <button type="submit" name="operation" value="multiply">&times; Multiply</button>
            <button type="submit" name="operation" value="divide">&divide; Divide</button>
        </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = (float) $_POST['num1'];
        $num2 = (float) $_POST['num2'];
        $op = $_POST['operation'] ?? '';
        $error = '';
        $result = 0;
        $symbol = '';

        switch ($op) {
            case 'add':
                $result = $num1 + $num2;
                $symbol = '+';
                break;
            case 'subtract':
                $result = $num1 - $num2;
                $symbol = '-';
                break;
            case 'multiply':
                $result = $num1 * $num2;
                $symbol = '×';
                break;
            case 'divide':
                if ($num2 == 0) {
                    $error = 'Cannot divide by zero!';
                } else {
                    $result = $num1 / $num2;
                    $symbol = '÷';
                }
                break;
            default:
                $error = 'Invalid operation.';
        }

        if ($error) {
            echo "<div class='result error'>$error</div>";
        } else {
            echo "<div class='result success'>$num1 $symbol $num2 = $result</div>";
        }
    }
    ?>
</div>
</body>
</html>
