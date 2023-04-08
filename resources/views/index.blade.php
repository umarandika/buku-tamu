<!DOCTYPE html>
<html lang="en">

@include('parts.head')

<body class="hold-transition sidebar-mini layout-fixed" style=" ">
    <div class="wrapper" style="padding: 40px">


        <div class="content" >

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 title" style="color: black">Buku Tamu</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <form action="{{ route('logout') }}" method="get">
                                <button type="submit" class="btn btn-primary" style="background-color: #3466FF">Log Out</button>
                                {{--<a href="#">Logout</a> --}}
                            </form>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content" >
                <div class="container-fluid" style="padding: 15px">
                <div>
                                <form action="{{ route('store') }}" method="post">
                                    @csrf
                                    <div class="form-group" style="display:inline-block">
                                        <input type="text" id="name" name="name" size="30"
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Nama Tamu" style="margin-right: 20px">

                                    </div>
                                    {{-- bbj --}}
                                    <div class="form-group" style="display:inline-block">
                                        <input type="date" id="date" name="date" size="70"
                                            class="form-control @error('date') is-invalid @enderror"
                                            placeholder="Tanggal" style="margin-right: 20px">

                                    </div>
                                    <div class="form-group" style="display:inline-block">
                                        <button type="submit" class="btn btn-logout" style="background-color: #BDCCFD">Tambah</button>
                                        {{-- <a href="#" class="btn btn-primary"> Tambah Data <i
                                                class="fas fa-plus-square"></i></a> --}}
                                    </div>

                                </form>
                            </div>
                    <div class="card">              
                        <div class="card-body">
                        <!-- <div class="form-group" style="display:inline-block">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."
                                            class="form-control"
                                            placeholder="Search" style="margin-right: 20px">
                       </div> -->
                                           
                            <table id="bukutamu" class="table table-hover">
                                <thead style="border: none;">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th class="no-sort">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tamu as $index => $item)
                                        <tr>
                                            <td style="width: 20px; text-align:center">{{ $index + 1 }}</td>
                                            <td class="index-name">{{ $item->name }}</td>
                                            <td class="index-date --bs-success-bg-subtle">{{ date('d-m-Y', strtotime($item->date)) }}</td>
                                            <td style="width: 20px; text-align:center">
                                            <a href="{{route('delete-guest', $item->id)}}"><i
                                                            class="fa fa-times" aria-hidden="true"
                                                            style="color: rgb(213, 1, 1);"></i></a>
                                            

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                     

                    </div>
            </section>
   
        </div>


    </div>
    
    @include('parts.style')
    @include('parts.script')
</body>

</html>
