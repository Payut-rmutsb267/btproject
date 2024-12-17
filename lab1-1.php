<?php
    //xampp จำเป็นต้องเขียนtag ให้ถูกต้องไม่งั้นอาจมีerror
    
    include "dbcon.php";   //connect database
    $sql="SELECT * FROM tbstudent";
    $query=$conn->query($sql); //นำคำสั่งSQL ไปกระทำกับฐานข้อมูล
    while($rs=$query->fetch_object()){
        #echo"" .$rs->stdid; // . (จุด) คือการเชื่อมข้อความ
        #echo". " .$rs->firstname."<br>"; // . (จุด) คือการเชื่อมข้อความ
        echo "".$rs->stdid . ". " .$rs->firstname. "&nbsp; &nbsp;".$rs-> lastname.", ".$rs->address. "<br>" ; //name surname address
    }
    echo "<hr> "; //เส้นคั้น

    $sql2 = "SELECT * FROM tbstudent WHERE stdid = '3' "; //ดึงข้อมูลเฉพาะ ตามเลขstdid
    $query2=$conn->query($sql2);    
    while($rs2=$query2->fetch_object()){
        echo "".$rs2->stdid . ". " .$rs2->firstname. "&nbsp; &nbsp;".$rs2-> lastname.", ".$rs2->address. "<br>" ; //name surname address
    }
    
    
    echo "<hr>";
    $sql3 = "SELECT * FROM tbstudent WHERE firstname LIKE ' %ร%' "; //ดึงข้อมูลเฉพาะ ตามเลขstdid
    $query3=$conn->query($sql3);    
    while($rs3=$query3->fetch_object()){
        echo "".$rs3->stdid . ". " .$rs3->firstname. "&nbsp; &nbsp;".$rs3-> lastname.", ".$rs3->address. "<br>" ; //name surname address
    }

//    echo "<br><h2> Link </h2>";
//    echo "<p><a href='lab2-1.php'>lab2-1</a></p>";
//    echo "<p><a href='lab2-2.php'>lab2-2</a></p>";
//    echo "<p><a href='lab2-3.php'>lab2-3</a></p>";
//    echo "<p><a href='lab2-4.php'>lab2-4</a></p>";
//    echo "<p><a href='lab_ajax\user-form.php'>lab-ajax-user</a></p>";
//    echo "<p><a href='lab_ajax_room\user-form.php'>lab-ajax-room</a></p>";
?>