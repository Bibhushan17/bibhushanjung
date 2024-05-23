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
        }
        .firsth1 {
            top:80px;
            margin-top:85px;
            margin-left: 150px;
            color: #30FFDA;
            font-size: 60px;
            font-weight: lighter;
            position: absolute;
        }
        .container {
            display: flex;
            justify-content: space-between;
            padding: 0 80px;
            margin-top: 290px; /* Adjusted for positioning below the navbar */
        }
        .left-content, .right-content {
            position: sticky;
            top: 60px; /* Adjust according to the height of the navbar */
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
        .left-content .content
        {
            margin-bottom: 55px;
        }
        .right-content .content
        {
            margin-bottom: 5px;
        }
        .box1 p{
            top: 150;
        }
        .firsth2 {
            top:230px;
            margin-top:10px;
            margin-left: 150px;
            color: #5BD6FC;
            font-size: 40px;
            font-weight: lighter;
            position: absolute;
        }
        .firstp {
            top: 350px;
            /* margin-top:5px; */
            margin-left: 150px;
            color: #B3E0EE;
            font-size: 20px;
            font-weight: lighter;
            position: absolute;
            width: 700px;
        }
        .imgx {
            top: 200px;
            margin-left: 1000px;
            position: absolute;
            /* width: 550px;  */
            height: auto; /* Maintain aspect ratio */
        }
        .imgx img {
            width: 50%; /* Ensure the image fits within the container */
            height: auto; /* Maintain aspect ratio */
            /* box-shadow: rgba(0, 0, 0, 0.56) 0px 10px 10px 4px; */
            box-shadow: 0px 0px 9px 0px #00C2FF;
        }

.button-4 {
  appearance: none;
  background-color: transparent;
  border: 2px solid #0196C1;
  border-radius: 6px;
  box-shadow: rgba(27, 31, 35, 0.04) 0 1px 0, rgba(255, 255, 255, 0.25) 0 1px 0 inset;
  box-sizing: border-box;
  color: WHITE;
  cursor: pointer;
  display: inline-block;
  font-family:  "salsa" ;
  font-size: 18px;
  font-weight: 500;
  line-height: 20px;
  list-style: none;
  padding: 6px 16px;
  position: relative;
  /* transition: background-color 0.2s cubic-bezier(0.3, 0, 0.5, 1); */
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
  word-wrap: break-word;
}

.button-4:hover {
    background-color: transparent;
  text-decoration: none;
  transition-duration: 0.1s;
}

.button-4:disabled {
    background-color: transparent;
  border-color: rgba(27, 31, 35, 0.15);
  /* color: #959DA5; */
  cursor: default;
}

.button-4:active {
    background-color: transparent;
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
  display: none;<?php
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
          .firsth2 {
              top: 230px;
              margin-top: 15px;
              margin-left: 10%;
              color: #5BD6FC;
              font-size: 3vw; /* Responsive font size */
              font-weight: lighter;
              position: absolute;
          }
          .firstp {
              top: 350px;
              margin-left: 10%;
              color: #B3E0EE;
              font-size: 1.3vw; /* Responsive font size */
              font-weight: lighter;
              position: absolute;
              width: 50%;
          }
          .box1 .firstp
          {
              top: auto;
              margin-top: 280px;
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
      .college1 .img3
      {
          transform: translate(1000%,100%);
      }
  
  
      </style>
  </head>
  <body>
     
      <div class="box1">
          
          <h1 class="firsth1">Academics</h1>
          <div class="college1">
              <p class="firstp">Bachelor of Information Management [BIM]</p><br>
              <p class="firstp">Tribhuvan University</p><br>
              <p class="firstp">Kist College of Management & SS</p><br>
              <p class="firstp">[2019-2023]</p>
              <img class="img3" src="TU logo.svg" alt="tu">
          </div>
  
          <div class="college2">
              <p class="firstp">Higher Secondary Education [+2]</p><br>
              <p class="firstp">National Examinations Board</p><br>
              <p class="firstp">Araniko Awasiya Secondary School</p><br>
              <p class="firstp">[2018/19]</p>
              <img class="img4" src="neb logo.svg" alt="tu">
          </div>
  
          <div class="college3">
              <p class="firstp">Secondary Education Examination]</p><br>
              <p class="firstp">Bal Kalyan Vidya Mandir School</p><br>
              <p class="firstp">[2016/17]</p>
              <img class="img5" src="TU logo.svg" alt="tu">      
          </div>
   
          
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
  
  
  
    
      <!-- Add more content here to test scrolling -->
      <div style="height: 1000px;"></div>
  </body>
  </html>
  
}

.btn1
{
    display: flex;
    align-items: center;
    justify-content: left;
    position: absolute;
    font-family: 'salsa';
}
.container .btn1
{
        
    top: 600px;
    margin-left: 70px;
    
}

/* RESPONSIVE DESING */
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

          /* Hide the toggle button by default */
          .toggle-button {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
            cursor: pointer;
        }

        .toggle-button span {
            height: 3px;
            width: 100%;
            background-color: white;
            border-radius: 10px;
        }
        
    </style>
</head>
<body>
    <div class="toggle-button" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
    </div>
    <div class="box1">
        <h1 class="firsth1">Bibhushan Jung Sijapati</h1>
        <h3 class="firsth2">I build things for internet.</h3>
        <p class="firstp"> I’m a developer specializing in building websites and it’s contents
            along with applicable knowledge of Search Engine Optimization &
            Graphic Designing. For me SEO, Web & Graphics are sides of triangle
            interconnected to produce human centric products.
        </p>
        <div class="imgx">
            <img src="bibhushanbg1 1.png" alt="big">
        </div>
        
    </div>

    <div class="container">
        <div class="left-content">
            <div class="content">
                <img src="twitter logo.svg" alt="twitter">
                <img src="instagram logo.svg" alt="insta">
                <img src="git hub logo.svg" alt="github">
                <img src="linked in logo.svg" alt="linkedin">
                <img src="linked in logo.svg" alt="linkedin">

            </div>
            <div class="vertical-line"></div>
        </div>
        <div class="btn1">
            <button class="button-4" role="button" style: font-family="salsa">View Full Resume</button>
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

    






































































    



    <!-- for respoonsiveness -->
    <script>
        function toggleMenu() {
            var navLinks = document.querySelector('.container');
            navLinks.classList.toggle('active');
        }
    </script>

</body>
</html>
