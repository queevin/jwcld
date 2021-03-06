<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>领导干部听课工作平台-教务处</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="领导干部听课工作平台 教务处 北京师范大学">
    <meta name="author" content="信息科学与技术学院 大数据与物联网实验室 北京师范大学">
    <!--[if lt IE 9]>
    <script src='/jwcld/Public/assets/javascripts/html5shiv.js' type='text/javascript'></script>
    <![endif]-->
    <link href='/jwcld/Public/assets/stylesheets/bootstrap/bootstrap.css' media='all' rel='stylesheet' type='text/css' />
    <link href='/jwcld/Public/assets/stylesheets/bootstrap/bootstrap-responsive.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / jquery ui -->
    <link href='/jwcld/Public/assets/stylesheets/jquery_ui/jquery-ui-1.10.0.custom.css' media='all' rel='stylesheet' type='text/css' />
    <link href='/jwcld/Public/assets/stylesheets/jquery_ui/jquery.ui.1.10.0.ie.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / switch buttons -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/bootstrap_switch/bootstrap-switch.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / xeditable -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/xeditable/bootstrap-editable.css' media='all' rel='stylesheet' type='text/css' />
    <link href='/jwcld/Public/assets/stylesheets/plugins/common/bootstrap-wysihtml5.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / wysihtml5 (wysywig) -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/common/bootstrap-wysihtml5.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / jquery file upload -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/jquery_fileupload/jquery.fileupload-ui.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / full calendar -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/fullcalendar/fullcalendar.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / select2 -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/select2/select2.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / mention -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/mention/mention.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / tabdrop (responsive tabs) -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/tabdrop/tabdrop.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / jgrowl notifications -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/jgrowl/jquery.jgrowl.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / datatables -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/datatables/bootstrap-datatable.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / dynatrees (file trees) -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/dynatree/ui.dynatree.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / color picker -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/bootstrap_colorpicker/bootstrap-colorpicker.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / datetime picker -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / daterange picker) -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / flags (country flags) -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/flags/flags.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / slider nav (address book) -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/slider_nav/slidernav.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / fuelux (wizard) -->
    <link href='/jwcld/Public/assets/stylesheets/plugins/fuelux/wizard.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / flatty theme -->
    <link href='/jwcld/Public/assets/stylesheets/light-theme.css' id='color-settings-body-color' media='all' rel='stylesheet' type='text/css' />
    <!-- / demo -->
    <link href='/jwcld/Public/assets/stylesheets/demo.css' media='all' rel='stylesheet' type='text/css' />
    <!--link href='/jwcld/Public/css/style.css' media='all' rel='stylesheet' type='text/css' /-->
    <!-- / jquery -->
    <script src='/jwcdd/Public/assets/javascripts/jquery/jquery.validate.min.js' type='text/javascript'></script>
    <script src='/jwcld/Public/assets/javascripts/jquery/jquery.min.js' type='text/javascript'></script>
    <script src='/jwcld/Public/js/jquery.md5.js' type='text/javascript'></script>
    <script type="text/javascript" src="/jwcld/Public/kindeditor/kindeditor-min.js"></script>
    <script type="text/javascript" src="/jwcld/Public/kindeditor/lang/zh_CN.js"></script>
    <script src='/jwcld/Public/js/myfun.js' type='text/javascript'></script>

