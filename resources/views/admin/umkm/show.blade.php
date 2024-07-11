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
                        <h1>Detail Umkm</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail Umkm</li>
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
                    <h3 class="card-title">Detail Umkm</h3>

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
                        <p>{{ $umkm->id }}</p>
                    </div>
                    <div class="form-group">
                        <label for="kabkota_id">Kabupaten Kota ID:</label>
                        <p>{{ $umkm->kabkota_id }}</p>
                    </div>
                    <div class="form-group">
                        <label for="pembina_id">Pembina ID:</label>
                        <p>{{ $umkm->pembina_id }}</p>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <p>{{ $umkm->nama }}</p>
                    </div>
                    <div class="form-group">
                        <label for="modal">Modal:</label>
                        <p>{{ $umkm->modal }}</p>
                    </div>
                    <div class="form-group">
                        <label for="pemilik">Pemilik:</label>
                        <p>{{ $umkm->pemilik }}</p>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <p>{{ $umkm->alamat }}</p>
                    </div>
                    <div class="form-group">
                        <label for="website">Website:</label>
                        <p>{{ $umkm->website }}</p>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <p>{{ $umkm->email }}</p>
                    </div>
                    <div class="form-group">
                        <label for="kategori_umkm_id">Kategori Umkm ID:</label>
                        <p>{{ $umkm->kategori_umkm_id }}</p>
                    </div>
                    </div>
                    <a href="{{ route('umkm') }}" class="btn btn-primary">Back</a>
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