<!DOCTYPE html>
<html>
<head>
    <title>🏋️ Gym Management</title>
    <meta charset="UTF-8">
    <style>
        *{margin:0;padding:0;box-sizing:border-box;}
        body{font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;background:linear-gradient(135deg,#667eea 0%,#764ba2 100%);min-height:100vh;display:flex;align-items:center;justify-content:center;}
        .container{max-width:600px;width:100%;background:white;border-radius:20px;padding:40px;box-shadow:0 20px 40px rgba(0,0,0,0.1);}
        h1{text-align:center;color:#333;margin-bottom:40px;font-size:2.5em;}
        .btn{display:block;width:100%;padding:18px;margin:15px 0;background:linear-gradient(45deg,#ff6b6b,#ee5a24);color:white;text-decoration:none;text-align:center;border-radius:12px;font-size:1.2em;font-weight:600;transition:all 0.3s ease;box-shadow:0 10px 20px rgba(255,107,107,0.3);}
        .btn:hover{transform:translateY(-3px);box-shadow:0 15px 30px rgba(255,107,107,0.4);}
        .btn-secondary{background:linear-gradient(45deg,#4ecdc4,#44a08d);}
        .btn-secondary:hover{box-shadow:0 15px 30px rgba(78,205,196,0.4);}
    </style>
</head>
<body>
    <div class="container">
        <h1>🏋️ Gym Management System</h1>
        <a href="add_member.php" class="btn">➕ Add New Member</a>
        <a href="view_members.php" class="btn btn-secondary">👥 View Members</a>
        <p style="text-align:center;color:#666;margin-top:30px;">Made with ❤️ using PHP + MySQL</p>
    </div>
</body>
</html>
