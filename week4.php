<?php
// ตรวจสอบการส่งฟอร์มสำหรับสูตรคูณ
$multiplicationResult = '';
$sumResult = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['multiply_number']) && $_POST['multiply_number'] !== '') {
        $number = intval($_POST['multiply_number']);
        $multiplicationResult = "สูตรคูณของจำนวน $number:<br>";
        for ($i = 1; $i <= 12; $i++) {
            $product = $number * $i;
            $multiplicationResult .= "$number x $i = $product<br>";
        }
    }

    if (isset($_POST['add_number1']) && isset($_POST['add_number2']) && $_POST['add_number1'] !== '' && $_POST['add_number2'] !== '') {
        $a = floatval($_POST['add_number1']);
        $b = floatval($_POST['add_number2']);
        $sum = $a + $b;
        $sumResult = "ผลบวกของ $a และ $b คือ: $sum";
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 4 - PHP แบบฟอร์ม</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        h1 { color: #333; }
        form { margin-bottom: 30px; padding: 20px; border: 1px solid #ccc; border-radius: 8px; max-width: 420px; }
        label { display: block; margin-bottom: 8px; font-weight: bold; }
        input[type="number"] { width: 100%; padding: 8px; margin-bottom: 12px; border: 1px solid #ccc; border-radius: 4px; }
        input[type="submit"] { padding: 10px 16px; background-color: #3498db; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
        input[type="submit"]:hover { background-color: #2980b9; }
        .result { margin-top: 20px; padding: 16px; background: #f4f4f4; border: 1px solid #ddd; border-radius: 6px; }
    </style>
</head>
<body>
    <h1>PHP ตัวอย่าง</h1>
    <form method="post">
        <h2>1) ป้อนตัวเลขแสดงสูตรคูณ</h2>
        <label for="multiply_number">ตัวเลข:</label>
        <input type="number" name="multiply_number" id="multiply_number" required>
        <input type="submit" value="แสดงสูตรคูณ">
    </form>

    <form method="post">
        <h2>2) ป้อนตัวเลข 2 ตัวเพื่อนำไปบวก</h2>
        <label for="add_number1">ตัวเลขตัวที่ 1:</label>
        <input type="number" name="add_number1" id="add_number1" step="any" required>
        <label for="add_number2">ตัวเลขตัวที่ 2:</label>
        <input type="number" name="add_number2" id="add_number2" step="any" required>
        <input type="submit" value="คำนวณผลบวก">
    </form>

    <?php if ($multiplicationResult !== ''): ?>
        <div class="result">
            <h3>ผลลัพธ์สูตรคูณ</h3>
            <p><?php echo $multiplicationResult; ?></p>
        </div>
    <?php endif; ?>

    <?php if ($sumResult !== ''): ?>
        <div class="result">
            <h3>ผลลัพธ์การบวก</h3>
            <p><?php echo $sumResult; ?></p>
        </div>
    <?php endif; ?>
</body>
</html>
