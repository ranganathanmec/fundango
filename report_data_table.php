<!DOCTYPE html>
<html lang="en">
<head>
<style>
tfoot {
    display: table-header-group !important;
}
tfoot select {
    width: 100% !important;
}

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1> Data Tables</h1>
    
    <div class="clearfix"></div>
    <table id="data_table" class="display" style="width:100%" >
    <thead>
            <th>School Name</th>
            <th>Class Name</th>
            <th>Section Name</th>
            <th>Term Name</th>
            <th>Subject Name</th>
            <th>Lesson Name</th>
            <th>Progress </th>
    </thead>
    <tfoot>
        <tr>
            <th>School Name</th>
            <th>Class Name</th>
            <th>Section Name</th>
            <th>Term Name</th>
            <th>Subject Name</th>
            <th>Lesson Name</th>
            <th>Progress </th>
        </tr>
    </tfoot>
    <tbody>

    </tbody>
   
</table>

</div>
<script>

$(document).ready(function(){

 $('#data_table').DataTable( {

        "ajax":{
            "url":"ajax_master_report.php",
            "dataSrc":''
        },
        "columns":[
            {"data":"school_name"},
            {"data":"class_name"},
            {"data":"section_name"},
            {"data":"term_name"},
            {"data":"subject_name"},
            {"data":"lesson_name"},
            {"data":"progress_percentage"}
        ],

        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value="">All</option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );




    

});

</script>

    
</body>
</html>