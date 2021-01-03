index html
------------------
.,<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax</title>
</head>
<body>
    
    <button class="fahim">Click here</button>
    <div class="kaj"></div>
    <div class="korce"></div>
    
    <form action="" method="POST">
        <input type="text" placeholder="Your Name" class="naam">
        <input type="number" placeholder="Your Phone Number" class="Phone">
        <input type="number" placeholder="Your Age" class="age">
        <textarea name="msg" class="smss" cols="30" rows="10"></textarea>
        <input type="submit" value="submit" class="submit">
    </form>
    
    
    
    <script src="jquery-3.5.0.min.js" type="text/javascript"></script>
    <script src="script.js" type="text/javascript"></script>
</body>
</html>


JavaScript?jQuary
---------------------------
jQuery(document).ready(function(){
//    jQuery('.fahim').click(function(){
//        $.ajax({
//            'url': 'info.php',
//            'success':function(paise){
//                jQuery('.kaj').text(paise);
//            },
//            'type':'POST',
//            'data':{
//                'naam': 'abdullah al fahim',
//                'age': 24,
//                'address': 'chowfaldandi'
//            }
//        })
//    });

    
    jQuery('.submit').click(function(){
        
        var naam= jQuery('input.naam').val();
        var phone= jQuery('input.phone').val();
        var age= jQuery('input.age').val();
        var smss= jQuery('input.smss').val();
        
        
        $.ajax({
            'url':'info.php',
           
            'type': 'POST',
            'data':{
                'naam': naam,
                'phone': phone,
                'age': age,
                'smss': smss
            },
             'success':function(korce){
                jQuery('.kaj').text(korce);
            }
            
        });
        
        return false;
    });
});










Php
---------------------------


<?php

$naam= $_POST['naam'];
$phone= $_POST['phone'];
$age= $_POST['age'];
$smss= $_POST['smss'];



echo "Name: ". $naam;

echo "Phone Number: ". $phone;


echo "Age: ". $age;

echo "Smss: ". $smss;
