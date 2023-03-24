<!DOCTYPE html>
<html lang="en">

@include('parts.head')

<body class="hold-transition login-page" style="background-image: url('{{ asset('images/bg.png') }}'); background-size: cover; ">
  
    <div class="login-box">
        <div class="login-logo">
            <b style="color: white">Buku Tamu</b>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan Nambah Tamu</p>

                <form action="{{ route('storetamu') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="name" id="name" name="name" class="form-control" placeholder="Nama Tamu">
                    </div>
                    <div class="input-group mb-3">
                         <input type="date" id="date" name="date" size="70"
                                            class="form-control @error('date') is-invalid @enderror"
                                            placeholder="Tanggal" style="margin-right: 20px">
                    </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Add</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
   
    <!-- /.login-box -->

    @include('parts.script')
</body>

</html>
