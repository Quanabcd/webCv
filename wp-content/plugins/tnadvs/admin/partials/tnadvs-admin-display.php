<?php

$countall=0;

$countpublic=0;

$counttrash=0;

//set url

$urledit=  add_query_arg( 'action', 'edit', admin_url( 'admin.php?page='.TNADVS_PLUGIN_SLUG ) );

$urladd =  add_query_arg( 'action', 'add', admin_url( 'admin.php?page='.TNADVS_PLUGIN_SLUG ) );



//url filter

$urlall =  admin_url( 'admin.php?page='.TNADVS_PLUGIN_SLUG );

$urlfilterpublic =  add_query_arg( 'status', 'publish', admin_url( 'admin.php?page='.TNADVS_PLUGIN_SLUG ) );

$urlfiltertrash =  add_query_arg( 'status', 'trash', admin_url( 'admin.php?page='.TNADVS_PLUGIN_SLUG ) );



//url action: delete, trash, untrash

$urlactionuntrash =  add_query_arg( 'action', 'untrash', admin_url( 'admin.php?page='.TNADVS_PLUGIN_SLUG ) );

$urlactiontrash =  add_query_arg( 'action', 'trash', admin_url( 'admin.php?page='.TNADVS_PLUGIN_SLUG ) );

$urlactiondelete =  add_query_arg( 'action', 'delete', admin_url( 'admin.php?page='.TNADVS_PLUGIN_SLUG ) );



//update while press button

if(isset($_POST['doaction'])) {

    $action = $_POST['action'];

    if ($action == "delete") {

        foreach($_POST['post'] as $selected) {

           list($id,$status) = explode('|',$selected) ;

           if($status=="trash")

               deletedata_adv($id);

           else

               updatestatus_adv($id,'trash');

        }

    }

    else if ($action == "trash") {

        foreach($_POST['post'] as $selected) {

            list($id,$status) = explode('|',$selected) ;

             updatestatus_adv($id,'trash');

        }

    }

}



//update while redirect link by param

$status ='';

$action='';

$id='';

if(isset($_GET['status']))

    $status = $_GET['status'];

if(isset($_GET['action']))

    $action = $_GET['action'];

if(isset($_GET['id']))

    $id =  $_GET['id'];

if($action=='trash')

{

    updatestatus_adv($id,'trash');

    wp_redirect($urlall);

}

else if($action=='untrash')

{

    updatestatus_adv($id,'publish');

    wp_redirect($urlfiltertrash);

}

else if($action=='delete')

{

    deletedata_adv($id);

    wp_redirect($urlfiltertrash);

}

//get data

$datas = getlistdata_adv($status,'dcreate desc');



//count

$countall = tncount_adv("");

$countpublic = tncount_adv('publish');

$counttrash = tncount_adv('trash');

?>

<div class="wrap">

<h1 class="wp-heading-inline"><?php echo TNADVS_PLUGIN_NAME ?></h1>

<a href="<?php echo esc_url($urladd); ?>" class="page-title-action">Th??m qu???ng c??o m???i</a>

<hr class="wp-header-end">

    <ul class="subsubsub">

        <li class="all"><a href="<?php echo esc_url($urlall); ?>" <?php if($status=='') echo ' class="current" ' ;?> aria-current="page">T???t c??? <span class="count">(<?php echo $countall ?>)</span></a> |</li>

        <li class="publish"><a href="<?php echo esc_url($urlfilterpublic); ?>" <?php if($status=='publish') echo ' class="current" ' ;?>>???? xu???t b???n <span class="count">(<?php echo $countpublic ?>)</span></a> |</li>

        <li class="trash"><a href="<?php echo esc_url($urlfiltertrash); ?>" <?php if($status=='trash') echo ' class="current" ' ;?>>Th??ng r??c <span class="count">(<?php echo $counttrash ?>)</span></a></li>

    </ul>

