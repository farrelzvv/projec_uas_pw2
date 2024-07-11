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
                        <h1>Edit Kabupaten Kota</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Kabupaten Kota</li>
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
                    <h3 class="card-title">Edit Kabupaten Kota</h3>

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
                    <form id="editProvinceForm" action="{{ route('kabkota_update', $kabkota->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" value="{{ $kabkota->nama }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="latitude">Latitude:</label>
                            <input type="text" name="latitude" value="{{ $kabkota->latitude }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="longitude">Longitude :</label>
                            <input type="text" name="longitude" value="{{ $kabkota->longitude }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="provinsi id">Provinsi ID:</label>
                            <input type="text" name="provinsi id" value="{{ $kabkota->provinsi_id }}" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
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
