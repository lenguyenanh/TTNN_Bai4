@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa
                    <small>trang</small>
                </h1>
                @if (count ($errors))
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}}
                    <br>
                    @endforeach
                </div>
                @endif
                @if(session('success'))
                <div class="alert alert-success">
                    {{session ('success')}}
                </div>
                @endif
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{route('admin.page.update', $page->id)}}" method="POST">
                        @csrf
                        @method ('put')
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" value="{{$page->title}}" name="title" placeholder="Please Enter Title" />
                        </div>
                        <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="content" class="ckeditor" name="content">{{$page->content}}</textarea>
                    </div>
                        <div class="form-group">
                            <label>Người Tạo Trang</label>
                            <input class="form-control" name="author_id" value="{{ $user->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input class="form-control" name="slug" value="{{$page->slug}}" placeholder="Please Enter Slug" />
                        </div>
                        <button type="submit" class="btn btn-default">Sửa</button>
                        <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>



    @endsection