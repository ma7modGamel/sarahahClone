<?php
/**
 * Created by PhpStorm.
 * User: xx
 * Date: 19/04/2019
 * Time: 11:42 م
 */
?>


<header>
    <div class="container-fluid ">

        <div class="navbar-div left">

           <span>
               <a>
                <img width="60" src="../../assets/images/logo300.png " alt="logo saraha">

            </a>
</span>

            <span>
            <input type="text" class=" nomargininput" placeholder="    Search...">
            </span>
            <span>


</span></div>



        <nav class="navbar navbar-expand-lg navbar-light  right"  style="background: #109991">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                   <?php if(!(isset($_SESSION['$isFound'])&&$_SESSION['$isFound'] =true)){ ?>
                       <li><a href="../../home.php">Login</a></li>
                       <li><a href="../../RegAvtivity.php">Register</a></li>
                    <?php } ?>
                    <?php if(isset($_SESSION['$isFound'])&&$_SESSION['$isFound'] =true){?>
                    <li><a href="../../home.php">Home</a></li>
                    <?php }?>
                    <li><a href="../../views/AboutActivity.view.php">About Us</a></li>
                    <li><a href="../../views/ContactUs.view.php">Contact Us</a></li>
                    <?php if(isset($_SESSION['$isFound'])&&$_SESSION['$isFound'] =true){?>
                    <li><a href="../../logout.php">Log Out</a></li>
                    <?php }?>
                </ul>
            </div>
        </nav>
    </div>


</header>
