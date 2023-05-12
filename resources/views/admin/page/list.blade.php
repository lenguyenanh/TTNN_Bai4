@extends('admin.layout.master')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách
                          <small>trang</small>
                        </h1>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session ('success')}}
                        </div>
                        @endif
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Người tạo trang</th>
                                <th>Slug</th>
                                <th>Xóa</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $page)
                           
                            <tr class="even gradeC" align="center">
                                <td>{{$page->id}}</td>
                                <td>{{$page->title}}</td>
                                <td>{{$page->content}}</td>
                                <td>{{$page->user->name ?? ''}}</td>
                                <td>{{$page->slug}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('admin.page.delete', $page->id)}}" > Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('admin.page.edit', $page->id)}}" >Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>



@endsection