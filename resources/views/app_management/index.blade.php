<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: 'Consolas',sans-serif ;
        }
        header{
            display: flex;
            gap: 10vw;
            align-items: center;
            padding: 10px 30px;
        }
        .logo{
            font-size: 3rem;
        }
        header p{
            font-size: 2rem ;
        }
        .hero{
            padding: 300px 100px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .hero h2 {
            font-size: 5rem;
        }
        .hero a{
            cursor: pointer;
        }
        button{
            border-radius: 10px;
            padding: 18px 55px;
            border: none;
            font-size: 16px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Cayleb Hub</div>
        <p>Web Development</p>
    </header>
    <div class="hero">
        <h2>Book an Appointment</h2>
        <a href="login"><button>Book Now</button></a>
    </div>
{{--        <a href="login">login</a>--}}
{{--        <a href="registration">register</a>--}}
{{--        <a href="adminlogin">adminlogin</a>--}}
</body>
</html>
