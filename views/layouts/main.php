<!DOCTYPE html>
<html>
  <head >
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>AutoWorker</title>
   <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="/bootstrap/css/bootstrapValidator.css"/>
   <link rel="stylesheet" href="/bootstrap/css/common.css"/>
   <link rel="stylesheet" href="/bootstrap/css/backstage.css"/>
   <link rel="stylesheet" href="/bootstrap/css/jquery.icard.css"/>

   


  <!-- <link href="http://cdn.bootcss.com/twitter-bootstrap/2.0.4/css/bootstrap.min.css" rel="stylesheet"> -->

  <!--<script src="/editor.md-master/examples/js/jquery.min.js"></script>-->
  

   <script src="/bootstrap/js/jquery.min.js"></script>
   <script src="/bootstrap/editor.md-master/editormd.min.js"></script>
   <script src="/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="/bootstrap/js/bootstrapValidator.js"></script>

    <link rel='stylesheet' href='/bootstrap/css/style.css' />
    <link rel="stylesheet" href="/bootstrap/editor.md-master/css/editormd.css" />
    <style type="text/css">
    a{margin-left: 20px; text-decoration: none;}
    a:hover{text-decoration: underline;}
    </style>
  </head>

<body>

<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">AutoWorker</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/ticket/mine">AutoWorker</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav col-md-4">

        <li class="active"><a href="/ticket/mine">我的工单<span class="sr-only">(current)</span></a></li>
        <li><a href="/ticket/news">最新工单</a></li>
        <li><a href="#">搜索</a></li>
        <li><a href="#">lala</a></li>
      </ul>
      <form class="navbar-form navbar-left col-md-3" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="请输入工单号">
        </div> 
        <a class="btn btn-default" href="/works/find">查看</a>
        <a class="btn btn-default" href="/ticket/create">新建</a>
      </form>
      <ul class="nav navbar-nav navbar-right col-md-3">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 个人中心<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
              
            ?>
              <li><a href="/admin/manager">后台管理</a></li>
            <?php
            ?>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/user/logout">注销</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container" style="margin-top:1px">
     <?= $content ?>
</div>
</body>
</html>
