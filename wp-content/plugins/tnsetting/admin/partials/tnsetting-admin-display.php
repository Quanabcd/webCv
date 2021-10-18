<?php
$lan = '';
if(isset($_GET["lan"]))
    $lan = $_GET["lan"];
if($lan=='')
{
    $alan=explode('-',get_bloginfo("language"));
    if(count($alan)==2)
        $lan= $alan[0];
    else
        $lan=get_bloginfo("language");
}

if(isset($_POST['updatesetting'])){

update_option( 'tnsetting_phone_number'.$lan, replacetxt($_POST['phone']),false );
update_option( 'tnsetting_email'.$lan, replacetxt($_POST['email']),false );
update_option( 'tnsetting_name'.$lan, replacetxt($_POST['name']),false );
update_option( 'tnsetting_address'.$lan, replacetxt($_POST['address']),false );
update_option( 'tnsetting_slogan'.$lan, replacetxt($_POST['slogan']),false );
    update_option( 'tnsetting_fanpage'.$lan, replacetxt($_POST['fanpage']),false );
    update_option( 'tnsetting_bando'.$lan, replacetxt($_POST['bando']),false );
    update_option( 'tnsetting_facebook'.$lan, replacetxt($_POST['facebook']),false );
    update_option( 'tnsetting_youtube'.$lan, replacetxt($_POST['youtube']),false );
    update_option( 'tnsetting_twitter'.$lan, replacetxt($_POST['twitter']),false );
update_option( 'tnsetting_banner'.$lan,getimgpathbanner( replacetxt($_POST['banner'])),false );
update_option( 'tnsetting_footercontent'.$lan, replacetxt( $_POST['footercontent']),false );
}
$config = $this->get_tnsettings();
$langlist = get_option( 'tnlanguages');
$arlang = explode('|',$langlist);
$editor_settings = array(  );
$url =  admin_url( 'options-general.php?page='.TNSETTING_PLUGIN_SLUG );
function getimgpathbanner($path)
{
    $dm = get_site_url();
    return str_replace($dm,'',$path);
}
function replacetxt($str)
{
    $str = str_replace('\"','"',trim($str));
    return $str;
}
?>

<h1 class="wp-heading-inline"><?php _e('Cấu hình chung cho website',TNSETTING_TEXT_DOMAIN) ?></h1>
<p><?php _e('Nhập các thông tin cấu hình chung cho website',TNSETTING_TEXT_DOMAIN) ?></p>
<hr>



<form action="" class="tnsetting-frm" method="POST">
    <p></p>
    <div class="form-group">
        <label class="control-label" ><?php _e('Ngôn ngữ',TNSETTING_TEXT_DOMAIN) ?></label>
        <div class="input-group">
            <?php
            foreach ($arlang as $langl)
            {
                $current='';
                $arl =  explode( '-',$langl);
                if($arl[1]==$lan )
                    $current='selected';
            ?>
            <a class="<?php echo $current; ?>" href="<?php echo $url.'&lan='. $arl[1] ?>" title="<?php echo $arl[0]; ?>"><?php echo $arl[0]; ?></a>&nbsp;&nbsp;&nbsp;
            <?php
            }
            ?>

            <input type="hidden" value="<?php echo $url ;?>" id="url">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label" ><?php _e('Tên công ty/cá nhân',TNSETTING_TEXT_DOMAIN) ?></label>
        <div class="input-group">
            <input type="text" name="name" value="<?php echo $config['name']; ?>">
        </div>
        <span>[tnsetting code='name']</span>
    </div>
    <div class="form-group" style="display: none">
        <label class="control-label" ><?php _e('Slogan',TNSETTING_TEXT_DOMAIN) ?></label>
        <div class="input-group">
            <input type="text" name="slogan" value="<?php echo $config['slogan']; ?>">
        </div>
        <span>[tnsetting code='slogan']</span>
    </div>
    <div class="form-group">
        <label class="control-label" ><?php _e('Số điện thoại',TNSETTING_TEXT_DOMAIN) ?></label>
        <div class="input-group">
            <input type="text" name="phone" value="<?php echo $config['phone']; ?>">
        </div>
        <span>[tnsetting code='phone_number']</span>
    </div>
    <div class="form-group">
        <label class="control-label" ><?php _e('Email',TNSETTING_TEXT_DOMAIN) ?></label>
        <div class="input-group">
            <input type="text" name="email" value="<?php echo $config['email']; ?>" width="100">
        </div>
        <span>[tnsetting code='email']</span>
    </div>
    <div class="form-group">
        <label class="control-label" ><?php _e('Địa chỉ',TNSETTING_TEXT_DOMAIN) ?></label>
        <div class="input-group">
            <input type="text" name="address" value="<?php echo $config['address']; ?>">
        </div>
        <span>[tnsetting code='address']</span>
    </div>
    <div class="form-group" style="display: none">
        <label class="control-label" ><?php _e('Banner',TNSETTING_TEXT_DOMAIN) ?></label>
        <div class="input-group">
            <input type="text" name="banner" class="banner-image" value="<?php echo $config['banner']; ?>">
            <a href="javascript:;" id="tnsetting-upload-image" data-format="image">
                <?php esc_html_e( 'Upload File', TNSETTING_TEXT_DOMAIN ); ?>
            </a>

        </div>

    </div>
    <div class="form-group">
        <label class="control-label" ><?php _e('Nội dung chân trang',TNSETTING_TEXT_DOMAIN) ?></label>
        <div class="input-group">
            <?php wp_editor(  $config['footercontent'], 'footercontent', $editor_settings ); ?>

        </div>
        <span>[tnsetting code='footercontent']</span>
    </div>
    <div class="clear"></div>
    <hr>
    <div class="form-group">
        <label class="control-label" ><?php _e('Fanpage',TNSETTING_TEXT_DOMAIN) ?></label>
        <div class="input-group">
            <textarea id="fanpage" name="fanpage" rows="5" class="form-control" style="width:500px;"><?php echo $config['fanpage']; ?></textarea>
        </div>
        <span>[tnsetting code='fanpage']</span>
    </div>
    <div class="form-group"  style="display: none">
        <label class="control-label" ><?php _e('Bản đồ',TNSETTING_TEXT_DOMAIN) ?></label>
        <div class="input-group">
            <?php wp_editor(  $config['bando'], 'bando', $editor_settings ); ?>
        </div>

    </div>
    <div class="clear"></div>
    <hr>
    <p><b>Tích hợp mạng xã hội</b></p>
    <div class="form-group">
        <label class="control-label" ><?php _e('Facebook',TNSETTING_TEXT_DOMAIN) ?></label>
        <div class="input-group">
            <input type="text" name="facebook" value="<?php echo $config['facebook']; ?>">
        </div>
        <span>[tnsetting code='facebook']</span>
    </div>
    <div class="form-group">
        <label class="control-label" ><?php _e('Youtube',TNSETTING_TEXT_DOMAIN) ?></label>
        <div class="input-group">
            <input type="text" name="youtube" value="<?php echo $config['youtube']; ?>">
        </div>
        <span>[tnsetting code='youtube']</span>
    </div>
    <div class="form-group">
        <label class="control-label" ><?php _e('Twitter',TNSETTING_TEXT_DOMAIN) ?></label>
        <div class="input-group">
            <input type="text" name="twitter" value="<?php echo $config['twitter']; ?>">
        </div>
        <span>[tnsetting code='twitter']</span>
    </div>
    <hr>
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