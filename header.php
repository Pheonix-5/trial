<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assest/Football_(soccer_ball).svg.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600;700&family=Exo+2:wght@100;200;300;400;500;600;700;800&display=swap');
    </style>
    <title>Sanskar Sports Club</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/javascript">
        $(window).on('DOMContentLoaded', function() {
        if ($('#preloader').length) {
            
        $('#preloader').delay(2000).fadeOut('slow');
        }
        });

        $(document).ready(function () {
            $('ul a li').click(function () {
                $('a li').removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>
</head>
<body>
    <div id="preloader">
        <span>Sanskar Sports Club | &#169; All Right Reserved</span>
    </div>
    <header>
        <nav>
            <div class="logo">
                <a href="https://sanskareducationalgroup.ac.in/"><img src="assest/logo-seg-1.jpg" alt="clg logo"></a>
            </div>
            <ul>
                <a href="#HOME"><li class="active" >HOME</li></a>
                <a href="#U_E"><li  >UPCOMING EVENTS</li></a>
                <a href="#STD"><li  >STANDINGS</li></a>
                <a href="#C_US"><li  >CONTACT US</li></a>
            </ul>
        </nav>
        <div class="banner">
            <span>SANSKAR SPORT CLUB</span>
        </div>
    </header>