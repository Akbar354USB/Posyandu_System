<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Data Ibu KB</title>
  </head>
  <body>
    <h1 class="text-center">Data Pasangan KB Posyandu Se-Desa Renggeang</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th class="text-center" scope="col">NO</th>
            <th class="text-center" scope="col">NAMA SUAMI</th>
            <th class="text-center" scope="col">NAMA ISTRI</th>
            <th class="text-center" scope="col">ALAMAT</th>
            <th class="text-center" scope="col">JENIS KONTRASEPSI</th>
            <th class="text-center" scope="col">TANGGAL PAKAI</th>
            <th class="text-center" scope="col">TANGGAL LEPAS</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($kb as $key => $item)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td align="center">{{ $item->name_husband }}</td>
            <td align="center">{{ $item->name_wife }}</td>
            <td align="center">{{ $item->adress }}</td>
            <td align="center">{{ $item->contraception }}</td>
            <td align="center">{{ $item->installed }}</td>
            <td align="center">{{ $item->uninstal }}</td>
        </tr>
        @endforeach
        </tbody>
      </table>
      <h6><i>Di Dowload tanggal : {{ date('d-m-Y') }}</i></h6>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>