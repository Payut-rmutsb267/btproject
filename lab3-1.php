<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


<h2 class='p1 mt-1'><i class="fa-solid fa-list"></i> &nbsp เพิ่มหนังสือ </h2>
<div class="content off">
    <form action="action.php" method = "post">
        
    <div class="mb-3">
        <label class="form-label">Bookname</label>
        <input type="text" class="form-control" name="tbookname" placeholder="กรอกชื่อหนังสือ">
    </div>

    <div class="mb-3">
        <label class="form-label">Author</label>
        <input type="text" class="form-control" name="tauthor" placeholder="กรอกชื่อเจ้าของ">
    </div>
    
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" class="form-control" name="tprice" placeholder="กรอกราคา">
    </div>

    <div class="mb-3">
        <label class="form-label">Stock</label>
        <input type="number" class="form-control" name="tstock" placeholder="กรอกจำนวนสินค้า">
    </div>

        <div class="mb-3">
        <label class="form-label">Book type</label>
        <select class = "form-control" name="tbooktype" id="">
            <?php
                include"dbcon.php";
                $sql="SELECT * FROM tbbooktype";
                $querry=$conn->query($sql);
                while($row=$querry->fetch_object()){    
            ?>
            <option value="<?=$row->booktypeid?>">
                <?=$row->booktypename?>
            </option>
            <?php } ?>
        </select>
        </div>

        
        <br>
        <button type="submit" name ="bsubmitBook" class="btn btn-success">บันทึกข้อมูล</button>
        <button type="reset" class="btn btn-danger">ล้างข้อมูล</button>
    </form>
</div>

<?php 
?>