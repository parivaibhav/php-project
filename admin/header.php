<header id="header" class="header d-flex align-items-center sticky-top  ">
    <div class="container position-relative d-flex align-items-center justify-content-between ">

        <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="../assets/img/logo.png" alt="">

        </a>

        <nav id="navmenu" class="navmenu mx-auto">
            <ul>
                <li><a href="index.php" class="active">Home<br></a></li>
                <li><a href="order.php">Orders</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="users.php">users</a></li>
                <li><a href="index.php#chefs">Chefs</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li>
                    <div class="d-flex flex-sm-column gap-3 d-lg-none btn-group-lg px-3">
                        <a class="btn btn-danger text-white" href="index.html#book-a-table">Book a Table</a>
                        <a class="btn btn-danger text-white" href="login.php">Login</a>
                        <a class="btn btn-primary text-white" href="register">Register</a>
                    </div>
        </nav>
        </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </div>

    <div class="d-flex px-2 ">
        <!-- <a class="btn-getstarted" href="index.html#book-a-table">Book a Table</a>-->

        <!-- <p>Hello , <?php echo $_SESSION['email']; ?></p> -->
        <a href="../includes/logout.php" class="bg-danger text-white px-3 py-2 rounded ">Log out</a>

    </div>


</header>