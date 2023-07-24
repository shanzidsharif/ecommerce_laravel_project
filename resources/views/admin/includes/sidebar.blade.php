<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="{{ asset('/') }}admin/assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Mark Jeckson</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="{{ route('dashboard') }}" aria-expanded="false">
                        <i class="icon-speedometer"></i><span class="hide-menu">Dashboard
                            </span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i><span class="hide-menu">Category Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('category.add') }}">Add Category</a></li>
                        <li><a href="{{ route('category.manage') }}">Manage Category</a></li>

                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-email"></i><span class="hide-menu">Sub Category</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('sub-category.add') }}">Add Sub Category</a></li>
                        <li><a href="{{ route('sub-category.manage') }}">Manage Sub Category</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-palette"></i><span class="hide-menu">Brand Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('brand.add') }}">Add Module</a></li>
                        <li><a href="{{ route('brand.manage') }}">Manage Module</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-media-right-alt"></i>
                        <span class="hide-menu">Unit Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('unit.add') }}">Add Unit</a></li>
                        <li><a href="{{ route('unit.manage') }}">Manage Unit</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-files"></i>
                        <span class="hide-menu">Product Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('product.add') }}">Add Product</a></li>
                        <li><a href="{{ route('product.manage') }}">Manage Product</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-settings"></i>
                        <span class="hide-menu">Order Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="widget-data.html">Manage Order</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-accordion-merged"></i>
                        <span class="hide-menu">Customer Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="table-basic.html">Manage Customer</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-pie-chart"></i>
                        <span class="hide-menu">User Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="chart-morris.html">Add User</a></li>
                        <li><a href="chart-chartist.html">Manage User</a></li>

                    </ul>
                </li>
                <li class="nav-small-cap">--- EXTRA COMPONENTS</li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-gallery"></i>
                        <span class="hide-menu">Setting Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="layout-single-column.html">Company Setting</a></li>
                        <li><a href="layout-fix-header.html">Tax Setting</a></li>
                        <li><a href="layout-fix-sidebar.html">Shipping Setting</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
