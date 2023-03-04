@extends('layouts.frontbase')
@section('title', "IEEE Blog")
@section('scrollblog', 'active')
@section('content')
@section('head')

@endsection
<div id="blog" class="section lb" >
    <div class="container">
        <div class="row">
            <div class="section-title col-6">
                <h3>Blog</h3>
                <p>IEEE KBÜ üyelerinin paylaştığı blog yazıları.</p>
            </div><!-- end title -->
            <div class="col-4">
            </div>
        </div>


        <div class="row" style="margin-bottom: 30px">
            @foreach($bloglist as $rs)
            <div class="col-md-4 col-sm-6 col-lg-4">
                <div class="post-box">
                    <div class="post-thumb">
                    <a href="/blogsayfası/{{$rs->id}}"><img src="{{Storage::url($rs->image)}}" class="img-fluid" alt="post-img" /></a>
                        <div class="date">
                            <span></span>

                        </div>
                    </div>
                    <div class="post-info">
                        <h4><a href="/blogsayfası/{{$rs->id}}">{{$rs->title}}</a></h4>
                        <ul>
                            <li>by <a href="#">{{$rs->community}}</a></li>
                            <li>{{ \Carbon\Carbon::parse($rs->created_at)->format('d/m/Y')}}</li>
                        </ul>
                        <p>{{$rs->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
</div>

@endsection