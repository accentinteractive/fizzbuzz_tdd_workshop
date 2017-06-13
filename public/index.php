<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>FizzBuzz</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <section class="col-md-6">

        <h1>FizzBuzz Magic</h1>
        <p>What will you get?</p>

        <form action="process.php" method="post">
            <div class="form-group">
                <label>Convert any number to FizzBuzz</label>
                <input type="text" class="form-control" name="integer" placeholder="Your integer">
            </div>
            <input type="submit" class="btn btn-primary" value="Get FizzBuzz">
        </form>

        <hr>
        <p>The above form posts to process.php. After processing, the user must be redirected here, and the converted value must be displayed.</p>
        <h1>FizzBuzz rules</h1>
        <ul>
            <li>If a number can be divided by 3 say 'fizz'</li>
            <li>If a number can be divided by 5 say 'buzz'</li>
            <li>More rules may follow later :)</li>
        </ul>
        <h2>Example</h2>
        <ul>
            <li>1</li>
            <li>2</li>
            <li>fizz</li>
            <li>4</li>
            <li>buzz</li>
            <li>fizz</li>
            <li>7</li>
            <li>8</li>
            <li>fizz</li>
            <li>buzz</li>
            <li>11</li>
            <li>fizz</li>
            <li>13</li>
            <li>14</li>
            <li>fizz</li>
            <li>16</li>
            <li>17</li>
            <li>fizz</li>
            <li>19</li>
            <li>buzz</li>
        </ul>

    </section>
</div>
</body>
</html>
