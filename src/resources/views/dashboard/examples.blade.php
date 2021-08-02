<x-dashboard-layout>
<x-slot name="header">Examples</x-slot>

<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8">
    {{-- Start Normal Card --}}
    <x-sk.card class="transform hover:scale-105 flex items-center">
        <div class="p-5 mr-4 rounded-full bg-indigo-400 dark:bg-indigo-600 bg-opacity-75 w-14 h-14 flex items-center justify-center">
            <i class="fas fa-box fa-2x"></i>
        </div>
        <div>
            <h4 class="text-2xl font-semibold text-gray-700 dark:text-gray-300">{{ 'Simple Card' }}</h4>
            <div class="text-gray-500">{{ 'Some Text' }}</div>
        </div>
    </x-sk.card>
    {{-- End Normal Card --}}
    
    {{-- Start Card with onclick modal --}}
    <div x-data="{ showModal: false }">
        <x-sk.card class="flex items-center cursor-pointer transform hover:scale-105" @click="showModal = ! showModal">
            <div class="p-5 mr-4 rounded-full bg-green-400 dark:bg-green-600 text-gray-800 dark:text-gray-200 bg-opacity-75 w-14 h-14 flex items-center justify-center">
                <i class="fas fa-hand-point-up fa-2x"></i>
            </div>
            <div>
                <h4 class="text-2xl font-semibold text-gray-700 dark:text-gray-300">{{ __('Clickable Card') }}</h4>
                <div class="text-gray-500">{{ __('With Modal') }}</div>
            </div>
        </x-sk.card>
        <x-sk.modal>
            <x-slot name="head">
                <p class="text-2xl font-bold">Modal example</p>
            </x-slot>
            <x-slot name="body">
                <p class="text-lg">Content area</p>
            </x-slot>
            <x-slot name="foot">
                <button type="button" class="bg-green-400 hover:bg-green-500 focus:bg-green-500 active:bg-green-600 focus:ring-green-300 focus:border-green-300 dark:bg-green-600 dark:hover:bg-green-500 dark:focus:bg-green-500 dark:active:bg-green-400  dark:active:text-green-100  dark:focus:ring-green-600 dark:focus:border-green-600 inline-flex items-center px-4 py-2 border-2 border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 hover:scale-105 transform">
                    {{ __('Action') }}</button>
                <button type="button"  @click="showModal = false" class="bg-red-400 hover:bg-red-500 focus:bg-red-500 active:bg-red-600 focus:ring-red-300 focus:border-red-300 dark:bg-red-600 dark:hover:bg-red-500 dark:focus:bg-red-500 dark:active:bg-red-400  dark:active:text-red-100  dark:focus:ring-red-600 dark:focus:border-red-600 inline-flex items-center px-4 py-2 border-2 border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 hover:scale-105 transform">
                    {{ __('Close') }}</button>
            </x-slot>
        </x-sk.modal>
    </div>
    {{-- End Card with onclick modal --}}

    {{-- Start Normal Card --}}
    <x-sk.card class="transform hover:scale-105 flex items-center">
        <div class="p-5 mr-4 rounded-full bg-indigo-400 dark:bg-indigo-600 text-gray-800 dark:text-gray-200 bg-opacity-75 w-14 h-14 flex items-center justify-center">
            <i class="fas fa-box fa-2x"></i>
        </div>
        <div>
            <h4 class="text-2xl font-semibold text-gray-700 dark:text-gray-300">{{ 'Some Text' }}</h4>
            <div class="text-gray-500">Some Text</div>
        </div>
    </x-sk.card>
    {{-- End Normal Card --}}
</div>

<x-sk.hr/>
    
<x-sk.table :collection="$dashboardRoutes" :print="['icon', 'name', 'route', 'parent_id']"  
    :show="__()" :edit="__('dashboard.settings.routes.edit')" :delete="__('dashboard.settings.routes.destroy')"
/>
    
<x-sk.hr/>

