@extends('layouts.index' ,['title'=>'Услуги'])
@section('content')
<div class="container">

    @foreach($services_category as $category)
        <div class="card">
            <div class="card-header" id="logo">
                {{$category->name}}
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <img id="category_img" src="{{'./image/category/'.$category->img}}" alt="not found">
                    </div>
                    <div id="sub_category" class="col-sm">
                        <p class="card-text">{{$category->description}}</p>
                        <a class="btn btn-light" href="{{route('service',['id'=> $category->id])}}">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
</div>
@endsection

