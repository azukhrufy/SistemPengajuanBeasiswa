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
	@if($orangTua)
		<div class="card">
		  <div class="card-header">
		    Data Mahasiswa
		  </div>
		  <div class="card-body">
		    <blockquote class="blockquote mb-0">	      	    	
		    	<p>Nama : {{ $orangTua->nama_ayah }}</p>
		    	<p>Tempat Tanggal Lahir : {{ $orangTua->tempat_lahir_ayah }}, {{ $orangTua->tanggal_lahir_ayah }}</p>
		    	<p>Alamat Ayah : {{ $orangTua->alamat_ayah }}</p>
		    	<p>Nomor HP : {{ $orangTua->nomor_hp_ayah }}</p>
		    	<p>Pekerjaan Ayah : {{ $orangTua->pekerjaan_ayah }}</p>
		    	<p>Penghasilan Ayah : {{ $orangTua->penghasilan_ayah }}</p>
		    	<p>Pekerjaan Sambilan Ayah : {{ $orangTua->pekerjaan_sambilan_ayah }}</p>
		    	<p>Penghasilan Sambilan Ayah : {{ $orangTua->penghasilan_sambilan_ayah }}</p>
		    	<p>Nama : {{ $orangTua->nama_ibu }}</p>
		    	<p>Tempat Tanggal Lahir : {{ $orangTua->tempat_lahir_ibu }}, {{ $orangTua->tanggal_lahir_ibu }}</p>
		    	<p>Alamat Ibu : {{ $orangTua->alamat_ibu }}</p>
		    	<p>Nomor HP : {{ $orangTua->nomor_hp_ibu }}</p>
		    	<p>Pekerjaan Ibu : {{ $orangTua->pekerjaan_ibu }}</p>
		    	<p>Penghasilan Ibu : {{ $orangTua->penghasilan_ibu }}</p>
		    	<p>Pekerjaan Sambilan Ibu : {{ $orangTua->pekerjaan_sambilan_ibu }}</p>
		    	<p>Penghasilan Sambilan Ibu : {{ $orangTua->penghasilan_sambilan_ibu }}</p>
		    	<a href="{{ route('mahasiswa.orang_tua.edit') }}" class="btn btn-primary">Edit Data Orang Tua</a>
		    </blockquote>
		  </div>
		</div>		
	@else
		<div class="alert alert-danger col-md-12">
			Belum menambahkan data orang tua
		</div>
		<a href="{{ route('mahasiswa.orang_tua.create') }}" class="btn btn-primary">Tambahkan Data Orang Tua</a>		
	@endif
</div>
@endsection