<x-sk.card class="grid grid-cols-1 gap-6">
    <h3 class="text-xl font-medium">Inputs</h3>

    <x-sk.hr/>

    <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">
        <div>
            <x-sk.label for="example" :value="__('Text')" />
            <x-sk.input id="example" class="block mt-1 w-full" type="text" name="example" />
        </div>
        <div>
            <x-sk.label for="example" :value="__('Time')" />
            <x-sk.input id="example" class="block mt-1 w-full" type="time" name="example" />
        </div>
        <div>
            <x-sk.label for="example" :value="__('Date')" />
            <x-sk.input id="example" class="block mt-1 w-full" type="date" name="example" />
        </div>
        <div>
            <x-sk.label for="example" :value="__('Email')" />
            <x-sk.input id="example" class="block mt-1 w-full" type="email" name="example" />
        </div>
        <div>
            <x-sk.label for="example" :value="__('Password')" />
            <x-sk.input id="example" class="block mt-1 w-full" type="password" name="example" />
        </div>
        <div>
            <x-sk.label for="example" :value="__('Select')" />
            <x-sk.select id="example" class="block mt-1 w-full" name="example" >
                <x-sk.option/>
                <x-sk.option value="1" :text="__('option 1')"/>
                <x-sk.option value="2" :text="__('option 2')"/>
            </x-sk.select>
        </div>
        <div>
            <x-sk.label for="example" :value="__('Image')" />
            <x-sk.input id="example" class="block mt-1 w-full" type="image" name="example" />
        </div>
        <div>
            <x-sk.label for="example" :value="__('File')" />
            <x-sk.input id="example" class="block mt-1 w-full" type="file" name="example" />
        </div>
    </div>
    
    <x-sk.hr/>

    <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">
        <div>
            <x-sk.label for="example" :value="__('File')" />
            <x-sk.textarea id="example" class="block mt-1 w-full" name="example" />
        </div>
    </div>
    
    <x-sk.hr/>

    <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">
        <div class="flex flex-col gap-1">
            <h3 class="text-lg font-medium">{{ __('Checkboxes') }}</h3>
            
            <x-sk.checkbox name="checkbox" id="checkbox1">Unchecked</x-sk.checkbox>
            <x-sk.checkbox name="checkbox" id="checkbox2" checked>Checked</x-sk.checkbox>
            <x-sk.checkbox name="checkbox" id="checkbox3" disabled>Disabled</x-sk.checkbox>
            <x-sk.checkbox name="checkbox" id="checkbox4" disabled checked>Checked Disabled</x-sk.checkbox>
        </div>
        <div class="flex flex-col gap-1">
            <h3 class="text-lg font-medium">{{ __('Radio Group') }}</h3>

            <x-sk.radio name="radio" id="radio1">Unchecked</x-sk.radio>
            <x-sk.radio name="radio" id="radio2" checked>Checked</x-sk.radio>
            <x-sk.radio name="radio1" id="radio3" disabled>Disabled</x-sk.radio>
            <x-sk.radio name="radio2" id="radio4" disabled checked>Checked Disabled</x-sk.radio>
        </div>
        <div class="flex flex-col gap-1">
            <h3 class="text-lg font-medium">{{ __('Switches') }}</h3>
            <x-sk.switch >Unchecked</x-sk.switch >
            <x-sk.switch checked >Checked</x-sk.switch >
            <x-sk.switch disabled >Disabled</x-sk.switch >
            <x-sk.switch disabled checked>Checked Disabled</x-sk.switch>
        </div>
    </div>
</x-sk.card>

<x-sk.hr/>

