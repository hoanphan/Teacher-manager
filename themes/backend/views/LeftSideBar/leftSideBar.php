<div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <button class="btn btn-success">
            <i class="ace-icon fa fa-signal"></i>
        </button>

        <button class="btn btn-info">
            <i class="ace-icon fa fa-pencil"></i>
        </button>

        <button class="btn btn-warning">
            <i class="ace-icon fa fa-users"></i>
        </button>

        <button class="btn btn-danger">
            <i class="ace-icon fa fa-cogs"></i>
        </button>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>

        <span class="btn btn-info"></span>

        <span class="btn btn-warning"></span>

        <span class="btn btn-danger"></span>
    </div>
</div>
<ul style="top: 0px;" class="nav nav-list" id="menu">
    <li class="">
        <a href="<?php echo Yii::app()->createUrl('admin/default/index')?>">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Bảng điều khiển </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="" value="1">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">
								Thông tin</span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Giáo viên
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="top-menu.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                           Danh sách giáo viên
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="two-menu-1.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                           Thêm giáo viên
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
            <li class="professionalGroups">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Phòng ban
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="<?php echo Yii::app()->createUrl('admin/professionalgroups/admin')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách phòng ban
                        </a>

                        <b class="arrow"></b>
                    </li>


                </ul>
            </li>

            <li class="gruop">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Khối
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="<?php echo Yii::app()->createUrl('admin/listgruopclass/admin')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách khối
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
            <li class="class" value="class">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>
                   Lớp
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="<?php echo Yii::app()->createUrl('admin/class/admin')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách lớp
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
            <li class="science_topic">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>
                        Đề tài
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="top-menu.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách đề tài
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="two-menu-1.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm đề tài
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
            <li class="classification">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>
                        Xếp loại đề tài
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="<?php echo Yii::app()->createUrl('admin/classification/admin')?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                           Danh sách xếp loại
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-caret-right"></i>
                  Môn học
                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="top-menu.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách môn học
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="two-menu-1.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thêm Môn học
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>
        </ul>
    </li>

    <li class="a">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list"></i>
            <span class="menu-text"> Phân công giảng dạy </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="tables.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                       Danh sách phân công giảng dạy
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="jqgrid.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm phân công giảng dạy
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#" >
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text"> Phân quyền </span>


        </a>




    </li>

    <li class="">
        <a href="widgets.html">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> Widgets </span>
        </a>

        <b class="arrow"></b>
    </li>
    <li class="" value="3">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-calendar"></i>
            <span class="menu-text">năm học </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="year">
                <a href="<?php echo Yii::app()->createUrl('admin/year/admin')?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Danh sách năm học
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="jqgrid.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm năm học
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="gallery.html">
            <i class="menu-icon fa fa-picture-o"></i>
            <span class="menu-text"> Gallery </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-tag"></i>
            <span class="menu-text"> More Pages </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="profile.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    User Profile
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="inbox.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Inbox
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="pricing.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Pricing Tables
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="invoice.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Invoice
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="timeline.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Timeline
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="email.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Email Templates
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="login.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Login &amp; Register
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-file-o"></i>

            <span class="menu-text">
								Other Pages

								<span class="badge badge-primary">5</span>
							</span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="faq.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    FAQ
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="error-404.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Error 404
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="error-500.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Error 500
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="grid.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Grid
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="blank.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Blank Page
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
</ul>
<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>