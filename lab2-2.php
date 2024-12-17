<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class='p1'> <i class="fa-solid fa-house"></i> &nbsp ความหมายของ CSS </h2>

<div class="content off"> CSS ย่อมาจาก Cascading Style Sheet หรือที่มักเรียกกันสั้นๆ ว่า ‘สไตล์ชีต’ เป็นภาษาที่ใช้ส่วนของการจัดรูปแบบการแสดงผลเอกสาร HTML โดยที่ CSS กำหนดและระบุรูปแบบ หรือ Style ของเนื้อหาในเอกสาร เช่น สีของข้อความ สีพื้นหลัง ประเภทของตัวอักษร และการจัดวางข้อความ</div>

<h2 class='p1'><i class="fa-solid fa-list"></i> &nbsp รูปแบบการใช้งาน CSS </h2>
<div class="content off">การเขียน CSS มีหลายรูปแบบในการจัดการหลัก ๆ มีอยู่ 3 รูปแบบ ซึ่งในแต่ละรูปแบบก้จะมีจุดประส์ในการใช้งานที่แตกต่างกัน แต่ยังใช้ไวยากรณ์ของภาษา CSS ยังคงเดิม เพียงแค่รูปแบบการจัดวางที่แตกต่างกัน โดยทั้งทั้งหมด 3 รูปแบบ <br>
- Inline Style Sheet<br>
- Internal Style Sheet<br>
- External Style Sheet</div>

<h2 class='p1 mt-1'><i class="fa-solid fa-list"></i> &nbsp การสร้างฟอร์ม </h2>
<div class="content off">
    <form action="action.php" method = "post">
        
        <div class="mb-3">
        <label class="form-label">Firstname</label>
        <input type="text" class="form-control" name="tfirstname" placeholder="กรอกชื่อ">
        </div>

        <div class="mb-3">
        <label class="form-label">Lastname</label>
        <input type="text" class="form-control" name="tlastname">
        </div>
        
        <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="temail" placeholder="name@example.com">
        </div>
        <div class="mb-3">
        <label class="form-label">Address </label>
        <textarea class="form-control" rows="3" name = "taddress"></textarea>
        </div>
        <br>
        <button type="submit" name = "bsubmitStudent" class="btn btn-success">บันทึกข้อมูล</button>
    </form>
</div>

<?php 
?>