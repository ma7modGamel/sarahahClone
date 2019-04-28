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
    <form method="post"  style="align-content: center; margin-bottom: 120px;" action="../RegAvtivity.php">

        <div  class="formStyle">




           <div >
                <label for="Email"></label>
              <input type="email" id="E-mail" name="Email" class="iText"style="color:#20c997;text-align: center" placeholder="your E-mail">
            </div>
            <?php if (isset($errors_Reg_Array) && count($errors_Reg_Array['mailError']) > 0) { ?>

                <div style=" color:#db2200 ;padding-bottom: 5px; margin-bottom: 5px">

                    <?php foreach ($errors_Reg_Array['mailError'] as $k => $v) {
                        echo $v;
                    }
                    ?>
                </div>

            <?php } ?>


            <div >
                <label for="password"></label>
                 <input type="password" id="password" name="password" class="iText" style="color:#20c997;text-align: center" placeholder="your password">
            </div>
            <?php if (isset($errors_Reg_Array) && count($errors_Reg_Array['passError']) > 0) { ?>

                <div style=" color:#db2200 ;padding-bottom: 5px; margin-bottom: 5px">

                    <?php foreach ($errors_Reg_Array['passError'] as $k => $v) {
                        echo $v;
                    }
                    ?>
                </div>

            <?php } ?>

            <div >
                <label for="rePassword"></label>
              <input type="password" id="rePassword" name="rePassword" class="iText" style="color:#20c997;text-align: center" placeholder="Retype Password">
            </div>
            <?php if (isset($errors_Reg_Array) && count($errors_Reg_Array['repassError']) > 0) { ?>

                <div style=" color:#db2200 ;padding-bottom: 5px; margin-bottom: 5px">

                    <?php foreach ($errors_Reg_Array['repassError'] as $k => $v) {
                        echo $v;
                    }
                    ?>
                </div>

            <?php }
            if (isset($errors_Reg_Array) && count($errors_Reg_Array['passNotEqualRepass']) > 0) { ?>

                <div style=" color:#db2200 ;padding-bottom: 5px; margin-bottom: 5px">

                    <?php foreach ($errors_Reg_Array['passNotEqualRepass'] as $k => $v) {
                        echo $v;
                    }
                    ?>
                </div>

            <?php } ?>



            <div >
                <label for="nickName"></label>
               <input type="text" id="nickName" name="nickName" class="iText" style="color:#20c997;text-align: center"placeholder="nick Name">
            </div>
            <?php if (isset($errors_Reg_Array) && count($errors_Reg_Array['nickNameError']) > 0) { ?>

                <div style=" color:#db2200 ;padding-bottom: 5px; margin-bottom: 5px">

                    <?php foreach ($errors_Reg_Array['nickNameError'] as $k => $v) {
                        echo $v;
                    }
                    ?>
                </div>

            <?php } ?>

            <div >
                <label for="phone"></label>
               <input type="text" id="phone" name="phone" class="iText"style="color:#20c997;text-align: center" placeholder="phone number">
            </div>
            <?php if (isset($errors_Reg_Array) && count($errors_Reg_Array['phoneError']) > 0) { ?>

                <div style=" color:#db2200 ;padding-bottom: 5px; margin-bottom: 5px">

                    <?php foreach ($errors_Reg_Array['phoneError'] as $k => $v) {
                        echo $v;
                    }
                    ?>
                </div>

            <?php } ?>


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
