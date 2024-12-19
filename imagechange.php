<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   <script>

  let nextnumber =1 ; 
   function Next(){
    nextnumber++;
    if(nextnumber > 10)
    {
        nextnumber = 1; 
    }
    document.getElementById("Image").src = "images\\"+nextnumber+".jfif";

  
   }

   function Prev()
   {
     
     nextnumber--;
     if(nextnumber < 1)
     {
       nextnumber = 10;
     }
      
      document.getElementById("Image").src = "images\\"+nextnumber+".jfif"

   }


    </script>
</head>
<body>
     
     <h1>Ganesh Bagwan</h1>

     <img src="images\\1.jfif" alt="Ganesh Bagwan image" id = "Image">
     <br>

     <input type="button" value = "Prev" onclick = "Prev()">
     <input type="button" value = "Next" onclick = "Next()">
     
     


      
</body>
</html>