@extends('admin.layout.master')

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa
                            <small>thể loại bài viết</small>
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
                    <form action="{{route('admin.category.update', $category->id)}}" method="POST">
                            @csrf
                            @method ('put')
                            <div class="form-group">
                                <label>Tên thể loại</label>
                                <input class="form-control" name="name" value="{{$category->name}}" placeholder="Please Enter Name" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <input class="form-control" name="description" value="{{$category->description}}" placeholder="Please Enter Description" />
                            </div>
                            <div class="form-group">
                                <label>Thứ tụ hiện thị</label>
                                <input class="form-control" name="display_order" value="{{$category->display_order}}" placeholder="Please Enter Display_order" />
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <select class="form-control" name="status">
                                <option value="show" {{ $category->status == 'show' ? 'selected' : '' }}>Show</option>
                                <option value="hide" {{ $category->status != 'show' ? 'selected' : '' }}>Hide</option>
                                </select>
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