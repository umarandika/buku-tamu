<!DOCTYPE html>
<html lang="en">

@include('parts.head')

<body class="hold-transition login-page" style="background-color: #EEF5FF;">
   
  
    <div class="login-box">
        <div class="login-logo">
        <h2 class="m-0 title" style="color: black">Buku Tamu</h2 >
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan Sign In</p>

                <form action="{{ route('postlogin') }}" method="get">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div>
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    
                    
                </form>
                <p class="text-center pt-2 mb-0"><small>Bukan Admin? <a href="{{route('user')}}">Log In sebagai Tamu</a></small></p>
            </div>
        </div>
    </div>
    @include('parts.style')
    @include('parts.script')
</body>

</html>
