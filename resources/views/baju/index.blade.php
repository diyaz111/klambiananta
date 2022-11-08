@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable({
            "iDisplayLength": 10
        });

    });
</script>
@stop
@extends('layouts.app')

@section('content')
<div class="row">

    <div class="col-lg-2">
        <a href="{{ route('baju.create') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah baju</a>
    </div>

    <div class="col-lg-12">
        @if (Session::has('message'))
        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
        @endif
    </div>
</div>
<div class="row" style="margin-top: 20px;">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title pull-left">Data baju</h4>
                <div class="table-responsive">
                    <table class="table table-striped" id="table">
                        <thead>
                            <tr>
                                <th>
                                    Gambar1
                                </th>
                                <th>
                                    Nama
                                </th>
                                <th>
                                    Diskon
                                </th>
                                <th>
                                    Harga
                                </th>
                                <th>
                                    Total
                                </th>
                                <th>
                                    Gambar 2
                                </th>
                                <th>
                                    Gambar 3
                                </th>
                                <th>
                                    Gambar 4
                                </th>
                                <th>
                                    Gambar 5
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            @php
                            $diskon = $data->harga * $data->diskon/ 100;
                            $total = $data->harga - $diskon;
                            @endphp
                            <tr>
                                <td class="py-1">
                                    @if($data->gambar1)
                                    <img src="{{url('images/baju/gambar1/'. $data->gambar1)}}" alt="image" style="margin-right: 10px;" />
                                    @else
                                    <img src="{{url('images/baju/default.png')}}" alt="image" style="margin-right: 10px;" />
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('baju.show', $data->id)}}">
                                        {{$data->nama}}
                                    </a>
                                </td>
                                @if($data->diskon)
                                <td>
                                    {{$data->diskon}}%
                                </td>
                                @else
                                <td>
                                </td>
                                @endif
                                <td>
                                    Rp.{{number_format ($data->harga)}}
                                </td>
                                <td>
                                    Rp.{{number_format ($total)}}
                                </td>
                                <td>
                                    @if($data->gambar2)
                                    <img src="{{url('images/baju/gambar2/'. $data->gambar2)}}" alt="image" style="margin-right: 10px;" />
                                    @else
                                    <img src="{{url('images/buku/default.png')}}" alt="image" style="margin-right: 10px;" />
                                    @endif
                                </td>
                                <td>
                                    <img src="{{url('images/baju/gambar3/'. $data->gambar3)}}" alt="image" style="margin-right: 10px;" />
                                </td>
                                <td>
                                    <img src="{{url('images/baju/gambar4/'. $data->gambar4)}}" alt="image" style="margin-right: 10px;" />
                                </td>
                                <td>
                                    <img src="{{url('images/baju/gambar5/'. $data->gambar5)}}" alt="image" style="margin-right: 10px;" />
                                </td>

                                <td>
                                    <div class="btn-group dropdown">
                                        <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                                            <a class="dropdown-item" href="{{route('baju.edit', $data->id)}}"> Edit </a>
                                            <form action="{{ route('baju.destroy', $data->id) }}" class="pull-left" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- {!! $datas->links() !!} --}}
            </div>
        </div>
    </div>
</div>
@endsection
