<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
    <title>Claimoo - Dashboard</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/bootstrap.css">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="assets-voxo/style.css">
</head>

<body>
    <div class="container">
        <div class="width-100 img-center mt-3">
            <img src="assets/img/logo2.png" alt="" class="width-50">
        </div>

        <form action="" method="post" class="mt-3">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Give Feedback</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
            </div>

            <div class="form-group mt-3">
                <label for="exampleFormControlFile1">Upload File</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-primary" type="submit">Send</button>
                <a class="btn btn-secondary" href="{{ url('dashboard') }}">Back</a>
            </div>
        </form>
    </div>

    <!-- latest jquery-->
    <script src="assets-voxo/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets-voxo/js/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>
