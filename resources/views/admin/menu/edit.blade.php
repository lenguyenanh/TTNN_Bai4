@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa
                            <small>menu</small>
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

                    
                        <form action="{{route('admin.menu.update', $menu->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method ('put')
                       
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="title" value="{{$menu->title}}" placeholder="Please Enter Title" />
                            </div>
                            <div class="form-group">
                                <label>Url</label>
                                <input class="form-control" name="url" value="{{$menu->url}}" placeholder="Please Enter URL" />
                            </div>
                            <div class="form-group">
                                <label>Menu con</label>
                                <select class="form-control" name="id_parent">
                                 @foreach($menus as $menuItem)
                                   <option value="{{$menuItem->id}}"@if($menu->id_parent == $menuItem->id) selected @endif>{{$menuItem->title}}</option>
                                 @endforeach
                                </select>
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