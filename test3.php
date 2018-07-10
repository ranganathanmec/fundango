!<!DOCTYPE html>
<?php
include('dynamic_drop_db.php')?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
	<title> Title </title>
</head>

	<body>
       

        <h1> dynamic loader</h1>
        
        <select id="country">
            
        <option> Please Seelct Country</option>
            
            <?php
                $q=mysqli_query($conn,"select country_id,country_name from countries where status=1");
                if(mysqli_num_rows($q))
                {
                    while($row=mysqli_fetch_assoc($q))
                    {
                        //echo $row['country_id'];
                echo '<option value="'.$row['country_id']. '">'.$row['country_name'].'</option>';
                    }
                }else
                    echo "<option>No country<option>";

            ?>
        
        </select>
        
        <select id="states" disabled>
            <option value="asx"> welcome</option>
        
        </select>


        <input type="text" id="matrix">
        
       <script>
        $(document).ready(function(){
            $('#country').on('change',function(){
                var country_id=$(this).val();
                console.log("xz")
                if(country_id)
                    {
                        $.ajax({
                            
                            type:'POST',
                            url:'getdata.php',
                            data:"country_id="+country_id,
                            success:function(values){
                                $('#states').attr('disabled',false);
                                $('#states').html(values);
                                console.log(values);
                                
                            }
                            
                            
                            
                                });
                    
                    }
                
                
            });
        $('#matrix').on('change',function(){
            console.log($(this).val());

        });
            
            
            
        })
        
        </script> 
        

</body>
</html>
