html
---------------------


.,<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax</title>
</head>
<body>
    
<form action="" method="post">
    <input type="text" placeholder="Name" class="name">
    <input type="text" placeholder="Add" class="add">
    <input type="submit" value="submit" class="submit">
</form>
   
   <div class="fahim"></div>
    
    
    <script src="jquery-3.5.0.min.js" type="text/javascript"></script>
    <script src="script.js" type="text/javascript"></script>
</body>
</html>




js
------------------------

jQuery(document).ready(function(){
    jQuery(".submit").click(function(){
        
        var name = jQuery(".name").val();
        var add = jQuery(".add").val();
        
        $.ajax({
            'url':'info.php',
            'type': 'POST',
            'data':{
                'name': name,
                'tk': add
            },
            'success':function(ok){
                jQuery('.fahim').text(ok);
            }
        });
        return false;
    });
});




js __ shorthand
-------------------------------


     
        $.post('info.php',{
                'name': name,
                'tk': add
            },function(ok){
                jQuery('.fahim').text(ok);
            })
            
            
            
            



php
----------------------


<?php
$name = !empty($_POST['name']) ? $_POST['name'] : 'Empty';
$add = !empty ($_POST['tk']) ? $_POST['tk'] : 'Empty';


echo "Your Name: ". $name;

echo "Your add: ". $add;
-----------------------------------------
    
    