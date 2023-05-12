<ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li> -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Thể loại bài viết<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.category.index')}}">Danh sách thể loại bài viết</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.category.create')}}">Thêm thể loại bài viết</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i>Bài Viết<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.post.index')}}">Danh sách bài viết</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.post.create')}}">Bài viết mới</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>Người dùng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.user.index')}}">Danh sách người dùng</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.user.create')}}">Thêm người dùng</a>
                                </li>
                            
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bars fa-fw"></i>Menu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.menu.index')}}">Danh sách Menu</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.menu.create')}}">Thêm mới Menu</a>
                         </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-chain fa-fw"></i>Link<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.link.index')}}">Danh sách Link</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.link.create')}}">Thêm Link</a>
                         </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i>Trang<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.page.index')}}">Danh sách trang</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.page.create')}}">Thêm trang</a>
                         </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <!-- <li>
                            <a href="{{route('admin.contact.index')}}"><i class="fa fa-dashboard fa-fw"></i> Contact</a>
                        </li> -->
                    </ul>