@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm
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
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

                    
                        <form action="{{route('admin.menu.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="title" placeholder="Please Enter Title" />
                            </div>
                            <div class="form-group">
                                <label>Url</label>
                                <input class="form-control" name="url" placeholder="Please Enter Url" />
                            </div>
                            <div class="form-group">
                                <label>Menu con</label>
                                <select class="form-control" name="id_parent">
                                @foreach($menus as $menu)
                                <option value="{{$menu->id}}">{{$menu->title}}</option>
                                @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default"> Thêm Mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>



@endsection