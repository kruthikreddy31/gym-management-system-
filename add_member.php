<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Member</title>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;}
        body{font-family:'Segoe UI',sans-serif;background:linear-gradient(135deg,#667eea 0%,#764ba2 100%);min-height:100vh;padding:20px;display:flex;align-items:center;justify-content:center;}
        .form-card{max-width:500px;width:100%;background:white;border-radius:20px;padding:40px;box-shadow:0 20px 40px rgba(0,0,0,0.1);}
        h2{text-align:center;color:#333;margin-bottom:30px;font-size:2em;}
        input[type="text"],input[type="number"],input[type="email"]{width:100%;padding:18px;margin:12px 0;border:2px solid #e1e5e9;border-radius:12px;font-size:16px;transition:all 0.3s ease;}
        input:focus{outline:none;border-color:#667eea;box-shadow:0 0 0 3px rgba(102,126,234,0.1);}
        input::placeholder{color:#999;}
        .submit-btn{width:100%;padding:18px;background:linear-gradient(45deg,#28a745,#20c997);color:white;border:none;border-radius:12px;font-size:18px;font-weight:600;cursor:pointer;transition:all 0.3s ease;margin-top:20px;}
        .submit-btn:hover{transform:translateY(-2px);box-shadow:0 10px 25px rgba(40,167,69,0.4);}
        .success-msg{background:linear-gradient(45deg,#d4edda,#c3e6cb);color:#155724;padding:20px;border-radius:12px;margin:20px 0;border-left:5px solid #28a745;}
        .error-msg{background:linear-gradient(45deg,#f8d7da,#f5c6cb);color:#721c24;padding:20px;border-radius:12px;margin:20px 0;border-left:5px solid #dc3545;}
        .back-link{display:inline-block;margin-top:25px;color:#667eea;font-weight:600;text-decoration:none;}
    </style>
</head>
<body>
    <div class="form-card">
        <h2>➕ Add New Member</h2>
        
        <?php
        if(isset($_POST['submit'])){
            $name = $conn->real_escape_string($_POST['name']);
            $age = (int)$_POST['age'];
            $gender = $conn->real_escape_string($_POST['gender']);
            $phone = $conn->real_escape_string($_POST['phone']);
            $address = $conn->real_escape_string($_POST['address']);
            
            $sql = "INSERT INTO Member (Name, Age, Gender, Phone, Address, Join_Date) 
                    VALUES ('$name', $age, '$gender', '$phone', '$address', CURDATE())";
            
            if($conn->query($sql)){
                echo "<div class='success-msg'>✅ <strong>Success!</strong> Member '$name' added successfully!</div>";
            } else {
                echo "<div class='error-msg'>❌ Error: " . $conn->error . "</div>";
            }
        }
        ?>
        
        <form method="POST">
            <input type="text" name="name" placeholder="Full Name *" required>
            <input type="number" name="age" placeholder="Age (16-100) *" min="16" max="100" required>
            <input type="text" name="gender" placeholder="Gender (Male/Female/Other) *" required>
            <input type="text" name="phone" placeholder="Phone Number *" required>
            <input type="text" name="address" placeholder="Full Address *" required>
            <input type="submit" name="submit" value="💾 Save Member" class="submit-btn">
        </form>
        
        <a href="index.php" class="back-link">← Back to Dashboard</a>
    </div>
</body>
</html>
