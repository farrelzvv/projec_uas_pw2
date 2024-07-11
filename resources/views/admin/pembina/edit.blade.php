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
                        <h1>Edit Pembina</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Pembina</li>
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
                    <h3 class="card-title">Edit Pembina</h3>

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
                    <form id="editProvinceForm" action="{{ route('pembina_update', $pembina->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" value="{{ $pembina->nama }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <input type="text" name="gender" value="{{ $pembina->gender }}" maxlength="1" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir">Tanggl Lahir :</label>
                            <input type="date" name="tgl_lahir" value="{{ $pembina->tgl_lahir }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="tmp_lahir">Tempat Lahir:</label>
                            <input type="text" name="tmp_lahir" value="{{ $pembina->tmp_lahir}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="keahlian">Keahlian:</label>
                            <input type="text" name="keahlian" value="{{ $pembina->keahlian}}" class="form-control">
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
