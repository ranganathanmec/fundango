<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | Bootstrap Multi Select Dropdown with Checkboxes using Jquery in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
 </head>
 <body>
 <form action="go.php" method="POST">
 <select id="framework" class="form-control" name="frame[]" multiple>
 <option>Welcome</option>
 <option>Hello</option>
 <option>Encrypt</option>
 <option>Address</option>

 </select>

 </form>
 <?php if(0)
 {
     echo "sdsds";
 }
 ?>
  
 </body>
 <script>
 $(document).ready(function()
 {
     $('#framework').multiselect({
         nonSelectedText:"Please",
         buttonWidth:"400px",


     });

 });
 </script>
</html>



