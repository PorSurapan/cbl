วิธีใช้งานเว็บไซต์ผ่าน localhost
1. ติดตั้งโปรแกรม XAMPP
2. เปิดโปรแกรม XAMPP แล้วคลิก Start ใน Apache และ MySQL
3. ย้ายโฟลเดอร์ cbl นี้ไปไว้ในโฟลเดอร์ของ XAMPP ปกติจะอยู่ที่ C:/xampp/htdocs จะได้เป็น C:/xampp/htdocs/cbl
3. เข้า phpMyAdmin ของ localhost http://localhost/phpmyadmin/
4. สร้าง Database ชื่อ studyphp และเลือกการเข้ารหัสข้อมูลเป็น utf8_unicode_ci
5. คลิก Import เพื่อนำเข้าไฟล์สำหรับสร้าง Table โดยเลือกไฟล์ชื่อ studyphp.sql ซึ่งอยู่ที่ cbl/studyphp.sql
6. เข้าลิงก์ http://localhost/cbl/home/index.html เพื่อเริ่มใช้งานเว็บไซต์

*ข้อควรระวัง*
สำหรับ Username และ Name ของแอดมิน จะถูกตรวจสอบโดยโค้ดที่เขียนไว้ ดังนั้นจึงต้องเป็น
Username: Admin
Name: Admin CBL
จึงจะสามารถเข้าสู่ระบบของแอดมินได้
