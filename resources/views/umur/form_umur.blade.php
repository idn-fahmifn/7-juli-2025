<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Umur</title>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container mt-4">
        <div class="card p-4 shadow-lg">
            <div class="card-title h4">
                Halaman Form Umur
            </div>
            <div class="text-muted">Masukan nama dan umur anda dibawah : </div>
            <form action="{{route('proses')}}" method="post">
                
                {{-- keamanan untuk generate token. --}}
                @csrf
                <div class="form-group mt-3">
                    <label for="">Nama anda : </label>
                    <input type="text" name="name" required class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="">Umur anda : </label>
                    <input type="number" name="age" required class="form-control">
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Masuk</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
