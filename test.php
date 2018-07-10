<?php session_start();?>

<?php 
$sam= array(1,2,3,4,5);
for($i=0;$i<count($sam);$i++){
    call_echo();
}
function call_echo(){
    echo "helloM<br/>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
    <p><?php echo session_status().'<br/>'.$_SESSION['id'];?>
<form >


    <input type="text" name="name">
</form>
</body>
</html>