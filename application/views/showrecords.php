<!DOCTYPE html>
<html>
<head>
    <title>Records List</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <script src="<?php echo base_url();?>js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>js/jquery.dataTables.js" type="text/javascript"></script>

    <style type="text/css">
        @import "<?php echo base_url();?>css/demo_table_jui.css";
        @import "<?php echo base_url();?>css/jquery-ui-1.8.4.custom.css";
    </style>

    <style>
        *{
            font-family: arial;
        }
    </style>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            $('#datatables').dataTable({
                "sPaginationType":"full_numbers",
                "aaSorting":[[2, "desc"]],
                "bJQueryUI":true
            });
        })

    </script>

    <script type="text/javascript" charset="utf-8">
        function validate_record(){
          var name =document.getElementById('name').value;
          var pass =document.getElementById('pass').value;

            if(name=="Infas" && pass == "etisalatNew123"){
                $('#tablediv').show();
                $('#details').hide();

            }
        }

    </script>

</head>
<body>
<div id="details" style="margin-left: auto; margin-right: auto; margin-top: 20px">
   <input id="name" type="text" placeholder="Name"><br><br>
    <input id="pass" type="password" placeholder="Password">
    <button onclick="validate_record(); return false;">Submit</button>

</div>
<div id="tablediv" style="display: none">
    <table id="datatables" class="display">
        <thead>
        <tr>
            <th>ID</th>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q3</th>
            <th>Q4</th>
            <th>Q5</th>
            <th>Q6</th>
            <th>Q7</th>
            <th>Q8</th>
            <th>Q9</th>
            <th>Q10</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Language</th>

        </tr>
        </thead>
        <tbody>
        <?php
       foreach($table as $row) {
            ?>
        <tr>
            <td><?=$row->id?></td>
            <td><?=$row->question1?></td>
            <td><?=$row->question2?></td>
            <td><?=$row->question3?></td>
            <td><?=$row->question4?></td>
            <td><?=$row->question5?></td>
            <td><?=$row->question6?></td>
            <td><?=$row->question7?></td>
            <td><?=$row->question8?></td>
            <td><?=$row->question9?></td>
            <td><?=$row->question10?></td>
            <td><?=$row->name?></td>
			<td><?=$row->phone?></td>
			<td><?=$row->email?></td>
            <td><?=$row->lng?></td>
            
        </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
