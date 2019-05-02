<!DOCTYPE html>
<html lang="en">
<?php include_once('template/head_design.php'); ?>
<body>

<?php include_once('template/header_design.php'); ?>

<div class="divTwo ">
    <img src="../assets/images/avatar-female.png" style="height: 50px">

    <h3>Login</h3>
</div>


<div class="container">
    <form method="post" class="formStyle" action="../login.php">

        <?php if (isset($array_Errors['authError']) && count($array_Errors['authError']) > 0) { ?>
            <div role="alert"
                 style="border:1px solid #bb3f32; border-radius:5px ; color:#993122; background-color:rgba(226,56,58,0.35) ;padding: 5px; margin: 5px">
                <strong> * ERROR</strong>

                <?php foreach ($array_Errors['authError'] as $k => $v) {
                    echo $v;
                }
                ?>
            </div>

        <?php } ?>
        <div class="iinputTexClass">
            <label for="username"></label>
            <input type="text" id="username" name="name" class="iText" placeholder="enter name">
        </div>

        <?php if (isset($array_Errors) && count($array_Errors['nameError']) > 0) { ?>

            <div style=" color:#db2200 ;padding-bottom: 5px; margin-bottom: 5px">

                <?php foreach ($array_Errors['nameError'] as $k => $v) {
                    echo $v;
                }
                ?>
            </div>

        <?php } ?>

        <div class="iinputTexClass">
            <label for="password"></label>
            <input type="password" id="password" class="iText" name="pass" placeholder="enter password">
        </div>

        <?php if (isset($array_Errors) && count($array_Errors['passError']) > 0) { ?>
            <div style=" color:#db2200 ;padding-bottom: 5px; margin-bottom: 5px">

                <?php foreach ($array_Errors['passError'] as $K => $V) {
                    echo $V;
                } ?>
            </div>
        <?php } ?>

        <div class="iinputTexClass">
              <span>
                  <input type="checkbox" style="margin-left: 20px">Remember me
              </span>
            <span>
                <input type="submit" id="login" class="iButton iinputTexClass" value="log in">
              </span>
        </div>

        <div class="iinputTexClass" style="padding-top: 5%">
            <a href="#">I Forgot My Password</a>

        </div>
    </form>
</div>

<?php include_once('template/footer_design.php'); ?>

</body>
</html>