 function sendRequest()
{
    var x = new XMLHttpRequest();

    x.open("GET", "ajax.txt", true)
    
    /*also use x.onload = functin(){} */
    x.onreadystatechange = function(){

        console.log(this.responseText);
        document.getElementById("q").innerHTML = this.responseText;
    }
     
       x.send();

       /*  x.abort();   cancels the current request*/
}