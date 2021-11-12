<?php 
    if(file_exists("text.txt")){
        $text = file("text.txt");
        echo $text;
    }
?>