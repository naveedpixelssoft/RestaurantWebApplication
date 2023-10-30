<div>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->

        @can('admin-panel')
            <div class="menu">
                <ul class="list pt-4">
                    <li>
                        <a href="{{url('admin/dashboard')}}" >
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a  onClick="return false;" class="menu-toggle" href="" >
                            <i class="fa-solid fa-delicious"></i>
                            <span>Restaurants</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href=" {{route('roles.index')}}">
                                    <span>All Restaurants</span>
                                </a>
                            </li>
                            <li>
                                <a href=" {{route('permissions.index')}}">
                                    <span>Active Restaurants</span>
                                </a>
                            </li>
                            <li>
                                <a href=" {{route('permissions.index')}}">
                                    <span>Banned Restaurants</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  onClick="return false;" class="menu-toggle" href="" >
                            <i class="fas fa-cart-arrow-down"></i>
                            <span>Orders</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href=" {{route('roles.index')}}">
                                    <span>Pending Orders</span>
                                </a>
                            </li>
                            <li>
                                <a href=" {{route('permissions.index')}}">
                                    <span>Delivered Orders</span>
                                </a>
                            </li>
                            <li>
                                <a href=" {{route('permissions.index')}}">
                                    <span>Cancelled Orders</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    {{--                <li>--}}
                    {{--                    <a  onClick="return false;" class="menu-toggle" href="" >--}}
                    {{--                        <i class="fas fa-unlock-alt"></i>--}}
                    {{--                        <span> Roles | Permission</span>--}}
                    {{--                    </a>--}}
                    {{--                    <ul class="ml-menu">--}}
                    {{--                        <li>--}}
                    {{--                            <a href=" {{route('roles.index')}}">--}}
                    {{--                                <span>Roles</span>--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                    {{--                        <li>--}}
                    {{--                            <a href=" {{route('permissions.index')}}">--}}
                    {{--                                <span>Permissions</span>--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                    {{--                    </ul>--}}
                    {{--                </li>--}}
                    <li>
                        <a href="{{url('admin/user-info')}}" >
                            <i class="fas fa-user"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a  onClick="return false;" class="menu-toggle" >
                            <i class="fas fa-unlock-alt"></i>
                            <span> Manage Categories</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('admin/category')}}">
                                    <span>Menu Category</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('admin/restaurant-category')}}">
                                    <span>Restaurant Category</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <form class="m-0" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="#"  :href="route('logout')"
                               onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="fas fa-power-off"></i> <span>
                                {{ __('Log Out') }}
                            </span>
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        @endcan
        @can('restaurant-panel')
            <div class="menu">
                <ul class="list pt-4">
                    <li>
                        <a href="{{url('admin/dashboard')}}" >
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a  onClick="return false;" class="menu-toggle" href="" >
                            <i class="fa-solid fa-delicious"></i>
                            <span>Restaurants</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href=" {{route('roles.index')}}">
                                    <span>All Restaurants</span>
                                </a>
                            </li>
                            <li>
                                <a href=" {{route('permissions.index')}}">
                                    <span>Active Restaurants</span>
                                </a>
                            </li>
                            <li>
                                <a href=" {{route('permissions.index')}}">
                                    <span>Banned Restaurants</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  onClick="return false;" class="menu-toggle" href="" >
                            <i class="fas fa-cart-arrow-down"></i>
                            <span>Orders</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href=" {{route('roles.index')}}">
                                    <span>Pending Orders</span>
                                </a>
                            </li>
                            <li>
                                <a href=" {{route('permissions.index')}}">
                                    <span>Delivered Orders</span>
                                </a>
                            </li>
                            <li>
                                <a href=" {{route('permissions.index')}}">
                                    <span>Cancelled Orders</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    {{--                <li>--}}
                    {{--                    <a  onClick="return false;" class="menu-toggle" href="" >--}}
                    {{--                        <i class="fas fa-unlock-alt"></i>--}}
                    {{--                        <span> Roles | Permission</span>--}}
                    {{--                    </a>--}}
                    {{--                    <ul class="ml-menu">--}}
                    {{--                        <li>--}}
                    {{--                            <a href=" {{route('roles.index')}}">--}}
                    {{--                                <span>Roles</span>--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                    {{--                        <li>--}}
                    {{--                            <a href=" {{route('permissions.index')}}">--}}
                    {{--                                <span>Permissions</span>--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                    {{--                    </ul>--}}
                    {{--                </li>--}}
                    <li>
                        <a href="{{url('admin/user-info')}}" >
                            <i class="fas fa-user"></i>
                            <span>Users</span>
                        </a>
                    </li>


                    <li>
                        <a href="{{url('admin/category')}}" >
                            <i class="fas fa-user"></i>
                            <span>Manage Categor</span>
                        </a>
                    </li>
                    <li>
                        <form class="m-0" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="#"  :href="route('logout')"
                               onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="fas fa-power-off"></i> <span>
                                {{ __('Log Out') }}
                            </span>
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        @endcan
        <!-- #Menu -->
        <div class="copyright">
            Powered By <a href="https://eliteblue.net/" class="text-dark d-block" target="_blank">Elite Blue Technologies</a>
        </div>
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation">
                <a href="#skins" data-toggle="tab" class="active">SKINS</a>
            </li>
            {{--            <li role="presentation">--}}
            {{--                <a href="#settings" data-toggle="tab">SETTINGS</a>--}}
            {{--            </li>--}}
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                <div class="demo-skin">

                    <div class="rightSetting">
                        <p>SIDEBAR MENU COLORS</p>
                        <button type="button"
                                class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">Light</button>
                        <button type="button"
                                class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                    </div>
                    <div class="rightSetting">
                        <p>THEME COLORS</p>
                        <button type="button"
                                class="btn btn-theme-light btn-border-radius p-l-20 p-r-20">Light</button>
                        <button type="button"
                                class="btn btn-theme-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                    </div>
                    <div class="rightSetting">
                        <p>SKINS</p>
                        <ul class="demo-choose-skin choose-theme list-unstyled">
                            <li data-theme="black" class="actived">
                                <div class="black-theme"></div>
                            </li>
                            <li data-theme="white">
                                <div class="white-theme white-theme-border"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple-theme"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue-theme"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan-theme"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green-theme"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange-theme"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-green"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever switch-col-blue"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-purple"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-cyan"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-red"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever switch-col-lime"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</div>
<style>
    .copyright{
        position: absolute;
        bottom: 0 !important;
        width: 100% !important;
        text-align: center;
        font-size: 13px;
        padding: 15px;
        background: white;
        border-top: 1px solid #f1f2f7;
        z-index: 999;
    }
    .sidebar .menu .list{
        padding-bottom: 80px;
    }
</style>
