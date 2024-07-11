@include('header')
@include('sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Menambahkan Umkm</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Menambahkan Umkm</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Menambahkan Umkm</h3>
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
                    <form id="createKabkotaForm" action="{{ route('umkm_store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="kabkota_id">Kabupaten Kota ID:</label>
                            <input type="number" class="form-control" id="kabkota_id" name="kabkota_id" required>
                        </div>
                        <div class="form-group">
                            <label for="pembina_id">Pembina ID:</label>
                            <input type="number" class="form-control" id="pembina_id" name="pembina_id" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="modal">Modal:</label>
                            <input type="number" class="form-control" id="modal" name="modal" required>
                        </div>
                        <div class="form-group">
                            <label for="pemilik">Pemilik:</label>
                            <input type="text" class="form-control" id="pemilik" name="pemilik" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="text" class="form-control" id="website" name="website" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="kategori_umkm_id">Kategori Umkm ID:</label>
                            <input type="number" class="form-control" id="kategori_umkm_id" name="kategori_umkm_id" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
</div>

@include('footer')
