<?php
require_once("include/header.php");
$cls_datetime = new cls_datetime();
$cls_booking = new cls_booking();
$lastId = $cls_booking->lastInsertId(); 
$newId = $lastId + 1;
?>

<script>
        $(document).ready(function() {
            var  total = 0;
            var salary = 0;
            var cloth = 0;
            var discount = 0;
            var advance = 0;
            var due = 0;
            $(".check-list").on('click',function () {
                var textArea = $(".pi-biboron").val();
                //console.log(textArea.length);
                if (textArea.length > 0 && textArea.indexOf($(this).val()) > -1) {
                            textArea.replace($(this).val(), '');
                            //console.log($(this).val());
                        } else {
                            $('.pi-biboron').append('\n' + $(this).val());
                            console.log($(this).val());
                         // alert("No Data found in Text Area");
                        }

              //  $('.pi-biboron').remove($(this).val());
            
            });
            
              $(".check-list-panj").on('click',function () {
                var textAreaPanj = $(".panj_biborn").val();
                //console.log(textArea.length);
                if (textAreaPanj.length > 0 && textAreaPanj.indexOf($(this).val()) > -1) {
                            textAreaPanj.replace($(this).val(), '');
                            //console.log($(this).val());
                        } else {
                            $('.panj_biborn').append('\n' + $(this).val());
                            console.log($(this).val());
           
                        }

              //  $('.pi-biboron').remove($(this).val());
            
            });
//            $("#cloth").on('input',function () {
//                 cloth = ($(this).val().trim()=="")?0:$(this).val().trim();
//                 discount = $("#discount").val().trim()== ""?0:$("#discount").val().trim();
//                 salary = ($('#salary').val().trim()== "")?0:$('#salary').val();
//                 advance  = ($('#advance').val().trim()== "")?0:$('#advance').val();
//                 total = parseInt(cloth)+parseInt(salary)-parseInt(discount);
//                due  = total - parseInt(advance);
//                $("#total").val(total);
//                $("#due").val(due);
//                console.log(advance);
//            });
//            $("#salary").on('input',function () {
//                salary = ($(this).val().trim()=="")?0:$(this).val().trim();
//                discount = $("#discount").val().trim()== ""?0:$("#discount").val().trim();
//                cloth = $('#cloth').val().trim()==""?0:$('#cloth').val().trim();
//                advance  = ($('#advance').val().trim()== "")?0:$('#advance').val();
//                total = parseInt(cloth)+parseInt(salary)-parseInt(discount);
//                due  = total - parseInt(advance);
//                $("#total").val(total);
//                $("#due").val(due);
//            });

//            $("#discount").on('input',function () {
//                discount = ($(this).val().trim()=="")?0:$(this).val().trim();
//                salary = $("#salary").val().trim()== ""?0:$("#salary").val().trim();
//                cloth = $('#cloth').val().trim()==""?0:$('#cloth').val().trim();
//                advance  = ($('#advance').val().trim()== "")?0:$('#advance').val();
//                total = parseInt(cloth)+parseInt(salary)-parseInt(discount);
//                due  = total - parseInt(advance);
//                $("#total").val(total);
//                $("#due").val(due);
//            });
//            $("#advance").on('input',function () {
//               // discount = ($("#discount").val().trim()=="")?0:$("#discount").val().trim();
//               // salary = $("#salary").val().trim()== ""?0:$("#salary").val().trim();
//               // cloth = $('#cloth').val().trim()==""?0:$('#cloth').val().trim();
//                advance  = ($(this).val().trim()== "")?0:$(this).val();
//                total = parseInt(cloth)+parseInt(salary)-parseInt(discount);
//                due  = total - parseInt(advance);
//                $("#total").val(total);
//                $("#due").val(due);
//            });

        });
    </script>
    <style type="text/css">
        .control-label{
            font-size: 10px;
        }
    </style>

    <div class="contentpanel">
        <!--\\\\\\\ contentpanel start\\\\\\-->
        <div class="pull-left breadcrumb_admin clear_both">
            <div class="pull-left page_title theme_color">
                <h1>Setting</h1>
                <h2 class="">Booking</h2>
            </div>
            <div class="pull-right">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Settings</li>
                </ol>
            </div>
        </div>
        <div class="container clear_both padding_fix">
            <section class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block-web">
                                <div class="header">
                                    <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
                                    <h3 class="content-header">Order Receipt No : <span style="font-weight: bold;color:green;border: 3px solid red;border-radius: 40%;padding: .8%;"><?php echo $newId ?></span> <span style="padding-left:2%">Date : <?php echo $cls_datetime->exat_date();?></span></h3>
                                </div>
                                <div class="porlets-content">
                                    <div class="row">
                                        <form id="booking_add" method="post" class="form-horizontal row-border"
                                              enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="hidden" class="form-control" name="order_no"
                                                           value="<?php echo $newId ?>" readonly>

                                                    <input type="hidden" class="form-control" name="order_date"
                                                                       value="<?php
                                                                       echo $order_date_is = $cls_datetime->exat_date()?>">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="col-sm-6 control-label" style="text-align:left">Delivery date :</label>
                                                            <div class="col-sm-6" style="text-align:left;padding-left:0px;">
                                                               <input type="text" id="deliver_date" class="form-control"
                                                           name="deliver_date" required>
                                                               
                                                            </div>
                                                        </div><!--/form-group-->

                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Name :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="name"
                                                                       required>
                                                            </div>
                                                        </div><!--/form-group-->

                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Mobile :</label>
                                                            <div class="col-sm-8">
                                                                <input type="number" class="form-control" name="mobile"
                                                                       required>
                                                            </div>
                                                        </div><!--/form-group-->

                                                    </div>
                                                </div>
                                            </div>
                                   
                                            <!-- item part -->
                                            <div class="row" style="border:1px dotted gray;padding-top: 2%;">
                                                <div class="col-md-12"> 
                                                    <div class="col-md-2">
                                                        <div class="form-group">
