@include('header')
@include('sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Provinsi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail Provinsi</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Provinsi</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode">ID:</label>
                        <p>{{ $provinsi->id }}</p>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <p>{{ $provinsi->nama }}</p>
                    </div>
                    <div class="form-group">
                        <label for="tmp_lahir">Latitude:</label>
                        <p>{{ $provinsi->latitude }}</p>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Longitude:</label>
                        <p>{{ $provinsi->longitude }}</p>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Longitude:</label>
                        <p>{{ $provinsi->longitude }}</p>
                    </div>
                    </div>
                    <a href="{{ route('provinsi') }}" class="btn btn-primary">Back</a>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('footer')