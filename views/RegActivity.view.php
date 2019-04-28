<?php
?>
<html>

<?php include_once('template/head_design.php'); ?>
<body>
<?php include_once('template/header_design.php'); ?>

<div class="divTwo ">
    <img src="assets/images/avatar-female.png" style="height: 50px">

    <h3>New User</h3>
</div>

<div class="container" >
    <form method="post"  style="align-content: center; margin-bottom: 120px;" action="../thanx.php">

        <div method="post" class="formStyle" action="#">

           <div >
                <label for="E-mail"></label>
              <input type="email" id="E-mail" name="E-mail" class="iText"style="text-align: center" placeholder="your E-mail">
            </div>
            <div >
                <label for="password"></label>
                 <input type="password" id="password" name="password" class="iText" style="text-align: center" placeholder="your password">
            </div>

            <div >
                <label for="rePassword"></label>
              <input type="password" id="rePassword" name="rePassword" class="iText" style="text-align: center" placeholder="Retype Password">
            </div>
            <div >
                <label for="nickName"></label>
               <input type="text" id="nickName" name="nickName" class="iText" style="text-align: center"placeholder="nick Name">
            </div>
            <div >
                <label for="phone"></label>
               <input type="text" id="phone" name="phone" class="iText"style="text-align: center" placeholder="phone number">
            </div>



            <div style=" padding: 10px; text-align: center">
                <input type="checkbox" id="checkbox" href="#"><span>I am at least 17 years old and have read and acceptedthe terms and conditions related to the website</span></input>
            </div>

            <span>
                <input type="submit" id="sign up" class="iButton iinputTexClass" value="sign up ">
            </span>
        </div>
    </form>
</div>

<div>
<?php include_once('template/footer_design.php'); ?>
</div>
<script src="../assets/js/all.min.js"></script>
</body>
</html>
