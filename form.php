<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="form.php" method="GET" autocomplete="off">

       Name: <input type="text" name="name" id="name" placeholder="Enter your name" onkeyup="showHint(this.value)"> <br><br>
       
       Father Name: <input type="text" name="fname" id="fname" placeholder="Enter your father's name"> <br><br>
       
       CMS-Id: <input type="text" name="cms_id" id="cms" placeholder="022-22-2222"> <br><br>
       
       Age: <input type="number" name="age" id="age"> <br><br>
       
       Gender: 
       Male <input type="radio" name="gender" value="Male" id="gender_male"> 
       Female <input type="radio" name="gender" value="Female" id="gender_female"> <br><br>
       
       Phone Number: <input type="tel" name="phone" id="num"> <br><br>
       
       Department: <select name="department" id="dept">
           <option>BSCS</option>
           <option>BBA</option>
           <option>BAF</option>
           <option>BEd</option>
           <option>AI</option>
           <option>Other</option>
       </select><br><br>

       University: <select name="university" id="uni">
           <option></option>
           <option>Sukkur IBA University</option>
           <option>Aror University</option>
           <option>Sindh University</option>
           <option>IQRA University</option>
           <option>Zabist University</option>
           <option>Other</option>
       </select><br><br>

       CV: <input type="file" name="cv" id="cv"> <br><br>
      
       <input type="submit" name="sbt" value="Sbt" id="sbt">
   </form>



<?php
    //connect with the file in which connection is established 
    include("dbcom.php");

    //GET the data from the form and insert in the database
if (isset($_GET["sbt"])) 
    $tname = $_GET['name'];
    $tfname = $_GET['fname'];
    $tage = $_GET['age'];
    $rollno = 1;

    $sql = "INSERT INTO student (rollno, Sname, Sfathename, Sage) VALUES ('$rollno','$tname', '$tfname', '$tage')";

    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Record added successfully!'); </script>";
    } else {
        echo "<script> alert('Error adding record!'); </script>";
    }

    mysqli_close($conn);



   ///GET the data from the form match it and update the record in database
  if(isset($_GET["sbt"]))
  
    $name = $_GET['name'];

    $sql = "DELETE FROM student WHERE Sname = '$name'";

    if(mysqli_query($conn, $sql))
    {
         echo "<script> alert('Record delete successffuly'); </script>";
    }

    else 
    {
        echo "<script> alert('Error!'); </script>";
    }
      
    mysqli_close($conn)



   //GET the data from the form match it and delete the record in the database
    if(isset($_GET["sbt"]))
    
        $name = $_GET['name'];
        $age = $_GET['age'];

        $sql = "UPDATE student SET Sage = $age WHERE Sname = '$name'";

        if(mysqli_query($conn, $sql))
        {
            echo "<script> alert('Record Update successffuly'); </script>";
        }
        
        else 
        {
            echo "<script> alert('Error!'); </script>";
        }
              
        mysqli_close($conn)
    
  
?>

</body>
</html>