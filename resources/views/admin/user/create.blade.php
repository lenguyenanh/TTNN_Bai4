@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm
                            <small>tài khoản</small>
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
                        <form action="{{route('admin.user.store')}}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label>Tên người dùng</label>
                                <input class="form-control" name="name" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Please Enter Email" />
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input class="form-control" name="password" type="password" placeholder="Please Enter Email" />
                            </div>
                            <div class="form-group">
                                <label>Xác nhận mật khẩu </label>
                                <input class="form-control" name="confirm" type="password" placeholder="Please Enter Email" />
                            </div>
                            <div class="form-group">
                            <label>Quyền</label>
                                <label class="radio-inline">
                                <input name="is_admin" value="0" checked type="radio"> User
                                </label>
                                <label class="radio-inline">
                                <input name="is_admin" value="1" type="radio"> Admin
                            </label>                              
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