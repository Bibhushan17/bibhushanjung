<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibhushan Jung Sijapati</title>
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Salsa&display=swap');

        *
        {
            overflow: hidden;
            overflow-y: auto;
            font: 'salsa';
            margin: 0;
            padding: 0;
            font-family: 'salsa', 'sans-seriff';


        }
        nav
        {
            background-color:#064963 ;
            position: fixed;
            top: 0;
            width: 100%;
            color: white;
            padding: 10px 0;
            z-index: 1000; 
            
        }
        .nav1
        {
            font-family: 'salsa', 'sans-seriff';
            list-style: none;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
        }
        .nav1 li
        {
            margin-left: 50px;
            margin-right: 50px;
            padding: 20px;
            height: 100;
            width: 100%;
           
        }
        .nav1 li {
            margin-right: 10px; /* Adjust this value to increase the gap */
        }
        ul li a
        {
            text-decoration: none;
            color: white;
        }
        /* Ensure the last item doesn't have extra margin */
        .nav1 li:last-child {
            margin-right: 0;
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

        @media (max-width: 768px) {
            .nav1 {
                display: none;
                flex-direction: column;
                width: 100%;
            }

            .nav1.active {
                display: flex;
            }

            .toggle-button {
                display: flex;
            }

            .nav1 li {
                margin: 10px 0; /* Vertical margin between items */
            }

            nav {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }
        }
        

    </style>
</head>
<body>
    <nav>
        <div class="toggle-button" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class = "nav1">
            <li><a href="index.php">Home</a></li>
            <li><a href="academics.php">Academics</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="work.php">Work</a></li>
            <li><a href="contact.php">Contact</a></li>
           
        </ul>
    </nav>
    <script>
        function toggleMenu() {
            var navLinks = document.querySelector('.nav1');
            navLinks.classList.toggle('active');
        }
    </script>
    
    
</body>
</html>