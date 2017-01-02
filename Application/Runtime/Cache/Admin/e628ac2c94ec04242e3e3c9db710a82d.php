<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>宇宙空间实验室</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="/guest2/Public/admin/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/guest2/Public/admin/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="/guest2/Public/admin/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="/guest2/Public/admin/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="/guest2/Public/admin/css/main.css">
    <!-- Vector Map  -->
    <link rel="stylesheet" href="/guest2/Public/admin/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css">
    <!-- ToDos  -->
    <link rel="stylesheet" href="/guest2/Public/admin/plugins/todo/css/todos.css">
    <!-- Morris  -->
    <link rel="stylesheet" href="/guest2/Public/admin/plugins/morris/css/morris.css">
    <!-- Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <!-- Feature detection -->
    <script src="/guest2/Public/admin/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
        <!--sidebar left start-->
        <!--sidebar left end-->
        <!--main content start-->
        <section class="main-content-wrapper" style="margin-left:0px;min-height:600px">
            <section id="main-content">
                <!--tiles start-->
                <!--tiles end-->
                <!--dashboard charts and map start-->
                
                <!--dashboard charts and map end-->
                <!--ToDo start-->
              <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">相册分类添加</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal form-border" id="yfycms-form" method="post" enctype="multipart/form-data">
                                
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">名称</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="designation" placeholder="名称">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">排序</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="sort" placeholder="排序">
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">开启状态</label>
                                        <div class="col-sm-6">
                                            <label class="radio-inline">
                                                <input class="icheck" type="radio" name="power" value="0">开启</label>
                                            <label class="radio-inline">
                                                <input class="icheck" type="radio" checked="checked" name="power" value="1">关闭</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="button" class="btn btn-primary" id="yfycms-button-submit">添加</button>
                                        </div>
                                    </div>
                            
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
                        
                  
                   
                    
                </div>
                <!--ToDo end-->
            </section>
        </section>
        <!--main content end-->
        <!--sidebar right start-->
        <!--sidebar right end-->
    <!--Global JS-->
    <script src="/guest2/Public/admin/js/jquery-1.10.2.min.js"></script>
    <script src="/guest2/Public/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/guest2/Public/admin/plugins/waypoints/waypoints.min.js"></script>
    <script src="/guest2/Public/admin/js/application.js"></script>
    <script src="/guest2/Public/dialog.js"></script>
    <script src="/guest2/Public/admin/js/common.js"></script>
    <script src="/guest2/Public/admin/dialog/layer.js"></script>
    <!--Page Level JS-->
    <script src="/guest2/Public/admin/plugins/countTo/jquery.countTo.js"></script>
    <script src="/guest2/Public/admin/plugins/weather/js/skycons.js"></script>
    <!-- FlotCharts  -->
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.resize.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.canvas.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.image.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.categories.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.crosshair.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.errorbars.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.fillbetween.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.navigate.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.pie.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.selection.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.stack.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.symbol.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.threshold.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.colorhelpers.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.time.min.js"></script>
    <script src="/guest2/Public/admin/plugins/flot/js/jquery.flot.example.js"></script>
    <!-- Morris  -->
    <script src="/guest2/Public/admin/plugins/morris/js/morris.min.js"></script>
    <script src="/guest2/Public/admin/plugins/morris/js/raphael.2.1.0.min.js"></script>
    <!-- Vector Map  -->
    <script src="/guest2/Public/admin/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/guest2/Public/admin/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
    <!-- ToDo List  -->
    <script src="/guest2/Public/admin/plugins/todo/js/todos.js"></script>
    <!--Load these page level functions-->
    <script>
    $(document).ready(function() {
        app.timer();
        app.map();
        app.weather();
        app.morrisPie();
    });
    </script>
    <script>
        var SCOPE={
            'save_url':'admin.php?c=classification&a=add',
            'jump_url':'admin.php?c=classification',
        }
    </script>

</body>

</html>