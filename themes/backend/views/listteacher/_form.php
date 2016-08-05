<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/css/bootstrap.min.css">
<link rel="stylesheet"
      href="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/font-awesome/4.2.0/css/font-awesome.min.css">

<!-- page specific plugin styles -->
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/css/jquery-ui.custom.min.css">
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/css/jquery.gritter.min.css">
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/css/select2.min.css">
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/css/datepicker.min.css">
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/css/bootstrap-editable.min.css">

<!-- text fonts -->
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/fonts/fonts.googleapis.com.css">

<!-- ace styles -->
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/css/ace.min.css"
      class="ace-main-stylesheet" id="main-ace-style">

<!--[if lte IE 9]>
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/themes/backend/assets/css/ace-part2.min.css"
      class="ace-main-stylesheet"/>
<![endif]-->

<!--[if lte IE 9]>
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/themes/backend/assets/css/ace-ie.min.css"/>
<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/ace-extra.min.js"></script>

<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

<!--[if lte IE 8]>
<script src="<?php echo Yii::app()->baseUrl?>/themes/backend/assets/js/html5shiv.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl?>/themes/backend/assets/js/respond.min.js"></script>
<![endif]-->
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>


    <div class="main-content">
        <div class="main-content-inner">


            <div class="page-content">
                <!-- /.ace-settings-container -->

                <div class="page-header">
                    <h1>
                        User Profile Page
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            3 styles with inline editable feature
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->


                        <div>
                            <div id="user-profile-1" class="user-profile row">
                                <div class="col-xs-12 col-sm-3 center">
                                    <div>
												<span class="profile-picture">
													<img id="avatar"
                                                         class="editable img-responsive editable-click editable-empty"
                                                         alt="Alex's Avatar"
                                                         src="<?php echo Yii::app()->theme->baseUrl?>/assets/avatars/profile-pic.jpg"
                                                         style="display: block; background-color: rgba(0, 0, 0, 0);"/>
												</span>

                                        <div class="space-4"></div>

                                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                            <div class="inline position-relative">
                                                <a href="#" class="user-title-label dropdown-toggle"
                                                   data-toggle="dropdown">
                                                    <i class="ace-icon fa fa-circle light-green"></i>
                                                    &nbsp;
                                                    <span class="white">Alex M. Doe</span>
                                                </a>

                                                <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                                                    <li class="dropdown-header"> Change Status</li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-circle green"></i>
                                                            &nbsp;
                                                            <span class="green">Available</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-circle red"></i>
                                                            &nbsp;
                                                            <span class="red">Busy</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-circle grey"></i>
                                                            &nbsp;
                                                            <span class="grey">Invisible</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-6"></div>


                                    <div class="hr hr12 dotted"></div>
                                </div>

                                <div class="col-xs-12 col-sm-9">


                                    <div class="space-12"></div>

                                    <div class="profile-user-info profile-user-info-striped">
                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Họ và tên</div>

                                            <div class="profile-info-value">
                                                <span class="editable editable-click" id="Fullname"
                                                      style="display: inline;">aaaaa</span>
                                            </div>
                                        </div>


                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Địa chỉ</div>

                                            <div class="profile-info-value">
                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                <span class="editable editable-click" id="country"
                                                      style="display: inline;">Netherlands</span>
                                                <span class="editable editable-click" id="city"
                                                      style="display: inline;">Amsterdam</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Tuổi</div>

                                            <div class="profile-info-value">
                                                <span class="editable editable-click" id="age">38</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Ngày sinh</div>

                                            <div class="profile-info-value">
                                                <span class="editable editable-click" id="signup">10/03/1995</span>
                                            </div>
                                        </div>
                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Phòng ban</div>

                                            <div class="profile-info-value">
                                                <span class="editable editable-click" id="gruop"
                                                      style="display: inline;">Netherlands</span>
                                            </div>
                                        </div>
                                       <!-- <div class="profile-info-row">
                                            <div class="profile-info-name"> Last Online</div>

                                            <div class="profile-info-value">
                                                <span class="editable editable-click" id="login">3 hours ago</span>
                                            </div>
                                        </div>-->
                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Tên đăng nhập</div>

                                            <div class="profile-info-value">
                                                <span class="editable editable-click" id="username"
                                                      style="display: inline;">..</span>
                                            </div>
                                        </div>
                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Mật khẩu</div>

                                            <div class="profile-info-value">
                                                <span class="editable editable-click" id="password"
                                                      style="display: inline;">..</span>
                                            </div>
                                        </div>
                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Thông tin thêm</div>

                                            <div class="profile-info-value">
                                                <span class="editable editable-click"
                                                      id="about">Editable as WYSIWYG</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-20"></div>


                                    <div class="center">
                                        <button type="button" class="btn btn-sm btn-primary btn-white btn-round" id="save">
                                            <i class="ace-icon fa fa-floppy-o bigger-160 orange2"></i>
                                            <span class="bigger-110">Save</span>

                                            <i class="icon-on-right ace-icon fa fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->



