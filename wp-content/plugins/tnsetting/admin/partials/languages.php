<?php
if(isset($_POST['updatesetting'])){
    update_option( 'tnlanguages', trim($_POST['language']),false );
}
$tnlanguages = get_option("tnlanguages");

?>

<h1 class="wp-heading-inline"><?php _e('Cấu hình chung cho website',TNSETTING_TEXT_DOMAIN) ?></h1>
<p><?php _e('Nhập các thông tin cấu hình chung cho website',TNSETTING_TEXT_DOMAIN) ?></p>
<hr>
<form action="" class="tnsetting-frm" method="POST">
    <p></p>
    <div class="form-group">
        <label class="control-label" ><?php _e('Danh sách ngôn ngữ',TNSETTING_TEXT_DOMAIN) ?></label>
        <div class="input-group">
            <input type="text" name="language" value="<?php echo $tnlanguages; ?>">
        </div>
    </div>



    <div class="form-group">
        <label class="control-label" >&nbsp;</label>
        <div class="input-group">
            <input type="submit" class="btnsave" name="updatesetting" value="<?php _e('Lưu thông tin',TNSETTING_TEXT_DOMAIN) ?>">
        </div>

    </div>

</form>
<div class="clear"></div>
<hr>
<p>Create by: Tâm Nghĩa from <a href="http://tamnghia.com">tamnghia.com</a></p>