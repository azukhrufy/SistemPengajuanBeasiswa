{{-- @extends('template')


@section('content')
<div class="table-responsive">
	<table class="table table-hover table-bordered">
	  <thead>
	    <tr>
	      <th rowspan="2">No</th>
	      <th rowspan="2">Nama</th>
	      <th rowspan="2">Deskripsi</th>
	      <th rowspan="2">Biaya Pendidikan Per Semester</th>
	      <th rowspan="2">Penghasilan Orang Tua Maksimal</th>
	      <th rowspan="2">IPK Minimal</th>
	      <th rowspan="2">Awal Pendaftaran</th>
	      <th rowspan="2">Akhir Pendaftaran</th>
	      <th rowspan="2">Awal Penerimaan</th>
	      <th rowspan="2">Akhir Penerimaan</th>	      
	      <th colspan="3">Kuota Program Studi</th>      	      
	      <th rowspan="2">Action</th>
	    </tr>
	    <tr>	    	
	    	<th>Program Studi</th>
	      	<th>Kuota</th>
	      	<th>Angkatan</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($listBeasiswa as $key => $beasiswa)	  	
	    <tr>    	
	    	<td rowspan="{{ count($beasiswa->program_studi)+1 }}">{{ ++$key }}</td>
	    	<td rowspan="{{ count($beasiswa->program_studi)+1 }}">{{ $beasiswa->nama }}</td>
	    	<td rowspan="{{ count($beasiswa->program_studi)+1 }}">{{ $beasiswa->deskripsi }}</td>
	    	<td rowspan="{{ count($beasiswa->program_studi)+1 }}">{{ $beasiswa->biaya_pendidikan_per_semester }}</td>
	    	<td rowspan="{{ count($beasiswa->program_studi)+1 }}">{{ $beasiswa->penghasilan_orang_tua_maksimal }}</td>
	    	<td rowspan="{{ count($beasiswa->program_studi)+1 }}">{{ $beasiswa->ipk_minimal }}</td>
	    	<td rowspan="{{ count($beasiswa->program_studi)+1 }}">{{ $beasiswa->awal_pendaftaran }}</td>
	    	<td rowspan="{{ count($beasiswa->program_studi)+1 }}">{{ $beasiswa->akhir_pendaftaran }}</td>
	    	<td rowspan="{{ count($beasiswa->program_studi)+1 }}">{{ $beasiswa->awal_penerimaan }}</td>
	    	<td rowspan="{{ count($beasiswa->program_studi)+1 }}">{{ $beasiswa->akhir_penerimaan }}</td>	    
	    	@if(count($beasiswa->program_studi)==0)
		    	<td rowspan="{{ count($beasiswa->program_studi)+1 }}" colspan="3">Belum Memiliki Kuota</td>	
	    	@endif
	    	
	    </tr>	    
	    	@foreach($beasiswa->program_studi as $key => $program_studi)
	    	<tr>
	    		<td>{{ $program_studi->nama }}</td>	    		
	    		<td>{{ $program_studi->pivot->kuota }}</td>
	    		<td>{{ $program_studi->pivot->angkatan }}</td>
	    		<td><a href="{{ route('mahasiswa.beasiswa.show', $beasiswa->id) }}" class="btn btn-primary">Detail Beasiswa</a></td>	    		
	    	</tr>
	    	@endforeach	    	
	    @endforeach
	  </tbody>
	</table>
</div>	
@endsection --}}

@extends('template')


@section('content')

@foreach($listBeasiswa as $key => $beasiswa)
	<div class="card" style="margin: 3%;">
		<div class="card-body">
			<h5 class="card-title"> {{ $beasiswa->nama }} </h5>
			<hr>
			<div class="row">
				<div class="col-md-3">
					<img src="{{asset('img/books.png')}}" alt="Card image cap" width="150px" style="margin:auto;">
				</div>
				<div class="col-md-9">
					<p>{{ $beasiswa->deskripsi }}</p>
					<p>Pendaftaran : {{ $beasiswa->awal_pendaftaran }} s.d. {{ $beasiswa->akhir_pendaftaran }}</p>
					<p>Biaya Pendidikan Per Semester : {{ $beasiswa->biaya_pendidikan_per_semester }}</p>
					<div class="row">
						<div class="col-md-3">
							<a href="{{ route('mahasiswa.beasiswa.show', $beasiswa->id) }}" class="btn btn-primary">Detail Beasiswa</a>
						</div>						
					</div>					
				</div>
			</div>
		</div>
	</div>
@endforeach
@endsection