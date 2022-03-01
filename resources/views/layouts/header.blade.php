<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    nav{
        width: 900px;
        height: 50px;
        margin: auto;
        display: flex;
        justify-content: space-around;
        background-color: lightcoral;
        color: black;
        text-align: center;
    }

    .container{
        width: 900px;
        height: 500px;
        margin: auto;
        padding: 1rem 0rem;
        background-color: lightgray;
    }

    .footer{
        width: 900px;
        height: 50px;
        margin: auto;
        background-color: black;
        color: white;
        text-align: center;

    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @stack('title')
</head>
<body>
<nav>
    <a href="/">home</a>
    <a href="/register">Register</a>
    <a href="/about">about</a>
    <a href="/service">service</a>
</nav>
</body>
</html>