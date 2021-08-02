<header class="flex justify-between items-center py-1 px-2 h-12 bg-gradient-to-r from-primary-300 to-secondary-300 dark:from-primary-800 dark:to-secondary-800">
    <div class="flex items-center">
        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden mr-3">
            <i class="fas fa-align-justify"></i>
        </button>

        <x-sk.input type="search" icon="fas fa-search" placeholder="Search" class="rounded-full bg-gray-100 dark:bg-gray-900 h-8" />

        <div class="relative mx-4 lg:mx-0 hidden md:block">
            <p class="absolute inset-y-0 left-0 pl-3 flex items-center w-96 font-bold text-lg capitalize">
                @forelse($segments = request()->segments() as $segment)
                    @foreach($dashboardRoutes as $dashboardRoute)
                        @if( strtolower($dashboardRoute->name) == strtolower($segment))
                            <a @if($dashboardRoute->route != null) href="{{ Route($dashboardRoute->route) }}" @else class="pointer-events-none" @endif class="hover:text-secondary-500">{{ __($segment) }}</a>
                            @if(!$loop->parent->last)
                                <i class="fas fa-chevron-right mx-2"></i>
                            @endif
                        @endif
                    @endforeach
                @empty
                @endforelse
            </p>
        </div>
    </div>

    <div class="flex items-center">
        <x-sk.theme-toggle class="rounded-xl mr-2 h-8 w-8" />

        <!-- Settings Dropdown -->
        <div class="flex items-center">
            <x-sk.dropdown class="w-auto float-right" width="36">
                <x-slot name="trigger">
                    <button class="relative block h-8 w-8 rounded-xl overflow-hidden shadow focus:outline-none bg-gray-100 dark:bg-gray-900 hover:scale-110 transform">
                        <i class="fas fa-user"></i>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-sk.dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Log Out') }}
                        </x-sk.dropdown-link>
                    </form>
                </x-slot>
            </x-sk.dropdown>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

    </div>
</header>