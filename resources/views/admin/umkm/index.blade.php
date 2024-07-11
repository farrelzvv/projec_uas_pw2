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
                        <h1>Tabel Umkm</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Kelompok 6</li>
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
                    <h3 class="card-title">Daftar Umkm</h3>

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
                    <h1 class="my-4">Daftar Umkm</h1>
                    <a href="{{ route('umkm_create') }}" class="btn btn-primary">Tambah Umkm</a>
                    <table class="table table-bordered">
                        <thead class="table-secondary">
                            <tr>
                                <th>ID</th>
                                <th>Kabupaten Kota ID</th>
                                <th>Pembina ID</th>
                                <th>Nama </th>
                                <th>Modal</th>
                                <th>Pemilik</th>
                                <th>Alamat</th>
                                <th>Website</th>
                                <th>Email</th>
                                <th>Kategori Umkm ID</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($umkm as $umkms)
                                <tr>
                                    <td>{{ $umkms->id }}</td>
                                    <td>{{ $umkms->kabkota_id }}</td>
                                    <td>{{ $umkms->pembina_id }}</td>
                                    <td>{{ $umkms->nama }}</td>
                                    <td>{{ $umkms->modal }}</td>
                                    <td>{{ $umkms->pemilik }}</td>
                                    <td>{{ $umkms->alamat }}</td>
                                    <td>{{ $umkms->website }}</td>
                                    <td>{{ $umkms->email }}</td>
                                    <td>{{ $umkms->kategori_umkm_id }}</td>
                                    <td>
                                        <a href="{{ route('umkm_show', $umkms->id) }}" class="btn btn-info btn-sm">Read</a>
                                        <a href="{{ route('umkm_edit', $umkms->id) }}" class="btn btn-warning btn-sm">Update</a>
                                        <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $umkms->id }})">Delete</button>
                                        <form id="delete-form-{{ $umkms->id }}" action="{{ route('umkm_destroy', $umkms->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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

<!-- Script untuk menampilkan SweetAlert saat menghapus kolom -->
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data ini akan dihapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        });
    }
</script>
