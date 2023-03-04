@extends('layouts.adminbase')

@section('title', 'Edit Blog: '.$data->title)
@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@endsection


@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{asset('assets')}}/admin">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <!-- Content Wrapper. Contains page content -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Etkinlik Düzenleme : {{$data->title}}</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="/admin/blogs/update/{{$data->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="title">Etkinlik Adı</label>
            <input type="string" class="form-control" id="title" name="title" value="{{$data->title}}">
          </div>
          <div class="form-group">
          <label for="blog">Etkinlik Yazısı</label>
          <textarea name="etkinlik" class="form-control" id ="etkinlik" value="{{$data->text}}">{!! $data->text !!}</textarea>
          <script>
											ClassicEditor
												.create(document.querySelector('#text'))
												.then(editor => {
													console.log(editor);
												})
												.catch(error => {
													console.error(error);
												});
										</script>
          </div>
          <div class="form-group">
            <label for="image">Görsel</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" >
                <label class="custom-file-label" for="exampleInputFile">Choose file </label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">kaydet</button>
        </div>
      </form>
    </div>
  </div>
  @endsection