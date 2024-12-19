<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timer Program</title>

    <script>
       
        var num = 1;
        var path;
        setInterval(nextpic, 1000);
    
        function nextpic(){
            num++;
            
        if(num > 10)
        {
            num = 1;
        }

           path = 'images\\'+num+'.jfif';
           document.getElementById('next').src= path;
        }

       
    </script>
</head>
<body>
     
       <h2>Automatically Picture change</h2>

       <img  id = "next"  src="images\1.jfif" alt="images">

        
      





</body>
</html>