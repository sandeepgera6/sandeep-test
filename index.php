<?php
$number1 = null;
$number2 = null;
$operation = 'add';
$result = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number1 = filter_input(INPUT_POST, 'number1', FILTER_VALIDATE_FLOAT);
    $number2 = filter_input(INPUT_POST, 'number2', FILTER_VALIDATE_FLOAT);
    $operation = $_POST['operation'] ?? 'add';

    if ($number1 === null || $number1 === false || $number2 === null || $number2 === false) {
        $error = 'Please enter valid numbers.';
    } else {
        switch ($operation) {
            case 'add':
                $result = $number1 + $number2;
                break;
            case 'subtract':
                $result = $number1 - $number2;
                break;
            case 'multiply':
                $result = $number1 * $number2;
                break;
            case 'divide':
                if ($number2 == 0.0) {
                    $error = 'Cannot divide by zero.';
                } else {
                    $result = $number1 / $number2;
                }
                break;
            default:
                $error = 'Unsupported operation.';
                break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 2rem auto;
            max-width: 480px;
            line-height: 1.5;
        }
        form {
            display: grid;
            gap: 0.75rem;
        }
        label {
            display: grid;
            gap: 0.25rem;
        }
        input, select, button {
            padding: 0.5rem;
            font-size: 1rem;
        }
        .result {
            margin-top: 1rem;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            background: #f7f7f7;
        }
        .error {
            color: #b30000;
        }
    </style>
</head>
<body>
    <h1>Simple PHP Calculator</h1>
    <p>Enter two numbers and choose an operation to see the result.</p>
    <form method="post">
        <label>
            First number
            <input type="number" name="number1" step="any" required value="<?= htmlspecialchars((string)($number1 ?? '')) ?>">
        </label>
        <label>
            Second number
            <input type="number" name="number2" step="any" required value="<?= htmlspecialchars((string)($number2 ?? '')) ?>">
        </label>
        <label>
            Operation
            <select name="operation">
                <option value="add" <?= $operation === 'add' ? 'selected' : '' ?>>Addition (+)</option>
                <option value="subtract" <?= $operation === 'subtract' ? 'selected' : '' ?>>Subtraction (-)</option>
                <option value="multiply" <?= $operation === 'multiply' ? 'selected' : '' ?>>Multiplication (×)</option>
                <option value="divide" <?= $operation === 'divide' ? 'selected' : '' ?>>Division (÷)</option>
            </select>
        </label>
        <button type="submit">Calculate</button>
    </form>

    <?php if ($error): ?>
        <div class="result error">Error: <?= htmlspecialchars($error) ?></div>
    <?php elseif ($result !== null): ?>
        <div class="result">Result: <?= htmlspecialchars((string)$result) ?></div>
    <?php endif; ?>
</body>
</html>
