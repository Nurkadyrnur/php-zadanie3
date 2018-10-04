<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

</head>
<body id="page-top">
<div class="container text-center">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">


            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1"><h1> Enter text</h1></label>
                    <textarea name="content" class="form-control" id="exampleInputEmail1"
                              aria-describedby="emailHelp"><?php print($content); ?></textarea>
                </div>

                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-primary" href="/delete.php?file=<?= $file ?>">delete</a>
            </form>
            <p>{{name}} - При выводе форматируется с первой заглавной буквой. </p>
            <p> {{number}} - При выводе округляется до целого числа. </p>
            <p> {{money}} - При выводе округляется до 2 знаков после запятой. </p>
            <p> {{currency}} - Вместо ввода данных, необходимо использовать html элемент select. (Название и кол-во
                валют можете выбрать любым). </p>
            <p> {{date}} - Выводит текущую дату. </p>
            <p>{{time}} - Выводит текущее время (часы, минуты и секунды). </p>
            <p>{{text}} - При выводе не форматируется.

            </p>

        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/freelancer.min.js"></script>

</body>

</html>