<!--                                                            <label class="col-sm-3 control-label">পাঞ্জাবী</label>-->
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="panjabi" placeholder="পাঞ্জাবী">
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
<!--                                                            <label class="col-sm-3 control-label">শেরওয়ানী</label>-->
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="sherwani" placeholder="শেরওয়ানী">
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
<!--                                                            <label class="col-sm-3 control-label">কাবলী</label>-->
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="kabli" placeholder="কাবলী">
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
<!--                                                            <label class="col-sm-3 control-label">জুব্বা</label>-->
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="jubba" placeholder="জুব্বা">
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
<!--                                                            <label class="col-sm-3 control-label">ফতুয়া</label>-->
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="fhatua" placeholder="ফতুয়া">
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <!--                                                            <label class="col-sm-3 control-label">পায়জামা</label>-->
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="payjama" placeholder="পায়জামা">
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                </div>
                                                <div class="col-md-12"> 
                                                
                                                      <div class="col-md-2">
                                                        <div class="form-group">
<!--                                                            <label class="col-sm-3 control-label"> সালোয়ার </label>-->
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="salware" placeholder="সালোয়ার">
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                       <div class="col-md-2">
                                                        <div class="form-group">
<!--                                                            <label class="col-sm-3 control-label"> সালোয়ার </label>-->
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="cudidar" placeholder="চুড়িদার">
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                    
                                                     <div class="col-md-2">
                                                        <div class="form-group">
<!--                                                            <label class="col-sm-3 control-label"> সালোয়ার </label>-->
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="aligod" placeholder="আলীগড়">
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /item part -->
                                              <!-- category part -->
                                            <div class="row" style="border:1px dotted gray;padding-top: 2%;margin-top: 1%;margin-bottom: 1%;">
                                                <div class="col-md-12"> 
                                                    <div class="col-md-2">
                                                        <div class="form-group">
<!--                                                            <label class="col-sm-3 control-label">একছটা পাঞ্জাবী</label>-->
                                                            <div class="col-sm-12">
                                                                <input type="number" class="form-control" name="akchata" placeholder="একছঃ পাঞ্জঃ">
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                    <div class="col-md-2">
                                                             <div class="form-group">
<!--                                                            <label class="col-sm-3 control-label"> কলিদার পাঞ্জাবী</label>-->
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="kolidar" placeholder="কলিদঃ পাঞ্জ" >
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
<!--                                                            <label class="col-sm-3 control-label">কাবলী শার্ট</label>-->
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="kabli_shirt" placeholder="কাবঃ শার">
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                     <div class="col-md-2">
                                                        <div class="form-group">
