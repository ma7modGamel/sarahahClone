<?php
/**
 * Created by PhpStorm.
 * User: xx
 * Date: 29/04/2019
 * Time: 06:56 م
 */
?>


<html lang="en">
<?php include_once('template/head_design.php'); ?>
<body>

<?php include_once('template/header_design.php'); ?>

<div class="divTwo ">
    <img src="../assets/images/avatar-female.png" style="height: 50px">

    <h3>Send Message</h3>
</div>


<div class="container" >


    <form method="post" class="formStyle"  action="<?php echo $userLink?>">

        <div class="divContactUs" style="margin-bottom:20px;text-align: center;">Leave a Constractive Message :)</div>
        <?php if (isset($errors_Reg_Array['affectedroeErrors']) && count($errors_Reg_Array['affectedroeErrors']) > 0) { ?>
            <div role="alert"
                 style="border:1px solid #bb3f32; border-radius:5px ; color:#993122; background-color:rgba(226,56,58,0.35) ;padding: 5px; margin: 5px">
                <strong> * ERROR</strong>

                <?php foreach ($errors_Reg_Array['affectedroeErrors'] as $k => $v) {
                    echo $v;
                }
                ?>
            </div>

        <?php } ?>


        <div>
            <label for="msg"></label>
            <textarea type="text" id="msg" name="msg" value="<?php echo $msg; ?>" class="iText" style="height: 150px; background: rgba(16,226,218,0.04); color:#20c997;font-size: large; padding: 10px"
                      placeholder="your Message .. "></textarea>
        </div>
        <?php if (isset($sendMsgError) && count($sendMsgError['lengthMsgError']) > 0) { ?>

            <div style=" color:#db2200 ;padding-bottom: 5px; margin-bottom: 5px">

                <?php foreach ($sendMsgError['lengthMsgError'] as $k => $v) {
                    echo $v;
                }
                ?>
            </div>

        <?php } ?>
        <?php if (isset($sendMsgError) && count($sendMsgError['userNotFound']) > 0) { ?>

            <div style=" color:#db2200 ;padding-bottom: 5px; margin-bottom: 5px">

                <?php foreach ($sendMsgError['userNotFound'] as $k => $v) {
                    echo $v;
                }
                ?>
            </div>

        <?php } ?>

        <div class="iinputTexClass">

            <span>
                <input type="submit" id="send" class="iButton iinputTexClass" value="Send">
              </span>
        </div>


    </form>
</div>

<?php include_once('template/footer_design.php'); ?>

</body>
</html>
