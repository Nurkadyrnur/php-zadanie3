<?php
/**
 * Created by PhpStorm.
 * User: nurkadyr
 * Date: 9/28/18
 * Time: 6:55 PM
 */
?>
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
<div class="container text-center">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <form method="post" action="/replace.php?file=<?= $file ?>">
                <h1> Enter text</h1>
                <?php foreach ($forms as $form): ?>
                    <?php if ($form['type'] == 'select'): ?>
                        <div class="form-group">
                            <label for="<?= $form['name'] ?>"><?= $form['label'] ?></label>
                            <select class="form-control" name="<?= $form['name'] ?>">
                                <?php foreach ($form['data'] as $val): ?>
                                    <option value="<?= $val ?>"><?= $val ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    <?php elseif ($form['type'] == 'textarea'): ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter text</label>
                            <textarea name="<?= $form['name'] ?>" class="form-control" id="exampleInputEmail1"
                                      aria-describedby="emailHelp"></textarea>
                        </div>
                    <?php else: ?>
                        <div class="form-group">
                            <label for="<?= $form['name'] ?>"><?= $form['label'] ?></label>
                            <input type="<?= $form['type'] ?>" name="<?= $form['name'] ?>" class="form-control"
                                   id="exampleInputEmail1" aria-describedby="emailHelp" step="any">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

                <input type="submit" class="btn btn-primary">
            </form>
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