<?php
    $routePath = request()->path();
?>

<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="logo" />
            <span class="text-white fw-bold">{{ env('APP_NAME') }}</span>
        </a>
        <ul class="navbar-nav flex-column" id="sideNavbar">

            {{-- <x-admin.nav-item-link :route="'admin.dashboard'">
                <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
            </x-admin.nav-item-link> --}}

            <x-admin.nav-item-heading>Sports</x-admin.nav-item-heading>

            <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navSports" aria-expanded="false" aria-controls="navSports">
                    <i
                        data-feather="layers"
                        class="nav-icon icon-xs me-2">
                    </i> Manage Categories
                </a>
                <?php
                    $activeMenus = ['admin/categories', 'admin/leagues', 'admin/teams'];
                ?>
                <div id="navSports" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <x-admin.nav-item-link :route="'admin.categories.index'">
                            Categories
                        </x-admin.nav-item-link>
                        {{--
                        <x-admin.nav-item-link :route="'#'">
                            Leagues
                        </x-admin.nav-item-link>

                        <x-admin.nav-item-link :route="'#'">
                            Teams
                        </x-admin.nav-item-link> --}}
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navGames" aria-expanded="false" aria-controls="navGames">
                    <i
                        data-feather="layers"
                        class="nav-icon icon-xs me-2">
                    </i> Manage Games
                </a>
                <div id="navGames" class="collapse {{ request()->routeIs('admin.games.*') ? 'show' : '' }}" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        {{-- <x-admin.nav-item-link :route="'#'">
                            All Games
                        </x-admin.nav-item-link>
                        <x-admin.nav-item-link :route="'#'">
                            Deleted Games
                        </x-admin.nav-item-link> --}}
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navContests" aria-expanded="false" aria-controls="navContests">
                    <i
                        data-feather="layers"
                        class="nav-icon icon-xs me-2">
                    </i> Manage Contests
                </a>
                <div id="navContests" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        {{-- <x-admin.nav-item-link :route="'#'">
                            Sections
                        </x-admin.nav-item-link>
                        <x-admin.nav-item-link :route="'#'">
                            Contest List
                        </x-admin.nav-item-link>
                        <x-admin.nav-item-link :route="'#'">
                            Contest Entries
                        </x-admin.nav-item-link> --}}
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navUsers" aria-expanded="false" aria-controls="navUsers">
                    <i
                        data-feather="layers"
                        class="nav-icon icon-xs me-2">
                    </i> Manage Users
                </a>
                <div id="navUsers" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        {{-- <x-admin.nav-item-link :route="'admin.users.index'">
                            User List
                        </x-admin.nav-item-link> --}}
                    </ul>
                </div>
            </li>
            {{-- <x-admin.nav-item-link :route="'#'">
                <i data-feather="repeat" class="nav-icon icon-xs me-2"></i> Transactions
            </x-admin.nav-item-link>
            <x-admin.nav-item-link :route="'#'">
                <i data-feather="image" class="nav-icon icon-xs me-2"></i> Banners
            </x-admin.nav-item-link> --}}

        </ul>
    </div>
</nav>