</head>
<body class='contrast-red fixed-header fixed-navigation'>
<header>
    <div class='navbar navbar-fixed-top'>
        <div class='navbar-inner'>
            <div class='container-fluid'>
                <a class='brand' href="<?php echo U('Index/index');?>">
                    <i class='icon-heart-empty'></i>
                    <span class='hidden-phone'>领导干部听课工作平台</span>
                    <span style="color: #ffff2a; font-size: 16px;">&nbsp;&nbsp;[当前学年学期:&nbsp;&nbsp;<?php echo (session('current_yt')); ?>&nbsp;]</span>
                </a>
                <!-- 控制左侧菜单栏开关按钮 -->
                <!--a class='toggle-nav btn pull-left' href='#'>
                    <i class='icon-reorder'></i>
                </a-->
                <ul class='nav pull-right'>
                    <li class="dark"><a href="<?php echo U('Notice/notice');?>">首页</a></li>
                    <li class="dark"><a href="<?php echo U('Index/index');?>">平台管理</a></li>
                    <!--if condition="$Think.session.userRole eq 2">
                    <li class='dropdown medium only-icon widget'>
                        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                            <i class='icon-rss'>提醒&nbsp;</i>
                            <span class='label'><?php echo (session('msg_count')); ?></span>
                        </a>
                        <ul class='dropdown-menu'>
                            <?php $message = $_SESSION["message"]; $msg_http = $_SESSION["msg_http"]; $length = count($message,0); for($i = 0; $i < $length; $i++){ echo "<li><a href='$msg_http'><div class='widget-body'><div class='pull-left icon'><i class='icon-comment text-info'></i></div><div class='pull-left text'>"; echo "[".$message[$i]['tktime']."] ".$message[$i]['cname']; echo "<small class='muted'>&nbsp;&nbsp;".$message[$i]["place"]."</small></div></div></a></li>"; echo "<li class='divider'></li>"; } ?>
                        </ul>
                    </li>
                    </if-->
                    <?php if(empty($_SESSION['userName'])): ?><li class="dark user-menu"><a href="<?php echo U('Login/login');?>">登录</a></li>
                    <?php else: ?>
                        <li class='dropdown dark user-menu'>
                            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                                <img alt='Mila Kunis' height='23' src='/jwcld/Public/assets/images/admin.ico' width='23' />
                                <span class='user-name hidden-phone'><?php echo (session('userName')); ?></span>
                                <b class='caret'></b>
                            </a>
                            <ul class='dropdown-menu'>
                                <li>
                                    <a href='<?php echo U('User/user_profile');?>'>
                                        <i class='icon-user'></i>
                                        个人信息
                                    </a>
                                </li>
                                <li>
                                    <a href='<?php echo U('User/user_modify');?>'>
                                        <i class='icon-cog'></i>
                                        修改
                                    </a>
                                </li>
                                <li class='divider'></li>
                                <li>
                                    <a href='<?php echo U('Login/logout');?>'>
                                        <i class='icon-signout'></i>
                                        退出
                                    </a>
                                </li>
                            </ul>
                        </li><?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</header>
<div id='wrapper'>
<div id='main-nav-bg'></div>
<nav class='main-nav-fixed' id='main-nav'>
<div class='navigation'>
<ul class='nav nav-stacked'>
<?php if($_SESSION['userRole']== 1): ?><li id="unotice">
    <a class='dropdown-collapse' href='#'>
        <i class='icon-dashboard'></i>
        <span>首页管理</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
    <ul class='nav nav-stacked'>
        <li id="show_notice">
            <a href='<?php echo U('Notice/show_notice');?>'>
                <i class='icon-caret-right'></i>
                <span>通知&nbsp;|&nbsp;简报</span>
            </a>
        </li>
        <li id="show_ld">
            <a href='<?php echo U('Notice/show_ld');?>'>
                <i class='icon-caret-right'></i>
                <span>领导介绍</span>
            </a>
        </li>
        <li id="data_download">
            <a href='<?php echo U('Notice/data_download');?>'>
                <i class='icon-caret-right'></i>
                <span>数据下载&nbsp;|&nbsp;更新</span>
            </a>
        </li>
    </ul>
</li>
<li id="umanager">
    <a class='dropdown-collapse' href='#'>
        <i class='icon-user'></i>
        <span>人员管理</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
    <ul class='nav nav-stacked'>
        <li id="user">
            <a href='<?php echo U('User/user');?>'>
                <i class='icon-caret-right'></i>
                <span>系统用户</span>
            </a>
        </li>
        <li id="user_ld">
            <a href='<?php echo U('User/user_ld');?>'>
                <i class='icon-caret-right'></i>
                <span>领导用户</span>
            </a>
        </li>
    </ul>
