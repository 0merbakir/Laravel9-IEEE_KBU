@extends('layouts.adminbase')

@section('title', 'Blog: '.$data->title)



@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Blog İçeriği : {{$data->title}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
        <tbody>
          <tr>
            <td>Blog Adı</td>
            <td> {{$data->title}}</td>
          </tr>
          <tr>
            <td>ÖnYazı</td>
            <td> {{$data->description}}</td>
          </tr>
          <tr>
            <td>Komite</td>
            <td> {{$data->community}}</td>
          </tr>
          <tr>
            <td>Görsel</td>
            <td> <img src="{{Storage::url($data->image)}}" alt="" height="400"></td
          </tr>
          <tr>
            <td>Blog Yazısı</td>
            <td> {!! $data->blog !!}</td>
          </tr>
          <tr>
            <td>Tarih</td>
            <td> {{$data->updated_at}}</td>
          </tr>
          <tr>
            <td>Blog Adı</td>
            <td> {{$data->title}}</td>
          </tr>

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>

@endsection