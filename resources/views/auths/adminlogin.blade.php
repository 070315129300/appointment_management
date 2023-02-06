<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentication</title>
    <link rel="stylesheet" href="">
    <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <style>
        body{
            background: #999999;
            padding-top: 100px;
        }
        h4{
            color: black;
            font-size: 2rem;
            text-align: center;
            padding-bottom: 20px;
        }
        .row{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        #div2{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        form{
            background: white;
            padding: 30px 30px;
            border: none;
            border-radius: 10px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, .8);
            width: 600px;
        }
        .form-group{
            padding-bottom: 20px;
        }
        .form-group .btn{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-group button{
            padding:11px 21px;
        }
        a{
            text-decoration: none;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" id="div2" style="margin-top:20px">
            <h4>Admin Login</h4>
            <form action="{{route('alogin-user')}}" method="post">
                @csrf
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter Your Email" value="">
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" value="">
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>

                <div class="form-group">
                    <div class="btn"><button class="btn btn-block btn-primary" type="submit">login</button></div>
                </div>
                <br>
                <a href="registration">New User !! Register Here</a>
                <br>
                <a href="/">go to home page</a>

            </form>
        </div>
    </div>
</div>
</body>
<script src="">

</script>
</html>