<!--                                                            <label class="col-sm-3 control-label"> এক্সছটা জুব্বা</label>-->
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="akchata_jubba" placeholder="এক্সঃ জুব">
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
<!--                                                            <label class="col-sm-3 control-label"> কলিদার জুব্বা</label>-->
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="kolidar_jubba" placeholder="কলিদঃ জুব ">
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                     <div class="col-md-2">
                                                        <div class="form-group">
<!--                                                            <label class="col-sm-3 control-label">আওয়ামী শার্ট</label>-->
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="awami_shirt" placeholder="আওয়ামী">
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                 
                                                </div>
                                            
                                            </div>
                                            <!-- /category part -->
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-3">

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">মোট</label>
                                                            <div class="col-sm-9">
                                                                <input type="number" class="form-control" name="total" id="total">
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">অগ্রিম</label>
                                                            <div class="col-sm-9">
                                                                <input type="number" class="form-control" name="advance" id="advance">
                                                            </div>
                                                        </div><!--/form-group-->
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">বাকী</label>
                                                            <div class="col-sm-9">
                                                                <input type="number" class="form-control" name="due" id="due">
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label"> ডিসকাউন্ট  </label>
                                                            <div class="col-sm-9">
                                                                <input type="number" class="form-control" name="discount" id=discount>
                                                            </div>
                                                        </div><!--/form-group-->

                                                    </div>
                                                    <div class="col-md-3">

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">লম্বা</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="lomba">
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">বডি</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="bodyluc">
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">ফুট</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="fut">
                                                            </div>
                                                        </div><!--/form-group-->


                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">হাতা</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="hata">
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">গলা</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="gola">
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">মহুরী</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="mohori">
                                                            </div>
                                                        </div><!--/form-group-->
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">কফ</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="cuf">
                                                            </div>
                                                        </div><!--/form-group-->
                                                       <div class="form-group">
                                                            <label class="col-sm-5 control-label" style="text-align:left;padding-left: 0px;padding-right: 0px">প্লেট কলার সোজা </label>
                                                            <div class="col-sm-7" style="padding-left:0px;float: left">
                                                                
                                                                <select class="form-control" name="plat_cl_sj">
                                                                    <option value="">Select</option>
                                                                    <option value="">১</option>
                                                                    <option value="">। ১</option>
                                                                    <option value="">।। ১</option>
                                                                </select>
                                                            </div>
                                                        </div><!--/form-group-->
                                                        <div class="form-group">
                                                            <label class="col-sm-5 control-label" style="text-align:left;padding-left: 0px;padding-right: 0px">প্লেট কলার চৌকা</label>
                                                            <div class="col-sm-7" style="padding-left:0px;float: left">
                                                                 <select class="form-control" name="plat_cl_ck">
                                                                    <option value="">Select</option>
                                                                     <option value="">১</option>
                                                                    <option value="">। ১</option>
                                                                    <option value="">।। ১</option>
                                                                </select>
                                                            </div>
                                                        </div><!--/form-group-->
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label"> বিবরণ </label>
                                                            <div class="col-sm-9">
                                                            <textarea class="form-control panj_biborn"
                                                                      name="panj_biborn" rows="6" cols="50"></textarea>
                                                            </div>
                                                        </div><!--/form-group-->
                                                         <div class="form-group">
                                                            <label class="col-sm-3 control-label"> প্লেট ফাডা </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="pan_plat_pada">
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label"> সাইট পকেট </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="pan_site_pocket">
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                    

                                                    <div class="col-md-3">   
                                                          <div class="form-group">
                                                              <label class="col-sm-12 control-label" style="text-align:left;padding-right: 0px"> পায়জামা/ সালোয়ার এর মাপের  জন্য</label>
                                                   
                                                        </div><!--/form-group-->
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">লম্বা</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="pay_lomba" >
                                                            </div>
                                                        </div><!--/form-group-->
                                                   
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">মহুরী</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="pay_mohori">
                                                            </div>
                                                        </div><!--/form-group-->
                                                        
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">কোমর</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="pay_komor">
                                                            </div>
                                                        </div><!--/form-group-->
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">হাই</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="pay_hai">
                                                            </div>
                                                        </div><!--/form-group-->
                         
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label"> বিবরণ </label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control pi-biboron"
                                                                          name="pai_biboron" rows="6" cols="50"><?php echo '২ পকেট চেইন'. "\r\n". '৪ সেলাই'."\r\n".'মোটা রাবার' ?></textarea>
                                                            </div>
                                                        </div><!--/form-group-->


                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label"> প্লেট ফাডা </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="pai_plat_pada">
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label"> সাইট পকেট </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="pai_site_pocket">
                                                            </div>
                                                        </div><!--/form-group-->

