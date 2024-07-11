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
                        <h1>Edit Umkm</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Umkm</li>
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
                    <h3 class="card-title">Edit Umkm</h3>

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
                    <form id="editProvinceForm" action="{{ route('umkm_update', $umkm->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="kabkota_id">Kabupaten Kota ID:</label>
                            <input type="number" name="kabkota_id" value="{{ $umkm->kabkota_id }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pembina_id">Pembina ID:</label>
                            <input type="number" name="pembina_id" value="{{ $umkm->pembina_id }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" value="{{ $umkm->nama }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="modal">Modal:</label>
                            <input type="number" name="modal" value="{{ $umkm->modal }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pemilik">Pemilik:</label>
                            <input type="text" name="pemilik" value="{{ $umkm->pemilik }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" name="alamat" value="{{ $umkm->alamat }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="text" name="website" value="{{ $umkm->website }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" value="{{ $umkm->email }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="kategori_umkm_id">Kategori Umkm ID:</label>
                            <input type="number" name="kategori_umkm_id" value="{{ $umkm->kategori_umkm_id }}" class="form-control">
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
