@extends('pendaftarans.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PPDB SMK WIKRAMA</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pendaftarans.create') }}"> Create New Product</a>
                <br><br>
            </div>
        </div>
    </div>
   
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- form validasi -->
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Kelas</th>
            <th>Jurusan</th>
          
            <th width="280px">Action</th>
        </tr>

  
<!-- /form validasi -->
   
        @foreach ($pendaftarans as $pendaftaran)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pendaftaran->nis }}</td>
            <td>{{ $pendaftaran->nama }}</td>
            <td>{{ $pendaftaran->jns_kelamin }}</td>
            <td>{{ $pendaftaran->tmp_lahir }}</td>
            <td>{{ $pendaftaran->tgl_lahir }}</td>
            <td>{{ $pendaftaran->alamat }}</td>
            <td>{{ $pendaftaran->asal_sekolah}}</td>
            <td>{{ $pendaftaran->kelas}}</td>
            <td>{{ $pendaftaran->jurusan}}</td>
        
            <td>
                <form action="{{ route('pendaftarans.destroy',$pendaftaran->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pendaftarans.show',$pendaftaran->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pendaftarans.edit',$pendaftaran->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $pendaftarans->links() !!}
      
@endsection