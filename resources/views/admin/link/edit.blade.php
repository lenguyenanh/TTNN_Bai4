@extends('admin.layout.master')

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa
                            <small>link</small>
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
                    <form action="{{route('admin.link.update', $link->id)}}" method="POST">
                            @csrf
                            @method ('put')
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="title" value="{{$link->title}}" placeholder="Please Enter Title" />
                            </div>
                            <div class="form-group">
                                <label>Url</label>
                                <input class="form-control" name="url" value="{{$link->url}}" placeholder="Please Enter Url" />
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