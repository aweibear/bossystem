
<!DOCTYPE html>
<html lang="en" xmlns:margin-top="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>登入</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 引入 Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 Shiv 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
    <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 
    <!-- 整体背景 -->
    <style type="text/css">
        html{
            height: 100%;
        }
        body{
            background-image: url(https://wallpapercave.com/wp/wp2151067.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            height: 100%;
        }
        .col-center-block {
            float: none;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20%;
            text-align: center;
            max-width: 333px;
        }
        .edit {
            margin-top: 10px;
        }
        .textcolor{
           color: white;
        }
    </style>
</head>
<body>
    <!-- 两个输入框 -->
    <div class="container">
        <div class="row row-centered">
            <div class="col-xs-6 col-md-4 col-center-block">
                <h1 class="textcolor">歡迎</h1>
                <form  action="{{ route('login') }}" method="POST">
                     @csrf
                    <!-- 输入id -->
                    <div class="input-group input-group-md">
                        <label for="userid" class="input-group-addon" id="sizing-addon1">
                            <i class="glyphicon glyphicon-user" aria-hidden="true"></i></label>
                        <input type="text" class="form-control" id="userid" name="email" placeholder="請輸入帳號" required/>
                    </div>
                    <!-- 输入密码 -->
                    <div class="edit input-group input-group-md">
                        <label for="password" class="input-group-addon" id="sizing-addon2">
                            <i class="glyphicon glyphicon-lock"></i></label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="請輸入密碼" required/>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <input type="text" class="form-control {{$errors->has('captcha')?'parsley-error':''}}" name="captcha" placeholder="請輸入驗證碼">
                        </div>

                        <div class="col-xs-1 col-md-1">
                            <img src="{{captcha_src()}}" style="cursor: pointer" onclick="this.src='{{captcha_src()}}'+Math.random()">
                        </div>

                    </div>
                     @if ($errors->any())
                           <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors }}</strong>
                            </span>
                        @endif
                    <br/>
                    <button type="submit" class="btn btn-success btn-block" name="submit" value="登入">登入</button>

                   <!--  <a type="submit" class="btn btn-primary btn-block" href="register.html" style="margin-bottom: 20%">注册</a> -->
                </form>
            </div>
        </div>
    </div>
</body>
</html>
