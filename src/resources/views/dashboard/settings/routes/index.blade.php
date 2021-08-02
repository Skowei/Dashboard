<x-dashboard-layout>
<x-slot name="header">{{ __('Routes') }}</x-slot>

<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8">
    <x-sk.card class="transform hover:scale-105 flex items-center">
        <div class="p-5 rounded-full bg-indigo-400 dark:bg-indigo-600 text-gray-800 dark:text-gray-200 bg-opacity-75 w-14 h-14 flex items-center justify-center">
            <i class="fas fa-users fa-2x"></i>
        </div>
        <div class="mx-5">
            <h4 class="text-2xl font-semibold text-gray-700 dark:text-gray-300">{{ $dashboardRoutes->count() }}</h4>
            <div class="text-gray-500">{{ __('Routes') }}</div>
        </div>
    </x-sk.card>

    <div x-data="{ showModal: false }">
        <x-sk.card class="flex items-center cursor-pointer transform hover:scale-105" @click="showModal = ! showModal">
            <div class="p-5 mr-4 rounded-full bg-green-400 dark:bg-green-600 text-gray-800 dark:text-gray-200 bg-opacity-75 w-14 h-14 flex items-center justify-center">
                <i class="fas fa-plus fa-2x"></i>
            </div>
            <div>
                <h4 class="text-2xl font-semibold text-gray-700 dark:text-gray-300">{{ __('Add Route') }}</h4>
            </div>
        </x-sk.card>
        <x-sk.modal>
            <x-slot name="head">
                <p class="text-2xl font-bold">Add Route</p>
            </x-slot>
            <x-slot name="body">
                <form action="{{ Route('dashboard.settings.routes.store') }}" method="POST" id="create">@csrf
                    <x-sk.validation-errors class="mb-4" :errors="$errors" />
                    <div class="mb-2">
                        <x-sk.label for="icon">
                            {{ __('Icon') }}
                            <a href="https://fontawesome.com/v5.15/icons/" target="_blank"><i class="fas fa-question"></i></a>
                        </x-sk.label>
                        <x-sk.input id="icon" class="block mt-1 w-full" type="text" name="icon" :value="old('icon')" autofocus />
                    </div>

                    <div class="mb-2">
                        <x-sk.label for="name" :value="__('Name')" />
                        <x-sk.input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
                    </div>

                    <div class="mb-2">
                        <x-sk.label for="route" :value="__('Route')" />
                        <x-sk.select id="route" class="block mt-1 w-full" name="route" >
                            <x-sk.option/>
                            @forelse($routeCollection as $item)
                                <x-sk.option :value="$item->getName()" :text="__($item->getName())"/>
                            @empty
                            @endforelse
                        </x-sk.select>
                    </div>

                    <div class="mb-1">
                        <x-sk.label for="parent_id" :value="__('Parent')" />
                        <x-sk.select id="parent_id" class="block mt-1 w-full" name="parent_id" >
                            <x-sk.option/>
                            @forelse($dashboardRoutes as $item)
                                <x-sk.option :value="$item->id" :text="__($item->name)"/>
                            @empty
                            @endforelse
                        </x-sk.select>
                    </div>
                </form>
            </x-slot>
            <x-slot name="foot">
                <button type="submit" form="create" @click="confirm('Is Everything Correct?');" class="bg-green-400 hover:bg-green-500 focus:bg-green-500 active:bg-green-600 focus:ring-green-300 focus:border-green-300 dark:bg-green-600 dark:hover:bg-green-500 dark:focus:bg-green-500 dark:active:bg-green-400  dark:active:text-green-100  dark:focus:ring-green-600 dark:focus:border-green-600 inline-flex items-center px-4 py-2 border-2 border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 hover:scale-105 transform">
                    {{ __('Create') }}</button>
                <button type="button" form="create" @click="showModal = false" class="bg-red-400 hover:bg-red-500 focus:bg-red-500 active:bg-red-600 focus:ring-red-300 focus:border-red-300 dark:bg-red-600 dark:hover:bg-red-500 dark:focus:bg-red-500 dark:active:bg-red-400  dark:active:text-red-100  dark:focus:ring-red-600 dark:focus:border-red-600 inline-flex items-center px-4 py-2 border-2 border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 hover:scale-105 transform">
                    {{ __('Close') }}</button>
            </x-slot>
        </x-sk.modal>

    </div>
</div>

<x-sk.table :collection="$collection" :head="['id','icon','name','name','parent']" :body="['id','icon','name','name','parent_id']" :show="__()" :edit="__('dashboard.settings.routes.edit')" :delete="__('dashboard.settings.routes.destroy')" pagination/>
</x-dashboard-layout>