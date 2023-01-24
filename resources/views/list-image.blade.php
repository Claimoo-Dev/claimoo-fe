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

        <div class="mt-3">
                <input type="date" id="startDate">
                <input type="date" id="endDate">
                <button class="btn btn-primary" id="buttonDate" onclick="date()">Kirim</button>
        </div>

        <div class="table-responsive mt-3 mb-5">
            <table class="table table-striped caption-top" id="table">
                <caption>Daftar Gambar Layak {{ $user->data->name }} </caption>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Tipe Mobil</th>
                        <th>Tipe Frame</th>
                    </tr>
                </thead>
                <tbody id="tbody"></tbody>
            </table>
            <div id="option-parent">
                <div class="text-center" id="option"></div>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
    </div>

    <input type="hidden" value="{{ $user->data->member_code }}" id="memberCode">
    <input type="hidden" id="page" value="1">
    <input type="hidden" value="{{ $token }}" id="token">

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

        var token = document.getElementById("token").value;
        var memberCode = document.getElementById("memberCode").value;
        
        function date() {
            var startDate = document.getElementById("startDate").value;
            var endDate = document.getElementById("endDate").value;

            $.ajax({
                type: "GET",
                url: "/testing?member_code=" + memberCode + "&status=0&limit=10&start_date=" + startDate + "&end_date=" + endDate + "&page=1",
                url: "http://staging.claimoo.com:55777/v1/upload?member_code=" + memberCode + "&status=0&limit=10&start_date=" + startDate + "&end_date=" + endDate + "&page=1",
                headers: {
                    'Authorization': token,
                    'X-Channel': 'cust_mobile_app',
                    'Content-Type': 'application/json'
                },
                success: function (data) {
                    $('#tbody').remove();
                    $('#option').remove();

                    var trHTML = '<tbody id="tbody">';
                    var number = 1;
                    $.each(data.data, function (i, item) {
                        var newStr = item.created_date.replace(/-/g, "/");
                        var imgSrc = "images/" + newStr + "/" + item.image;

                        trHTML += 
                            '<tr>' +
                                '<td class="text-center">' + number++ + '</td>' +
                                '<td>' +
                                    '<img class="img-fluid my-image" src="' + imgSrc + '">' +
                                '</td>' +
                                '<td class="text-center text-uppercase">' + item.type_car + '</td>' + 
                                '<td class="text-center text-capitalize">' + item.type_frame + '</td>' +
                            '</tr>';
                    });
                    trHTML += '</tbody>';
                    $('#table').append(trHTML);

                    // var count = parseInt(data.pagination.count) /  10;
                    // var lastPage = Math.ceil(count);
                    // var page = data.pagination.current_page;

                    // if (count > 1 && page > 1 && lastPage > page) {
                    //     var button = '<div class="text-center" id="option">' +
                    //         '<button class="btn btn-primary" onclick="previousPage()"> < </button>' +
                    //         '<button class="btn btn-primary" onclick="nextPage()"> > </button>' +
                    //     '</div>';
                        
                    //     $('#option-parent').append(button);
                    // } else if (count > 1 && page == 1) {
                    //     var button = '<div class="text-center" id="option">' +
                    //         '<button class="btn btn-primary" onclick="nextPage()"> > </button>' +
                    //     '</div>';
                        
                    //     $('#option-parent').append(button);
                    // } else if (count > 1 && lastPage == page) {
                    //     var button = '<div class="text-center" id="option">' +
                    //         '<button class="btn btn-primary" onclick="previousPage()"> < </button>' +
                    //     '</div>';
                        
                    //     $('#option-parent').append(button);
                    // }

                    if (data.pagination.has_next_page && data.pagination.has_previous_page) {
                        var button = '<div class="text-center" id="option">' +
                            '<button class="btn btn-primary me-1" onclick="previousPage()"> < </button>' +
                            '<button class="btn btn-primary" onclick="nextPage()"> > </button>' +
                        '</div>';
                        
                        $('#option-parent').append(button);
                    } else if (data.pagination.has_next_page && !data.pagination.has_previous_page) {
                        var button = '<div class="text-center" id="option">' +
                            '<button class="btn btn-primary" onclick="nextPage()"> > </button>' +
                        '</div>';
                        
                        $('#option-parent').append(button);
                    } else if (!data.pagination.has_next_page && data.pagination.has_previous_page) {
                        var button = '<div class="text-center" id="option">' +
                            '<button class="btn btn-primary" onclick="previousPage()"> < </button>' +
                        '</div>';
                        
                        $('#option-parent').append(button);
                    }
                }
            });
        };

        function nextPage() {
            var startDate = document.getElementById("startDate").value;
            var endDate = document.getElementById("endDate").value;
            var page = parseInt(document.getElementById("page").value) + 1;
            document.getElementById("page").value = page;

            $.ajax({
                type: "GET",
                url: "http://staging.claimoo.com:55777/v1/upload?member_code=" + memberCode + "&status=0&limit=10&start_date=" + startDate + "&end_date=" + endDate + "&page=" + page,
                headers: {
                    'Authorization': token,
                    'X-Channel': 'cust_mobile_app',
                    'Content-Type': 'application/json'
                },
                success: function (data) {
                    $('#tbody').remove();
                    $('#option').remove();

                    var number = 1;
                    var trHTML = '<tbody id="tbody">';

                    $.each(data.data, function (i, item) {
                        var newStr = item.created_date.replace(/-/g, "/");
                        var imgSrc = "images/" + newStr + "/" + item.image;

                        trHTML += 
                            '<tr>' +
                                '<td class="text-center">' + number++ + '</td>' +
                                '<td>' +
                                    '<img class="img-fluid my-image" src="' + imgSrc + '">' +
                                '</td>' +
                                '<td class="text-center text-uppercase">' + item.type_car + '</td>' + 
                                '<td class="text-center text-capitalize">' + item.type_frame + '</td>' +
                            '</tr>';
                    });
                    trHTML += '</tbody>';
                    $('#table').append(trHTML);

                    // var count = parseInt(data.pagination.count) /  10;
                    // var lastPage = Math.ceil(count);
                    // var page = data.pagination.current_page;

                    // if (count > 1 && page > 1 && lastPage > page) {
                    //     var button = '<div class="text-center" id="option">' +
                    //         '<button class="btn btn-primary" onclick="previousPage()"> < </button>' +
                    //         '<button class="btn btn-primary" onclick="nextPage()"> > </button>' +
                    //     '</div>';
                        
                    //     $('#option-parent').append(button);
                    // } else if (count > 1 && page == 1) {
                    //     var button = '<div class="text-center" id="option">' +
                    //         '<button class="btn btn-primary" onclick="nextPage()"> > </button>' +
                    //     '</div>';
                        
                    //     $('#option-parent').append(button);
                    // } else if (lastPage == page) {
                    //     var button = '<div class="text-center" id="option">' +
                    //         '<button class="btn btn-primary" onclick="previousPage()"> < </button>' +
                    //     '</div>';
                        
                    //     $('#option-parent').append(button);
                    // }

                    if (data.pagination.has_next_page && data.pagination.has_previous_page) {
                        var button = '<div class="text-center" id="option">' +
                            '<button class="btn btn-primary me-1" onclick="previousPage()"> < </button>' +
                            '<button class="btn btn-primary" onclick="nextPage()"> > </button>' +
                        '</div>';
                        
                        $('#option-parent').append(button);
                    } else if (data.pagination.has_next_page && !data.pagination.has_previous_page) {
                        var button = '<div class="text-center" id="option">' +
                            '<button class="btn btn-primary" onclick="nextPage()"> > </button>' +
                        '</div>';
                        
                        $('#option-parent').append(button);
                    } else if (!data.pagination.has_next_page && data.pagination.has_previous_page) {
                        var button = '<div class="text-center" id="option">' +
                            '<button class="btn btn-primary" onclick="previousPage()"> < </button>' +
                        '</div>';
                        
                        $('#option-parent').append(button);
                    }
                }
            });
        };

        function previousPage() {
            var startDate = document.getElementById("startDate").value;
            var endDate = document.getElementById("endDate").value;
            var page = parseInt(document.getElementById("page").value) - 1;
            document.getElementById("page").value = page;

            $.ajax({
                type: "GET",
                url: "http://staging.claimoo.com:55777/v1/upload?member_code=" + memberCode + "&status=0&limit=10&start_date=" + startDate + "&end_date=" + endDate + "&page=" + page,
                headers: {
                    'Authorization': token,
                    'X-Channel': 'cust_mobile_app',
                    'Content-Type': 'application/json'
                },
                success: function (data) {
                    $('#tbody').remove();
                    $('#option').remove();

                    var trHTML = '<tbody id="tbody">';
                    var number = 1;

                    $.each(data.data, function (i, item) {
                        var newStr = item.created_date.replace(/-/g, "/");
                        var imgSrc = "images/" + newStr + "/" + item.image;

                        trHTML += 
                            '<tr>' +
                                '<td class="text-center">' + number++ + '</td>' +
                                '<td>' +
                                    '<img class="img-fluid my-image" src="' + imgSrc + '">' +
                                '</td>' +
                                '<td class="text-center text-uppercase">' + item.type_car + '</td>' + 
                                '<td class="text-center text-capitalize">' + item.type_frame + '</td>' +
                            '</tr>';
                    });
                    trHTML += '</tbody>';
                    $('#table').append(trHTML);

                    // var count = parseInt(data.pagination.count) /  10;
                    // var lastPage = Math.ceil(count);
                    // var page = data.pagination.current_page;

                    // if (count > 1 && page > 1 && lastPage > page) {
                    //     var button = '<div class="text-center" id="option">' +
                    //         '<button class="btn btn-primary" onclick="previousPage()"> < </button>' +
                    //         '<button class="btn btn-primary" onclick="nextPage()"> > </button>' +
                    //     '</div>';
                        
                    //     $('#option-parent').append(button);
                    // } else if (count > 1 && page == 1) {
                    //     var button = '<div class="text-center" id="option">' +
                    //         '<button class="btn btn-primary" onclick="nextPage()"> > </button>' +
                    //     '</div>';
                        
                    //     $('#option-parent').append(button);
                    // } else if (lastPage == page) {
                    //     var button = '<div class="text-center" id="option">' +
                    //         '<button class="btn btn-primary" onclick="previousPage()"> < </button>' +
                    //     '</div>';
                        
                    //     $('#option-parent').append(button);
                    // }

                    if (data.pagination.has_next_page && data.pagination.has_previous_page) {
                        var button = '<div class="text-center" id="option">' +
                            '<button class="btn btn-primary me-1" onclick="previousPage()"> < </button>' +
                            '<button class="btn btn-primary" onclick="nextPage()"> > </button>' +
                        '</div>';
                        
                        $('#option-parent').append(button);
                    } else if (data.pagination.has_next_page && !data.pagination.has_previous_page) {
                        var button = '<div class="text-center" id="option">' +
                            '<button class="btn btn-primary" onclick="nextPage()"> > </button>' +
                        '</div>';
                        
                        $('#option-parent').append(button);
                    } else if (!data.pagination.has_next_page && data.pagination.has_previous_page) {
                        var button = '<div class="text-center" id="option">' +
                            '<button class="btn btn-primary" onclick="previousPage()"> < </button>' +
                        '</div>';
                        
                        $('#option-parent').append(button);
                    }
                }
            });
        };

    </script>
</body>

</html>
