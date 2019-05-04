<?php
require_once("include/header.php");
?>
<script>
$(document).ready(function() {
    var  total = 0;
    var salary = 0;
    var cloth = 0;
    var discount = 0;
    var advance = 0;
    var due = 0;
    $("#cloth").on('input',function () {
        cloth = ($(this).val().trim()=="")?0:$(this).val().trim();
        discount = $("#discount").val().trim()== ""?0:$("#discount").val().trim();
        salary = ($('#salary').val().trim()== "")?0:$('#salary').val();
        advance  = ($('#advance').val().trim()== "")?0:$('#advance').val();
        total = parseInt(cloth)+parseInt(salary)-parseInt(discount);
        due  = total - parseInt(advance);
        $("#total").val(total);
        $("#due").val(due);
        console.log(advance);
    });
    $("#salary").on('input',function () {
        salary = ($(this).val().trim()=="")?0:$(this).val().trim();
        discount = $("#discount").val().trim()== ""?0:$("#discount").val().trim();
        cloth = $('#cloth').val().trim()==""?0:$('#cloth').val().trim();
        advance  = ($('#advance').val().trim()== "")?0:$('#advance').val();
        total = parseInt(cloth)+parseInt(salary)-parseInt(discount);
        due  = total - parseInt(advance);
        $("#total").val(total);
        $("#due").val(due);
    });

    $("#discount").on('input',function () {
        discount = ($(this).val().trim()=="")?0:$(this).val().trim();
        salary = $("#salary").val().trim()== ""?0:$("#salary").val().trim();
        cloth = $('#cloth').val().trim()==""?0:$('#cloth').val().trim();
        advance  = ($('#advance').val().trim()== "")?0:$('#advance').val();
        total = parseInt(cloth)+parseInt(salary)-parseInt(discount);
        due  = total - parseInt(advance);
        $("#total").val(total);
        $("#due").val(due);
    });
    $("#advance").on('input',function () {
        discount = ($("#discount").val().trim()=="")?0:$("#discount").val().trim();
        salary = $("#salary").val().trim()== ""?0:$("#salary").val().trim();
        cloth = $('#cloth').val().trim()==""?0:$('#cloth').val().trim();
        advance  = ($(this).val().trim()== "")?0:$(this).val();
        total = parseInt(cloth)+parseInt(salary)-parseInt(discount);
        due  = total - parseInt(advance);
        $("#total").val(total);
        $("#due").val(due);
    });
    // checkbox click text area valu add
    var textArea = [];
    $(".check-list").on('click',function () {
        console.log(jQuery.inArray('\n'+$(this).val(), textArea));
        if(jQuery.inArray('\n'+$(this).val(), textArea) == -1) {
            textArea.push('\n'+$(this).val());                   
        }else{
            textArea.splice( $.inArray('\n'+$(this).val(), textArea), 1 );
        }       
        $('.main-desc').val(textArea);
    });

    // $(".category").on('change', function () {
    //     if(jQuery.inArray('\n'+$(this).val()+' '+$('.count-category').val(), textArea) == -1) {
    //         textArea.push('\n'+$(this).val()+' '+$('.count-category').val());                   
    //     }else{
    //         textArea.splice( $.inArray('\n'+$(this).val(), textArea), 1 );
    //     }
        
    //     $('.main-desc').val(textArea);
    // });


    $(".count-category").on('change', function () {
        if($('.category').val().length && $(this).val().length){
            if(jQuery.inArray('\n'+$('.category').val()+' '+$('.count-category').val(), textArea) == -1) {
                textArea.push('\n'+$('.category').val()+' '+$('.count-category').val());                   
            } 
            $('.main-desc').val(textArea);
        }                 
    });

    var bottomTextArea = [];
    $(".bottom-part").on('click',function () {
        console.log(jQuery.inArray('\n'+$(this).val(), bottomTextArea));
        if(jQuery.inArray('\n'+$(this).val(), bottomTextArea) == -1) {
            bottomTextArea.push('\n'+$(this).val());                   
        }else{
            bottomTextArea.splice( $.inArray('\n'+$(this).val(), bottomTextArea), 1 );
        }
        
        $('.second-desc').val(bottomTextArea);
    });

     $(".count-bottom-category").on('change', function () {
        if($('.category-bottom').val().length && $(this).val().length){
            if(jQuery.inArray('\n'+$('.category-bottom').val()+' '+$(this).val(), textArea) == -1) {
                textArea.push('\n'+$('.category-bottom').val()+' '+$(this).val());                   
            } 
            $('.second-desc').val(textArea);
        }                 
    });
});
</script>
    <style type="text/css">
        .control-label{
            font-size: 11px;
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
                                    <h3 class="content-header">Order Receipt</h3>
                                </div>
                                <div class="porlets-content">
                                    <div class="row">
                                        <form id="booking_add" method="post" class="form-horizontal row-border"
                                              enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="col-sm-6 control-label">Order No.</label>
                                                            <?php $cls_booking = new cls_booking();
                                                            $lastId = $cls_booking->lastInsertId(); ?>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" name="order_no"
                                                                       value="<?php echo $lastId + 1 ?>" readonly>
                                                            </div>
                                                        </div><!--/form-group-->

                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="col-sm-6 control-label" style='font-weight: bold'>Deliver date :</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" id="deliver_date" class="form-control"
                                                                       name="deliver_date" required>
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="col-sm-6 control-label">Order date :</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" name="order_date"
                                                                       value="<?php

                                                                       $cls_datetime = new cls_datetime();
                                                                       echo $order_date_is = $cls_datetime->exat_date()?>" readonly>
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Name :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="name"
                                                                       required>
                                                            </div>
                                                        </div><!--/form-group-->
                                                    </div>
                                                    <div class="col-sm-6">
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
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-3">

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">কাপড়</label>
                                                            <div class="col-sm-9">
                                                                <input type="number" class="form-control" name="cloth" id="cloth">
                                                            </div>
                                                        </div><!--/form-group-->
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">মজুরী</label>
                                                            <div class="col-sm-9">
                                                                <input type="number" class="form-control" name="salary" id="salary">
                                                            </div>
                                                        </div><!--/form-group-->
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">মোট</label>
                                                            <div class="col-sm-9">
                                                                <input type="number" class="form-control" name="total" id="total" readonly>
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
                                                                <input type="number" class="form-control" name="due" id="due" readonly>
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label"> ডিসকাউন্ট  </label>
                                                            <div class="col-sm-9">
                                                                <input type="number" class="form-control" name="discount" id=discount>
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label"> বিবরণ </label>
                                                            <div class="col-sm-9">
                                                            <textarea style="height:200px" row="12"class="form-control main-desc"
                                                                      name="cloth_biborn"></textarea>
                                                            </div>
                                                        </div><!--/form-group-->                                                      

                                                    </div>

                                                    <div class="col-md-3">

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Product</label>
                                                            <div class="col-sm-9">
                                                                  <select class="form-control category">
                                                                  <option value="">Select</option>
                                                                   <option value="পাঞ্জাবী">পাঞ্জাবী</option>
                                                                   <option value="শেরওয়ানী"> শেরওয়ানী</option>
                                                                   <option value="একছাটা পাঞ্জাবী"> একছাটা পাঞ্জাবী</option>
                                                                   <option value="এরাবিয়ান জুব্বা"> এরাবিয়ান জুব্বা</option>
                                                                   <option value="ফতুয়া"> ফতুয়া</option>
                                                                   <option value="এমব্রয়ডারী"> এমব্রয়ডারী</option>
                                                                   <option value="কাবলি কোণা "> কাবলি কোণা </option>
                                                                   <option value="কাবলি রাউন্ড "> কাবলি রাউন্ড </option>
                                                                  </select>
                                                                <!-- <input type="number" class="form-control" name="panjabi"> -->
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">PC</label>
                                                            <div class="col-sm-9">
                                                                  <select class="form-control  count-category">
                                                                  <option value="">Select</option>
                                                                   <option value="1 pc">1 pc</option>
                                                                   <option value="2 pc"> 2 pc</option>
                                                                   <option value="3 pc"> 3 pc</option>
                                                                   <option value="4 pc"> 4 pc</option>
                                                                   <option value="5 pc"> 5 pc</option>
                                                                   <option value="6 pc"> 6 pc</option>
                                                                  </select>
                                                                <!-- <input type="number" class="form-control" name="panjabi"> -->
                                                            </div>
                                                        </div><!--/form-group-->
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">লম্বা</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="lomba">
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">বডি + লুছ</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="bodyluc">
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">তিরা</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="tira">
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">হাতা লম্বা </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="hata">
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">কলার</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="kolar">
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">মহুরী / কফ</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="mohori_cof">
                                                            </div>
                                                        </div><!--/form-group-->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label"> প্লেট ফাডা </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="plat_pada">
                                                            </div>
                                                        </div><!--/form-group-->
                                                               
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> সেরঃ কলার রাউন্ড </label>
                                                                    <div class="col-sm-3">
                                                                        <input type="checkbox" class="form-control check-list" name=""
                                                                            value="সেরঃ কলার রাউন্ড">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> সেরঃ কলার কোনা </label>
                                                                    <div class="col-sm-3">
                                                                        <input type="checkbox" class="form-control check-list" name=""
                                                                            value="সেরঃ কলার কোনা">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> কলার রউন্দ </label>
                                                                    <div class="col-sm-3">
                                                                        <input type="checkbox" class="form-control check-list" name=""
                                                                            value="কলার রউন্দ">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> কলার কোনা </label>
                                                                    <div class="col-sm-3">
                                                                    <input type="checkbox" class="form-control check-list" name=""
                                                                            value="কলার কোনা">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> ভি কলার </label>
                                                                    <div class="col-sm-3">
                                                                        <input type="checkbox" class="form-control check-list" name=""
                                                                            value="ভি কলার">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> শার্ট কলার </label>
                                                                    <div class="col-sm-3">
                                                                        <input type="checkbox" class="form-control check-list" name=""
                                                                            value="শার্ট কলার">
                                                                    </div>
                                                                </div><!--/form-group-->
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                        <label class="col-sm-3 control-label"> বুক পকেট </label>
                                                                        <div class="col-sm-6">
                                                                            <input type="checkbox" class="form-control check-list" name=""
                                                                                value="বুক পকেট">
                                                                        </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> গোল গলা </label>
                                                                    <div class="col-sm-6">
                                                                        <input type="checkbox" class="form-control check-list" name="gol_gola"
                                                                            value="গোল গলা ">
                                                                    </div>
                                                                </div><!--/form-group-->
                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> কাঁধে বেল্ট  </label>
                                                                    <div class="col-sm-6">
                                                                        <input type="checkbox" class="form-control check-list" name="kade_belt"
                                                                            value="কাঁধে বেল্ট">
                                                                    </div>
                                                                </div><!--/form-group-->
                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label">বুক পকেট ২টা ডাকনাসহ  </label>
                                                                    <div class="col-sm-6">
                                                                        <input type="checkbox" class="form-control check-list" name="buk_poke_two_dakna"
                                                                            value="বুক পকেট ২টা ডাকনাসহ">
                                                                    </div>
                                                                </div><!--/form-group-->
                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> বুক পকেট ১টা ডাকনাসহ  </label>
                                                                    <div class="col-sm-6">
                                                                        <input type="checkbox" class="form-control check-list" name="buk_poke_one_dakna"
                                                                            value="বুক পকেট ১টা ডাকনাসহ">
                                                                    </div>
                                                                </div><!--/form-group-->
                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> হাতে ফিতা </label>
                                                                    <div class="col-sm-6">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                            value="হাতে ফিতা">
                                                                    </div>
                                                                </div><!--/form-group-->
                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> ভি গলা </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="ভি গলা">
                                                                    </div>
                                                                </div><!--/form-group-->
                                                            
                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> গোল গলা </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="গোল গলা">
                                                                    </div>
                                                                </div><!--/form-group-->
                                                                
                                                            </div>
                                                            
                                                            <div class="col-md-3">                                                           
                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> সিঙ্গেল প্লেট  </label>
                                                                    <div class="col-sm-9">
                                                                    <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="সিঙ্গেল প্লেট">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> ডবল প্লেট </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="ডবল প্লেট">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> বক্স প্লেট </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="বক্স প্লেট">
                                                                    </div>
                                                                </div><!--/form-group-->
                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> ঘুণ্টি ১টি</label>
                                                                    <div class="col-sm-9">
                                                                    <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="ঘুণ্টি  ১টি">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> ঘুণ্টি ৩টি</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                    value="ঘুণ্টি  ৩টি">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> নেট সিঙ্গেল </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="নেট সিঙ্গেল">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> নেট ডাবল</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="নেট ডাবল">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> পাইপিং কলার ১টি</label>
                                                                    <div class="col-sm-9">
                                                                    <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="পাইপিং কলার ১টি">
                                                                    </div>
                                                                </div><!--/form-group-->


                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> পাইপিং কলার ২টি</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="পাইপিং কলার ২টি">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> পেট  ১</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="পেট  ১">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> পেট  ২</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="পেট  ২">
                                                                    </div>
                                                                </div><!--/form-group-->


                                                                  <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> পেট  ৩</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="পেট  ৩">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> হাতাই হ্যাঁ</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="হাতাই হ্যাঁ">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                 <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> হাতাই না</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="হাতাই না">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="row">
                                                        <div class="col-md-3">                                                           
                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> সিঙ্গেল প্লেট  </label>
                                                                    <div class="col-sm-9">
                                                                    <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="সিঙ্গেল প্লেট">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> ডবল প্লেট </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="ডবল প্লেট">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> বক্স প্লেট </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="বক্স প্লেট">
                                                                    </div>
                                                                </div><!--/form-group-->
                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> ঘুণ্টি ১টি</label>
                                                                    <div class="col-sm-9">
                                                                    <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="ঘুণ্টি  ১টি">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> ঘুণ্টি ৩টি</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                    value="ঘুণ্টি  ৩টি">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> নেট সিঙ্গেল </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="নেট সিঙ্গেল">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> নেট ডাবল</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="নেট ডাবল">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> পাইপিং কলার ১টি</label>
                                                                    <div class="col-sm-9">
                                                                    <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="পাইপিং কলার ১টি">
                                                                    </div>
                                                                </div><!--/form-group-->


                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> পাইপিং কলার ২টি</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="পাইপিং কলার ২টি">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> পেট  ১</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="পেট  ১">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> পেট  ২</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="পেট  ২">
                                                                    </div>
                                                                </div><!--/form-group-->


                                                                  <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> পেট  ৩</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="পেট  ৩">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> হাতাই হ্যাঁ</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="হাতাই হ্যাঁ">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                                 <div class="form-group">
                                                                    <label class="col-sm-3 control-label"> হাতাই না</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="checkbox" class="form-control check-list" name="hate_fitha"
                                                                                value="হাতাই না">
                                                                    </div>
                                                                </div><!--/form-group-->

                                                            </div>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                  <div class="form-group">
                                                            <label class="col-sm-3 control-label">Product</label>
                                                            <div class="col-sm-9">
                                                                  <select class="form-control category-bottom">
                                                                    <option value="">Select</option>
                                                                    <option value="আলীগড়">আলীগড়</option>
                                                                    <option value="সেলোয়ার"> সেলোয়ার</option>
                                                                    <option value="চুড়ি"> চুড়ি</option>
                                                                    <option value="চোস্ত"> চোস্ত </option>
                                                                    <option value="বেল্ট সেলোয়ার"> বেল্ট সেলোয়ার</option>
                                                                    <option value="ধুতি"> ধুতি </option>
                                                                    <option value="সেরঃ পাঃ"> সেরঃ পাঃ </option>
                                                                    <option value="পাকি পাঃ"> পাকি পাঃ </option>
                                                                  </select>
                                                                <!-- <input type="number" class="form-control" name="panjabi"> -->
                                                            </div>
                                                    </div><!--/form-group-->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">PC</label>
                                                        <div class="col-sm-9">
                                                                <select class="form-control  count-bottom-category">
                                                                <option value="">Select</option>
                                                                <option value="1 pc">1 pc</option>
                                                                <option value="2 pc"> 2 pc</option>
                                                                <option value="3 pc"> 3 pc</option>
                                                                <option value="4 pc"> 4 pc</option>
                                                                <option value="5 pc"> 5 pc</option>
                                                                <option value="6 pc"> 6 pc</option>
                                                                </select>
                                                            <!-- <input type="number" class="form-control" name="panjabi"> -->
                                                        </div>
                                                    </div><!--/form-group-->
                                                </div>
                                                <div class="col-md-3">
                                                
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"> ঘন সিলাই </label>
                                                        <div class="col-sm-6">
                                                            <input type="checkbox" class="form-control bottom-part"
                                                                   name="ghono_silay" value="ঘন সিলাই">
                                                        </div>
                                                    </div><!--/form-group-->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"> মোটাসূতা </label>
                                                        <div class="col-sm-6">
                                                            <input type="checkbox" class="form-control bottom-part" name="motasuta"
                                                                   value="মোটাসূতা">
                                                        </div>
                                                    </div><!--/form-group-->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"> চিকনসূতা </label>
                                                        <div class="col-sm-6">
                                                            <input type="checkbox" class="form-control bottom-part" name="cikonsuta"
                                                                    value="চিকনসূতা">
                                                        </div>
                                                    </div><!--/form-group-->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"> চওডা রাবার </label>
                                                        <div class="col-sm-6">
                                                            <input type="checkbox" class="form-control bottom-part" name="rabar"
                                                                    value="চওডা রাবার">
                                                        </div>
                                                    </div><!--/form-group-->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"> ডুডি </label>
                                                        <div class="col-sm-6">
                                                            <input type="checkbox" class="form-control bottom-part" name="dudi"
                                                                    value="ডুডি">
                                                        </div>
                                                    </div><!--/form-group-->
                                                                                           
                                                </div>
                                                <div class="col-md-3">

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">মোঃ পঃ ১টি</label>
                                                        <div class="col-sm-9">
                                                            <input type="checkbox" class="form-control bottom-part" name=""
                                                                    value="মোঃ পঃ ১টি">
                                                        </div>
                                                    </div><!--/form-group-->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">মোঃ পঃ ২টি</label>
                                                        <div class="col-sm-9">
                                                            <input type="checkbox" class="form-control bottom-part" name=""
                                                                    value="মোঃ পঃ ২টি">
                                                        </div>
                                                    </div><!--/form-group-->
                                                   <div class="form-group">
                                                        <label class="col-sm-3 control-label"> পঃ চেন ১টি </label>
                                                        <div class="col-sm-9">
                                                        <input type="checkbox" class="form-control bottom-part" name=""
                                                                    value="পঃ চেন ১টি">
                                                        </div>
                                                    </div><!--/form-group-->

                                                     <div class="form-group">
                                                        <label class="col-sm-3 control-label"> পঃ চেন ২টি </label>
                                                        <div class="col-sm-9">
                                                        <input type="checkbox" class="form-control bottom-part" name=""
                                                                    value="পঃ চেন ২টি">
                                                        </div>
                                                    </div><!--/form-group-->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"> পিছে পঃ ১টি</label>
                                                        <div class="col-sm-9">
                                                        <input type="checkbox" class="form-control bottom-part" name=""
                                                                    value="পিছে পঃ  ১টি">
                                                        </div>
                                                    </div><!--/form-group-->

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"> পিছে পঃ ২টি</label>
                                                        <div class="col-sm-9">
                                                        <input type="checkbox" class="form-control bottom-part" name=""
                                                                    value="পিছে পঃ  ২টি">
                                                        </div>
                                                    </div><!--/form-group-->
                                                </div>
                                                <div class="col-md-3">
                                                  <div class="form-group">
                                                        <label class="col-sm-3 control-label"> মাপ </label>
                                                        <div class="col-sm-9">
                                                        <textarea style="height:200px" class="form-control" name="biborn"></textarea>
                                                        </div>
                                                    </div><!--/form-group-->
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label"> বিবরণ </label>
                                                        <div class="col-sm-9">
                                                            <textarea style="height:200px" class="form-control second-desc" name="map"></textarea>
                                                        </div>
                                                    </div><!--/form-group-->
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <!--/porlets-content-->
                                <input type="submit" name="booking_add" class="btn btn-primary" value="Save">
                                </form>
                            </div><!--/block-web-->
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