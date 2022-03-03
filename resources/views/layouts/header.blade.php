<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    nav{
        /* width: 900px; */
        height: 50px;
        margin: auto;
        display: flex;
        justify-content: space-around;
        background-color: lightcoral;
        color: black;
        text-align: center;
    }

    .container{
        /* width: 900px; */
        margin: auto;
        padding: 1rem 0rem;
        background-color: lightgray;
    }

    .footer{
        /* width: 900px; */
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

        <!-- bootstrap  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav>
    <a href="/">home</a>
    <a href="/register">Register</a>
    <a href="/show-customer">Show customer</a>
    <a href="/about">about</a>
    <a href="/service">service</a>
</nav>
</body>
</html>