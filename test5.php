

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">


</head>
<body>
    <select class="mdb-select colorful-select dropdown-primary" multiple searchable="Search here..">
    <option value="" disabled selected>Choose your country</option>
    <option value="1">USA</option>
    <option value="2">Germany</option>
    <option value="3">France</option>
    <option value="4">Poland</option>
    <option value="5">Japan</option>
</select>
<label>Label example</label>
<button class="btn-save btn btn-primary btn-sm">Save</button>


</body>
</html>

<?php
echo "Unlink ";
if(unlink("uploads/Enviromental_assessf868.mp3"))
{
    echo "Done";
}
else
{
    echo "failed";
}


   




?>