</li><?php endif; ?>
<?php if($_SESSION['userRole']== 1): ?><li id="tmanager">
    <a class='dropdown-collapse ' href='#'>
        <i class='icon-tasks'></i>
        <span>听课任务</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
    <ul class='nav nav-stacked'>
        <!--li id="task">
            <a href='<?php echo U('Task/task');?>'>
                <i class='icon-caret-right'></i>
                <span>分配</span>
            </a>
        </li-->
        <li id="showTask">
            <a href='<?php echo U('Task/showTask');?>'>
                <i class='icon-caret-right'></i>
                <span>查看</span>
            </a>
        </li>
    </ul>
</li><?php endif; ?>

<?php if(($_SESSION['userRole']>= 2) and ($_SESSION['userRole']<= 4)): ?><li id="rmanager">
    <a href='<?php echo U('Record/record');?>'>
        <i class='icon-edit'></i>
        <span>填写听课记录</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
</li><?php endif; ?>

<?php if(($_SESSION['userRole']>= 2) and ($_SESSION['userRole']<= 4)): ?><li id="tmanager">
    <a href='<?php echo U('Task/showTask');?>'>
        <i class='icon-tasks'></i>
        <span>查看本人记录</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
</li><?php endif; ?>

<!--if condition="($Think.session.userRole egt 4) or ($Think.session.userRole eq 1)"-->
    <li id="rmanager">
    <a href='<?php echo U('Record/showRecord');?>'>
        <i class='icon-edit'></i>
        <span>相关权限记录</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
</li>
<!--/if-->

<li id="smanager">
    <a class='dropdown-collapse' href='#'>
        <i class='icon-table'></i>
        <span>查看各项统计</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
    <ul class='nav nav-stacked'>
        <li id="analysis">
            <a href='<?php echo U('Analysis/analysis');?>'>
                <i class='icon-caret-right'></i>
                <span>听课记录汇总表</span>
            </a>
        </li>
        <?php if($_SESSION['userRole']< 5): ?><li id="department">
            <a href='<?php echo U('Analysis/department');?>'>
                <i class='icon-caret-right'></i>
                <span>院系听课次数统计</span>
            </a>
        </li><?php endif; ?>
        <li id="collegevalue">
            <a href='<?php echo U('Analysis/collegevalue');?>'>
                <i class='icon-caret-right'></i>
                <span>院系评价结果统计</span>
            </a>
        </li>
        </if>
        <?php if(($_SESSION['userRole']== 1) OR ($_SESSION['userRole']== 2) OR ($_SESSION['userRole']== 3)): ?><li id="leadercount">
            <a href='<?php echo U('Analysis/leadercount');?>'>
                <i class='icon-caret-right'></i>
                <span>各级领导听课次数统计</span>
            </a>
        </li><?php endif; ?>
        <?php if(($_SESSION['userRole']== 1) OR ($_SESSION['userRole']== 2) OR ($_SESSION['userRole']== 3)): ?><li id="leadervalue">
            <a href='<?php echo U('Analysis/leadervalue');?>'>
                <i class='icon-caret-right'></i>
                <span>各级领导评价结果统计</span>
            </a>
        </li><?php endif; ?>
        <?php if(($_SESSION['userRole']== 1) OR ($_SESSION['userRole']== 2) OR ($_SESSION['userRole']== 3)): ?><li id="leaderdetailcount">
            <a href='<?php echo U('Analysis/leaderdetailcount');?>'>
                <i class='icon-caret-right'></i>
                <span>各单位领导听课评价</span>
            </a>
        </li><?php endif; ?>
        <!--li id="course">
            <a href='<?php echo U('Analysis/course');?>'>
                <i class='icon-caret-right'></i>
                <span>按课程名统计</span>
            </a>
        </li-->
    </ul>
