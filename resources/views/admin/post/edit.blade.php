@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa
                    <small>bài viết</small>
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
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('admin.post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method ('put')
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" name="title" value="{{$post->title}}" placeholder="Please Enter Title" />
                    </div>
                    <!-- <div class="form-group">
                                <label>Content</label>
                                <input class="form-control" name="content" value="{{$post->content}}" placeholder="Please Enter Content" />
                            </div> -->
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="content" class="ckeditor" name="content">{{$post->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Thuộc thể loại</label>
                        <select class="form-control" name="category_id">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($post->category_id == $category->id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Người tạo bài viết</label>
                        <input class="form-control" name="author_id" value="{{ $user->name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Thứ tự hiện thị</label>
                        <input class="form-control" name="display_order" value="{{$post->display_order}}" placeholder="Please Enter Display_order" />
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select class="form-control" name="status">
                            <option value="show" {{ $post->status == 'show' ? 'selected' : '' }}>Show</option>
                            <option value="hide" {{ $post->status != 'show' ? 'selected' : '' }}>Hide</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <input class="form-control" name="slug" value="{{$post->slug}}" placeholder="Please Enter Slug" />
                    </div>
                    <button type="submit" class="btn btn-default"> Sửa </button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>



@endsection