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
                        <h1>Tabel Pembina</h1>
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
                    <h3 class="card-title">Daftar Pembina</h3>

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
                    <h1 class="my-4">Daftar Pembina</h1>
                    <a href="{{ route('pembina_create') }}" class="btn btn-primary">Tambah Pembina</a>
                    <table class="table table-bordered">
                        <thead class="table-secondary">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                               <th>Gender</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Keahlian</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembina as $pem)
                                <tr>
                                    <td>{{ $pem->id }}</td>
                                    <td>{{ $pem->nama }}</td>
                                    <td>{{ $pem->gender }}</td>
                                    <td>{{ $pem->tgl_lahir }}</td>
                                    <td>{{ $pem->tmp_lahir }}</td>
                                    <td>{{ $pem->keahlian }}</td>
                                    <td>
                                        <a href="{{ route('pembina_show', $pem->id) }}" class="btn btn-info btn-sm">Read</a>
                                        <a href="{{ route('pembina_edit', $pem->id) }}" class="btn btn-warning btn-sm">Update</a>
                                        <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $pem->id }})">Delete</button>
                                        <form id="delete-form-{{ $pem->id }}" action="{{ route('pembina_destroy', $pem->id) }}" method="POST" style="display: none;">
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