</div>
                                                    
                                                    
                                                      <div class="col-md-3">

                                                        <div class="form-group">
                                                            <div class="col-sm-2">
                                                                <input type="checkbox" class="form-control check-list-panj" name="round_soja"
                                                                       value="শেরওয়ানী কলার মাথা  রাউন্ড">
                                                            </div>
                                                            <label class="col-sm-9 control-label" style="text-align:left;padding-right: 0px"> শেরওয়ানী কলার মাথা  রাউন্ড  </label>
                                                        </div><!--/form-group-->
                                                        
                                                        <div class="form-group">
                                                            <div class="col-sm-2">
                                                                <input type="checkbox" class="form-control check-list-panj" name="round_coka"
                                                                       value="শেরওয়ানী কলার মাথা সোজা">
                                                            </div>
                                                            <label class="col-sm-9 control-label" style="text-align:left !important;padding-right: 0px;"> শেরওয়ানী কলার মাথা সোজা </label>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <div class="col-sm-2">
                                                                <input type="checkbox" class="form-control check-list-panj" name="round_coka"
                                                                       value="নিচ হাতা ৩ সুতা সিলাই">
                                                            </div>
                                                            <label class="col-sm-9 control-label" style="text-align:left !important;padding-right: 0px;">  নিচ হাতা ৩ সুতা সিলাই </label>
                                                        </div><!--/form-group-->
                                                        <div class="form-group">
                                                            <div class="col-sm-2">
                                                                <input type="checkbox" class="form-control check-list-panj" name="round_coka"
                                                                       value="পাইপিং সবখানে ১ পাশে হবে">
                                                            </div>
                                                            <label class="col-sm-9 control-label" style="text-align:left !important;padding-right: 0px;"> পাইপিং সবখানে ১ পাশে হবে </label>
                                                        </div><!--/form-group-->
                                                         <div class="form-group">
                                                            <div class="col-sm-2">
                                                                <input type="checkbox" class="form-control check-list-panj" name="round_coka"
                                                                       value="পাইপিং সবখানে ২ পাশে হবে">
                                                            </div>
                                                            <label class="col-sm-9 control-label" style="text-align:left !important;padding-right: 0px;"> পাইপিং সবখানে ২ পাশে হবে </label>
                                                        </div><!--/form-group-->
                                                           <div class="form-group">
                                                            <div class="col-sm-2">
                                                                <input type="checkbox" class="form-control check-list-panj" name="round_coka"
                                                                       value="২ পকেটের মুখে চেইন">
                                                            </div>
                                                            <label class="col-sm-9 control-label" style="text-align:left !important;padding-right: 0px;"> ২ পকেটের মুখে চেইন </label>
                                                        </div><!--/form-group-->
                                                         <div class="form-group">
                                                            <div class="col-sm-2">
                                                                <input type="checkbox" class="form-control check-list" name="round_coka"
                                                                       value="বন পকেটের মুখে চেইন">
                                                            </div>
                                                            <label class="col-sm-9 control-label" style="text-align:left !important;padding-right: 0px;"> বন পকেটের মুখে চেইন </label>
                                                        </div><!--/form-group-->
                                                 
                                                        <div class="form-group">
                                                            <div class="col-sm-2">
                                                                <input type="checkbox" class="form-control check-list" name="round_coka"
                                                                       value="নিচ ।। হাফ সেলাই">
                                                            </div>
                                                            <label class="col-sm-9 control-label" style="text-align:left !important;padding-right: 0px;"> নিচ ।। হাফ সেলাই </label>
                                                        </div><!--/form-group-->
                                                    </div>
                                                </div>
                                            </div>    
                                    </div>
                                </div>
                                <!--/porlets-content-->
                                <input type="submit" name="booking_add" class="btn btn-primary" value="Save">
                                </form>
                            </div><!--/block-web-->
                            <!--      <button type="button" class="btn btn-default">Cancel</button>-->
                        </div><!--/col-md-6-->

                        <!--/form-group-->
                        </form>
                    </div><!--/porlets-content-->

                </div><!--/block-web-->
        </div><!--/col-md-6-->
    </div>
    </div>
    </section>
    </div>
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->

<?php require_once("include/footer.php"); ?>