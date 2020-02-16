@extends('template')

@section('content')
<br>
<div class="container-fluid">
	@if (\Session::has('success'))
	<div class="row">
	    <div class="alert alert-success col-md-12">
	        <p>{{ \Session::get('success') }}</p>
	    </div>
	</div>
	@elseif (\Session::has('fail'))
	<div class="row">
	    <div class="alert alert-danger col-md-12">
	        <p>{{ \Session::get('fail') }}</p>
	    </div>
	</div>
	@endif
	@if($kelengkapanDataMahasiswa)
		<div class="card">
		  <div class="card-header">
		    Data Mahasiswa
		  </div>
		  <div class="card-body">
		    <blockquote class="blockquote mb-0">	      	    	
		    	<p>NIM : {{ $mahasiswa->nim }}</p>
		    	<p>Nama : {{ $mahasiswa->nama }}</p>
		    	<p>Tempat Tanggal Lahir : {{ $mahasiswa->tempat_lahir }}, {{ $mahasiswa->tanggal_lahir }}</p>
		    	<p>Alamat : {{ $mahasiswa->alamat }}, Kode Pos {{ $mahasiswa->kode_pos }}, {{ $mahasiswa->kota }}</p>
		    	<p>Nomor HP : {{ $mahasiswa->nomor_hp }}</p>
		    	<p>Email : {{ $mahasiswa->email }}</p>		    	
		    	<p>Gender : {{ $mahasiswa->gender=="l" ? "Laki-laki" : "Perempuan" }}</p>
		    	<p>Rekening : {{ $mahasiswa->nama_bank }}</p>
		    	<p>Nomor Rekening : {{ $mahasiswa->nomor_rekening }}</p>		    	
		    	<a href="{{ route('mahasiswa.edit') }}" class="btn btn-primary">Edit Data Mahasiswa</a>
		    </blockquote>
		  </div>
		</div>
	@else
		<div class="alert alert-danger col-md-12">
			Data Mahasiswa Belum Lengkap
		</div>
		<a href="{{ route('mahasiswa.edit') }}" class="btn btn-primary">Lengkapi Data Mahasiswa</a>
	@endif
</div>
@endsection