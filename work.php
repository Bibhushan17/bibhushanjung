<?php
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibhushan Jung Sijapati</title>
    <style>
        body {
            background-color: #0D455A;
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Prevent horizontal scrolling */
            font-family: salsa, sans-serif;
        }
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .firsth1 {
            top: 160px;
            margin-left: 10%;
            color: #30FFDA;
            font-size: 5vw; /* Responsive font size */
            font-weight: lighter;
            position: absolute;
        }
        
        .container {
            top: 500px;
            display: flex;
            justify-content: space-between;
            padding: 0 10%;
            margin-top: 100px; /* Adjusted for positioning below the navbar */
        }
        .left-content, .right-content {
            position: fixed;
            top: 300px; /* Adjust according to the height of the navbar */
        }
        .left-content {
            left: 80px; /* Adjust to your desired left positioning */
        }
        .right-content {
            right: 80px; /* Adjust to your desired right positioning */
        }
        .left-content .content, .right-content .content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            gap: 25px;
        }
        .content img {
            width: 35px;
            height: auto;
        }
        .vertical-line {
            height: 160px;
            border-left: 2px solid #48B5D6;
            margin-left: 15px; /* Adjusted for spacing */
        }
        .email {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
        }
        .email p {
            writing-mode: vertical-rl;
            transform: rotate(180deg);
            color: #30FFDA;
            margin-left: 70px;
            margin: 0;
            font-size: 22px;
        }
        .box1 p {
            top: 380px;
        }
        .imgx {
            top: 280px;
            left: 80px;
            margin-left: 1000px;
            position: absolute;
            width: 550px; 
            height: auto; /* Maintain aspect ratio */
        }
        .imgx img {
            width: 50%; /* Ensure the image fits within the container */
            height: auto; /* Maintain aspect ratio */
            /* box-shadow: rgba(0, 0, 0, 0.56) 0px 10px 10px 4px; */
            box-shadow: 0px 0px 9px 0px #00C2FF;
        }
        /* Button styling */
        .button-4 {
            appearance: none;
            background-color: transparent; /* No background color */
            border: 2px solid #0196C1;
            border-radius: 6px;
            box-shadow: rgba(27, 31, 35, 0.04) 0 1px 0, rgba(255, 255, 255, 0.25) 0 1px 0 inset;
            box-sizing: border-box;
            color: #0196C1; /* Set text color */
            cursor: pointer;
            display: inline-block;
            font-family: 'salsa', sans-serif; /* Change font here */
            font-size: 18px;
            font-weight: 500;
            line-height: 20px;
            list-style: none;
            padding: 6px 16px;
            position: relative;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: middle;
            white-space: nowrap;
            word-wrap: break-word;
        }
        .button-4:hover {
            text-decoration: none;
            transition-duration: 0.1s;
        }
        .button-4:disabled {
            border-color: rgba(27, 31, 35, 0.15);
            cursor: default;
        }
        .button-4:active {
            box-shadow: rgba(225, 228, 232, 0.2) 0 1px 0 inset;
            transition: none 0s;
        }
        .button-4:focus {
            outline: 1px transparent;
        }
        .button-4:before {
            display: none;
        }
        .button-4:-webkit-details-marker {
            display: none;
        }
        .btn1 {
            display: flex;
            align-items: center;
            justify-content: left;
            position: absolute;
            font-family: 'salsa';
        }
        .container .btn1 {
            top: 630px;
        }
         
