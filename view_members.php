<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Members List</title>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;}
        body{font-family:'Segoe UI',sans-serif;background:#f5f7fa;padding:20px;}
        .container{max-width:1200px;margin:0 auto;background:white;border-radius:15px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,0.1);}
        h2{padding:30px 30px 20px;background:linear-gradient(45deg,#667eea,#764ba2);color:white;margin:0;}
        table{width:100%;border-collapse:collapse;}
        th{padding:20px 15px;background:#f8f9fa;color:#333;font-weight:600;border-bottom:3px solid #667eea;}
        td{padding:18px 15px;border-bottom:1px solid #eee;}
        tr:hover{background:#f8f9fa;}
        .back-btn{display:inline-block;margin:25px 30px;padding:12px 25px;background:linear-gradient(45deg,#ff6b6b,#ee5a24);color:white;text-decoration:none;border-radius:8px;font-weight:600;}
        .empty-state{text-align:center;padding:60px;color:#666;}
        .count-badge{background:#4ecdc4;color:white;padding:8px 16px;border-radius:20px;font-weight:600;display:inline-block;margin-left:15px;}
    </style>
</head>
<body>
    <div class="container">
        <?php 
        $count = $conn->query("SELECT COUNT(*) as total FROM Member")->fetch_assoc()['total'];
        echo "<h2>👥 Members List <span class='count-badge'>{$count} members</span></h2>";
        ?>
        
        <table>
            <tr>
                <th>ID</th><th>Name</th><th>Age</th><th>Gender</th><th>Phone</th><th>Address</th><th>Joined</th>
            </tr>
            <?php
            $result = $conn->query("SELECT * FROM Member ORDER BY Join_Date DESC");
            if($result && $result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                        <td style='font-weight:600;color:#667eea;'>{$row['Member_ID']}</td>
                        <td><strong>{$row['Name']}</strong></td>
                        <td>{$row['Age']}</td>
                        <td><span style='text-transform:uppercase;font-size:0.9em;color:#666;'>{$row['Gender']}</span></td>
                        <td><a href='tel:{$row['Phone']}' style='color:#4ecdc4;'>{$row['Phone']}</a></td>
                        <td>{$row['Address']}</td>
                        <td style='color:#28a745;'>{$row['Join_Date']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='7' class='empty-state'>
                    <h3>📭 No members yet!</h3>
                    <a href='add_member.php' style='color:#667eea;font-weight:600;'>➕ Add your first member</a>
                </td></tr>";
            }
            ?>
        </table>
        <a href="index.php" class="back-btn">← Back to Dashboard</a>
    </div>
</body>
</html>
