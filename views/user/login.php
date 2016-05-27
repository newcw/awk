<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" media="screen">
        <style type="text/css">
        .m15{ margin: 15px;}
        .tc{ text-align: center;font-size: 18px;font-weight: 600;}
        </style>
</head>
<body screen_capture_injected="true">
        <div class="container">
                <form class="col-sm-offset-4 col-sm-4 form-horizontal" role="form" method="post" action="checklogin">
                        <fieldset>
                                <legend></legend>
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                        <p class="tc">请先登录</p>
                                </div>
                                <div class="panel-body m15">
                                <div class="form-group">
                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-user"></span>
                                                </span>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="请输入用户名" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-lock"></span>
                                                </span>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="请输入密码" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block" id="login0">登录</button>
                       
                                </div>
                                </div>
                                </div>
                        </fieldset>
                </form>
        </div>

        <script type="text/javascript" src="/bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</head>
</html>