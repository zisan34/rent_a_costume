========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{url('admin/adminDashboard')}}">
                        <i class="fe-airplay"></i>
                        {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span> Dashboards </span>
                    </a>
                    {{-- <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="index">Dashboard 1</a>
                        </li>
                        <li>
                            <a href="dashboard-2">Dashboard 2</a>
                        </li>
                        <li>
                            <a href="dashboard-3">Dashboard 3</a>
                        </li>
                        <li>
                            <a href="dashboard-4">Dashboard 4</a>
                        </li>
                    </ul> --}}
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-pocket"></i>
                        <span> Apps </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        {{-- <li>
                            <a href="apps-kanbanboard">Kanban Board</a>
                        </li> --}}
                        <li>
                            <a href="{{url('admin/apps-calendar')}}">Calendar</a>
                        </li>
                        <li>
                            <a href="{{url('admin/apps-contacts')}}">Contacts</a>
                        </li>
                       {{-- 
                        <li>
                            <a href="{{url('admin/apps-tickets')}}">Tickets</a>
                        </li>
                        <li>
                            <a href="{{url('admin/apps-companies')}}">Companies</a>
                        </li> --}}
                    </ul>
                </li>

              <li>
                    <a href="javascript: void(0);">
                        <i class="fe-users"></i>
                        <span> Products Category and Brands </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        
                        <li>
                            <a href="javascript: void(0);">
                                 <span> Category  </span>
                                 <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{url('admin/showCat')}}">Show all Category</a></li>
                                <li><a href="{{url('admin/addCategory')}}"">Add Category</a></li>
                                <li><a href="{{url('admin/editCategory')}}">Edit Category</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                 <span>  Brands </span>
                                 <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                 <li><a href="{{url('admin/showBrand')}}">Show all Brand</a></li>
                                <li><a href="{{url('admin/addBrand')}}">Add Brands</a> </li>
                                <li><a href="{{url('admin/editBrand')}}">Brands</a>  </li>
                            </ul>
                        </li>
                        {{-- <li>
                             <a href="javascript: void(0);">
                                 <span>  Faqs </span>
                                 <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>Add Faqs </li>
                                <li>Edit Faqs </li>
                            </ul>
                        </li> --}}
                       
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-shopping-cart"></i>
                        <span> E-Commerce </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        
                        <li>
                            <a href="{{url('admin/ecommerce-products')}}">Products</a>
                        </li>
                        <li>
                            <a href="{{url('admin/showComment')}}">Product Comment</a>
                        </li>
                       
                        <li>
                            <a href="{{url('admin/total_orders')}}">Orders</a>
                        </li>
                        <li>
                            <a href="{{url('admin/total_invoice')}}">Invoices</a>
                        </li>
                        
                    </ul>
                </li>

                {{-- <li>
                    <a href="javascript: void(0);">
                        <i class="fe-sidebar"></i>
                        <span class="badge badge-pink float-right">New</span>
                        <span> Layouts </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="layouts-sidebar-user">Sidebar with User</a>
                        </li>
                        <li>
                            <a href="layouts-sidebar-sm">Small Sidebar</a>
                        </li>
                        <li>
                            <a href="layouts-dark-sidebar">Dark Sidebar</a>
                        </li>
                        <li>
                            <a href="layouts-light-topbar">Light Topbar</a>
                        </li>
                        <li>
                            <a href="layouts-preloader">Preloader</a>
                        </li>
                        <li>
                            <a href="layouts-sidebar-collapsed">Sidebar Collapsed</a>
                        </li>
                        <li>
                            <a href="layouts-boxed">Boxed</a>
                        </li>
                    </ul>
                </li> --}}
                
                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-mail"></i>
                        <span> Email </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        {{-- <li>
                            <a href="email-inbox">Inbox</a>
                        </li>
                        <li>
                            <a href="email-read">Read Email</a>
                        </li> --}}
                        <li>
                            <a href="email-compose">Compose Email</a>
                        </li>
                        <li>
                            <a href="{{ route('email.multiple') }}">Multiple Email</a>
                        </li>
                        {{-- <li>
                            <a href="email-templates">Email Templates</a>
                        </li> --}}
                    </ul>
                </li>

              
               

                <li>
                    <a href="{{route('userManagement')}}">
                        <i class="fe-users"></i>
                        {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span>User Management </span>
                    </a>
                </li>



                <li>
                    <a href="{{route('admin.faqs')}}">
                        <i class="fe-bookmark"></i>
                        {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span>FAQs</span>
                    </a>
                </li>


                <li>
                    <a href="{{route('siteSettings')}}">
                        <i class="fe-settings"></i>
                        {{-- <span class="badge badge-success badge-pill float-right">4</span> --}}
                        <span> Site Settings </span>
                    </a>
                </li>


               

           


              
       
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End