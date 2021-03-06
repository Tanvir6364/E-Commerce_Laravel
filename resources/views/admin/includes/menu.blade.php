<div class="sidebar-nav navbar-collapse">
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
        <li>
            <a href="{{url('/dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Category Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/category/add')}}">Add Category</a>
                </li>
                <li>
                    <a href="{{url('/category/manage')}}">Manage Category</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-arrow-circle-down fa-fw"></i>Manufacture Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/manufacture/add')}}">Add Manufacture</a>
                </li>
                <li>
                    <a href="{{url('/manufacture/manage')}}">Manage Manufacture</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-arrow-circle-down fa-fw"></i>Product Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/product/add')}}">Add Product</a>
                </li>
                <li>
                    <a href="{{url('/product/manage')}}">Manage Product</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-arrow-circle-down fa-fw"></i>Manage Order<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/manageOrder')}}">Manage Order</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-arrow-circle-down fa-fw"></i>Mail<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/mail/sendMail')}}">Send Mail</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>User Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/user/add')}}">Add User</a>
                </li>
                <li>
                    <a href="{{url('/user/manage')}}">Manage User</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>

        <li>
            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="#">Second Level Item</a>
                </li>
                <li>
                    <a href="#">Second Level Item</a>
                </li>
                <li>
                    <a href="#">Third Level <span class="fa arrow"></span></a>
                    <ul class="nav nav-third-level">
                        <li>
                            <a href="#">Third Level Item</a>
                        </li>
                        <li>
                            <a href="#">Third Level Item</a>
                        </li>
                        <li>
                            <a href="#">Third Level Item</a>
                        </li>
                        <li>
                            <a href="#">Third Level Item</a>
                        </li>
                    </ul>
                    <!-- /.nav-third-level -->
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="blank.html">Blank Page</a>
                </li>
                <li>
                    <a href="login.html">Login Page</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
    </ul>
</div>