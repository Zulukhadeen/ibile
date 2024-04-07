<i class="fa-solid fa-bars btn-menu"></i>
<nav class="menu bg-white">
    <i class="fa-solid mg-2 fa-xmark btn-close"></i>
    <a class="logo ff-jua " href="/">
        <span class="text-dark"> IBILE </span> <span class="text-secondary">FOOD</span>
    </a>
    <div class="flex navbar">
        <ul class="flex nav text-dark">
            <!-- <li><a class="link" id="about" href="./">Blog</a></li> -->
            <li><a class="link" id="program" href="about.php">About</a></li>
            <li><a class="link" id="join" href="contact-us.php">Contact Us</a></li>
        </ul>
        <?php 
            if (isset($_SESSION['loggedIn']))  {
                echo ' <a href="/server/auth/logout.php"> <button class="btn" type="button"> Log Out <button> </a> ';
            } else {
                echo ' <a href="/auth.php"><button class="btn" type="button"> Sign up / Login  </button> </a>' ;

            }
        ?>
    </div>
</nav>