<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class='p1 mt-1'><i class="fa-solid fa-list"></i> &nbsp เพิ่มประเภทหนังสือ </h2>
<div class="content off">
    <form action="action.php" method = "post">
        
    <div class="mb-3 ">
        <label class="form-label">Type</label>
        <input type="text" class="form-control form-control-lg" name="tbooktype" placeholder="กรอกประเภทหนังสือ">
    </div>

        <button type="submit" name ="bsubmitBooktype" class="btn btn-success">บันทึกข้อมูล</button>
        <button type="reset" class="btn btn-danger">ล้างข้อมูล</button>
    </form>
</div>

<?php 
?>