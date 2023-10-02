<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MuchMovies</title>




    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>


    @foreach ($data as $item)
        <div class="container" style="margin-top: 25px;">
            <h3>{{ $item->series_name }}</h3>
            <p>{{ $item->description }}</p>
            <h5>{{ Carbon\Carbon::parse($item->release_year)->format('Y-m-d') }}</h5>
            <img src="{{ $item->img }}">
            <a class="btn btn-dark" href="{{ $item->trailer }}">Trailer</a>
        </div>
    @endforeach



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