/* about me */

        /* Responsive design */
        @media (max-width: 768px) {
            .firsth1, .firsth2, .firstp {
                margin-left: 5%;
                width: 90%;
            }
            .firsth1 {
                font-size: 8vw;
                top: 80px;
            }
            .firsth2 {
                font-size: 6vw;
                top: 180px;
            }
            .firstp {
                font-size: 4vw;
                top: 280px;
            }
            .container {
                flex-direction: column;
                align-items: center;
                padding: 0 5%;
            }
            .imgx {
                margin-left: 0;
                top: 400px;
                width: 80%;
                max-width: 300px;
            }
            .btn1 {
                top: 700px;
                margin-left: 0;
                width: 100%;
                justify-content: center;
            }
            .left-content, .right-content {
                position: static;
                width: 100%;
                text-align: center;
            }
            .vertical-line {
                display: none;
            }
        }

        /* Additional styles for the image toggle */
        .image-box {
            display: none; /* Initially hidden */
            grid-template-columns: repeat(4, 1fr);
            text-decoration: none;
            color: white;
            gap: 50px;
            margin-left: 11%;
        }
        .layout-box {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0px 0px 9px 0px #30FFDA;
            margin-bottom: 20px;
            margin-left: 5px;
            width: 250px;
            height: 250px;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            margin-top: 400px;
        }
        .layout-box img {
            width: 100%;
            height: auto;
            display: block;
        }
        .image-description {
            text-align: center;
            margin-top: 10px;
            color: white;
            text-decoration: none;
        }
        .firsth2 {
            top: 230px;
            margin-top: 80px;
            margin-left: 10%;
            color: white;
            font-size: 2vw;
            font-weight: lighter;
            position: absolute;
            cursor: pointer; /* Indicate clickable */
        }
        .firstp2 {
            margin-left: 10%;
            color: #B3E0EE;
            font-size: 1.2vw;
            font-weight: lighter;
            position: absolute;
            width: 50%;
            margin-top: -20px;
        }

        .firsth3 {
            top: 400px;
            margin-top: 80px;
            margin-left: 10%;
            color: white;
            font-size: 2vw;
            font-weight: lighter;
            position: absolute;
            cursor: pointer; /* Indicate clickable */

        }
        .firstp3 {
            margin-left: 10%;
            color: #B3E0EE;
            font-size: 1.2vw;
            font-weight: lighter;
            position: absolute;
            width: 50%;
            margin-top: -20px;
        }

        .firsth4 {
            top: 600px;
            margin-top: 80px;
            margin-left: 10%;
            color: white;
            font-size: 2vw;
            font-weight: lighter;
            position: absolute;
            cursor: pointer; /* Indicate clickable */
        }
        .firstp4 {
            margin-left: 10%;
            color: #B3E0EE;
            font-size: 1.2vw;
            font-weight: lighter;
            position: absolute;
            width: 50%;
            margin-top: -20px;
        }


        
        .firsth5 {
            top: 800px;
            margin-top: 80px;
            margin-left: 10%;
            color: white;
            font-size: 2vw;
            font-weight: lighter;
            position: absolute;
            cursor: pointer; /* Indicate clickable */
        }
        .firstp5 {
            margin-left: 10%;
            color: #B3E0EE;
            font-size: 1.2vw;
            font-weight: lighter;
            position: absolute;
            width: 50%;
            margin-top: -20px;
        }

        .image-box3 {
            display: none; /* Initially hidden */
            grid-template-columns: repeat(4, 1fr);
            text-decoration: none;
            color: white;
            gap: 50px;
            margin-left: 11%;
            top: 200px;

        }

        .image-box4 {
            display: none; /* Initially hidden */
            grid-template-columns: repeat(4, 1fr);
            text-decoration: none;
            color: white;
            gap: 50px;
            margin-left: 11%;
            top: 200px;

        }

        .image-box5 {
            display: none; /* Initially hidden */
            grid-template-columns: repeat(4, 1fr);
            text-decoration: none;
            color: white;
            gap: 50px;
            margin-left: 11%;
            top: 200px;

        }


    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleText = document.querySelectorAll(".firsth2");
            const imageBoxes = document.querySelectorAll(".image-box");

            toggleText.forEach((text, index) => {
                text.addEventListener("click", () => {
                    imageBoxes[index].style.display = (imageBoxes[index].style.display === "none" || imageBoxes[index].style.display === "") ? "grid" : "none";
                });
            });
        });
    </script>
