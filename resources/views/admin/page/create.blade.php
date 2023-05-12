@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm
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
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{route('admin.page.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Tiêu Đề</label>
                            <input class="form-control" name="title" placeholder="Please Enter Title" />
                        </div>
                        <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="content" class="ckeditor" name="content"></textarea>
                    </div>
                        <div class="form-group">
                            <label>Người Tạo Trang</label>
                            <input class="form-control" name="author_id" value="{{ $user->name }}" disabled>
                        </div>
                        <div class="form-group">
                        <label>Slug</label>
                        <input class="form-control" name="slug" placeholder="Please Enter Slug" />
                    </div>
                        <button type="submit" class="btn btn-default">Thêm mới</button>
                        <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>



    @endsection