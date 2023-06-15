<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <p class="text-white">TEC MOTUL</p>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Conoce la escuela') }}
                    </x-nav-link>
                </div>
            
                <div class="hidden space-x-8 sm:-my-px sm:ml-2 sm:flex">
                    <x-nav-link href="{{ route('staff') }}" :active="request()->routeIs('staff')">
                        {{ __('Conoce al personal') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-2 sm:flex">
                    <x-nav-link href="{{ route('formalities') }}" :active="request()->routeIs('formalities')">
                        {{ __('Trámites') }}
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>
</nav>
