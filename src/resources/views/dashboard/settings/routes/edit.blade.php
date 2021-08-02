<x-dashboard-layout>
<x-slot name="header">{{ __('Edit '.$item->name.' Route') }}</x-slot>

<form action="{{ Route('dashboard.settings.routes.update',$item) }}" method="POST">@csrf @method('PUT')
    <div class="bg-gray-100 dark:bg-gray-900 w-full p-8 lg:w-1/2 mx-auto rounded-md">

        <!-- Session Status -->
        <x-sk.session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-sk.validation-errors class="mb-4" :errors="$errors" />

        <div class=mb-4>
            <x-sk.label for="icon">
                {{ __('Icon') }}
                <a href="https://fontawesome.com/v5.15/icons/" target="_blank"><i class="fas fa-question"></i></a>
            </x-sk.label>
            <x-sk.input id="icon" class="block mt-1 w-full" type="text" name="icon" :value="$item->icon" autofocus/>
        </div>

        <div class="mb-4">
            <x-sk.label for="name" :value="__('Name')" />
            <x-sk.input id="name" class="block mt-1 w-full" type="text" name="name" :value="$item->name" required />
        </div>

        <div class="mb-4">
            <x-sk.label for="route" :value="__('Route')" />
            <x-sk.select id="route" class="block mt-1 w-full" name="route" >
                    <x-sk.option/>
                @forelse($routeCollection as $routeSingle)
                    <x-sk.option :value="$routeSingle->getName()" :text="__($routeSingle->getName())"/>
                @empty
                @endforelse
            </x-sk.select>
        </div>

        <div class="mb-4">
            <x-sk.label for="route" :value="__('Parent Route')" />
            <x-sk.select id="route" class="block mt-1 w-full" name="route" >
                    <x-sk.option/>
                @forelse($dashboardRoutes as $dashboardRoute)
                    <x-sk.option :value="$dashboardRoute->name" :text="__($dashboardRoute->name)"/>
                @empty
                @endforelse
            </x-sk.select>
        </div>

        <!--Footer-->
        <div class="flex justify-end pt-2">
            <button @click="confirm('Is Everything Correct?');" class="bg-blue-400 hover:bg-blue-500 focus:bg-blue-500 active:bg-blue-600 focus:ring-blue-300 focus:border-blue-300 dark:bg-blue-600 dark:hover:bg-blue-500 dark:focus:bg-blue-500 dark:active:bg-blue-400  dark:active:text-blue-100  dark:focus:ring-blue-600 dark:focus:border-blue-600 inline-flex items-center px-4 py-2 border-2 border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 hover:scale-105 transform">
                {{ __('Edit') }}</button>
        </div>
    </div>
</form>
</x-dashboard-layout>