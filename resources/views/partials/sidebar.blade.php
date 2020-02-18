<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
                        <span>
                            <button type="button"
                                    class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="{{route('admin.dashboard')}}" class="mm-active">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Home
                    </a>
                </li>
                <li class="app-sidebar__heading">
                    Modules
                </li>
                <li


                >
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Category
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul


                    >
                        <li>
                            <a href="{{route('category.create')}}">
                                <i class="metismenu-icon"></i>
                                Create
                            </a>
                        </li>
                        <li>
                            <a href="{{route('category.index')}}">
                                <i class="metismenu-icon"></i>
                                Show
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-car"></i>
                        Brand
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul


                    >
                        <li>
                            <a href="{{route('brand.create')}}">
                                <i class="metismenu-icon"></i>
                                Create
                            </a>
                        </li>
                        <li>
                            <a href="{{route('brand.index')}}">
                                <i class="metismenu-icon"></i>
                                Show
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-car"></i>
                        Phone Model
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul


                    >
                        <li>
                            <a href="{{route('model.create')}}">
                                <i class="metismenu-icon"></i>
                                Create
                            </a>
                        </li>
                        <li>
                            <a href="{{route('model.index')}}">
                                <i class="metismenu-icon"></i>
                                Show
                            </a>
                        </li>

                    </ul>
                </li>


            </ul>
        </div>
    </div>
</div>