</li>
</ul>
</div>
</nav>
<section id='content'>
<div class='container-fluid'>
<div class='row-fluid' id='content-wrapper'>
<div class='span12'>
<div class='row-fluid'>
    <div class='span12'>
        <div class='page-header'>
            <h1 class='pull-left'>
                <i class='icon-table'></i><span>数据报表</span>
            </h1>
            <div class='pull-right'>
                <button class="btn btn-primary" id="cos" name="button" style="margin-bottom:5px">打开检索</button>
            </div>
            <div class='pull-right'>
                <ul class='breadcrumb'>
                    <li>
                        <a href="<?php echo U('Index/index');?>"><i class='icon-bar-chart'></i>
                        </a>
                    </li>
                    <li>
                        <i class='icon-angle-right'></i>
                    </li>
                    <li>数据检索</li>
                    <li class='separator'>
                        <i class='icon-angle-left'></i>
                    </li>
                    <li class='active'><a href="/jwcld/Public/template/template.xlsx">下载汇总表模板</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--课程名称、学生院系、年级、课程类别 -->
<div id="search" style="display:none;">
<form method="post" action="<?php echo U('Analysis/analysis');?>">
<div class='row-fluid'>
<div class='span2'>
    <div class='row-fluid'>
        <strong>学年学期</strong>
        <select class='select2 input-block-level' name="yt" id="yterm">
            <option value='-1' selected="selected"/>------请选择------
        <?php if(is_array($yt)): $i = 0; $__LIST__ = $yt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["value"]); ?>"><?php echo ($vo["item"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
</div>
<div class='span2'>
    <div class='row-fluid'>
        <strong>组别</strong>
        <select class='select2 input-block-level' name="group">
            <option value='-1' selected="selected"/>------请选择------
        <?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["gId"]); ?>"><?php echo ($vo["gId"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
</div>
<div class='span2'>
    <div class='row-fluid'>
        <strong>月份</strong>
        <div id="mon1">
            <select class='select2 input-block-level' name="month">
                <option value='-1' selected="selected"/>------请选择------
                <option value='2' />2
                <option value='3' />3
                <option value='4' />4
                <option value='5' />5
                <option value='6' />6
                <option value='7' />7
            </select>
        </div>
        <div id="mon2">
            <select class="select2 input-block-level" name="month">
                <option value='-1' selected="selected"/>------请选择------
                <option value='8' />8
                <option value='9' />9
                <option value='10' />10
                <option value='11' />11
                <option value='12' />12
                <option value='1' />1
            </select>
        </div>
    </div>
</div>
<div class='span2'>
    <div class='row-fluid'>
        <strong>总体评价</strong>
        <select class='select2 input-block-level' name="ztpj">
            <option value='-1' selected="selected"/>------请选择------
            <option value='5' />好
            <option value='4' />较好
            <option value='3' />一般
            <option value='2' />较差
            <option value='1' />差
            <option value='0' />未评价
        </select>
    </div>
</div>
<div class='span2'>
    <div class='row-fluid'>
        <strong>听课领导</strong>
        <select class='select2 input-block-level' name="ld">
            <option value='-1' selected="selected"/>------请选择------
        <?php if(is_array($ld)): $i = 0; $__LIST__ = $ld;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["lduid"]); ?>"><?php echo ($vo["lname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
</div>
</div>

<div class='row-fluid' style="margin-top:10px; margin-bottom:2px;">
<div class='span2'>
    <div class='row-fluid'>
        <strong>教师名称</strong>
        <select class='select2 input-block-level' name="teacher">
            <option value='-1' selected="selected"/>------请选择------
        <?php if(is_array($tea)): $i = 0; $__LIST__ = $tea;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["teaid"]); ?>"><?php echo ($vo["tname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
</div>
<div class='span2'>
    <div class='row-fluid'>
        <strong>教师职称</strong>
        <select class='select2 input-block-level' name="title">
            <option value='-1' selected="selected"/>------请选择------
            <?php if(is_array($title)): $i = 0; $__LIST__ = $title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
</div>
<div class='span4'>
    <div class='row-fluid'>
        <strong>教师单位</strong>
        <select class='select2 input-block-level' name="tcollege">
            <option value='-1' selected="selected"/>------请选择------
            <?php if(is_array($college)): $i = 0; $__LIST__ = $college;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["college"]); ?>"><?php echo ($vo["college"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
