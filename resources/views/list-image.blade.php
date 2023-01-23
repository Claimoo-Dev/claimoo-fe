<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
    <title>Claimoo - List Image</title>

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets-voxo/css/vendors/font-awesome.css">

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

        <a class="btn btn-secondary mt-5" href="{{ route('dashboard') }}">Kembali</a>

        <div class="table-responsive mt-3">
            <table class="table table-striped caption-top">
                <caption>Daftar Gambar Layak Oleh {{ $user->data->name }} </caption>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Tipe Mobil</th>
                        <th>Tipe Frame</th>
                        <!-- <th>Kerusakan</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images->data as $image)

                    @php
                    $replace = str_replace("-","/", $image->created_date);

                    $src = "images/" . $replace . "/" . $image->image;
                    @endphp

                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>
                            <img class="img-fluid my-image" src="{{ $src }}" alt="">
                        </td>
                        <td class="text-center text-uppercase">{{ $image->type_car }}</td>
                        <td class="text-center text-capitalize">{{ $image->type_frame }}</td>
                        <!-- <td>Lecet</td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
    </div>


    <!-- latest jquery-->
    <script src="assets-voxo/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets-voxo/js/bootstrap/bootstrap.bundle.min.js"></script>

    <script>
        var modal = document.getElementById("myModal");
        var img = document.getElementsByClassName("my-image");
        var modalImg = document.getElementById("img01");

        for (let i = 0; i < img.length; i++) {
            img[i].onclick = function () {
                modal.style.display = "block";
                modalImg.src = this.src;
            }
        }
        
        var span = document.getElementsByClassName("close")[0];
        
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>
</body>

</html>
