<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Invoice Peminjaman Buku</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href='{{ asset("AdminLTE/plugins/fontawesome-free/css/all.min.css") }}'>
  <!-- Theme style -->
  <link rel="stylesheet" href='{{ asset("AdminLTE/dist/css/adminlte.min.css") }}'>
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <img src='{{ asset("AdminLTE/dist/img/Logo_UPH.gif") }}' style="margin: 0 0 0 35%; width: 20%;">
          <small class="float-right">Date: 16/12/2022</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    
      <!-- /.col -->
      
      <!-- /.col -->
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr class="table-dark">
            <th>No. Buku</th>
            <th>NIM Mahasiswa</th>
            <th>Nama Mahasiswa</th>
            <th>Judul Buku</th>
            <th>Alamat Rumah</th>
            <th>Tahun Terbit</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($peminjamanbuku as $pb) 
          <tr class="table-success">
              <th>{{ $pb->no_buku }}</th>
              <th>{{ $pb->nim_mahasiswa }}</th>
              <th>{{ $pb->nama_mahasiswa }}</th>
              <th>{{ $pb->judul_buku }}</th>
              <th>{{ $pb->alamat_rumah_mahasiswa }}</th>
              <th>{{ $pb->tahun_terbit }}</th>           
          </tr>
          @endforeach
          
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
  <script>
    window.addEventListener("load", window.print());
  </script>
</body>
</html>
