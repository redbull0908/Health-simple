@extends('layouts.index' ,['title'=>'Наши специалисты'])
@section('content')
    <div class="container">
        @foreach($doctors as $doc)
            <div class="card">
                <div class="card-header">
                    {{$doc->full_name}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <img id="doc_img" src="{{'./image/doctors/'.$doc->img}}" alt="not found"/>
                        </div>
                        <div class="col-sm">
                            <p class="card-text">{{$doc->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
