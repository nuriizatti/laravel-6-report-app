<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

  <!-- Navbar -->
@include('admin/header')
  <!--navbar --> 
  <!--sidebar-->
@include('admin/sidebar')
  <!--sidebar-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Instansi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Beranda</li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

  <a href="/instansi/tambah"> + Tambah Instansi Baru</a>
  
  <br/>
  <br/>

  <table border="1" class="table table-dark">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>About</th>
      <th>Alamat</th>
      <th>Status</th>
    </tr>
    @foreach($instansi as $i)
    <tr>
      <td>{{ $i->id }}</td>
      <td>{{ $i->name}}</td>
      <td>{{ $i->email}}</td>
      <td>{{ $i->alamat}}</td>
      <td>{{ $i->status}}</td>
      <td>
        <a class="btn btn-warning btn-sm" href="/instansi/edit/{{ $i->id }}">Edit</a>
        <a class="btn btn-danger btn-sm" href="/instansi/hapus/{{ $i->id }}">Hapus</a>
      </td>
    </tr>
  
    @endforeach
  </table>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- /.control-sidebar -->

 @incude('admin/footer')


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
