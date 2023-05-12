@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cập nhật
                            <small>thông tin người dùng</small>
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
                        <form action="{{route('admin.profile.update', auth()->user()->id)}}" method="POST">
                        @csrf
                        @method ('put')
                            <div class="form-group">
                                <label>Tên người dùng</label>
                                <input class="form-control" value="{{auth()->user()->name}}" name="name" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" value="{{auth()->user()->email}}" name="email" placeholder="Please Enter Email" />
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input class="form-control" name="password" type="password" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Xác thực mật khẩu</label>
                                <input class="form-control" name="confirm" type="password" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-default">Cập Nhật</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>



@endsection