</div>
<div class='span2'>
    <div class='row-fluid'>
        <strong>上课地点</strong>
        <select class='select2 input-block-level' name="skplace">
            <option value='-1' selected="selected"/>------请选择------
        <?php if(is_array($place)): $i = 0; $__LIST__ = $place;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["skplace"]); ?>"><?php echo ($vo["skplace"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
</div>
</div>

<div class='row-fluid' style="margin-top:10px; margin-bottom:2px;">
<div class='span2'>
    <div class='row-fluid'>
        <strong>课程名称</strong>
        <!-- <input type="text" name="course" class="input-block-level"> -->
        <select class='select2 input-block-level' name="course">
            <option value='-1' selected="selected"/>------请选择------
        <?php if(is_array($course)): $i = 0; $__LIST__ = $course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["cname"]); ?>"><?php echo ($vo["cname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
</div>
<div class='span2'>
    <div class='row-fluid'>
        <strong>培养层次</strong>
        <select class='select2 input-block-level' name="pycc">
        <option value='-1' selected="selected"/>------请选择------
        <option value="1">本科</option>
        <option value="2">研究生</option>
        </select>
    </div>
</div>
<!-- <div class='span4'>
    <div class='row-fluid'>
        <strong>学生院系</strong>
        <select class='select2 input-block-level' name="scollege">
            <option value='-1' selected="selected"/>------请选择------
        <?php if(is_array($scollege)): $i = 0; $__LIST__ = $scollege;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["college"]); ?>"><?php echo ($vo["college"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
</div> -->
<div class='span2'>
    <div class='row-fluid'>
        <strong>行政班级</strong>
        <select class='select2 input-block-level' name="grade">
            <option value='-1' selected="selected"/>------请选择------
            <?php if(is_array($sclass)): $i = 0; $__LIST__ = $sclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["sclass"]); ?>"><?php echo ($vo["sclass"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
</div>
<button class="btn btn-defalut pull-right" style="margin:17px 0px 0px 0px;" type="submit">检索 | Search</button>
</div>
</form>
</div>
<div class='row-fluid'>
<div class='span12 box bordered-box green-border' style='margin-bottom:0;'>
<div class='box-header green-background'>
    <div class='text-center'><?php echo ($year); ?>-<?php echo ($year+1); ?>学年&nbsp;&nbsp;<?php echo ($term); ?>学期领导听课汇总表</div>
    <?php if($_SESSION['userRole']== 1): ?><a class='btn btn-success btn-large' style='position: absolute;left:0px;top:2px;' data-toggle='modal' href='#addGroup' role='button'>
        <i class='icon-share'>&nbsp;&nbsp;<strong>导入</strong></i>
    </a><?php endif; ?>
    <?php if($_SESSION['userRole']< 5): ?><a class='btn btn-success btn-large' style='position: absolute;left:100px;top:2px;' href="<?php echo U('Analysis/outportLd',array('tid'=>1));?>">
        <i class='icon-share'>&nbsp;&nbsp;<strong>导出</strong></i>
    </a>
    <!--a class='btn btn-success btn-large' style='position: absolute;left:100px;top:2px;' href="<?php echo U('Analysis/outportLd',array('tid'=>1));?>">
        <i class='icon-share'>&nbsp;&nbsp;<strong>导出</strong></i>
    </a--><?php endif; ?>
    <!--button class='btn btn-success ' name='button' style='position:absolute; left:0px;top:2px;'><i class='icon-share'>&nbsp;&nbsp;导入</i></button-->
</div>
<div class='box-content box-no-padding'>
<div class='responsive-table'>
<div class='scrollable-area'>
<table class='table table-bordered table-striped' style='margin-bottom:0;'>
<thead>
<tr>
          <td><b>序号</b></td>
          <td><b>听课人单位</b></td>
          <td><b>听课领导</b></td>
          <td><b>课程名称</b></td>
          <td><b>主讲教师姓名</b></td>
          <td><b>主讲教师所在单位</b></td>
          <td><b>主讲教师职称</b></td>
          <td><b>授课对象</b></td>
          <td><b>选课人数</b></td>
          <td><b>实到人数</b></td>
          <td><b>听课日期</b></td>
          <td><b>听课节次</b></td>
          <td><b>听课节数</b></td>
          <td><b>听课地点</b></td>
          <td><b>课程教学章节及主要内容</b></td>
          <td><b>对课程教学的评价与建议</b></td>
          <td><b>对学生学习情况的评价与建议</b></td>
          <td><b>对本次课程教学的总体评价</b></td>
          <td><b>师生反映的情况</b></td>
          <td><b>培养层次</b></td>
