<?php
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <title>Title</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <form action="" method="post">
                <div class="form-group">
                    <label for=""></label>
                    <textarea class="form-control" name="input1" rows="3"></textarea>
                </div>
                <button class="btn btn-primary" name="btn">Enregistrer</button>
            </form>
        </div>
    </div>

    <button class="btn btn-primary" name="btn">Enregistrer</button>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>


<?php
echo saveTextarea($_POST['input1']);
