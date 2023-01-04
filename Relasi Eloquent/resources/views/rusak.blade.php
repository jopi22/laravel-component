<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
    "></script>
    <title>Rusak</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">rusak</th>
                <th scope="col">id_motor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($r as $item)
                <tr>
                    <th scope="col">{{ $loop->iteration }}</th>
                    <td>{{ $item->rusak }}</td>
                    <td>{{ $item->motors->nama_motor }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
