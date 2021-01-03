<?php
$name = !empty ($_POST['name']) ? $_POST['name'] : 'empty';
$add = !empty ($_POST['add']) ? $_POST['add'] : 'empty';

echo "Your Name:".$name;
echo "Your add:". $add;