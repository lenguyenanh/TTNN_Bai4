@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm
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
                    </div>
                    
                    
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{route('admin.category.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên thể loại</label>
                                <input class="form-control" name="name" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <input class="form-control" name="description" placeholder="Please Enter Description" />
                            </div>
                            <div class="form-group">
                                <label>Thứ tự hiện thị</label>
                                <input class="form-control" name="display_order" placeholder="Please Enter Display_order" />
                            </div>
                            <div class="form-group">
                             <label>Trạng thái</label>
                                 <select class="form-control" name="status">
                               <option value="show">Show</option>
                                 <option value="hide">Hide</option>
                                 </select>
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