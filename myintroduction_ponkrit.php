<?php
  // ข้อมูลส่วนตัว
  $title = "นาย";
  $name = "พลกฤษ คำงาม";
  $fullName = $title . $name;
  $nameEng = "Mr. Ponkrit Khumngam";
  $department = "แผนกเทคโนโลยีสารสนเทศ";
  $departmentEng = "Information Technology Department";
  $studentId = "69319010011";
  $age = 18;
  $school = "โรงเรียน/วิทยาลัย";
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แนะนำตัว - <?php echo $fullName; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', 'Sarabun', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.4);
            max-width: 700px;
            padding: 50px;
            animation: slideUp 0.6s ease-out;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .header {
            text-align: center;
            margin-bottom: 40px;
            border-bottom: 3px solid #1e3c72;
            padding-bottom: 25px;
        }
        
        .avatar {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 50px;
            margin: 0 auto 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .header h1 {
            color: #1e3c72;
            font-size: 36px;
            margin-bottom: 8px;
            font-weight: 700;
        }
        
        .header p {
            color: #666;
            font-size: 16px;
            margin-bottom: 5px;
        }
        
        .header .dept {
            color: #2a5298;
            font-size: 16px;
            font-weight: 600;
            margin-top: 10px;
        }
        
        .info-section {
            margin-bottom: 30px;
        }
        
        .info-section h2 {
            color: #fff;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            font-size: 18px;
            padding: 12px 16px;
            margin-bottom: 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
        }
        
        .info-section h2 .emoji {
            margin-right: 10px;
            font-size: 24px;
        }
        
        .info-row {
            display: flex;
            padding: 12px;
            background: #f8f9fa;
            margin-bottom: 10px;
            border-radius: 8px;
            border-left: 4px solid #2a5298;
            transition: all 0.3s ease;
        }
        
        .info-row:hover {
            background: #e8f0ff;
            transform: translateX(5px);
        }
        
        .info-label {
            font-weight: 700;
            color: #1e3c72;
            width: 120px;
            min-width: 120px;
        }
        
        .info-value {
            color: #333;
            flex: 1;
            line-height: 1.6;
        }
        
        .info-value-en {
            color: #666;
            font-size: 14px;
            margin-top: 3px;
        }
        
        .badge {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin: 5px 5px 5px 0;
        }
        
        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 25px;
            border-top: 2px solid #e0e0e0;
            color: #999;
            font-size: 14px;
        }
        
        .footer p {
            margin-bottom: 8px;
        }
        
        .divider {
            height: 2px;
            background: linear-gradient(to right, transparent, #2a5298, transparent);
            margin: 25px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- ส่วนหัว -->
        <div class="header">
            <div class="avatar">👨</div>
            <h1><?php echo $fullName; ?></h1>
            <p><?php echo $nameEng; ?></p>
            <div class="dept"><?php echo $department; ?></div>
            <p style="color: #999; font-size: 14px; margin-top: 5px;"><?php echo $departmentEng; ?></p>
        </div>
        
        <!-- ข้อมูลส่วนตัว -->
        <div class="info-section">
            <h2>
                <span class="emoji">📋</span>ข้อมูลส่วนตัว
            </h2>
            <div class="info-row">
                <span class="info-label">ชื่อ-สกุล:</span>
                <div class="info-value">
                    <?php echo $fullName; ?>
                    <div class="info-value-en"><?php echo $nameEng; ?></div>
                </div>
            </div>
            <div class="info-row">
                <span class="info-label">อายุ:</span>
                <div class="info-value"><?php echo $age; ?> ปี</div>
            </div>
            <div class="info-row">
                <span class="info-label">รหัสนักศึกษา:</span>
                <div class="info-value"><?php echo $studentId; ?></div>
            </div>
        </div>
        
        <div class="divider"></div>
        
        <!-- ข้อมูลการศึกษา -->
        <div class="info-section">
            <h2>
                <span class="emoji">🎓</span>ข้อมูลการศึกษา
            </h2>
            <div class="info-row">
                <span class="info-label">แผนก:</span>
                <div class="info-value">
                    <?php echo $department; ?>
                    <div class="info-value-en"><?php echo $departmentEng; ?></div>
                </div>
            </div>
            <div class="info-row">
                <span class="info-label">สถานที่:</span>
                <div class="info-value"><?php echo $school; ?></div>
            </div>
        </div>
        
        <div class="divider"></div>
        
        <!-- ทักษะและลักษณะ -->
        <div class="info-section">
            <h2>
                <span class="emoji">⭐</span>ลักษณะเด่น
            </h2>
            <div style="padding: 12px;">
                <span class="badge">☑ การเรียนรู้</span>
                <span class="badge">☑ ความซื่อสัตย์</span>
                <span class="badge">☑ ความมุ่งมั่น</span>
                <br>
                <span class="badge">☑ การทำงานเป็นทีม</span>
                <span class="badge">☑ นักสำรวจ</span>
                <span class="badge">☑ อดทนรอบคอบ</span>
            </div>
        </div>
        
        <!-- ส่วนท้าย -->
        <div class="footer">
            <p>📧 Email: ponkrit@student.edu.th</p>
            <p>📱 Tel: 06-XXXX-XXXX</p>
            <p style="margin-top: 15px; font-size: 13px;">สร้างด้วย PHP &hearts; | <?php echo date("Y-m-d H:i:s"); ?></p>
        </div>
    </div>
</body>
</html>