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
                <input type="text" class="form-control" name="integer" id="integer" placeholder="Your integer">
            </div>
            <input type="submit" class="btn btn-primary" value="Get FizzBuzz">
        </form>

        <hr>

<?php
if ( ! empty($_SESSION['integer'])) {
    echo '<h2>You get: ' . $_SESSION['integer'] . '</h2>';
}
?>

    </section>
</div>

<script>
    window.onload = function() {
        document.getElementById("integer").focus();
    };
</script>

</body>
</html>