</tr>
</thead>
<tbody>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td><?php echo ($i+$pagecount); ?></td>
        <td><?php echo ($vo["lcollege"]); ?></td>
        <td><?php echo ($vo["lname"]); ?></td>
        <td><?php echo ($vo["cname"]); ?></td>
        <td><?php echo ($vo["tname"]); ?></td>
        <td><?php echo ($vo["tcollege"]); ?></td>
        <td><?php echo ($vo["title"]); ?></td>
        <td><?php echo ($vo["sclass"]); ?></td>
        <td><?php echo ($vo["yingdao"]); ?></td>
        <td><?php echo ($vo["shidao"]); ?></td>
        <td><?php echo ($vo["tktime"]); ?></td>
        <td><?php echo ($vo["sktime"]); ?></td>
        <td><?php echo ($vo["tkjs"]); ?></td>
        <td><?php echo ($vo["skplace"]); ?></td>
        <td><?php echo ($vo["content"]); ?></td>
        <td><?php echo ($vo["pjjy"]); ?></td>
        <td><?php echo ($vo["xsjy"]); ?></td>
        <td>
        <?php if($vo["ztpj"] == 1): ?>好
        <?php elseif($vo["ztpj"] == 2): ?>较好
        <?php elseif($vo["ztpj"] == 3): ?>一般
        <?php elseif($vo["ztpj"] == 4): ?>较差
        <?php elseif($vo["ztpj"] == 5): ?>差
        <?php elseif($vo["ztpj"] == 6): ?>未评价
        <?php else: endif; ?>
        </td>
        <td><?php echo ($vo["ssqk"]); ?></td>
        <td>
        <?php if($vo["pycc"] == 1): ?>本科
        <?php elseif($vo["pycc"] == 2): ?>研究生
        <?php else: endif; ?>
        </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
</table>
<div class="pagination" style="margin: auto; width:725px;"><?php echo ($page); ?></div>
</div>
</div>
</div>
</div>
</div>
<hr class='hr-double' />
<div class='modal hide fade' id='addGroup' role='dialog' tabindex='-1'>
    <div class='modal-header'>
        <button class='close' data-dismiss='modal' type='button'>&times;</button>
        <h3>文件导入——听课汇总表</h3>
    </div> 
    <form class='form form-horizontal' style='margin-bottom: 0;' enctype="multipart/form-data" method="post" action="<?php echo U('Analysis/importLd');?>">
        <div class='modal-body'>
                <div class='control-group'>
                    <label class='control-label'>请选择领导听课汇总表</label>
                    <div class='controls'>
                        <input class='input-large' type='file' name="file1" />
                    </div>
                </div>
            
        </div>
        <div class='modal-footer'>
            <button class='btn btn-primary' type="submit">导入</button>
            <button class='btn' data-dismiss='modal'>关闭</button>
        </div>
    </form>
</div>
</section>
<script type="text/javascript">
    
    $(document).ready(function(){
        var term = '<?php echo ($term); ?>';
        var vSearch = false;
        if (term == '春季'){
            $('#mon2').css('display','none');
        }else{
            $('#mon1').css('display','none'); 
        };
        $('#smanager').nav_slide('smanager','analysis');
        $('#cos').click(function(){
            vSearch = !vSearch;
            if (vSearch) {
                $('#search').css('display','block');
                $(this).html('关闭搜索');
            }else{
                $('#search').css('display','none');
                $(this).html('打开搜索');
            }
        });
        $('#yterm').change(function(){
            var option = $(this).val();
            var a = '春季';
            var b = '秋季';
            if(option.indexOf(a) >= 0){ //寻找春季
                $('#mon2').css('display','none');
                $('#mon1').css('display','block');
            }else if(option.indexOf(b) >= 0){   //寻找秋季
                $('#mon1').css('display','none');
                $('#mon2').css('display','block');
            }else{};
        });
        
    });
