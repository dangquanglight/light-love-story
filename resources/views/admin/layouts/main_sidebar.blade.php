<!-- Wrapper for scrolling functionality -->
<div class="sidebar-scroll">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Brand -->
        <a href="" class="sidebar-brand">
            <i class="gi gi-flash"></i>
            Light <strong>Love Story</strong>
        </a>
        <!-- END Brand -->

        <!-- User Info -->
        <div class="sidebar-section sidebar-user clearfix">
            <div class="sidebar-user-avatar">
                <a href="#">
                    <img src="{{asset('admin/img/icon57.png')}}" alt="avatar">
                </a>
            </div>
            <div class="sidebar-user-name">LightBr0</div>
            <div class="sidebar-user-links">
                <a href="{{route('systems_logout')}}" data-toggle="tooltip" data-placement="bottom" title="Logout">
                    <i class="gi gi-exit"></i>
                </a>
            </div>
        </div>
        <!-- END User Info -->

        <!-- Sidebar Navigation -->
        <ul class="sidebar-nav">
            <li>
                <a href="" class="active">
                    <i class="gi gi-home sidebar-nav-icon"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-header">
                <span class="sidebar-header-title">Settings</span>
            </li>
            <li>
                <a href="">
                    <i class="gi gi-charts sidebar-nav-icon"></i>
                    Statistics
                </a>
            </li>
            <li class="sidebar-header">
                <span class="sidebar-header-title">Media</span>
            </li>
            <li>
                <a href="{{route('systems_media_images_list')}}">
                    <i class="gi gi-picture sidebar-nav-icon"></i>
                    Images
                </a>
            </li>
        </ul>
        <!-- END Sidebar Navigation -->

    </div>
    <!-- END Sidebar Content -->
</div>
<!-- END Wrapper for scrolling functionality -->