</head>
<body>
    <div class="box1">
        <h1 class="firsth1">Works</h1>
        <h3 class="firsth2">Social Media Manager at Mayan Media</h3>
        <p class="firstp2">Creating and managing designs.</p> 

        <div class="image-box">
            <a href="Mayan-1.png" target="_blank" class="layout-box">
                <img src="Mayan-1.png" alt="Image 1">
            </a>
            <a href="Mayan-2.png" target="_blank" class="layout-box">
                <img src="Mayan-2.png" alt="Image 2">
            </a>
            <a href="Mayan-3.png" target="_blank" class="layout-box">
                <img src="Mayan-3.png" alt="Image 3">
            </a>
        </div>


        <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleText = document.querySelectorAll(".firsth3");
            const imageBoxes = document.querySelectorAll(".image-box3");

            toggleText.forEach((text, index) => {
                text.addEventListener("click", () => {
                    imageBoxes[index].style.display = (imageBoxes[index].style.display === "none" || imageBoxes[index].style.display === "") ? "grid" : "none";
                });
            });
        });
    </script>

        <h3 class="firsth3">Jagaran Nepal</h3>
        <!-- <p class="firstp3">Creating and managing designs.</p>  -->
        <div class="image-box3">
            <a class="jag" href="https://jagarannepal.org.np/e-bulletin/"> Visit Jagaran Nepal </a>            
        </div>


        <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleText = document.querySelectorAll(".firsth4");
            const imageBoxes = document.querySelectorAll(".image-box4");

            toggleText.forEach((text, index) => {
                text.addEventListener("click", () => {
                    imageBoxes[index].style.display = (imageBoxes[index].style.display === "none" || imageBoxes[index].style.display === "") ? "grid" : "none";
                });
            });
        });
    </script>

        <h3 class="firsth4">Alternative Technology</h3>
        <!-- <p class="firstp4">Creating and managing designs.</p>  -->

        <div class="image-box4">
            <a href="At - 1.png" target="_blank" class="layout-box">
                <img src="At - 1.png" alt="Image 1">
            </a>
            <a href="At - 2.png" target="_blank" class="layout-box">
                <img src="At - 2.png" alt="Image 2">
            </a>
            <a href="At - 3.jpg" target="_blank" class="layout-box">
                <img src="At - 3.jpg" alt="Image 3">
            </a>
        </div>



        <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleText = document.querySelectorAll(".firsth5");
            const imageBoxes = document.querySelectorAll(".image-box5");

            toggleText.forEach((text, index) => {
                text.addEventListener("click", () => {
                    imageBoxes[index].style.display = (imageBoxes[index].style.display === "none" || imageBoxes[index].style.display === "") ? "grid" : "none";
                });
            });
        });
    </script>

        <h3 class="firsth5">Tuition Nepal</h3>
        <!-- <p class="firstp5">Creating and managing designs.</p>  -->


        <div class="image-box5">
            <a href="Budddha Jayanti No watermark.mp4" target="_blank" class="layout-box">
                <img src="Buddha jayanti.jpg" alt="Video Thumbnail">

                <video controls>
                    <source src="Budddha Jayanti No watermark.mp4" type="video/mp4">
                </video>
            
            </a>
            
        </div>
        
        
    </div>
    <div class="container">
        <div class="left-content">
            <div class="content">
                <a href="https://x.com/thebigfatman__" target="_blank"><img src="twitter logo.svg" alt="twitter"></a>
                <a href="https://www.instagram.com/its_big_b_/" target="_blank"><img src="instagram logo.svg" alt="insta"></a>
                <a href="https://github.com/Bibhushan17" target="_blank"><img src="git hub logo.svg" alt="github"></a>
                <a href="https://www.linkedin.com/in/bibhushan-jung-sijapati-82787a196/" target="_blank"><img src="linked in logo.svg" alt="linkedin"></a>
                <a href="https://www.facebook.com/bibhushanjung.sijapati.3/" target="_blank"><img style="margin-bottom:50px;" src="fb logo.svg" alt="linkedin"></a>
            </div>
            <div class="vertical-line"></div>
        </div>
        <div class="right-content">
            <div class="content">
                <div class="email">
                    <p>bibhushanjung077@gmail.com</p>
                </div>
                <div class="vertical-line"></div>
            </div>
        </div>
    </div>
    <div style="height: 2000px;"></div>
</body>
</html>