</script>
</div>
<!-- /print area -->
<script src="/jwcld/Public/js/jquery.PrintArea.js" type="text/javascript"></script>
<!-- /print area -->
<script src="/jwcld/Public/js/tableExport.js" type="text/javascript"></script>
<!-- /print area -->
<script src="/jwcld/Public/js/jquery.base64.js" type="text/javascript"></script>
<script type="text/javascript" src="/jwcld/Public/js/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="/jwcld/Public/js/jspdf/jspdf.js"></script>
<script type="text/javascript" src="/jwcld/Public/js/jspdf/libs/base64.js"></script>
<!-- / jquery mobile events (for touch and slide) -->
<script src='/jwcld/Public/assets/javascripts/plugins/mobile_events/jquery.mobile-events.min.js' type='text/javascript'></script>
<!-- / jquery migrate (for compatibility with new jquery) -->
<script src='/jwcld/Public/assets/javascripts/jquery/jquery-migrate.min.js' type='text/javascript'></script>
<!-- / jquery ui -->
<script src='/jwcld/Public/assets/javascripts/jquery_ui/jquery-ui.min.js' type='text/javascript'></script>
<!-- / bootstrap -->
<script src='/jwcld/Public/assets/javascripts/bootstrap/bootstrap.min.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/plugins/flot/excanvas.js' type='text/javascript'></script>
<!-- / sparklines -->
<script src='/jwcld/Public/assets/javascripts/plugins/sparklines/jquery.sparkline.min.js' type='text/javascript'></script>
<!-- / flot charts -->
<script src='/jwcld/Public/assets/javascripts/plugins/flot/flot.min.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/plugins/flot/flot.resize.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/plugins/flot/flot.pie.js' type='text/javascript'></script>
<!-- / bootstrap switch -->
<script src='/jwcld/Public/assets/javascripts/plugins/bootstrap_switch/bootstrapSwitch.min.js' type='text/javascript'></script>
<!-- / fullcalendar -->
<script src='/jwcld/Public/assets/javascripts/plugins/fullcalendar/fullcalendar.min.js' type='text/javascript'></script>
<!-- / datatables -->
<script src='/jwcld/Public/assets/javascripts/plugins/datatables/jquery.dataTables.min.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/plugins/datatables/jquery.dataTables.columnFilter.js' type='text/javascript'></script>
<!-- / wysihtml5 -->
<script src='/jwcld/Public/assets/javascripts/plugins/common/wysihtml5.min.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/plugins/common/bootstrap-wysihtml5.js' type='text/javascript'></script>
<!-- / select2 -->
<script src='/jwcld/Public/assets/javascripts/plugins/select2/select2.js' type='text/javascript'></script>
<!-- / color picker -->
<script src='/jwcld/Public/assets/javascripts/plugins/bootstrap_colorpicker/bootstrap-colorpicker.min.js' type='text/javascript'></script>
<!-- / mention -->
<script src='/jwcld/Public/assets/javascripts/plugins/mention/mention.min.js' type='text/javascript'></script>
<!-- / input mask -->
<script src='/jwcld/Public/assets/javascripts/plugins/input_mask/bootstrap-inputmask.min.js' type='text/javascript'></script>
<!-- / fileinput -->
<script src='/jwcld/Public/assets/javascripts/plugins/fileinput/bootstrap-fileinput.js' type='text/javascript'></script>
<!-- / modernizr -->
<script src='/jwcld/Public/assets/javascripts/plugins/modernizr/modernizr.min.js' type='text/javascript'></script>
<!-- / retina -->
<script src='/jwcld/Public/assets/javascripts/plugins/retina/retina.js' type='text/javascript'></script>
<!-- / fileupload -->
<script src='/jwcld/Public/assets/javascripts/plugins/fileupload/tmpl.min.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/plugins/fileupload/load-image.min.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/plugins/fileupload/canvas-to-blob.min.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/plugins/fileupload/jquery.iframe-transport.min.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/plugins/fileupload/jquery.fileupload.min.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/plugins/fileupload/jquery.fileupload-fp.min.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/plugins/fileupload/jquery.fileupload-ui.min.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/plugins/fileupload/jquery.fileupload-init.js' type='text/javascript'></script>
<!-- / timeago -->
<script src='/jwcld/Public/assets/javascripts/plugins/timeago/jquery.timeago.js' type='text/javascript'></script>
<!-- / slimscroll -->
<script src='/jwcld/Public/assets/javascripts/plugins/slimscroll/jquery.slimscroll.min.js' type='text/javascript'></script>
<!-- / autosize (for textareas) -->
<script src='/jwcld/Public/assets/javascripts/plugins/autosize/jquery.autosize-min.js' type='text/javascript'></script>
<!-- / charCount -->
<script src='/jwcld/Public/assets/javascripts/plugins/charCount/charCount.js' type='text/javascript'></script>
<!-- / validate -->
<script src='/jwcld/Public/assets/javascripts/plugins/validate/jquery.validate.min.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/plugins/validate/additional-methods.js' type='text/javascript'></script>
<!-- / naked password -->
<script src='/jwcld/Public/assets/javascripts/plugins/naked_password/naked_password-0.2.4.min.js' type='text/javascript'></script>
<!-- / nestable -->
<script src='/jwcld/Public/assets/javascripts/plugins/nestable/jquery.nestable.js' type='text/javascript'></script>
<!-- / tabdrop -->
<script src='/jwcld/Public/assets/javascripts/plugins/tabdrop/bootstrap-tabdrop.js' type='text/javascript'></script>
<!-- / jgrowl -->
<script src='/jwcld/Public/assets/javascripts/plugins/jgrowl/jquery.jgrowl.min.js' type='text/javascript'></script>
<!-- / bootbox -->
<script src='/jwcld/Public/assets/javascripts/plugins/bootbox/bootbox.min.js' type='text/javascript'></script>
<!-- / inplace editing -->
<script src='/jwcld/Public/assets/javascripts/plugins/xeditable/bootstrap-editable.min.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/plugins/xeditable/wysihtml5.js' type='text/javascript'></script>
<!-- / ckeditor -->
<script src='/jwcld/Public/assets/javascripts/plugins/ckeditor/ckeditor.js' type='text/javascript'></script>
<!-- / filetrees -->
<script src='/jwcld/Public/assets/javascripts/plugins/dynatree/jquery.dynatree.min.js' type='text/javascript'></script>
<!-- / datetime picker -->
<script src='/jwcld/Public/assets/javascripts/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.js' type='text/javascript'></script>
<!-- / daterange picker -->
<script src='/jwcld/Public/assets/javascripts/plugins/bootstrap_daterangepicker/moment.min.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.js' type='text/javascript'></script>
<!-- / max length -->
<script src='/jwcld/Public/assets/javascripts/plugins/bootstrap_maxlength/bootstrap-maxlength.min.js' type='text/javascript'></script>
<!-- / dropdown hover -->
<script src='/jwcld/Public/assets/javascripts/plugins/bootstrap_hover_dropdown/twitter-bootstrap-hover-dropdown.min.js' type='text/javascript'></script>
<!-- / slider nav (address book) -->
<script src='/jwcld/Public/assets/javascripts/plugins/slider_nav/slidernav-min.js' type='text/javascript'></script>
<!-- / fuelux -->
<script src='/jwcld/Public/assets/javascripts/plugins/fuelux/wizard.js' type='text/javascript'></script>
<!-- / flatty theme -->
<script src='/jwcld/Public/assets/javascripts/nav.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/tables.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/theme.js' type='text/javascript'></script>
<!-- / demo -->
<script src='/jwcld/Public/assets/javascripts/demo/jquery.mockjax.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/demo/inplace_editing.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/demo/charts.js' type='text/javascript'></script>
<script src='/jwcld/Public/assets/javascripts/demo/demo.js' type='text/javascript'></script>
<!--div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div-->
</body>
</html>