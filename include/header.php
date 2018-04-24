<?php //echo phpversion(); ?>
<?php
  session_start();
    if($_SESSION['user_id'] == "" && $_SESSION['usertype'] == "")
    {
        header('location:http://mdrifatul.info/alarabia/');
        exit;
    }
    $user_id = $_SESSION['user_id'];
    $user_type = $_SESSION['usertype'];

    require_once('functions/cls_dbconfig.php');
	function __autoload($classname){
		require_once("functions/$classname.class.php");
	}
    $cls_datetime = new cls_datetime();
    $cls_user_info = new cls_user_info();
    $cls_store = new cls_store();
    $cls_booking = new cls_booking();
    $cls_employee = new cls_employee();
    //store info//
    $query = $cls_store->viewstore();
    $row = $query->fetch_assoc();

    //user info//
    $user_query = $cls_user_info->get_user($user_id, $user_type);
    $us_row = $user_query->fetch_assoc();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tailor Management</title>


<base href="<?php echo $cls_store::$base_url; ?>">
<META NAME="mdrifatul" CONTENT="Rifat">
<!--    favicon Icon set-->
 <link rel="icon" type="image/x-icon" href="images/dcit.ico">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="plugins/scroll/nanoscroller.css">
    
<!--plugin data table-->
<link href="plugins/data-tables/DT_bootstrap.css" rel="stylesheet">
<link href="plugins/advanced-datatable/css/demo_table.css" rel="stylesheet">
<link href="plugins/advanced-datatable/css/demo_page.css" rel="stylesheet">
<!--plugin data table end-->
<!--date picker-->
<link rel="stylesheet" type="text/css" href="plugins/bootstrap-datepicker/css/datepicker.css" />
<!--date picker end-->

<!--site script and css add here-->
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/logout.js"></script>
<script type="text/javascript" src="js/shortcut.js"></script>
<script type="text/javascript" src="js/shortcut_key.js"></script>
<script type="text/javascript" src="ajax/booking.js"></script>
<script type="text/javascript" src="ajax/user.js"></script>

<script>
    function PreviewImage(upname, prv_id) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementsByName(upname)[0].files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById(prv_id).src = oFREvent.target.result;
        };
    };
	

   // setTimeout(function(){
  // window.location.reload(1);
//}, 5000);
</script>


<!--site script and css end here-->
</head>
<body class="dark_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  <div class="header_bar">
    <!--\\\\\\\ header Start \\\\\\-->
    <div class="brand">
      <!--\\\\\\\ brand Start \\\\\\-->
      <div class="logo" style="display:block"><span class="theme_color"><?php echo substr($row['company_name'], 0 ,12); ?></span></div>
      <div class="small_logo" style="display:none"><img src="images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="images/r-logo.png" width="122" height="20" alt="r-logo" /></div>
    </div>
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar">
      <!--\\\\\\\ header top bar start \\\\\\-->
      <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
      <div class="top_left">
        <div class="top_left_menu">
          <ul>
            <li> <a href="javascript:void(0);"><i class="fa fa-repeat"></i></a> </li>
            <li class="dropdown"> <a data-toggle="dropdown" href="javascript:void(0);"> <i class="fa fa-th-large"></i> </a>
			<ul class="drop_down_task dropdown-menu" style="margin-top:39px">
				<div class="top_left_pointer"></div>
				<li><div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember">
                    Remember me </label>
                </div></li>
				<li> <a><i class="fa fa-question-circle"></i> Help</a> </li>
				<li> <a href="storesetting"><i class="fa fa-cog"></i> Order </a></li>
				<li> <a href="post_url/signout"><i class="fa fa-power-off"></i> Logout</a> </li>
		  </ul>
			</li>
          </ul>
        </div>
      </div>
<!--      <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <span> New Task</span></a>-->



        <div class="top_right_bar">

        <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"><img src="images/user.png" height="40" width="40"/><span class="user_adminname"><?php echo $_SESSION['name']; ?></span> <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <div class="top_pointer"></div>
            <li> <a href="profile"><i class="fa fa-user"></i> Profile</a> </li>
            <li> <a href="help.html"><i class="fa fa-question-circle"></i> Help</a> </li>
            <li> <a href="storesetting"><i class="fa fa-cog"></i> Setting </a></li>
            <li> <a href="post_url/signout"><i class="fa fa-power-off"></i><span id="">Logout</span></a> </li>
          </ul>
        </div>

        <a href="javascript:;" class="toggle-menu menu-right push-body jPushMenuBtn rightbar-switch"><i class="fa fa-comment chat"></i></a>
        
      </div>
    </div>
    <!--\\\\\\\ header top bar end \\\\\\-->
  </div>
  <!--\\\\\\\ header end \\\\\\-->
  <div class="inner">
    <!--\\\\\\\ inner start \\\\\\--><div class="left_nav con_min_height">

      <!--\\\\\\\left_nav start \\\\\\-->
      <div class="search_bar"> <i class="fa fa-search"></i>
        <input name="" type="text" class="search" placeholder="Search Dashboard..." />
      </div>
      <div class="left_nav_slidebar">
        <ul>
          <li class="left_nav_active theme_border"><a href="dashboard"><i class="fa fa-home"></i> DASHBOARD <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
          </li>
            <?php
            if($user_type != "employee")
            {
                ?>
          <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i> ORDER <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="booking"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Order Booking</b> </a> </li>
			   <li> <a href="orderManage"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Order Edit</b> </a> </li>
              
            <!--  <li> <a href="changepass"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Change Password</b> </a> </li>-->
            </ul>
          </li>
            <?php } ?>


          


        </ul>
      </div>
    </div>
    <!--\\\\\\\left_nav end \\\\\\-->

