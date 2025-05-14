


<!-- Wrapper div with mx-3 for 30px left/right margin (approx) -->
<div class="mx-3">
    <header class="header d-flex align-items-center  position-fixed shadow-sm rounded-pill px-3 my-3  border border-danger border-3 w-100" style="max-width: calc(100% - 60px); left: 30px; right: 30px;">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
                <h1 class="sitename d-none d-sm-flex">Darshan Restaurant</h1>
            </a>

            <nav id="navmenu" class="navmenu mx-auto">
                <ul>
                    <li><a href="index.php" class="nav-link link-offset-2">Home</a></li>
                    <li><a href="users.php" class="nav-link">users</a></li>
                    <li><a href="order.php" class="nav-link">Order</a></li>
                    <li><a href="contactus.php" class="nav-link">Contact</a></li>
                </ul>
            </nav>

            <i class="mobile-nav-toggle d-xl-none bi bi-list text-black"></i>
        </div>

        <!-- Theme toggle and login -->
        <div class=" d-flex align-items-center gap-3 px-2">
            <a id="theme-toggle" class="bg-transparent  rounded-circle shadow-lg "  style="z-index: 100; position: fixed; bottom:80px; right: 15px;">
                <i id="icon" class="bi bi-sun text-white bg-dark rounded-circle login-btn " style="padding:15px;"></i>
            </a>
            <!-- <p>Hello , <?php echo $_SESSION['email']; ?></p> -->
            <button class=" text-center rounded lgout-btn " id="logoutUser">Log out</button>
        </div>
    </header>

</div>