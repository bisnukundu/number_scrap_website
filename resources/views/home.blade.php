@extends('template')
@section('body')
<div class="container">
    <div class="row">
        <h2 class="fw-bolder my-5 py-3 text-center border-bottom">PREFIJOS POR PROVINCIAS DE ESPAÑA</h2>
        @for($i =0; $i<count($data["prefijo_index"]);$i++) <div class="col-3">
            <a class="text-decoration-none text-dark fw-bold lh-3"
                href="{{$data["prefijo_index_num"][$i]}}/">{{$data["prefijo_index"][$i]}}</a>
    </div>
    @endfor
    <div class="row">
        
        <h2 class="fw-bolder my-5 py-3 text-center border-bottom">PREFIJOS POR PROVINCIAS DE ESPAÑA</h2>

        @for($i =0; $i<count($data["prefijo_movil"]);$i++) <div class="col-12">
            <a class="text-decoration-none text-dark fw-bold lh-3"
                href="{{$data["prefijo_movil_num"][$i]}}">{{$data["prefijo_movil"][$i]}}
            </a>
    </div>
    @endfor
</div>
</div>
{{-- SPIN Text  --}}
<div class="row">
    
</div>
</div>
@endsection