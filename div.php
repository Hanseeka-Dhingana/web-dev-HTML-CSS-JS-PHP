<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            padding:0px;
            margin:0px;
        }
        #div1{
            background-color : Yellow;
            height: 30px;
            width: 100%;
            text-align:center;

        }

        #div2{
            display: flex;
            width: 1350px;
            height:90px;
           
        }
        #innerdiv1{
            background-color:Red;
            width: 450px;
            text-align:center;
        }

        #innerdiv2{
            background-color:Green;
            width: 450px;
            text-align:center;
        }
        #innerdiv3{
            background-color:Blue;
            width: 450px;
            text-align:center;
            
        }

        #div3{
            background-color : Lavender;
            height: 30px;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <div id = "div1">
        <h2>Yellow</h2>
    </div>

    <div id = "div2">
        <div id="innerdiv1">
            <h2>Red</h2>
        </div>

        <div id = "innerdiv2">
            <h2>Green</h2>
        </div>

        <div  id = "innerdiv3">
            <h2>Blue</h2>
        </div>
    </div>

    <div id = "div3">
        <h2>Lavender</h2>
    </div>
    
</body>
</html>