@extends('template')
@section('content')
<br>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Saudara Mahasiswa') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('mahasiswa.saudara.update', $saudaraMahasiswa->id) }}">
                        @csrf                           
                        @method('PATCH')     
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ $saudaraMahasiswa->nama }}" required autofocus>
                                @if ($errors->has('nama'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Usia') }}</label>
                            <div class="col-md-6">
                                <input id="usia" type="number" class="form-control{{ $errors->has('usia') ? ' is-invalid' : '' }}" name="usia" value="{{ $saudaraMahasiswa->usia }}" required autofocus>
                                @if ($errors->has('usia'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('usia') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>                    
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Adik/Kakak') }}</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status_saudara" id="status_saudara" value="Kakak"{{ $saudaraMahasiswa->status_saudara=="Kakak" ? "checked" :""}}>
                                  <label class="form-check-label">
                                    Kakak
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status_saudara" id="status_saudara" value="Adik"{{ $saudaraMahasiswa->status_saudara=="Adik" ? "checked":"" }}>
                                  <label class="form-check-label">
                                    Adik
                                  </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Bekerja/Belum bekerja') }}</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status_pekerjaan" id="status_pekerjaan" value="Bekerja"{{ $saudaraMahasiswa->status_pekerjaan=="Bekerja" ? "checked":"" }}>
                                  <label class="form-check-label">
                                    Bekerja
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status_pekerjaan" id="status_pekerjaan" value="Belum bekerja"{{ $saudaraMahasiswa->status_pekerjaan=="Belum bekerja" ? "checked":"" }}>
                                  <label class="form-check-label">
                                    Belum bekerja
                                  </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Menikah/Belum menikah') }}</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status_pernikahan" id="status_pernikahan" value="Menikah"{{ $saudaraMahasiswa->status_pernikahan=="Menikah" ? "checked" :""}}>
                                  <label class="form-check-label">
                                    Menikah
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status_pernikahan" id="status_pernikahan" value="Belum menikah"{{ $saudaraMahasiswa->status_pernikahan=="Belum menikah" ? "checked":"" }}>
                                  <label class="form-check-label">
                                    Belum menikah
                                  </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
