<?php
    #include("style.css");
    #<link rel="stylesheet" href="style.css">;
    $name = "สมชาย";
    $age = "30";
    $career = "รับจ้างทั่วไป";

    echo "ชื่อ : " .$name."<br>อายุ : ".$age."<br>อาชีพ : ".$career ."<hr>";
    echo "ชื่อ :  $name<br>อายุ : $age<br>อาชีพ : $career <hr>";
    echo 'ชื่อ :  $name<br>อายุ : $age<br>อาชีพ : $career <hr>'; // ' ไม่สามารถใช้กับตัวแปรได้
    echo "อายุ : {$age}$"; //เมื่อต้องการเขียนตัว$(ที่ใช้เเสดงให้เห็นหน้าเว็บ) สามรถใช้{}เพื่อไม่ให้แสดงผลผิดพลาด
    #if(isset($name)){} //ใช้เช็คว่าค่าName นั้น ว่าง หรือเป็นค่า null หรือเปล่า
    echo "<hr>";



    echo "<h2>ตัวอย่างการใช้งาน Operator</h2>";
    $num1=10;
    $num2=20;
    $sum=$num1+$num2;
    echo "ผลรวมเท่ากับ : ".$sum;
    $sum+=5; //บวกค่าsumอีก5
    echo "<br>ผลรวมเท่ากับ : ".$sum;
    $sum-= 5; //ลบค่าsumอีก5
    echo "<br>ผลรวมเท่ากับ :".$sum;
    $count = 1;
    $count++; //+1 
    $count+=2; //+2
    $count*= 2; //คูณ2
    echo $count;
    echo("<br><h2>เงื่อนไข Ternary</h2>");
    $x = 2;
    $b = ($x %2 ==0) ?"เลขคู่":"เลขคี่"; //ถ้าเป็นจริงจะตอบข้อความด้านซ้าย ถ้าเท็จจะตอบทางด้านขวา
    echo "ผลลัพธ์คือ : ".$b."";

    echo "<h2>การเช็คค่าว่าง</h2>";
    $user = '1';
    $password ='';
    $msg = ($user == '' || $password=='') ?'กรุณากรอกข้อมูล':'เวลคัม';
    echo $msg;

    echo "<h2>การเช็คค่าว่าง V2</h2>";
    $user = 'user';
    $password ='123456';
    if (empty($user)|| empty($password)){
        $msg='กรุณากรอกข้อมูล';
    }
    else{
        $msg='ขอบคุณ';
    }
    echo $msg;
    
    echo "<h2>การใช้งาน if-else</h2>";
    $status="ceo";
    if($status  == "admin"){
        echo"i am admin";
    }elseif( $status == "member"){
        echo "i am member";
    }elseif( $status == "manager"){
        echo "iam manager";
    }else{
        echo "invalid user status !!!";
    }
    
    echo "<hr>";
    echo "<h2>การใช้เครื่องหมายเปรียบเทียบ</h2>"; 
    $pw1 = 123;
    $pw2 = 456;
    if($pw1 != $pw2){ //สามารถใช้เครื่องหมาย <> แทน != ได้
        echo "รหัสผ่านไม่ตรงกัน";
    }else{
        echo "รหัสผ่านตรงกัน";
    }

    $score = 75;
    if($score >= 80){
        $grade = "A";
    }elseif($score >= 70){
        $grade = "B";
    }elseif($score >= 60){
        $grade = "C";
    }elseif($score >= 50){
        $grade = "D";
    }else{
        $grade = "F";
    }
    echo "<br><br>".$grade;
    ?>
    