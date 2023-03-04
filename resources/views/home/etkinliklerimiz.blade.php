@extends('layouts.frontbase')
@section('title', "Etkinliklerimiz")
@section('scrolletkinlikler', 'active')
@section('content')

    <div id="blog" class="section lb">
        <div class="container">
            <div class="section-title">
                <h3>Etkinliklerimiz</h3>
                <p>Karabük Üniversitesi İEEE kulübünün düzenlemiş olduğu etkinlikler</p>
            </div><!-- end title -->

            <div class="row">
                @foreach($data as $rs)
                <div class="col-md-4 col-sm-6 col-lg-4">
                    <div class="post-box">
                        <div class="post-thumb">
                            <img src="{{Storage::url($rs->image)}}" class="img-fluid" alt="post-img" />
                        </div>
                        <div class="post-info">
                            <h4>{{$rs->title}}</h4>
                            <ul>
                                <li>IEEE KARABÜK  |  </li>
                                <li>{{ \Carbon\Carbon::parse($rs->updated_at)->format('d/m/Y')}}</li>
                            </ul>
                            <p>{!! $rs->text !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
