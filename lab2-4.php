<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


<h2 class='p1 mt-1'><i class="fa-solid fa-list"></i> &nbsp เพิ่มข้อมูลห้องพัก </h2>
<div class="content off">
    <form action="action.php" method = "post">
        
        <div class="mb-3">
        <label class="form-label">Room name</label>
        <input type="text" class="form-control" name="troomname" placeholder="กรอกชื่อห้อง">
        </div>

        <div class="mb-3">
        <label class="form-label">Room type</label>
        <select class = "form-control" name="troomtype" id="">
            <?php
                include"dbcon.php";
                $sql="SELECT * FROM tbroomtype";
                $querry=$conn->query($sql);
                while($row=$querry->fetch_object()){    
            ?>
            <option value="<?=$row->roomtypeid?>">
                <?=$row->roomtypename?>
            </option>
            <?php } ?>
        </select>
        </div>

        <div class="mb-3">
        <label class="form-label">DETAILS </label>
        <textarea class="form-control" rows="3" name = "tdetail"></textarea>
        </div>
        <br>
        <button type="submit" name ="bsubmitRoom" class="btn btn-success">บันทึกข้อมูล</button>
    </form>
</div>

<?php 
?>