<form id="posts-filter" method="post">



   <div class="tablenav top">

       <div class="alignleft actions bulkactions">

           <label for="bulk-action-selector-top" class="screen-reader-text">L???a ch???n thao t??c h??ng lo???t</label>

           <select name="action" id="bulk-action-selector-top">

               <option value="-1">T??c v???</option>

               <option value="delete" class="hide-if-no-js">X??a</option>

               <option value="trash">B??? v??o th??ng r??c</option>

           </select>

           <input type="submit" id="doaction" name="doaction" class="button action" value="??p d???ng">

       </div>

   </div>

    <h2 class="screen-reader-text">Danh s??ch trang</h2>

       <table class="wp-list-table widefat fixed striped pages">

        <thead>

        <tr>

            <td id="cb" class="manage-column column-cb check-column">

                <label class="screen-reader-text" for="cb-select-all-1">Ch???n to??n b???</label>

                <input id="cb-select-all-1" type="checkbox">

            </td>

            <th scope="col" id="name" class="manage-column column-name column-primary">

                <span>H??nh ???nh</span>

            </th>



            <th scope="col" id="phonemail" class="manage-column column-code">Ti??u ?????/Link</th>

            <th scope="col" id="code" class="manage-column column-code">ShortCode</th>

            <th scope="col" id="author" class="manage-column column-author">T??c gi???</th>

            <th scope="col" id="lang" class="manage-column column-lang">Ng??n ng???</th>

            <th scope="col" id="order" class="manage-column column-order">Th??? t???</th>

            <th scope="col" id="date" class="manage-column column-date">Th???i gian</th>

            <th scope="col" id="status" class="manage-column column-status">Tr???ng th??i</th>

            </tr>

        </thead>

           <?php

           foreach ( $datas as  $data ) {



$data = (array)$data;



               ?>



               <tbody id="the-list">

               <tr id="post-<?php echo $data["iid"];  ?>" class="iedit author-self level-0 post-<?php echo  $data["iid"]; ?> type-page status-draft hentry entry">

                   <th scope="row" class="check-column">

                       <input id="cb-select-<?php echo $data["iid"] ?>" type="checkbox" name="post[]" value="<?php echo  $data["iid"] . '|'.$data["vstatus"] ?>">



                   </th>

                   <td class="title column-title has-row-actions column-primary page-title" data-colname="Ti??u ?????">

                       <strong><a class="row-title" href="<?php echo $urledit . '&id='. $data["iid"]?>" aria-label="">

                               <?php

                               if($data["vimg"] !='')

                               {

                                   ?>

                                   <img style="height: 80px" src="<?php echo get_site_url(). $data["vimg"]  ?>" />

                               <?php

                               }else

                               {

                                   echo $data["vlink"];

                               ?>



                               <?php } ?>

                           </a></strong>

                       <div class="row-actions">

                           <?php

                           if($status=="trash")

                           {

                               ?>

                           <span class="untrash"><a href="<?php echo $urlactionuntrash . '&id='.$data["iid"]?>" aria-label="Ph???c h???i ???<?php echo $data["vname"]  ?>???">Ph???c h???i</a> | </span>



                           <span class="delete"><a href="<?php echo $urlactiondelete . '&id='. $data["iid"] ?>" class="submitdelete" aria-label="X??a ???<?php echo $data["vname"] ?>??? v??nh vi???n">X??a v??nh vi???n</a>

                           <?php

                           }

                           else

                           {



                               ?>

                                <span class="edit"><a href="<?php echo $urledit . '&id='.$data["iid"]?>" aria-label="S???a ???<?php echo $data["vname"]  ?>???">Ch???nh s???a</a> | </span>



                           <span class="trash"><a href="<?php echo $urlactiontrash . '&id='. $data["iid"] ?>" class="submitdelete" aria-label="B??? ???<?php echo $data["vname"] ?>??? v??o th??ng r??c">Th??ng r??c</a>

                         <?php

                           }

                               ?>



                       </div>

                   </td>

                   <td class="phonemail column-phonemail" data-colname="Ti??u ?????"><?php echo $data["vname"]  .' <br/>' . $data["vlink"] ?></td>

                   <td class="code column-code" data-colname="Code">[adv code='<?php echo $data["vcode"] ?>' id='<?php echo $data["vpr1"] ?>'][/adv]</td>

                   <td class="author column-author" data-colname="T??c gi???"><?php echo $data["vauthor"] ?></td>

                   <td class="lang column-lang" data-colname="Ng??n ng???"><?php echo $data["vlan"] ?></td>

                   <td class="code column-order" data-colname="Th??? t???"><?php echo $data["iorder"] ?></td>

                   <td class="date column-date" data-colname="Th???i gian">S???a ?????i l???n cu???i<br><abbr

                               title=""><?php if($data["dmodified"] != $data["dcreate"]) echo date_format(date_create($data["dmodified"]),"d/m/Y H:i:s") ; else echo '---'?></abbr></td>

                   <td class="status column-status" data-colname="Tr???ng th??i"><?php echo $data["vstatus"] ?></td>

               </tr>

               </tbody>

               <?php

              }

           ?>

        <tfoot>

        <tr>

            <td id="cb" class="manage-column column-cb check-column">

                <label class="screen-reader-text" for="cb-select-all-1">Ch???n to??n b???</label>

                <input id="cb-select-all-1" type="checkbox">

            </td>

            <th scope="col" id="name" class="manage-column column-name column-primary">

                <span>H??nh ???nh</span>

            </th>



            <th scope="col" id="phonemail" class="manage-column column-phonemail">Ti??u ?????/Link</th>

            <th scope="col" id="code" class="manage-column column-code">ShortCode</th>

            <th scope="col" id="author" class="manage-column column-author">T??c gi???</th>

            <th scope="col" id="lang" class="manage-column column-lang">Ng??n ng???</th>

            <th scope="col" id="order" class="manage-column column-order">Th??? t???</th>

            <th scope="col" id="date" class="manage-column column-date">Th???i gian</th>

            <th scope="col" id="status" class="manage-column column-status">Tr???ng th??i</th>



        </tfoot>



    </table>





</form>

<div class="clear"></div>



<hr>

<p>Create by: T??m Ngh??a from <a href="http://tamnghia.com">tamnghia.com</a></p>

</div>

