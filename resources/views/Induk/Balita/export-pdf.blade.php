 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Data Balita Posyandu Se-Desa Renggeang</title>
  </head>
  <body>
    <h1 class="text-center">Data Balita Posyandu Se-Desa Renggeang</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">NIK</th>
            <th scope="col">NAMA</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">TANGGAL LAHIR</th>
            <th scope="col">JENIS KELAMIN</th>
            <th scope="col">NAMA IBU</th>
            <th scope="col">TEMPAT POSYANDU</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($toddlers as $key => $item)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $item->nik }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->adress }}</td>
            <td>{{ $item->date_birth }}</td>
            <td>{{ $item->gender }}</td>
            <td>{{ $item->name_mom }}</td>
            <td>{{ $item->posyandu->name }}</td>
        </tr>
        @endforeach
        </tbody>
      </table>
      <h5><i>Di Dowload tanggal : {{ date('d-m-Y') }}</i></h5>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>