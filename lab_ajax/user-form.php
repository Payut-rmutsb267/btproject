<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--====form section start====-->
<div class="user-detail">
    <h2 class='p1 mt-1'>Insert User Data</h2>
    <div class="content off">
        <p class = 'mb-3' id="msg"></p>
        <form id="userForm" method="POST">
            <div class="mb-3">
                <label class="form-label" >Full Name</label>
                <input type="text" class="form-control" placeholder="Enter Full Name" name="fullName" required>
            </div>
            <div class="mb-3">
                <label class="form-label" >Email Address</label>
                <input type="email" class="form-control" placeholder="Enter Email Address" name="emailAddress" required>
            </div>
            <div class="mb-3">
                <label class="form-label" >City</label>
                <input type="city"  class="form-control"placeholder="Enter Full City" name="city" required>
            </div>
            <div class="mb-3">
                <label class="form-label" >Country</label>
                <input type="text"  class="form-control"placeholder="Enter Full Country" name="country" required>
            </div>
            <button class="btn btn-success" type="submit">Submit</button>
        </form>
    </div>
</div>
<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>

<h2 class='p1'> <i class="fa-solid fa-book"></i> &nbsp  User Data </h2>
<div class="content off"> 
    <table class='table table-striped table-bordered table-hover'>
        <thead>
            <th>Name</th> 
            <th>E-mail</th> 
            <th>City</th>
            <th>Country</th> 
            <th>Date</th> 
        </thead>
        <tbody>
            <?php
            INCLUDE "database.php";
            $sql = "SELECT * FROM usertable;";
            $query = $conn->query($sql);
            while($row=$query->fetch_object()){
            ?>
            <tr>
                <td><?=$row->fullName?></td>
                <td><?=$row->emailAddress?></td>
                <td><?=$row->city?></td>
                <td><?=$row->country?></td>
                <td><?=$row->created_at?></td>         
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>