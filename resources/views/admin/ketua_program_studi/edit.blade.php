@extends('template')

@section('stylesheets')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>
@endsection

@section('content')
<br>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit</h5>
            <hr>
            <br>
            <form method="POST" action="{{ route('admin.ketua_program_studi.update', $ketuaProgramStudi->id) }}">
                @method('PATCH')
                @csrf            
                <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right">{{ __('NIP') }}</label>
                    <div class="col-md-6">
                        <input id="nip" type="text" class="form-control{{ $errors->has('nip') ? ' is-invalid' : '' }}" name="nip" value="{{ $ketuaProgramStudi->nip }}" required autofocus>
                        @if ($errors->has('nip'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nip') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right">{{ __('Nama') }}</label>
                    <div class="col-md-6">
                        <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ $ketuaProgramStudi->nama }}" required autofocus>
                        @if ($errors->has('nama'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right">{{ __('Program Studi') }}</label>
                    <div class="col-md-6">
                        <select class="form-control select2" name="program_studi_id">
                            @foreach($listProgramStudi as $programStudi)
                                <option value="{{$programStudi->id}}">{{$programStudi->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <hr>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('javascripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script>
      $(document).ready(function() {
        $('.select2').select2();
      });
  </script>
@endsection