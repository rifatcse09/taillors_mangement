<?php
require_once('functions/cls_dbconfig.php');
function __autoload($classname){
    require_once("functions/$classname.class.php");
}
$order_id = htmlspecialchars($_REQUEST['order'], ENT_QUOTES, 'UTF-8');
$cls_booking = new cls_booking();
$query = $cls_booking->view_order_by_id($order_id);
$order_row = $query->fetch_assoc();
?>
<html xmlns:width="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        body {
            font-size:12px;
        }
        table tr td{
            font-size:12px;
            border:1px solid black;
            height: 40px;
            vertical-align: top;

        }
        table{
            border-collapse: collapse;
            width:100%;
        }
        .main-div{
            min-height: 672px;
            width:442px;
            margin-left: 50px;
            background-image: url('../../images/jolsap@2x.png');
            background-repeat: no-repeat;
            background-position: center; 
            background-size: 200px;
            border:1px solid black;
            padding: 10px;
        }
        .left{
            float:left;
        }
    </style>
</head>
<body>
    <div class="left">
        <div class="main-div">
            <div class="section-top" style="float: left;width:100%;margin-top: 5px;border-bottom: 1px dotted gray;">
                <div class="top">
                    <div class="top-left" style="float:left;width:30%">
                        <label class="control-label" style="text-align:left;">মেমো নং- </label>
                        <label class=" control-label"> <?php echo $order_row['order_no'] ?> </label>
                    </div>
                    <div class="top-right" style="float:left;width:70%">
                        <div style="float:left"><img style="width: 25px" src="../../images/left_logo@2x.png" alt=""></div>
                        <div  style="float:left"><img style="width: 120px" src="../../images/Title@2x.png" alt=""></div>
                    </div>
                </div>
                <div class="middle">
                    <div class="middle-left" style="float:left;width: 40%">
                        <label class="control-label" style="text-align:left;"> অর্ডার তারিখঃ</label>
                        <label class=" control-label"> <?php echo $order_row['order_date'] ?> </label>
                    </div>
                    <div class="middle-middle" style="float:left;font-weight: bold;color:#fff;background: #000;padding: .5%;border-radius: 15px;"> কারিগরের রশিদ </div>
                    <div class="middle-right" style="float:right;"> 
                        <label class="control-label" style="text-align:left;"> ডেলিভারি তারিখঃ </label>
                        <label class=" control-label"> <?php echo $order_row['delivery_date'] ?> </label> 
                    </div>
                </div>
                <div class="bottom">
                    <div class="bottom-up" style="float:left;width: 100%;margin-top:5px;margin-bottom: 5px;">
                        <label class="control-label" style="text-align:left;"> নামঃ </label>
                        <label class=" control-label"> <?php echo $order_row['name'] ?> </label>
                    </div>
                    <div class="bottom-bottom" style="float:left;width: 100%">
                        <?php echo $order_row['sherwani'] > 0 ? "<div class='form-group;'style='float:left;height:20px;'>
                   <label class='control-label' style='text-align:left;'>শেরওয়ানীঃ</label>
                   <label class='control-label' style='font-weight:bold;padding-right:5px;'>" . $order_row['sherwani'] . "</label>
                   </div>" : '' ?>
                        <?php echo $order_row['panjabi'] > 0 ? "<div class='form-group' style='float:left;height:20px;'>
                  <label class='control-label' style='text-align:left;'>পাঞ্জাবীঃ</label>
                  <label class='control-label' style='font-weight:bold;padding-right:5px;'>" . $order_row['panjabi'] . "</label>
                  </div>" : '' ?>
                        <?php echo $order_row['kabli'] > 0 ? "<div class='form-group' style='float:left;height:20px;'>
                  <label class='control-label' style='text-align:left;'> কাবলীঃ</label>
                  <label class='control-label' style='font-weight:bold;padding-right:5px;'>" . $order_row['kabli'] . "</label>
                  </div>" : '' ?>
                        <?php echo $order_row['jubba'] > 0 ? "<div class='form-group' style='float:left;height:20px;' >
                     <label class='control-label' style='text-align:left;'>জুব্বাঃ</label>
                      <label class='control-label' style='font-weight:bold;padding-right:5px;'>" . $order_row['jubba'] . "</label>
                      </div>" : '' ?>

                        <?php echo $order_row['phatua'] > 0 ? "<div class='form-group' style='float:left;height:20px;'>
                     <label class='control-label' style='text-align:left;'>ফতুয়াঃ</label>
                     <label class='control-label' style='font-weight:bold;padding-right:5px;'>" . $order_row['phatua'] . "</label>
                      </div>" : '' ?>
                    </div>
                </div>
            </div>
            <div style="width:100%;float:left;">

                <div class="top" style="width:100%;display: block;">
                    <div class="main-top" style="width:100%;text-align:center;margin-top: 10px">
                        <label class="control-label" style="text-align:center;"> বিসমিল্লাহির রাহমানির রাহীম </label>
                    </div>
                    <div class="middle" style="float:left;display: block;width:100%;text-align: center">
                        <div style="float:left;padding-left: 100px;"><img style="width: 35px" src="../../images/left_logo.svg" alt=""></div>
                        <div  style="float:left"><img style="width: 220px" src="../../images/Title.svg" alt=""></div>
                    </div>

                </div>
                <div style="float:left;margin-right: 5px;width: 100%">
                    <div>
                        <label class="control-label" style="text-align:left;">মেমো নং- </label>
                        <label class=" control-label"> <?php echo $order_row['order_no'] ?> </label>

                    </div><!--/form-group-->

                </div>
                <div style="float:left;margin-right: 5px;width: 100%">
                    <div style="float:left">
                        <label class="control-label" style="text-align:left;">অর্ডার তারিখঃ</label>
                        <label class=" control-label"> <?php echo $order_row['order_date'] ?> </label>

                    </div><!--/form-group-->
                    <div style="float:right">
                        <label class="control-label" style="text-align:left;">ডেলিভারি তারিখঃ</label>
                        <label class=" control-label"> <?php echo $order_row['delivery_date'] ?> </label>

                    </div><!--/form-group-->

                </div>

                <div style="float:left;margin-right: 5px;width: 100%">
                    <div style="float:left">
                        <label class="control-label" style="text-align:left;"> নামঃ</label>
                        <label class=" control-label"> <?php echo $order_row['name'] ?> </label>

                    </div><!--/form-group-->
                    <div style="float:right">
                        <label class="control-label" style="text-align:left;"> মোবাইলঃ</label>
                        <label class=" control-label"> <?php echo $order_row['mobile'] ?> </label>

                    </div><!--/form-group-->

                </div>

            </div>

            <div style="width:100%;float:left">

                <div style="float:left;margin-right: 10px;margin-top: 10px;width: 25%">
                    <div class="form-group" style='height:20px;'>
                        <label class="control-label">লম্বা:</label>
                        <label class="control-label"> <?php echo $order_row['lomba'] ?> </label>
                    </div><!--/form-group-->

                    <div class="form-group" style='height:20px;'>
                        <label class="control-label">বডি:</label>
                        <label class="control-label"><?php echo $order_row['body'] ?></label>
                    </div><!--/form-group-->

                    <div class="form-group" style='height:20px;' >
                        <label class="control-label">ফুট:</label>
                        <label class="control-label"><?php echo $order_row['fut'] ?></label>
                    </div><!--/form-group-->

                    <div class="form-group"style='height:20px;'>
                        <label class="control-label">হাতা:</label>
                        <label class="control-label"><?php echo $order_row['hata'] ?></label>
                    </div><!--/form-group-->
                    <div class="form-group"style='height:20px;'>
                        <label class="control-label">গলা:</label>
                        <label class="control-label"><?php echo $order_row['gola'] ?></label>
                    </div><!--/form-group-->
                    <div class="form-group" style='height:20px;'>
                        <label class="control-label"><?php echo!empty($order_row['mohori']) ? 'মহুরী:' : 'কফ:' ?></label>
                        <label class="control-label"><?php echo!empty($order_row['mohori']) ? $order_row['mohori'] : $order_row['cuf'] ?></label>
                    </div><!--/form-group-->
                </div>

                <div style="float:left;width: 40%;margin-top: 10px;">
                    <div class="form-group">
                        <label class="control-label"><?php echo!empty($order_row['plat_cl_ck']) ? 'প্লেট কলার ' . $order_row['plat_cl_ck'] . ' সোজা' : 'প্লেট কলার ' . $order_row['plat_cl_sj'] . ' সোজা ' ?> </label>

                    </div><!--/form-group-->
                    <div class="form-group">
                        <label class="control-label"><?php echo nl2br($order_row['panj_biborn']); ?> </label>

                    </div><!--/form-group-->
                </div>

                <div style="float:left;width: 32%;margin-top: 10px;min-height: 420px;">
                    <?php echo $order_row['akchata_panj'] > 0 ? "<div class='form-group;'style='float:left;width:100%;height:20px;'>
                   <label class='control-label' style='text-align:left;'>একছটা পাঞ্জাবীঃ</label>
                   <label class='control-label'>" . $order_row['akchata_panj'] . "</label>
                   </div>" : '' ?>
                    <?php echo $order_row['kolidar_panj'] > 0 ? "<div class='form-group' style='float:left;width:100%;height:20px;'>
                  <label class='control-label' style='text-align:left;'>কলিদার পাঞ্জাবিঃ</label>
                  <label class='control-label'>" . $order_row['kolidar_panj'] . "</label>
                  </div>" : '' ?>
                    <?php echo $order_row['kabli_shirt'] > 0 ? "<div class='form-group' style='float:left;width:100%;height:20px;'>
                  <label class='control-label' style='text-align:left;'> কাবলী শার্টঃ</label>
                  <label class='control-label'>" . $order_row['kabli_shirt'] . "</label>
                  </div>" : '' ?>
                    <?php echo $order_row['akchata_jubba'] > 0 ? "<div class='form-group' style='float:left;width:100%;height:20px;' >
                     <label class='control-label' style='text-align:left;'>একছটা জুব্বাঃ</label>
                      <label class='control-label'>" . $order_row['akchata_jubba'] . "</label>
                      </div>" : '' ?>
                    <?php echo $order_row['kolidar_jubba'] > 0 ? "<div class='form-group' style='float:left;width:100%;height:20px;' >
                     <label class='control-label' style='text-align:left;'>কলিদার জুব্বাঃ</label>
                      <label class='control-label'>" . $order_row['kolidar_jubba'] . "</label>
                      </div>" : '' ?>

                    <?php echo $order_row['phatua'] > 0 ? "<div class='form-group' style='float:left;width:100%;height:20px;'>
                     <label class='control-label' style='text-align:left;'>ফতুয়াঃ</label>
                     <label class='control-label'>" . $order_row['phatua'] . "</label>
                      </div>" : '' ?>


                    <?php echo $order_row['awami'] > 0 ? "<div class='form-group' style='float:left;width:100%;height:20px;'>
                   <label class='control-label' style='text-align:left;'> আওয়ামী শার্টঃ</label>
                     <label class='control-label'>" . $order_row['awami'] . "</label>
                      </div>" : '' ?>
                    <?php echo $order_row['sherwani'] > 0 ? "<div class='form-group' style='float:left;width:100%;height:20px;'>
                   <label class='control-label' style='text-align:left;'> শেরয়ানীঃ</label>
                     <label class='control-label'>" . $order_row['sherwani'] . "</label>
                      </div>" : '' ?>

                </div>
            </div>
            <div class="footer">
                <div class="sakkor" style="float:left;padding-right: 10px;padding-top: 2px;">মাষ্টার স্বাক্ষর</div>
                <div class="sakkor" style="float:left;border:1px solid #000;padding: 1px;margin-right: 2px;">প্লেট  ফাড়া </div>
                <div class="sakkor" style="float:left;border:1px solid #000;padding: 2px;margin-right: 2px;min-height: 15px;min-width: 50px;"><?php echo !empty($order_row['pan_plat_pada'])? $order_row['pan_plat_pada'] : '' ?></div>
                <div class="sakkor" style="float:left;border:1px solid #000;padding: 1px;margin-right: 2px"> সাইট পকেট </div>
                <div class="sakkor" style="float:left;border:1px solid #000;padding: 2px;margin-right: 2px;min-height: 15px;min-width: 50px;"><?php echo !empty($order_row['pan_site_pocket']) ? $order_row['pan_site_pocket'] : '' ?></div>
                <div class="sakkor" style="float:left;padding-right: 5px;padding-top: 2px;">নিচে</div>
                <div class="sakkor" style="float:left;padding-top: 2px;">কর্তৃপক্ষের স্বাক্ষর</div>
            </div>
        </div>
    </div>
    <?php if($order_row['payjama'] > 0 || $order_row['saluar'] > 0 || $order_row['cudi'] > 0 || $order_row['aligod'] > 0 ){?>
    <div class="left">
        <div class="main-div">
            <div class="section-top" style="float: left;width:100%;margin-top: 5px;border-bottom: 1px dotted gray;">
                <div class="top">
                    <div class="top-left" style="float:left;width:30%">
                        <label class="control-label" style="text-align:left;">মেমো নং-  </label>
                        <label class=" control-label"> <?php echo $order_row['order_no'] ?> </label>
                    </div>
                    <div class="top-right" style="float:left;width:70%">
                        <div style="float:left"><img style="width: 25px" src="../../images/left_logo@2x.png" alt=""></div>
                        <div  style="float:left"><img style="width: 120px" src="../../images/Title@2x.png" alt=""></div>
                    </div>
                </div>
                <div class="middle">
                    <div class="middle-left" style="float:left;width: 40%">
                        <label class="control-label" style="text-align:left;"> অর্ডার তারিখঃ</label>
                        <label class=" control-label"> <?php echo $order_row['order_date'] ?> </label>
                    </div>
                    <div class="middle-middle" style="float:left;font-weight: bold;color:#fff;background: #000;padding: .5%;border-radius: 15px;"> কারিগরের রশিদ </div>
                    <div class="middle-right" style="float:right;"> 
                        <label class="control-label" style="text-align:left;"> ডেলিভারি তারিখঃ </label>
                        <label class=" control-label"> <?php echo $order_row['delivery_date'] ?> </label> 
                    </div>
                </div>
                <div class="bottom">
                    <div class="bottom-up" style="float:left;width: 100%;margin-top:5px;margin-bottom: 5px;">
                        <label class="control-label" style="text-align:left;"> নামঃ </label>
                        <label class=" control-label"> <?php echo $order_row['name'] ?> </label>
                    </div>
                    <div class="bottom-bottom" style="float:left;width: 100%">
                        <?php echo $order_row['payjama'] > 0 ? "<div class='form-group;'style='float:left;height:20px;'>
                   <label class='control-label' style='text-align:left;'>পায়জামাঃ</label>
                   <label class='control-label' style='font-weight:bold;padding-right:5px;'>" . $order_row['payjama'] . "</label>
                   </div>" : '' ?>
                        <?php echo $order_row['saluar'] > 0 ? "<div class='form-group' style='float:left;height:20px;'>
                  <label class='control-label' style='text-align:left;'>সালোয়ারঃ</label>
                  <label class='control-label' style='font-weight:bold;padding-right:5px;'>" . $order_row['saluar'] . "</label>
                  </div>" : '' ?>        
                    </div>
                </div>
            </div>
            <div style="width:100%;float:left;">

                <div class="top" style="width:100%;display: block;">
                    <div class="main-top" style="width:100%;text-align:center;margin-top: 10px">
                        <label class="control-label" style="text-align:center;"> বিসমিল্লাহির রাহমানির রাহীম </label>
                    </div>
                    <div class="middle" style="float:left;display: block;width:100%;text-align: center">
                        <div style            ="float:left;padding-left: 100px;"><img style="width: 35px" src="../../images/left_logo.svg" alt=""></div>
                        <div  style="float:left"><img style="width: 220px" src="../../images/Title.svg" alt=""></div>
                    </div>

                </div>
                <div style="float:left;margin-right: 5px;width: 100%">
                    <div>
                        <label class="control-label" style="text-align:left;">মেমো নং-  </label>
                        <label class=" control-label"> <?php echo $order_row['order_no'] ?> </label>

                    </div><!--/form-group-->

                </div>
                <div style="float:left;margin-right: 5px;width: 100%">
                    <div style="float:left">
                        <label class="control-label" style="text-align:left;">অর্ডার তারিখঃ</label>
                        <label class=" control-label"> <?php echo $order_row['order_date'] ?> </label>

                    </div><!--/form-group-->
                    <div style="float:right">
                        <label class="control-label" style="text-align:left;">ডেলিভারি তারিখঃ</label>
                        <label class=" control-label"> <?php echo $order_row['delivery_date'] ?> </label>

                    </div><!--/form-group-->

                </div>

                <div style="float:left;margin-right: 5px;width: 100%">
                    <div style="float:left">
                        <label class="control-label" style="text-align:left;"> নামঃ</label>
                        <label class=" control-label"> <?php echo $order_row['name'] ?> </label>

                    </div><!--/form-group-->
                    <div style="float:right">
                        <label class="control-label" style="text-align:left;"> মোবাইলঃ</label>
                        <label class=" control-label"> <?php echo $order_row['mobile'] ?> </label>

                    </div><!--/form-group-->

                </div>

            </div>

            <div style="width:100%;float:left">

                <div style="float:left;margin-right: 10px;margin-top: 10px;width: 25%">
                    <div class="form-group" style='height:20px;'>
                        <label class="control-label">লম্বা:</label>
                        <label class="control-label"> <?php echo $order_row['pay_lomba'] ?> </label>
                    </div><!--/form-group-->

                    <div class="form-group" style='height:20px;'>
                        <label class="control-label">মহুরী:</label>
                        <label class="control-label"><?php echo $order_row['pay_mohori'] ?></label>
                    </div><!--/form-group-->

                    <div class="form-group" style='height:20px;' >
                        <label class="control-label">কোমর:</label>
                        <label class="control-label"><?php echo $order_row['pay_komor'] ?></label>
                    </div><!--/form-group-->

                    <div class="form-group"style='height:20px;'>
                        <label class="control-label">হাই:</label>
                        <label class="control-label"><?php echo $order_row['pay_hai'] ?></label>
                    </div><!--/form-group-->
                </div>

                <div style="float:left;width: 40%;margin-top: 10px;">
                    <div class="form-group">
                        <label class="control-label"><?php echo  nl2br($order_row['pai_biboron']); ?> </label>

                    </div><!--/form-group-->
                </div>

                <div style="float:left;width: 32%;margin-top: 10px;min-height: 420px;">
                    <?php echo $order_row['cudi'] > 0 ? "<div class='form-group;'style='float:left;width:100%;height:20px;'>
                   <label class='control-label' style='text-align:left;'>চুড়িদারঃ</label>
                   <label class='control-label'>" . $order_row['cudi'] . "</label>
                   </div>" : '' ?>
                    <?php echo $order_row['aligod'] > 0 ? "<div class='form-group' style='float:left;width:100%;height:20px;'>
                  <label class='control-label' style='text-align:left;'>আলীগড়ঃ</label>
                  <label class='control-label'>" . $order_row['aligod'] . "</label>
                  </div>" : '' ?>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</body>
</html>
