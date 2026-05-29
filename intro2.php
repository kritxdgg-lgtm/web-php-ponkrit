<?php
  $name = "พลกฤษ คำงาม";
  $nameEng = "Ponkrit Khumngam";
  $age = 20;
  $career = "นักพัฒนาซอฟต์แวร์";
  $hobbies = array("โปรแกรมมิ่ง", "การออกแบบเว็บ", "เรียนรู้เทคโนโลยีใหม่");
  $skills = array("PHP", "JavaScript", "HTML/CSS", "MySQL");
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แนะนำตัวเอง - <?php echo $nameEng; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            padding: 40px;
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .header h1 {
            color: #333;
            font-size: 32px;
            margin-bottom: 10px;
        }
        
        .header p {
            color: #666;
            font-size: 18px;
            margin-bottom: 5px;
        }
        
        .info-section {
            margin-bottom: 25px;
        }
        
        .info-section h2 {
            color: #667eea;
            font-size: 18px;
            margin-bottom: 10px;
            border-bottom: 2px solid #667eea;
            padding-bottom: 8px;
        }
        
        .info-item {
            margin-bottom: 10px;
            color: #555;
            line-height: 1.6;
        }
        
        .info-item strong {
            color: #333;
        }
        
        .skills-list, .hobbies-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        
        .skill-tag, .hobby-tag {
            background: #f0f0f0;
            color: #333;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            border: 1px solid #ddd;
        }
        
        .skill-tag {
            background: #e8eaf6;
            border: 1px solid #667eea;
            color: #667eea;
        }
        
        .hobby-tag {
            background: #f3e5f5;
            border: 1px solid #764ba2;
            color: #764ba2;
        }
        
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #999;
            font-size: 14px;
        }
        
        .emoji {
            font-size: 20px;
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><span class="emoji">👋</span><?php echo $name; ?></h1>
            <p><?php echo $nameEng; ?></p>
            <p><?php echo $career; ?></p>
        </div>
        
        <div class="info-section">
            <h2><span class="emoji">📋</span>ข้อมูลส่วนตัว</h2>
            <div class="info-item">
                <strong>ชื่อ (ไทย):</strong> <?php echo $name; ?>
            </div>
            <div class="info-item">
                <strong>ชื่อ (English):</strong> <?php echo $nameEng; ?>
            </div>
            <div class="info-item">
                <strong>อายุ:</strong> <?php echo $age; ?> ปี
            </div>
            <div class="info-item">
                <strong>อาชีพ:</strong> <?php echo $career; ?>
            </div>
        </div>
        
        <div class="info-section">
            <h2><span class="emoji">🎯</span>ทักษะ</h2>
            <div class="skills-list">
                <?php foreach($skills as $skill): ?>
                    <span class="skill-tag"><?php echo $skill; ?></span>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="info-section">
            <h2><span class="emoji">🎨</span>งานอดิเรก</h2>
            <div class="hobbies-list">
                <?php foreach($hobbies as $hobby): ?>
                    <span class="hobby-tag"><?php echo $hobby; ?></span>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="footer">
            <p>สร้างด้วย PHP &hearts; | <?php echo date("Y"); ?></p>
        </div>
    </div>
</body>
</html>