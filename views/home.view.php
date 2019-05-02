<?php
/**
 * Created by PhpStorm.
 * User: xx
 * Date: 30/04/2019
 * Time: 05:34 م
 */
?>

<html>

<?php include_once('template/head_design.php'); ?>
<body>
<?php include_once('template/header_design.php'); ?>


<div class="divContactUs">
    <div class="container mb-4 text-center " role="alert">
        <h3>you can Recived Message on this Link : </h3>
       <a>http://Localhost/message.php?to=<?php  $linkname=$_SESSION['usernameOrPhone'];
       echo $linkname ;?></a>
    </div>
    <div class="container " style="margin-bottom: 150px">


        <?php

        foreach ($result as $k => $v) {?>

            <div class="card text-center m-4">

                <div class="card-body">

                    <p class="card-text" style="font-size:large;color: #109991"><?php echo $v['content_msg']; ?></p>

                </div>
                <div class="card-footer text-muted" style=" color: #0b2e13; font-size: x-small; background-color: rgba(16, 226, 218, 0.13);">
                    <?php echo $v['sent_time_stamb']; ?>
                </div>
            </div>

        <?php } ?>


    </div>
</div>


<?php include_once('template/footer_design.php'); ?>
<script src="../assets/js/all.min.js"></script>
</body>
</html>

