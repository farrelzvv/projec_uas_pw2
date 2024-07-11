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
                        <h1>Edit Provinsi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Provinsi</li>
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
                    <h3 class="card-title">Edit Provinsi</h3>

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
                    <form id="editProvinceForm" action="{{ route('provinsi_update', $provinsi->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" value="{{ $provinsi->nama }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="ibukota">Ibukota:</label>
                            <input type="text" name="ibukota" value="{{ $provinsi->ibukota }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="latitude">Latitude:</label>
                            <input type="text" name="latitude" value="{{ $provinsi->latitude }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="longitude">Longitude :</label>
                            <input type="text" name="longitude" value="{{ $provinsi->longitude }}" class="form-control">
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

<!-- Sertakan SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Script untuk menampilkan SweetAlert saat menyimpan data -->
<script>
    document.getElementById('editProvinceForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah submit default form

        // Lakukan submit form menggunakan fetch API
        fetch(this.action, {
            method: this.method,
            body: new FormData(this),
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    title: 'Berhasil!',
                    text: data.message,
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = "{{ route('provinsi') }}"; // Redirect setelah klik OK
                });
            } else {
                Swal.fire({
                    title: 'Gagal!',
                    text: 'Terjadi kesalahan saat menyimpan data.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        })
        .catch(error => {
            Swal.fire({
                title: 'Error!',
                text: 'Terjadi kesalahan saat menghubungi server.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        });
    });
</script>
