<?php
    function send_good_page(){
        // When a get request is made to the page, it will send a good page according to the user's choice
        if (isset($_GET['choice'])){
            $choice = $_GET['choice'];
            if ($choice == "1"){
                include("good_page1.html");
                return;
            } else if ($choice == "2"){
                include("good_page2.html");
                return;
            } else {
                include("mainpage.html");
            }
        }
        else {
            include("mainpage.html");
        }
    }

?>