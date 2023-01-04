<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
"></script>
	<title>Pengeluaran</title>
</head>
<body><table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">tgl</th>
      <th scope="col">barang</th>
      <th scope="col">truk</th>
    </tr>
  </thead>
  <tbody>
    @foreach($g as $barang => $r)
    <tr>
      <th scope="col">{{$loop->iteration}}</th>
      <td>{{$r->tgl}}</td>
      <td>{{$r->barang}}</td>
      <td>{{$r->id_truk}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
	
</body>
</html>