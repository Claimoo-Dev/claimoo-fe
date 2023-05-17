<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon" />
    <title>Claimoo - Image</title>

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-voxo/css/vendors/font-awesome.css') }}">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-voxo/css/vendors/bootstrap.css') }}">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-voxo/style.css') }}">
</head>

<body>
    <div class="container">
        <img src="{{ asset('images/' . $imageFileSource) }}" class="img-thumbnail" alt="">

        <form action="{{ route('collection-store-description') }}" method="post">
            @csrf
            <div class="mt-3 mb-3">
                <label class="form-label">Body</label>
                <div class="form-check">
                    <input class="form-check-input" name="descriptions[]" type="checkbox" value="Body Gores" id="bodyGores">
                    <label class="form-check-label" for="bodyGores">
                        Gores
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="descriptions[]" type="checkbox" value="Body Penyok" id="bodyPenyok">
                    <label class="form-check-label" for="bodyPenyok">
                        Penyok
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="descriptions[]" type="checkbox" value="Body Lecet" id="bodyLecet">
                    <label class="form-check-label" for="bodyLecet">
                        Lecet
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Kaca</label>
                <div class="form-check">
                    <input class="form-check-input" name="descriptions[]" type="checkbox" value="Kaca Retak" id="kacaRetak">
                    <label class="form-check-label" for="kacaRetak">
                        Retak
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="descriptions[]" type="checkbox" value="Kaca Pecah" id="kacaPecah">
                    <label class="form-check-label" for="kacaPecah">
                        Pecah
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Lampu</label>
                <div class="form-check">
                    <input class="form-check-input" name="descriptions[]" type="checkbox" value="Lampu Retak" id="lampuRetak">
                    <label class="form-check-label" for="lampuRetak">
                        Retak
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="descriptions[]" type="checkbox" value="Lampu Pecah" id="lampuPecah">
                    <label class="form-check-label" for="lampuPecah">
                        Pecah
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Spion</label>
                <div class="form-check">
                    <input class="form-check-input" name="descriptions[]" type="checkbox" value="Spion Patah" id="spionPatah">
                    <label class="form-check-label" for="spionPatah">
                        Patah
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="descriptions[]" type="checkbox" value="Spion Gores" id="spionGores">
                    <label class="form-check-label" for="spionGores">
                        Gores
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Velg</label>
                <div class="form-check">
                    <input class="form-check-input" name="descriptions[]" type="checkbox" value="Velg Gores" id="velgGores">
                    <label class="form-check-label" for="velgGores">
                        Gores
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="descriptions[]" type="checkbox" value="Velg Penyok" id="velgPenyok">
                    <label class="form-check-label" for="velgPenyok">
                        Penyok
                    </label>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="damage_severity" class="form-control" id="damageSeverity" placeholder="10">
                <label for="damageSeverity">% Tingkat Keparahan Kerusakan</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="estimated_cost" class="form-control" id="estimatedCost" placeholder="10.000">
                <label for="estimatedCost">Estimasi Biaya Perbaikan</label>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
        </form>
    </div>

    <script src="{{ asset('assets-voxo/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets-voxo/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
