@extends('template')
@section('body')
<div class="container">
    <div class="row">
        {{-- heading title  --}}
        @php
        echo $data['heading_title']
        @endphp
        @foreach ($data['params_num'] as $key=>$item)
        @php
        $a_num = '';
        if(count(str_split($data['params_num_only'][$key])) == '5'){
        $a_num = str_split($data['params_num_only'][$key],3)[1].'/';
        }elseif(count(str_split($data['params_num_only'][$key])) == '7'){
        $a_num = str_split($data['params_num_only'][$key],5)[1].'/';
        }
        elseif(count(str_split($data['params_num_only'][$key])) == '9'){
        $a_num = str_split($data['params_num_only'][$key],7)[1];
        }
        @endphp

        <div class="col-3">
            <a class="text-decoration-none fw-bold lh-3 text_color" href="{{$a_num}}">{{$item}}</a>
        </div>
        @endforeach
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <ul class="ist-group">
                @foreach ($data["final_number"] as $item)
                <li class="list-group-item final_num bg-mute">{{$item}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    {{-- Spin text  --}}
    <div class="row">
        <div class="col-12">
            @php
            echo $data["spin_text"];
            @endphp
        </div>
    </div>
</div>
@endsection