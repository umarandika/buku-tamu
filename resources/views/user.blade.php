<!DOCTYPE html>
<html lang="en">

@include('parts.head')

<body class="hold-transition login-page" style=" background-color: #EEF5FF">
  
    <div class="login-box">
        <div class="login-logo">
        <h2 class="m-0 title" style="color: black">Buku Tamu</h2 >
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan Nambah Tamu</p>

                <form action="{{ route('storetamu') }}" method="post">
                    @csrf
                    <div class="form-group">
                                        <input type="name" id="name" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Nama Tamu" >

                                    </div>

                    <div class="form-group">
                                        <input type="date" id="date" name="date" 
                                            class="form-control @error('date') is-invalid @enderror"
                                            placeholder="Tanggal" >

                                    </div>
                     
                  
                        <!-- /.col -->
                        <div>
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
    @include('parts.style') 
    @include('parts.script')
</body>

</html>
