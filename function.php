<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
      
      function BioData()
      {
           $name = "Hanseeka Dhingana";
           $fatherName = "Raja Ram";
           $cms = "023-22-0324";
           $department = "Computer Science";
           echo "Name   ".$name."<br>";
           echo "Father Name  ".$fatherName."<br>";
           echo "cms  ".$cms."<br>";
           echo "department   ".$department."<br>";
      }
      ?>

</head>
<body>
    <?php
       BioData();
    ?> 

</body>
</html>