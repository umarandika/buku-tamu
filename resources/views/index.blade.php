<!DOCTYPE html>
<html lang="en">

@include('parts.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('app/dist') }}/img/AdminLTELogo.png" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Buku Tamu</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <a href="{{ route('logout') }}">Logout</a>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header" style="background-color:rgb(239, 239, 239)">
                            <div>
                                <form action="{{ route('store') }}" method="post">
                                    @csrf
                                    <div class="form-group" style="display:inline-block">
                                        <input type="text" id="name" name="name" size="30"
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Nama Tamu" style="margin-right: 20px">

                                    </div>
                                    <div class="form-group" style="display:inline-block">
                                        <input type="date" id="date" name="date" size="70"
                                            class="form-control @error('date') is-invalid @enderror"
                                            placeholder="Tanggal" style="margin-right: 20px">

                                    </div>
                                    <div class="form-group" style="float: right;">
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                        {{-- <a href="#" class="btn btn-success"> Tambah Data <i
                                                class="fas fa-plus-square"></i></a> --}}
                                    </div>

                                </form>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tamu as $index => $item)
                                        <tr>
                                            <td style="width: 20px; text-align:center">{{ $index + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->date }}</td>
                                            <td style="width: 20px; text-align:center">
                                                <form id="delete_tamu" action="{{ route('delete', $item->id) }}"
                                                    method="get">
                                                    <a href="javascript:{}"
                                                        onclick="document.getElementById('delete_tamu').submit();"><i
                                                            class="fa fa-trash" aria-hidden="true"
                                                            style="color: rgb(213, 1, 1);"></i></a>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->

                    </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->

    @include('parts.script')
</body>

</html>
