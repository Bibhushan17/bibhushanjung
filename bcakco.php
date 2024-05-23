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
            margin-top: 150px;
            /* margin-left: 10%; */
            color: #30FFDA;
            font-size: 5vw; /* Responsive font size */
            font-weight: lighter;
            margin-bottom: 25px;
        }
        .box1 {
            margin-top: 20px;
            padding: 0 10%;
            display: inline-block;
            vertical-align: top;
        }
        .college1, .college2, .college3 {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        .college1 img, .college2 img, .college3 img {
            width: 50px;
            height: auto;
            margin-left: 20px;
        }
        .firstp {
            color: #B3E0EE;
            font-size: 1.3vw; /* Responsive font size */
            font-weight: lighter;
            margin: 0;
        }
        .certifications {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-left: 10%;
        }
        .certifications img {
            width: 100px;
            height: auto;
            cursor: pointer;
        }
        .certifications a {
            color: transparent; /* Hide text */
            text-decoration: none;
        }
        .container {
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
            top: 690px;
        }
        /* about me */
        .btn2{
            display: flex;
            align-items: center;
            justify-content: left;
            position: absolute;
            font-family: 'salsa';
            top: 1350px;
        }
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
        .gif-1
        {
            width: 40%;
            margin-top: -900px;
            margin-left: 750px;
        }
        .box2 {
            margin-top: 20px;
            padding: 0 10%;
            display: inline-block;
            vertical-align: top;
        }
        .certifications {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-gap: 100px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
            width: 250px;
            margin-left: 10%;
            top: 500px;
            margin-top: 100px;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-link {
            text-decoration: none;
            color: inherit;
        }

        .card-content {
            padding: 20px;
        }

        .card-content h3 {
            margin: 0 0 10px;
            font-size: 1.2rem;
        }

        .card-content p {
            margin: 0;
            font-size: 0.9rem;
        }

        .card-thumbnail {
            width: 100%;
            height: auto;
        }

        .firsth2
        {
            margin-left: 10%;
            margin-top: 300px;
            /* margin-left: 10%; */
            color: #30FFDA;
            font-size: 5vw; /* Responsive font size */
            font-weight: lighter;
            margin-bottom: 25px;
        }

    </style>
</head>
<body>
    <div class="box1">
        <h1 class="firsth1">Academics</h1>
        <div class="college1">
            <div>
                <p class="firstp">Bachelor of Information Management [BIM]</p>
                <p class="firstp">Tribhuvan University</p>
                <p class="firstp">Kist College of Management & SS</p>
                <p class="firstp">[2019-2023]</p>
            </div>
            <img src="TU logo.svg" alt="tu">
        </div>
        <div class="college2">
            <div>
                <p class="firstp">Higher Secondary Education [+2]</p>
                <p class="firstp">National Examinations Board</p>
                <p class="firstp">Araniko Awasiya Secondary School</p>
                <p class="firstp">[2018/19]</p>
            </div>
            <img src="neb logo.svg" alt="neb">
        </div>
        <div class="college3">
            <div>
                <p class="firstp">Secondary Education Examination</p>
                <p class="firstp">Bal Kalyan Vidya Mandir School</p>
                <p class="firstp">[2016/17]</p>
            </div>
            <img src="TU logo.svg" alt="tu">
        </div>
    </div>

    <style>
  .image-box {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
    text-decoration: none;
    color: white;
  }
  .layout-box {
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 250px;
    justify-content: center;
    align-items: center;
  }
  .layout-box img {
    width: 50%;
    height: auto;
    display: block;
  }
  .image-description {
    text-align: center;
    margin-top: 10px;
  }

</style>
    
    <h1 class="firsth2">Certifications</h1>

    <div class="image-box">
    <a href="Introduction to Search Engine Optimization.pdf" target="_blank" class="layout-box">
      <img src="Introduction to Search Engine Optimization_thumbnail.jpg" alt="Image 1">
      <div class="image-description">Image 1 Description</div>
    </a>
    <a href="Initiating and Planning Projects.pdf" target="_blank" class="layout-box">
      <img src="Initiating and Planning Projects.jpg" alt="Image 2">
      <div class="image-description">Image 2 Description</div>
    </a>
    <a href="Managing Project Risks and Changes.pdf" target="_blank" class="layout-box">
      <img src="Managing Project Risks and Changes_thumbnail.jpg" alt="Image 3">
      <div class="image-description">Image 3 Description</div>
    </a>
    <a href="Optimizing a Website for Search.pdf" target="_blank" class="layout-box">
      <img src="Optimizing a Website for Research_thumbnail.jpg" alt="Image 4">
      <div class="image-description">Image 4 Description</div>
    </a>
    <a href="Search Engine Optimization Fundamentals.pdf" target="_blank" class="layout-box">
      <img src="Search Engine optimization Fundamentals.jpg" alt="Image 5">
      <div class="image-description">Image 5 Description</div>
    </a>
    <a href="Website Optimization Client Report Project.pdf" target="_blank" class="layout-box">
      <img src="Website Optimization Client Report Project_thumbnail.jpg" alt="Image 6">
      <div class="image-description">Image 6 Description</div>
    </a>
  </div>


    <div class="certifications">
    
  
    </div>



    <div class="container">
        <div class="left-content">
            <div class="content">
                <img src="twitter logo.svg" alt="twitter">
                <img src="instagram logo.svg" alt="insta">
                <img src="git hub logo.svg" alt="github">
                <img src="linked in logo.svg" alt="linkedin">
                <img style="margin-bottom:50px;" src="fb logo.svg" alt="linkedin">
            </div>
            <div class="vertical-line"></div>
        </div>
        <div class="btn1">
            <button class="button-4" role="button">View Full Resume</button>
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


















































    <div class="gif-1">
        <svg class="animated" id="freepik_stories-boy-on-graduation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><style>svg#freepik_stories-boy-on-graduation:not(.animated) .animable {opacity: 0;}svg#freepik_stories-boy-on-graduation.animated #freepik--background-complete--inject-227 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideLeft,1.5s Infinite  linear wind;animation-delay: 0s,1s;}svg#freepik_stories-boy-on-graduation.animated #freepik--Shadow--inject-227 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideUp;animation-delay: 0s;} id="elpucpfcl2vzi" class="animable"></path></g></g><path d="M283.619,158.731s1.807,.039,3.47,1.563c1.663,1.524,18.567,37.966,18.567,37.966l7.975-9.921,15.442,36.802s-11.224,12.609-23.694,13.718c-12.47,1.108-25.21-29.316-25.21-29.316l-4.695-23.485,8.145-27.327Z" style="fill: rgb(38, 50, 56); transform-origin: 302.273px 198.81px;" id="elv0h8dt444hk" class="animable"></path><path d="M305.566,198.366c-2.269,7.186-3.183,14.848-2.386,22.353-1.483-7.417-.53-15.393,2.386-22.353h0Z" id="elh89vvxf54rn" class="animable" style="transform-origin: 304.027px 209.542px;"></path><g id="eljiq5twf7tfh"><path d="M277.527,186.672c.17,.829,3.027,23.756,3.027,23.756,0,0-.339-23.097-1.513-30.227l-1.513,6.47Z" style="opacity: 0.3; transform-origin: 279.041px 195.314px;" class="animable" id="elt1tu9aaca6"></path></g></g><g id="el8a6wmtfusmo" class="animable" style="transform-origin: 233.127px 226.264px;"><path d="M220.906,153.706s-6.769,115.45,3.47,146.444c0,0,.569-6.396,13.537-9.728,5.724-1.471,9.629,.505,9.629,.505,0,0-14.415-41.015-15.949-65.798-1.28-20.688,.655-71.423,.655-71.423,0,0-4.423-2.989-11.342,0Z" style="fill: #5820A6; transform-origin: 233.127px 226.264px;" id="elt6ypbngikw" class="animable"></path><g id="el1koxgu4unij"><path d="M245.845,285.902c.023,.072-4.306-2.019-12.343,.633-8.032,2.65-10.68,7.674-10.684,7.68,.469,2.217,.986,4.208,1.557,5.935,0,0,.569-6.396,13.537-9.728,5.724-1.471,9.629,.505,9.629,.505,0,0-.653-1.86-1.694-5.018l-.002-.006Z" style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 235.179px 292.668px;" class="animable" id="el1lh09qyq0hi"></path></g><g id="elgk67dpcj12"><g style="opacity: 0.3; transform-origin: 227.975px 253.131px;" class="animable" id="eldqi55pz5hou"><path d="M222.249,225.37c-.862,19.085,3.155,38.37,11.567,55.522-9.45-20.709-7.447-38.089-11.567-55.522" id="el3e05tfwbeq6" class="animable" style="transform-origin: 227.975px 253.131px;"></path></g></g></g><g id="elwyzcjuar2w9" class="animable" style="transform-origin: 277.234px 221.568px;"><path d="M263.215,153.825s-6.017,115.965,7.51,135.605c0,0-.435-4.322,10.654-3.078,11.484,1.288,9.986-1.761,11.128-4.025,1.351-2.679-15.28-46.732-17.266-69.609-2.032-23.413-1.472-56.334-1.472-56.334,0,0-1.369-3.344-10.554-2.559Z" style="fill: #5820A6; transform-origin: 277.233px 221.568px;" id="el7bvxhhtmy99" class="animable"></path><g id="elhu18061sju"><path d="M292.508,282.327c.215-.426-.026-1.899-.588-4.163-7.238,5.55-5.008,.942-18.074,2.212-2.775,.27-4.828,.786-6.351,1.438,.928,3.231,1.998,5.825,3.231,7.616,0,0-.435-4.322,10.654-3.078,11.484,1.288,9.986-1.761,11.128-4.025Z" style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 280.04px 283.797px;" class="animable" id="el5k8nra5ds7"></path></g><g id="elujm9nq8ef3l"><path d="M270.28,224.151l11.662,22.946s-10.639-25.673-12.721-37.005c-2.082-11.333-3.701-17.325-3.701-17.325l1.728,20.712c.31,3.72,1.34,7.345,3.031,10.673Z" style="opacity: 0.3; transform-origin: 273.731px 219.932px;" class="animable" id="elpfg7xh5hqq"></path></g></g><path d="M286.567,106.968c-.093,0-.187-.035-.259-.104l-12.299-11.749c-.15-.143-.155-.38-.013-.53,.145-.149,.381-.155,.53-.012l12.299,11.749c.15,.143,.155,.38,.013,.53-.074,.077-.173,.116-.271,.116Z" style="fill: #5820A6; transform-origin: 280.417px 100.719px;" id="eldbvh8nzcath" class="animable"></path><path d="M272.905,93.91c-.094,0-.187-.035-.26-.104l-1.66-1.593c-.149-.143-.154-.381-.011-.53,.143-.15,.379-.154,.53-.011l1.66,1.593c.149,.143,.154,.381,.011,.53-.073,.077-.172,.115-.271,.115Z" style="fill: #5820A6; transform-origin: 272.074px 92.7388px;" id="el31k4uyxn9dz" class="animable"></path></g><g id="elqirae28z8e"><path d="M260.634,299.291s22.052,40.757,23.295,42.081c1.242,1.324,8.657,8.266,8.657,8.266,0,0-24.813-43.772-31.952-50.347Z" style="opacity: 0.3; transform-origin: 276.61px 324.464px;" class="animable" id="el6jdfedbgfsu"></path></g></g><defs>     <filter id="active" height="200%">         <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>    </filter>    <filter id="hover" height="200%">        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>            <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>    </filter></defs></svg>    <div style="height: 1000px;"></div>
    </div>
</body>
</html>