<div class="grid grid-cols-2 gap-4">
    <x-sk.card class="h-full">
        <h3 class="text-xl font-medium">Accordion</h3>

        <x-sk.hr class="my-5"/>

        <x-sk.accordion selected="1">
            <x-sk.accordion-item number="1" arrow>
                <x-slot name="trigger">
                    <x-sk.button theme="green" class="w-full transform-none">
                        <div class="flex items-center justify-between">
                            <span>Accordion Item 1</span>
                        </div>
                    </x-sk.button>
                </x-slot>
                <div class="p-4 rounded-lg border-2 border-green-400 dark:border-green-600">
                    <p>Accordion 1 Text Area</p>
                    <p>Accordion 1 Text Area</p>
                    <p>Accordion 1 Text Area</p>
                </div>
            </x-sk.accordion-item>
            <x-sk.accordion-item number="2">
                <x-slot name="trigger">
                    <x-sk.button theme="blue" class="w-full transform-none">
                        <div class="flex items-center justify-between">
                            <span>Accordion Item 2</span>
                        </div>
                    </x-sk.button>
                </x-slot>
                <div class="p-4 rounded-lg border-2 border-blue-400 dark:border-blue-600">
                    <p>Accordion Item 2 Text Area</p>
                </div>
            </x-sk.accordion-item>
            <x-sk.accordion-item number="3" arrow>
                <x-slot name="trigger">
                    <x-sk.button theme="pink" class="w-full transform-none">
                        <div class="flex items-center justify-between">
                            <span>Accordion Item 1</span>
                        </div>
                    </x-sk.button>
                </x-slot>
                <div class="p-4 rounded-lg border-2 border-pink-400 dark:border-pink-600">
                    <p>Accordion 3 Text Area</p>
                    <p>Accordion 3 Text Area</p>
                    <p>Accordion 3 Text Area</p>
                </div>
            </x-sk.accordion-item>
        </x-sk.accordion>
    </x-sk.card>
    <x-sk.card class="h-full flex flex-col gap-1">
        <h3 class="text-xl font-medium">Collapse</h3>
        <x-sk.hr class="my-4"/>
        <x-sk.collapse arrow>
            <x-slot name="trigger">
                <x-sk.button theme="violet" class="w-full transform-none">
                    <div class="flex items-center justify-between">
                        <span>Collapse 1</span>
                    </div>
                </x-sk.button>
            </x-slot>
            <div class="p-4 rounded-lg border-2 border-violet-400 dark:border-violet-600">
                <p>Collapse 1 Text Area</p>
                <p>Collapse 1 Text Area</p>
            </div>
        </x-sk.collapse>
        <x-sk.collapse selected>
            <x-slot name="trigger">
                <x-sk.button theme="rose" class="w-full transform-none">
                    <div class="flex items-center justify-between">
                        <span>Collapse 1</span>
                    </div>
                </x-sk.button>
            </x-slot>
            <div class="p-4 rounded-lg border-2 border-rose-400 dark:border-rose-600">
                <p>Collapse 2 Text Area</p>
            </div>
        </x-sk.collapse>
        <x-sk.collapse arrow>
            <x-slot name="trigger">
                <x-sk.button theme="yellow" class="w-full transform-none">
                    <div class="flex items-center justify-between">
                        <span>Collapse 3</span>
                    </div>
                </x-sk.button>
            </x-slot>
            <div class="p-4 rounded-lg border-2 border-yellow-400 dark:border-yellow-600">
                <p>Collapse 3 Text Area</p>
                <p>Collapse 3 Text Area</p>
            </div>
        </x-sk.collapse>
    </x-sk.card>
</div>

<x-sk.hr/>

<div class="grid grid-cols-2 gap-4">
    <x-sk.card>
        <h3 class="text-xl font-medium">Tabs</h3>
        <x-sk.hr class="my-4"/>

        <x-sk.tabs>
            <x-slot name="trigger">
                <x-sk.tabs-item number="1">
                    <x-sk.button theme="rose" class="w-full transform-none">
                        <div class="flex items-center justify-between">
                            <span>Tab 1</span>
                        </div>
                    </x-sk.button>
                </x-sk.tabs-item>
                <x-sk.tabs-item number="2">
                    <x-sk.button theme="green" class="w-full transform-none">
                        <div class="flex items-center justify-between">
                            <span>Tab 2</span>
                        </div>
                    </x-sk.button>
                </x-sk.tabs-item>
                <x-sk.tabs-item number="3">
                    <x-sk.button theme="cyan" class="w-full transform-none">
                        <div class="flex items-center justify-between">
                            <span>Tab 3</span>
                        </div>
                    </x-sk.button>
                </x-sk.tabs-item>
                <x-sk.tabs-item number="4">
                    <x-sk.button theme="amber" class="w-full transform-none">
                        <div class="flex items-center justify-between">
                            <span>Tab 4</span>
                        </div>
                    </x-sk.button>
                </x-sk.tabs-item>
                <x-sk.tabs-item number="5">
                    <x-sk.button theme="purple" class="w-full transform-none">
                        <div class="flex items-center justify-between">
                            <span>Tab 5</span>
                        </div>
                    </x-sk.button>
                </x-sk.tabs-item>
            </x-slot>
            <x-slot name="content">
                <x-sk.tabs-content number="1">
                    <div class="p-4 rounded-lg border-2 border-rose-400 dark:border-rose-600">
                        <p>Tab 1 content</p>
                    </div>
                </x-sk.tabs-content>
                <x-sk.tabs-content number="2">
                    <div class="p-4 rounded-lg border-2 border-green-400 dark:border-green-600">
                        <p>Tab 2 content</p>
                    </div>
                </x-sk.tabs-content>
                <x-sk.tabs-content number="3">
                    <div class="p-4 rounded-lg border-2 border-cyan-400 dark:border-cyan-600">
                        <p>Tab 3 content</p>
                    </div>
                </x-sk.tabs-content>
                <x-sk.tabs-content number="4">
                    <div class="p-4 rounded-lg border-2 border-amber-400 dark:border-amber-600">
                        <p>Tab 4 content</p>
                    </div>
                </x-sk.tabs-content>
                <x-sk.tabs-content number="5">
                    <div class="p-4 rounded-lg border-2 border-purple-400 dark:border-purple-600">
                        <p>Tab 5 content</p>
                    </div>
                </x-sk.tabs-content>
            </x-slot>
        </x-sk.tabs>
    </x-sk.card>

    <x-sk.card class="overflow-visible">
        <h3 class="text-xl font-medium">Popover</h3>
        <x-sk.hr class="my-4"/>
        <div class="flex xl:flex-cols-3 lg:flex-cols-2 md:flex-cols-1 flex-cols-1 gap-4 justify-around">
            <x-sk.popover class="w-auto float-right" width="36" align="left">
                <x-slot name="trigger">
                    <x-sk.button theme="red" class="transfrom-none">
                        <p>Hover me!</p>
                    </x-sk.button>
                </x-slot>

                <x-slot name="content">
                    <div class="p-4">
                        <p>Popover text here</p>
                    </div>
                </x-slot>
            </x-sk.popover>

            <x-sk.popover class="w-auto float-right" width="36" align="top">
                <x-slot name="trigger">
                    <x-sk.button theme="lime" class="transfrom-none">
                        <p>Hover me!</p>
                    </x-sk.button>
                </x-slot>

                <x-slot name="content">
                    <div class="p-4">
                        <p>Popover text here</p>
                    </div>
                </x-slot>
            </x-sk.popover>

            <x-sk.popover class="w-auto float-right" width="36" align="right">
                <x-slot name="trigger">
                    <x-sk.button theme="violet" class="transfrom-none">
                        <p>Hover me!</p>
                    </x-sk.button>
                </x-slot>

                <x-slot name="content">
                    <div class="p-4">
                        <p>Popover text here</p>
                    </div>
                </x-slot>
            </x-sk.popover>
        </div>
    </x-sk.card>
</div>

<x-sk.hr/>

<x-sk.card class="grid grid-cols-1 gap-6">
    <h3 class="text-xl font-medium">Theme Colors</h3>
    <x-sk.hr/>
    <div class="grid xl:grid-cols-7 lg:grid-cols-7 md:grid-cols-3 grid-cols-3 gap-4">
        @foreach ($colors as $color)
            <div class="w-full h-full bg-{{$color}}-400 dark:bg-{{$color}}-600 py-6 text-center rounded-xl transform hover:scale-105 cursor-pointer">
                <p class="text-lg text-{{$color}}-100 font-semibold">{{ __($color) }}</p>
            </div>
        @endforeach
    </div>

</x-sk.card>

<x-sk.card class="grid grid-cols-1 gap-6">
    <h3 class="text-xl font-medium">Themed Inputs</h3>
    <x-sk.hr/>
    
    <div class="grid xl:grid-cols-8 lg:grid-cols-6 md:grid-cols-4 grid-cols-2 gap-4">
        @foreach($colors as $color)
            <x-sk.checkbox theme="{{$color}}" checked>{{__($color)}}</x-sk.checkbox>
        @endforeach
    </div>

    <x-sk.hr/>

    <div class="grid xl:grid-cols-8 lg:grid-cols-6 md:grid-cols-4 grid-cols-2 gap-4">
        @foreach($colors as $color)
            <x-sk.checkbox theme="{{$color}}" outlined colored>{{__($color)}}</x-sk.checkbox>
        @endforeach
    </div>

    <x-sk.hr/>
    
    <div class="grid xl:grid-cols-8 lg:grid-cols-6 md:grid-cols-4 grid-cols-2 gap-4">
        @foreach($colors as $color)
            <x-sk.radio theme="{{$color}}" checked>{{__($color)}}</x-sk.radio>
        @endforeach
    </div>

    <x-sk.hr/>
    
    <div class="grid xl:grid-cols-8 lg:grid-cols-6 md:grid-cols-4 grid-cols-2 gap-4">
        @foreach($colors as $color)
            <x-sk.switch theme="{{$color}}" checked/>
        @endforeach
    </div>

    <x-sk.hr/>

    <div class="grid xl:grid-cols-8 lg:grid-cols-6 md:grid-cols-4 grid-cols-2 gap-4">
        @foreach($colors as $color)
            <x-sk.button theme="{{$color}}" class="w-28">
                {{ __($color) }}
            </x-sk.button>
        @endforeach
    </div>

    <x-sk.hr/>

    <div class="grid xl:grid-cols-8 lg:grid-cols-6 md:grid-cols-4 grid-cols-2 gap-4">
        <div>
            <x-sk.button theme="green" class="w-28">
                <span class="flex items-center justify-center w-4 mr-2">
                    <i class="fas fa-plus"></i>
                </span>
                {{ __('Create') }}
            </x-sk.button>
        </div>
        <div>
            <x-sk.button theme="green" class="w-28">
                <span class="flex items-center justify-center w-4 mr-2">
                    <i class="fas fa-eye"></i>
                </span>
                {{ __('Show') }}
            </x-sk.button>
        </div>
        <div>
            <x-sk.button theme="blue" class="w-28">
                <span class="flex items-center justify-center w-4 mr-2">
                    <i class="fas fa-eye"></i>
                </span>
                {{ __('Edit') }}
            </x-sk.button>
        </div>
        <div>
            <x-sk.button theme="rose" class="w-28">
                <span class="flex items-center justify-center w-4 mr-2">
                    <i class="fas fa-trash"></i>
                </span>
                {{ __('Delete') }}
            </x-sk.button>
        </div>
    </div>
</x-sk.card>

<x-sk.hr/>

<x-sk.card class="grid grid-cols-1 gap-6">

    <h3 class="text-xl font-medium">Outlined Inputs</h3>

    <x-sk.hr/>

    <div class="grid xl:grid-cols-8 lg:grid-cols-6 md:grid-cols-4 grid-cols-2 gap-4">
        @foreach($colors as $color)
            <x-sk.checkbox theme="{{$color}}" outlined>{{__($color)}}</x-sk.checkbox>
        @endforeach
    </div>

    <x-sk.hr/>

    <div class="grid xl:grid-cols-8 lg:grid-cols-6 md:grid-cols-4 grid-cols-2 gap-4 ">
        @foreach($colors as $color)
            <x-sk.switch theme="{{$color}}" outlined/>
        @endforeach
    </div>

    <x-sk.hr/>

    <div class="grid xl:grid-cols-8 lg:grid-cols-6 md:grid-cols-4 grid-cols-2 gap-4">
        @foreach($colors as $color)
            <x-sk.button theme="{{$color}}" outlined class="w-28">
                {{ __($color) }}
            </x-sk.button>
        @endforeach
    </div>

    <hr class="my-6border-gray-300 dark:border-gray-700">

    <div class="grid xl:grid-cols-8 lg:grid-cols-6 md:grid-cols-4 grid-cols-2 gap-4">
        <div>
            <x-sk.button theme="green" outlined class="w-28">
                <span class="flex items-center justify-center w-4 mr-2">
                    <i class="fas fa-plus"></i>
                </span>
                {{ __('Create') }}
            </x-sk.button>
        </div>
        <div>
            <x-sk.button theme="green" outlined class="w-28">
                <span class="flex items-center justify-center w-4 mr-2">
                    <i class="fas fa-eye"></i>
                </span>
                {{ __('Show') }}
            </x-sk.button>
        </div>
        <div>
            <x-sk.button theme="blue" outlined class="w-28">
                <span class="flex items-center justify-center w-4 mr-2">
                    <i class="fas fa-eye"></i>
                </span>
                {{ __('Edit') }}
            </x-sk.button>
        </div>
        <div>
            <x-sk.button theme="rose" outlined class="w-28">
                <span class="flex items-center justify-center w-4 mr-2">
                    <i class="fas fa-trash"></i>
                </span>
                {{ __('Delete') }}
            </x-sk.button>
        </div>
    </div>
</x-sk.card>
</x-dashboard-layout>    