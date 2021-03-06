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
	<br>
	<div class="row justify-content-center">
		<div class="col-lg-3">
			<div class="card" style="border-radius: 30px; margin-bottom: 10px;">
				<br>
				<img src="{{asset('img/list.png')}}" alt="Card image cap" width="200px" height="200px" style="margin:auto;">
				<div class="card-body">
					<h5 class="card-title" style="text-align: center;">Manajemen Beasiswa</h5>
					<a href="{{ route('pembantu_direktur_3.beasiswa') }}" class="btn btn-primary">Manajemen Beasiswa</a>
				</div>
			</div>
		</div>	
	</div>
</div>
@endsection
