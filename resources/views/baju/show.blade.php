@section('js')

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>

<script type="text/javascript">
        function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })
        </script>
@stop

@extends('layouts.app')

@section('content')

<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Detail <b>{{$data->nama}}</b> </h4>
                      <form class="forms-sample">

                        <div class="form-group">
                            <div class="col-md-6">
                                <img width="200" height="200" @if($data->gambar1) src="{{ asset('images/baju/gambar1/'.$data->gambar1) }}" @endif />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <img width="200" height="200" @if($data->gambar2) src="{{ asset('images/baju/gambar2/'.$data->gambar2) }}" @endif />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <img width="200" height="200" @if($data->gambar3) src="{{ asset('images/baju/gambar3/'.$data->gambar3) }}" @endif />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <img width="200" height="200" @if($data->gambar4) src="{{ asset('images/baju/gambar4/'.$data->gambar4) }}" @endif />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <img width="200" height="200" @if($data->gambar5) src="{{ asset('images/baju/gambar5/'.$data->gambar5) }}" @endif />
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">nama</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ $data->nama }}" readonly="">
                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
                            <label for="harga" class="col-md-4 control-label">Harga</label>
                            <div class="col-md-6">
                                <input id="harga" type="number" class="form-control" name="harga" value="{{ $data->harga }}" readonly>
                                @if ($errors->has('harga'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('harga') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('diskon') ? ' has-error' : '' }}">
                            <label for="diskon" class="col-md-4 control-label">Diskon</label>
                            <div class="col-md-6">
                                <input id="diskon" type="number" maxlength="4" class="form-control" name="diskon" value="{{ $data->diskon }}" readonly>
                                @if ($errors->has('diskon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('diskon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('isi') ? ' has-error' : '' }}">
                            <label for="isi" class="col-md-4 control-label">isi</label>
                            <div class="col-md-12">
                                <input id="isi" type="text" class="form-control" name="isi" value="{{ old('isi') }}" readonly="">
                                @if ($errors->has('isi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <a href="{{route('baju.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
@endsection
