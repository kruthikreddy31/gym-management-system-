# 🏋️ Gym Management System

A complete PHP/MySQL gym membership management system.

## 📋 Features
- ✅ Add new members with full details
- ✅ View all members in a beautiful table
- ✅ Responsive design
- ✅ Member counter
- ✅ SQL injection protection

## 🚀 Quick Deploy (5 minutes)

### 1. Database Setup
```sql
CREATE TABLE Member (
    Member_ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Age INT,
    Gender VARCHAR(10),
    Phone VARCHAR(20),
    Address TEXT,
    Join_Date DATE
);