</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/jquery.2.1.1.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="<?php echo Yii::app()->baseUrl?>/themes/backend/assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo Yii::app()->baseUrl?>/themes/backend/assets/js/jquery.min.js'>" + "<" + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo Yii::app()->baseUrl?>/themes/backend/assets/js/jquery1x.min.js'>" + "<" + "/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='<?php echo Yii::app()->baseUrl?>/themes/backend/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="<?php echo Yii::app()->baseUrl?>/themes/backend/assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/jquery-ui.custom.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/jquery.gritter.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/bootbox.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/jquery.easypiechart.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/jquery.hotkeys.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/select2.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/fuelux.spinner.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/bootstrap-editable.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/ace-editable.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/jquery.maskedinput.min.js"></script>

<!-- ace scripts -->
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/ace-elements.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl ?>/themes/backend/assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function ($) {

        //editables on first profile page
        $.fn.editable.defaults.mode = 'inline';
        $.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
        $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>' +
            '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';

        //editables

        //text editable
        $('#username')
            .editable({
                type: 'text',
                name: 'username'
            });
        $('#Fullname')
            .editable({
                type: 'text',
                name: 'Fullname'
            });
        $('#password')
            .editable({
                type: 'password',
                name: 'password'
            });
        //select2 editable
        var countries = [];
        $.each({
            "CA": "Canada",
            "IN": "India",
            "NL": "Netherlands",
            "TR": "Turkey",
            "US": "United States"
        }, function (k, v) {
            countries.push({id: k, text: v});
        });

        var gruop = [];
        $.each({
            "1": "Khoa Toán - Lí - Tin",
            "2": "Khoa tiểu học mầm non",
            "2": "Sử địa",
            "TR": "Kinh tế",
            "US": "Ngọa ngữ"
        }, function (k, v) {
            gruop.push({id: k, text: v});
        });

        var cities = [];
        cities["CA"] = [];
        $.each(["Toronto", "Ottawa", "Calgary", "Vancouver"], function (k, v) {
            cities["CA"].push({id: v, text: v});
        });
        cities["IN"] = [];
        $.each(["Delhi", "Mumbai", "Bangalore"], function (k, v) {
            cities["IN"].push({id: v, text: v});
        });
        cities["NL"] = [];
        $.each(["Amsterdam", "Rotterdam", "The Hague"], function (k, v) {
            cities["NL"].push({id: v, text: v});
        });
        cities["TR"] = [];
        $.each(["Ankara", "Istanbul", "Izmir"], function (k, v) {
            cities["TR"].push({id: v, text: v});
        });
        cities["US"] = [];
        $.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"], function (k, v) {
            cities["US"].push({id: v, text: v});
        });

        var currentValue = "NL";
        $('#country').editable({
            type: 'select2',
            value: 'NL',
            //onblur:'ignore',
            source: countries,
            select2: {
                'width': 140
            },
            success: function (response, newValue) {
                if (currentValue == newValue) return;
                currentValue = newValue;

                var new_source = (!newValue || newValue == "") ? [] : cities[newValue];

                //the destroy method is causing errors in x-editable v1.4.6+
                //it worked fine in v1.4.5
                /**
                 $('#city').editable('destroy').editable({
							type: 'select2',
							source: new_source
						}).editable('setValue', null);
                 */

                    //so we remove it altogether and create a new element
                var city = $('#city').removeAttr('id').get(0);
                $(city).clone().attr('id', 'city').text('Select City').editable({
                    type: 'select2',
                    value: null,
                    //onblur:'ignore',
                    source: new_source,
                    select2: {
                        'width': 140
                    }
                }).insertAfter(city);//insert it after previous instance
                $(city).remove();//remove previous instance

            }
        });
        $('#gruop').editable({
            type: 'select2',
            value: '1',
            //onblur:'ignore',
            source: gruop,
            select2: {
                'width': 140
            },
            success: function (response, newValue) {
                if (currentValue == newValue) return;
                currentValue = newValue;

                var new_source = (!newValue || newValue == "") ? [] : cities[newValue];

                //the destroy method is causing errors in x-editable v1.4.6+
                //it worked fine in v1.4.5
                /**
                 $('#city').editable('destroy').editable({
							type: 'select2',
							source: new_source
						}).editable('setValue', null);
                 */

                    //so we remove it altogether and create a new element
                var city = $('#city').removeAttr('id').get(0);
                $(city).clone().attr('id', 'city').text('Select City').editable({
                    type: 'select2',
                    value: null,
                    //onblur:'ignore',
                    source: new_source,
                    select2: {
                        'width': 140
                    }
                }).insertAfter(city);//insert it after previous instance
                $(city).remove();//remove previous instance

            }
        });

        $('#city').editable({
            type: 'select2',
            value: 'Amsterdam',
            //onblur:'ignore',
            source: cities[currentValue],
            select2: {
                'width': 140
            }
        });


        //custom date editable
        $('#signup').editable({
            type: 'adate',
            date: {
                //datepicker plugin optionsyyyy/mm/dd
                format: 'dd/mm/yyyy',
                viewformat: 'dd/mm/yyyy',
                weekStart: 1

                //,nativeUI: true//if true and browser support input[type=date], native browser control will be used
                //,format: 'yyyy-mm-dd',
                //viewformat: 'yyyy-mm-dd'
            }
        })

        $('#age').editable({
            type: 'spinner',
            name: 'age',
            spinner: {
                min: 16,
                max: 99,
                step: 1,
                on_sides: true
                //,nativeUI: true//if true and browser support input[type=number], native browser control will be used
            }
        });


        $('#login').editable({
            type: 'slider',
            name: 'login',

            slider: {
                min: 1,
                max: 50,
                width: 100
                //,nativeUI: true//if true and browser support input[type=range], native browser control will be used
            },
            success: function (response, newValue) {
                if (parseInt(newValue) == 1)
                    $(this).html(newValue + " hour ago");
                else $(this).html(newValue + " hours ago");
            }
        });

        $('#about').editable({
            mode: 'inline',
            type: 'wysiwyg',
            name: 'about',

            wysiwyg: {
                //css : {'max-width':'300px'}
            },
            success: function (response, newValue) {
            }
        });


        // *** editable avatar *** //
        try {//ie8 throws some harmless exceptions, so let's catch'em

            //first let's add a fake appendChild method for Image element for browsers that have a problem with this
            //because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
            try {
                document.createElement('IMG').appendChild(document.createElement('B'));
            } catch (e) {
                Image.prototype.appendChild = function (el) {
                }
            }

            var last_gritter
            $('#avatar').editable({
                type: 'image',
                name: 'avatar',
                value: null,
                image: {
                    //specify ace file input plugin's options here
                    btn_choose: 'Change Avatar',
                    droppable: true,
                    maxSize: 2000000000,//~100Kb

                    //and a few extra ones here
                    name: 'avatar',//put the field name here as well, will be used inside the custom plugin
                    on_error: function (error_type) {//on_error function will be called when the selected file has a problem
                        if (last_gritter) $.gritter.remove(last_gritter);
                        if (error_type == 1) {//file format error
                            last_gritter = $.gritter.add({
                                title: 'File is not an image!',
                                text: 'Please choose a jpg|gif|png image!',
                                class_name: 'gritter-error gritter-center'
                            });
                        } else if (error_type == 2) {//file size rror
                            last_gritter = $.gritter.add({
                                title: 'File too big!',
                                text: 'Image size should not exceed 100Kb!',
                                class_name: 'gritter-error gritter-center'
                            });
                        }
                        else {//other error
                        }
                    },
                    on_success: function () {
                        $.gritter.removeAll();
                    }
                },
                url: function (params) {
                    // ***UPDATE AVATAR HERE*** //
                    //for a working upload example you can replace the contents of this function with
                    //examples/profile-avatar-update.js

                    var deferred = new $.Deferred

                    var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
                    if (!value || value.length == 0) {
                        deferred.resolve();
                        return deferred.promise();
                    }


                    //dummy upload
                    setTimeout(function () {
                        if ("FileReader" in window) {
                            //for browsers that have a thumbnail of selected image
                            var thumb = $('#avatar').next().find('img').data('thumb');
                            if (thumb) $('#avatar').get(0).src = thumb;
                        }

                        deferred.resolve({'status': 'OK'});

                        if (last_gritter) $.gritter.remove(last_gritter);
                        last_gritter = $.gritter.add({
                            title: 'Chỉnh sửa ảnh!',
                            text: 'Chỉnh sửa ảnh thành công.',
                            class_name: 'gritter-info gritter-center'
                        });

                    }, parseInt(Math.random() * 800 + 800))

                    return deferred.promise();

                    // ***END OF UPDATE AVATAR HERE*** //
                },

                success: function (response, newValue) {
                }
            })
        } catch (e) {
        }

        /**
         //let's display edit mode by default?
         var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
         if(blank_image) {
					$('#avatar').editable('show').on('hidden', function(e, reason) {
						if(reason == 'onblur') {
							$('#avatar').editable('show');
							return;
						}
						$('#avatar').off('hidden');
					})
				}
         */

        //another option is using modals
        $('#avatar2').on('click', function () {
            var modal =
                '<div class="modal fade">\
                  <div class="modal-dialog">\
                   <div class="modal-content">\
                    <div class="modal-header">\
                        <button type="button" class="close" data-dismiss="modal">&times;</button>\
                        <h4 class="blue">Change Avatar</h4>\
                    </div>\
                    \
                    <form class="no-margin">\
                     <div class="modal-body">\
                        <div class="space-4"></div>\
                        <div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
                     </div>\
                    \
                     <div class="modal-footer center">\
                        <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
                        <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
                     </div>\
                    </form>\
                  </div>\
                 </div>\
                </div>';


            var modal = $(modal);
            modal.modal("show").on("hidden", function () {
                modal.remove();
            });

            var working = false;

            var form = modal.find('form:eq(0)');
            var file = form.find('input[type=file]').eq(0);
            file.ace_file_input({
                style: 'well',
                btn_choose: 'Click to choose new avatar',
                btn_change: null,
                no_icon: 'ace-icon fa fa-picture-o',
                thumbnail: 'small',
                before_remove: function () {
                    //don't remove/reset files while being uploaded
                    return !working;
                },
                allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
            });

            form.on('submit', function () {
                if (!file.data('ace_input_files')) return false;

                file.ace_file_input('disable');
                form.find('button').attr('disabled', 'disabled');
                form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");

                var deferred = new $.Deferred;
                working = true;
                deferred.done(function () {
                    form.find('button').removeAttr('disabled');
                    form.find('input[type=file]').ace_file_input('enable');
                    form.find('.modal-body > :last-child').remove();

                    modal.modal("hide");

                    var thumb = file.next().find('img').data('thumb');
                    if (thumb) $('#avatar2').get(0).src = thumb;

                    working = false;
                });


                setTimeout(function () {
                    deferred.resolve();
                }, parseInt(Math.random() * 800 + 800));

                return false;
            });

        });


        //////////////////////////////

        ///////////////////////////////////////////

        //right & left position
        //show the user info on right or left depending on its position



        ///////////////////////////////////////////


        ////////////////////
        //change profile
        $('[data-toggle="buttons"] .btn').on('click', function (e) {
            var target = $(this).find('input[type=radio]');
            var which = parseInt(target.val());
            $('.user-profile').parent().addClass('hide');
            $('#user-profile-' + which).parent().removeClass('hide');
        });


        /////////////////////////////////////
        $(document).one('ajaxloadstart.page', function (e) {
            //in ajax mode, remove remaining elements before leaving page
            try {
                $('.editable').editable('destroy');
            } catch (e) {
            }
            $('[class*=select2]').remove();
        });
    });
    $(document).ready(function () {
        $('#save').click(function () {
            var fullname=$('#Fullname').text();
            var country=$('#country').text();
            var birthDay=$('#signup').text();
            var city=$('#city').text();
            var username=$('#username').text();
            var password=$('#password').text();
            var gruop1=$('#gruop').text();
            var avatar=$('#avatar').attr('src');
            alert("nooo");
            $.ajax(
                {
                    'url':'ajax',
                    'type':'post',
                    'cache':false,
                    'data':{
                       'fullname':fullname,
                        'city':country,
                        'district':city,
                        'birthday':birthDay,
                        'username':username,
                        'password':password,
                        'gruop':gruop1,
                        'avatar':avatar
                    },
                    success:function (result) {
                        alert(result)
                    }
                }
            )

        })

    })
</script>


<span role="status" aria-live="polite" class="select2-hidden-accessible"></span>