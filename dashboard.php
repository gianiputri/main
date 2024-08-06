<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- css -->
    <link rel="stylesheet" href="style.css">


    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>dashboard</title>
</head>

<body>
    <?php
    include ("config.php");
    ?>

    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="ptcs.png" alt="">
                </span>

                <i class='bx bx-chevrons-right toggel'></i>

            </div>
        </header>

        <div class="menu-bar">
            <div class="menu">


                <ul class="menu-links">
                    <li class="search">
                        <i class='bx bx-search icon'></i>
                        <input type="search" placeholder="Search...">
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text-nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text-nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text-nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text-nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text-nav-text">Home</span>
                        </a>
                    </li>



                </ul>
            </div>
        </div>
    </nav>

</body>

</html>