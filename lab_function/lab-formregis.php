<link rel="stylesheet" type="text/css" href="..\style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


<h2 class='p1 mt-3'>&nbsp Register </h2>
<div class="content off">
    <form action="..\action.php" method = "post">
        
    <div class="mb-3">
        <label class="form-label">First name</label>
        <input type="text" class="form-control" name="firstname" placeholder="Enter Name" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Last name</label>
        <input type="text" class="form-control" name="lastname" placeholder="Enter Password" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Enter User name" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
    </div>    
    <br>
    <button type="submit" name ="regis-user" class="btn btn-success">Register</button>
    <button type="reset" class="btn btn-danger">Clear</button>
    </form>
</div>

<?php 
?>