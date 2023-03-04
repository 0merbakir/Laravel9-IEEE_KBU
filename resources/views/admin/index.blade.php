@extends('layouts.adminbase')

@section('title', 'Admin Panel')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
        @include('dashboard')
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection