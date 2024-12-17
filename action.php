<?php
    include"dbcon.php";
    if(isset($_REQUEST ["bsubmitStudent"])){
        $firstname=$_REQUEST['tfirstname'];
        $lastname=$_REQUEST['tlastname'];
        $email=$_REQUEST['temail'];
        $address=$_REQUEST['taddress'];

        echo $firstname ."<br>" .$lastname ."<br>".$email."<br>" .$address;
        $sql = "INSERT INTO tbstudent VALUE(null,'$firstname','$lastname','$email','$address')";
        $query = $conn->query($sql);
        echo "<META HTTP-EQUIV='refresh' CONTENT='3; URL=lab2-2.php'>";
    }elseif(isset($_REQUEST['bsubmitRoom'])){
        $roomname=$_REQUEST['troomname'];
        $roomtype=$_REQUEST['troomtype'];
        $detail=$_REQUEST['tdetail'];
        echo $roomname .'<br>'.$roomtype .'<br>'.$detail;
        $sql = "INSERT INTO tbroom VALUE(null,'$roomname','$detail','$roomtype')";
        $query = $conn->query($sql);
        echo "<META HTTP-EQUIV='refresh' CONTENT='3; URL=lab2-4.php'>";
    }elseif(isset($_REQUEST['bsubmitBook'])){
        $bookname=$_REQUEST['tbookname'];
        $author=$_REQUEST['tauthor'];
        $price=$_REQUEST['tprice'];
        $stock=$_REQUEST['tstock'];
        $type=$_REQUEST['tbooktype'];
        
        echo "กำลังบันทึกข้อมูล <br>";
        echo $bookname .'<br>'.$author .'<br>'.$price .'<br>'.$stock.'<br>'.$type;
        $sql = "INSERT INTO tbbook VALUE(null,'$bookname','$author','$price','$stock','$type')";
        $query = $conn->query($sql);
        echo "<META HTTP-EQUIV='refresh' CONTENT='3; URL=lab2-3.php'>";
    }elseif(isset($_REQUEST['bsubmitBooktype'])){
        $booktype=$_REQUEST['tbooktype'];
        echo "กำลังบันทึกข้อมูล<br> เพิ่มข้อมูลประเภท : ";
        echo $booktype;
        $sql = "INSERT INTO tbbooktype VALUE(null,'$booktype')";
        $query = $conn->query($sql);
        echo "<META HTTP-EQUIV='refresh' CONTENT='3; URL=lab2-3.php'>";
    }elseif(isset($_REQUEST['regis-user'])){
        $fname = $_REQUEST['firstname'];
        $lname = $_REQUEST['lastname'];
        $user = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $hashValue = md5($password);
        echo $user."<br>password is ";
        echo $hashValue;
        $sql = "INSERT INTO tbuser VALUE (null,'$fname','$lname','$user','$hashValue')";
        $query = $conn->query($sql);
        echo "<META HTTP-EQUIV='refresh' CONTENT='3; URL=lab_function\lab-formregis.php'>";
    }elseif(isset($_REQUEST['bLogin'])){
        $user = $_REQUEST['tusername'];
        $password = $_REQUEST['tpassword'];

        $hash_password = md5($password);
        $sql = "SELECT * FROM tbuser
         WHERE username = '$user'
         AND password = '$hash_password'";
        $query = $conn->query($sql);
        $rs=$query->fetch_object();
        //ดึงข้อมูลตีวที่หาเจอมาเก็บตัวแปรrs 
        $numrows=$query->num_rows;
        //นับจำนวนแถวที่หาเจอ จะคืนค่ากลับมาเป็น int เสมอ
        if($numrows>0){
            echo "Login Success";
            echo "<META HTTP-EQUIV='refresh' CONTENT='3; URL=lab_function\lab-formlogin.php'>";

        }else{
            echo "Login Fail";
            echo "<META HTTP-EQUIV='refresh' CONTENT='3; URL=lab_function\lab-formlogin.php'>";

        }

    }
    
?>
