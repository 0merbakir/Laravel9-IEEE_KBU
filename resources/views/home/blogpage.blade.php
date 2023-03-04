@extends('layouts.frontbase')
@section('title',$data->title)
@section('head')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{('assets')}}/css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="{{('assets')}}/css/style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{('assets')}}/css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{('assets')}}/css/custom.css">
<script src="{{('assets')}}/js/modernizr.js"></script> <!-- Modernizr -->
@endsection

@section('content')
<div id="blog" class="section lb">
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-8" style="background-color: #eeeeee;padding-top: 20px">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb bg-transparent py-0 mb-5">
                        <li class="breadcrumb-item"><a href="/">Ana Sayfa</a></li>
                        <li class="breadcrumb-item">{{$data->community}}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{$data->title}}</li>
                    </ol>
                </nav>
                <div>
                    <div style="background-color: #eeeeee">
                        <img src="{{Storage::url($data->image)}}" class="img-fluid" alt="post-img" style="width:100%" />
                    </div>
                    <div class="post-info" style="background-color: #eeeeee">
                        <h4>{{$data->title}}</h4>
                        <ul>
                            <li>by <a href="#">{{$data->community}}</a></li>
                            <li>{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y')}}</li>
                        </ul>
                        <p>{!! $data->blog !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-3" style="background-color: #eeeeee; margin-left: 10px; padding-top: 20px">
                <div>
                    <!--Son Yazılar-->
                    <h2 style="text-align: center">SON YAZILAR</h2>
                    @foreach($lastblogs as $rs)
                    <h4><a href="/blogsayfası/{{$rs->id}}">{{$rs->title}}</a></h4>
                    <li>{{ \Carbon\Carbon::parse($rs->created_at)->format('d/m/Y')}}</li>
                    <hr>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection