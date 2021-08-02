<nav>
    <ul>
        @forelse($dashboardRoutes as $route)
        @if (!$route->isChildren() && $route->childrens->isNotEmpty())
            <li x-data="{selected:{{$route->active != null || Route::is($route->route) ? '1' : 'null' }}, routed: {{$route->active != null ? 'true' : 'false' }} }">
                <a class="cursor-pointer flex items-center mx-2 px-2 py-1 mt-1 relative focus:bg-secondary-400 dark:focus:bg-secondary-600 dark:hover:bg-opacity-25 hover:bg-opacity-25 hover:text-gray-900 dark:hover:text-gray-100 rounded-lg truncate" 
                    @click="selected !== 1 ? selected = 1 : selected = null"
                    @if($route->route) href="{{Route($route->route)}}" @endif
                    :class="[selected
                        ?   'bg-secondary-400 dark:bg-secondary-600 text-gray-900 dark:text-gray-100 bg-opacity-75 dark:bg-opacity-75' 
                        :   routed 
                            ?   'bg-primary-400 dark:bg-primary-600 text-gray-900 dark:text-gray-100 bg-opacity-75 dark:bg-opacity-75' 
                            :   'text-gray-500 bg-gray-400 dark:bg-gray-600 bg-opacity-0 dark:bg-opacity-0']"
                >
                    <span class="flex items-center justify-center w-5 mr-3">
                        <i class="{{ $route->icon }}"></i>
                    </span>
                    {{ __($route->name) }}
                    <span class="flex items-center justify-center w-6 ml-auto">
                        <i class="fas fa-caret-down fill-current transition-transform duration-400 transform"
                        :class="selected ? 'rotate-180' : 'rotate-0'"></i>
                    </span>
                </a>

                <div class="relative overflow-hidden transition-all max-h-0 duration-400" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    @foreach($dashboardRoutes as $children)
                        @if ($children->isChildren())
                            <a @onclick="clicked = true" class="ml-10 cursor-pointer flex items-center mx-2 px-2 py-1 mt-1 relative focus:bg-secondary-400 focus:bg-opacity-75 dark:focus:bg-secondary-600 focus:text-gray-900 dark:focus:text-gray-100 hover:bg-opacity-25 dark:hover:bg-opacity-25 hover:text-gray-900 dark:hover:text-gray-100 rounded-lg truncate"
                                @if($children->route) href="{{Route($children->route)}}" @endif
                                :class="[ {{Route::is($children->route) ? 'true' : 'false'}} 
                                            ? 'bg-primary-400 dark:bg-primary-600 text-gray-900 dark:text-gray-100 bg-opacity-75 dark:bg-opacity-75'
                                            : 'text-gray-500 bg-gray-400 dark:bg-gray-600 bg-opacity-0 dark:bg-opacity-0'
                                ]">
                                <span class="flex items-center justify-center w-5 mr-3">
                                    <i class="{{ $children->icon }}"></i>
                                </span>
                                {{ __($children->name) }}
                            </a>
                        @endif
                    @endforeach
                </div>
            </li>
        @endif
        @if(!$route->isChildren() && !$route->childrens->isNotEmpty())
            <li>
                <a x-data="{selected: {{$route->active != null || Route::is($route->route) ? 'true' : 'false' }} }" class="cursor-pointer focus:bg-secondary-400 dark:focus:bg-secondary-600 focus:text-gray-900 dark:focus:text-gray-100 flex items-center mx-2 px-2 my-1 py-1 relative hover:bg-opacity-25 dark:hover:bg-opacity-25 hover:text-gray-900 dark:hover:text-gray-100 rounded-lg truncate" @click="selected !== 1 ? selected = 1 : selected = null"
                    @if($route->route) href="{{Route($route->route)}}" @endif
                    :class="[selected
                            ?   'bg-primary-400 dark:bg-primary-600 text-gray-900 dark:text-gray-100 bg-opacity-75 dark:bg-opacity-75' 
                            :   'text-gray-500 bg-gray-400 dark:bg-gray-600 bg-opacity-0 dark:bg-opacity-0']"
                >
                    <span class="flex items-center justify-center w-5 mr-3">
                        <i class="{{ $route->icon }}"></i>
                    </span>
                    {{ __($route->name) }}
                </a>
            </li>
        @endif
        @empty
        @endforelse
    </ul>
</nav>