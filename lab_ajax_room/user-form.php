<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="C:\xampp\htdocs\btproject267\style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--====form section start====-->
<div class="user-detail container-fluid ">
    <div class="content bg-info-subtle mt-3 p-3 rounded">
        <h2 class='p1 mt-1 '>Insert Room Data</h2>
        <p class = 'mb-3' id="msg"></p>
        <form id="userForm" method="POST">
            <div class="mb-3">
                <label class="form-label" >Room Name</label>
                <input type="text" class="form-control" placeholder="Enter Room Name" name="roomname" required>
            </div>
            <div class="mb-3">
                <label class="form-label" >Room Type</label>
                <select class = "form-control" name="roomtype" id="">
                    <?php
                        include"database.php";
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
                <label class="form-label" >Room Details</label>
                <textarea type="text" class="form-control" placeholder="Enter Room Detail" name="roomdetail"></textarea>
            </div>
            
            <button class="mt-3 btn btn-success" type="submit">Submit</button>
        </form>
    </div>
</div>
<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>

<div class="content off container-fluid bg-info-subtle mt-3 mx-2 p-1 rounded"> 
    <h2 class='container-fluid mt-3 '> &nbsp  Room Data </h2>
    <table class='table table-striped table-bordered table-hover '>
        <thead>
            <th>Room Name</th> 
            <th>Room Detail</th> 
            <th>Room Type</th>
            <th>Room Price</th> 
            
        </thead>
        <tbody>
            <?php
            INCLUDE "database.php";
            $sql = "SELECT * FROM tbroom INNER JOIN tbroomtype 
            ON tbroom.roomtypeid = tbroomtype.roomtypeid;";
            $query = $conn->query($sql);
            while($row=$query->fetch_object()){
            ?>
            <tr>
                <td><?=$row->roomname?></td>
                <td><?=$row->detail?></td>
                <td><?=$row->roomtypename?></td>
                <td><?=$row->price?></td>        
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>