<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <h1>Sample</h1>
    <select id="as" onchange="getvalues()">
        <option value="1">One</option>
        <option value="2">two</option>
        <option value="3">Three</option>

    </select>
    <select id="as1" disabled>
       
    </select>
</body>
<script>
function getvalues(xv){
    var sec=document.getElementById("as").value;
    var xarray=[];
    console.log(sec);
     var x=document.getElementById("as1");
     x.disabled=false;
     var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    xarray=[this.responseText];
    console.log(xarray);
    }
  };
  
  xhttp.open("GET", "test2.php?nx=4", true);

xhttp.send();
}
</script>
</html>