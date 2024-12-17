<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class='p1'> <i class="fa-solid fa-house"></i> &nbsp การดึงข้อมูลจากตารางมากว่า 1 ตาราง (join table) </h2>
<div class="content off"> xxx</div>

<h2 class='p1'> <i class="fa-solid fa-house"></i> &nbsp ทดสอบดึงตาราง tbroom </h2>
<div class="content off"> 
    <table class='table table-striped'>
        <thead>
            <th>ROOMID</th> 
            <th>ROOMNAME</th> 
            <th>DETAIL</th>
            <th>ROOMTYPE</th>
        </thead>
        <tbody>
            <?php
            INCLUDE "dbcon.php";
            $sql = "SELECT * FROM tbroom";
            $query = $conn->query($sql);
            while($row=$query->fetch_object()){
            ?>
            <tr>
                <td><?=$row->roomid?></td>
                <td><?=$row->roomname?></td>
                <td><?=$row->detail?></td>
                <td><?=$row->roomtypeid?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <a href="lab2-4.php">
        <button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i>&nbsp เพิ่มข้อมูลห้องพัก</button>
    </a>
</div>



<h2 class='p1'> <i class="fa-solid fa-house"></i> &nbsp ทดสอบดึงตารางtbtype </h2>
<div class="content off"> 
    <table class='table table-striped table-bordered'>
        <thead>
            <th>ROOMNAME</th> 
            <th>ROOMTYPENAME</th> 
            <th>PRICE</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM tbroomtype";
            $query = $conn->query($sql);
            while($row=$query->fetch_object()){
            ?>
            <tr>
                <td><?=$row->roomtypeid?></td>
                <td><?=$row->roomtypename?></td>
                <td><?=$row->price?></td>         
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>


<h2 class='p1'> <i class="fa-solid fa-house"></i> &nbsp ทดสอบดึงตารางมากกว่า 1 ตาราง </h2>
<div class="content off"> 
    <table class='table table-striped table-bordered'>
        <thead>
            <th>ROOMNAME</th> 
            <th>ROOMTYPENAME</th> 
            <th>PRICE</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM tbroom
                 INNER JOIN tbroomtype 
                 ON tbroom.roomtypeid = tbroomtype.roomtypeid";
            $query = $conn->query($sql);
            while($row=$query->fetch_object()){
            ?>
            <tr>
                <td><?=$row->roomname?></td>
                <td><?=$row->roomtypename?></td>
                <td><?=$row->price?></td>         
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>

<h2 class='p1'> <i class="fa-solid fa-book"></i> &nbsp  ตารางหนังสือ </h2>
<div class="content off"> 
    <table class='table table-striped table-bordered'>
        <thead>
            <th>BOOKNAME</th> 
            <th>AUTHOR</th> 
            <th>PRICE</th>
            <th>STOCK</th> 
            <th>TYPE</th> 
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM tbbook
                 INNER JOIN tbbooktype
                 ON tbbook.booktypeid = tbbooktype.booktypeid";
            $query = $conn->query($sql);
            while($row=$query->fetch_object()){
            ?>
            <tr>
                <td><?=$row->bookname?></td>
                <td><?=$row->author?></td>
                <td><?=$row->price?></td>
                <td><?=$row->stock?></td>
                <td><?=$row->booktypename?></td>         
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <a href="lab3-1.php">
        <button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i>&nbsp เพิ่มหนังสือ</button>
    </a>
</div>

<h2 class='p1'> <i class="fa-solid fa-book"></i> &nbsp  ตารางประเภทหนังสือ </h2>
<div class="content off"> 
    <table class='table table-striped table-bordered'>
        <thead>
            <th>BOOKTYPEID</th> 
            <th>BOOKTYPENAME</th> 
             
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM tbbooktype";
            $query = $conn->query($sql);
            while($row=$query->fetch_object()){
            ?>
            <tr>
                <td><?=$row->booktypeid?></td>
                <td><?=$row->booktypename?></td>      
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <a href="lab3-2.php">
        <button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i>&nbsp เพิ่มประเภทหนังสือ</button>
    </a>
</div>