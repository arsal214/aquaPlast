<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>

                <div>
                    <button type="button"
                            class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button"
                            class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <li class="nav-item-header pt-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">
                        Main
                    </div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                @can('dashboard-view')
                    <x-nav-item route="dashboard" icon="house" title="Dashboards"/>
                @endcan

                @can('roles-list')
                    <x-nav-item active="roles.*" icon="user-focus" title="Roles" :submenu="true">
                        <x-nav-item route="roles.staff.index" active="roles.staff.*" title="Staff"/>

                    </x-nav-item>
                @endcan
                @can('permissions-list')
                    <x-nav-item active="permissions.*" icon="lock" title="Permissions" :submenu="true">

                        <x-nav-item route="permissions.staff.index" active="permissions.staff.*" title="Staff"/>

                    </x-nav-item>
                @endcan




                @canany(['users-list'])
                    <x-nav-item active="users.*" icon="users-three" title="Users" :submenu="true">
                        @can('users-list')
                            <x-nav-item route="users.staff.index" active="users.staff.*"
                                        title="Admins"/>
                        @endcan

                    </x-nav-item>
                @endcanany


                @canany(['productCategory-list'])
                    <x-nav-item active="catalog.*" icon="notebook" title="Catalog" :submenu="true">
                        @can('productCategory-list')
                            <x-nav-item route="catalog.category.index" active="catalog.category.*"
                                        title="Category"/>
                        @endcan
                    </x-nav-item>

                @endcanany

                @can('products-list')
                <x-nav-item active="products.*" route="products.index" icon="house" active="products.*"
                            title="Products"/>
                @endcan



                @canany(['blogs-list','aboutUs-list','testimonials-list','homepage-list'])
                    <x-nav-item active="pages.*" icon="house" title="Pages" :submenu="true">
                        @can('homepage-list')
                            <x-nav-item route="pages.homepage.index" active="pages.homepage.*"
                                        title="HomePage"/>
                        @endcan
                        @can('blogs-list')
                            <x-nav-item route="pages.blogs.index" active="pages.blogs.*"
                                        title="Blogs"/>
                        @endcan

                        @can('aboutUs-list')
                            <x-nav-item route="pages.about-us.index" active="pages.about-us.*"
                                        title="About Us"/>
                        @endcan

                            <x-nav-item route="pages.term-conditions.index" active="pages.term-conditions.*"
                                        title="Term Conditions"/>

                                        <x-nav-item route="pages.teams.index" active="pages.teams.*"
                                        title="Teams"/>

                             <x-nav-item route="pages.privacy-policy.index" active="pages.privacy-policy.*"
                                        title="Privacy Policy"/> 

                         <x-nav-item route="pages.contact-us.index" active="pages.contact-us.*"
                                        title="Contact Us"/> 

                                        <x-nav-item route="pages.testimonials.index" active="pages.testimonials.*"
                                        title="Testimonials"/>
                                         

                    </x-nav-item>

                @endcanany

                @can('adminSettings-list')

                    <x-nav-item active="settings.*" icon="gear-six" title="Settings" :submenu="true">
                        <x-nav-item route="settings.admin" title="Admin"/>
                    </x-nav-item>
                @endcan


            </ul>

        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
