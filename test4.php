<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dyynamic text field</title>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
</head>

<body><h1>Add dynamic Input text fiels</h1>
<form action="" method="GET" >
    
    <label> Input Text</label><input type="text" id="id1" name="max1" ><button id="addmore">Add MORE</button>

    
<div class="rewrite">

</div>
<input type="submit">
</form>



    <script>
    $(document).ready(function(){
        $('#id1').on('change',function(){
            $('.rewrite').empty();
            

            var limit=Number($(this).val());
            for(var i=0;i<limit;i++){
            console.log(limit);
            $('.rewrite').append('<label> Input Text'+i+'</label><input type="text" id="id'+i+'" name="max'+i+'" required /><br/>');
            
           
}
        });

    $('.rewrite').on('keyup',function(){
        
    });

    })
    $('')

    </script>

</body>
</html>