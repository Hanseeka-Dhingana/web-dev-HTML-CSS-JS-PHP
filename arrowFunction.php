<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is arrow function program</title>

    <link rel="stylesheet" href="arrow.css">
</head>
<body >
      
     <h1>This is Arrow function Program</h1>

     <h2 id = "q"> Click The button</h2>

     <button type="button"  onclick = " (() => {
                                  document.getElementById('q').innerHTML = 'Welcome to Our Page';
                                  alert ('Message has been changed')})()">
                                  Click Me</button>
    
                                  


    
</body>
</html>