<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #DF2771;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <div class="sidebar-brand-text mx-3">{{ __('Admin page') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('admin/dashboard') || request()->is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('User Management') }}</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Permissions') }}</a>
                        <a class="collapse-item {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('Roles') }}</a>
                        <a class="collapse-item {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('Users') }}</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">
            <li class="nav-item active">
                <div class="nav-link">
                    <i class="fa-solid fa-lines-leaning"></i>
                    Kursus
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.sub_modul.index') }}">
                    <i class="fa-solid fa-book-bookmark"></i>
                    <span>{{ __('Sub Modul') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.bab.index') }}">
                    <i class="fa-solid fa-book-open"></i>
                    <span>{{ __('Materi') }}</span></a>
            </li>
            
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <div class="nav-link">
                    <i class="fa-solid fa-lines-leaning"></i>
                    Kuis
                </div>
            </li>
            <li class="nav-item {{ request()->is('admin/categories') || request()->is('admin/categories') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.categories.index') }}">
                    <i class="fas fa-cogs"></i>
                    <span>{{ __('Category') }}</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/questions') || request()->is('admin/questions') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.questions.index') }}">
                    <i class="fas fa-cogs"></i>
                    <span>{{ __('Question') }}</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/options') || request()->is('admin/options') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.options.index') }}">
                    <i class="fas fa-cogs"></i>
                    <span>{{ __('Option') }}</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/results') || request()->is('admin/results') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.results.index') }}">
                    <i class="fas fa-cogs"></i>
                    <span>{{ __('Result') }}</span></a>
            </li>



        </ul>