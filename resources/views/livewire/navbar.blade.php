<style>
    #navigation-menu {
        height: calc(100vh - 4rem);
    }

    .navigation-link:hover .navigation-submenu {
        display: block !important;
    }

</style>

<header class="bg-white shadow dark:bg-gray-800 sticky z-50 top-0" x-data="dropdown()">
    <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <div>
                <a class="text-2xl font-bold text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300"
                    href="/">Artist's Point</a>
            </div>
        </div>

        @livewire('search-bar')

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div class="items-center md:flex">
            <div class="flex flex-col md:flex-row md:mx-6">
                <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0"
                    href="#">Inicio</a>
                <a x-on:click="show()"
                    class="my-1 cursor-pointer text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0">
                    Categorias
                </a>
                <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0"
                    href="#">Productos</a>
                <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0"
                    href="#">Nosotros</a>
            </div>

        </div>

        @livewire('dropdown-cart')

        <div class="relative mx-5">
            @auth
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">

                        <button
                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>

            @else
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <i class='bx bxs-user-circle mx-auto cursor-pointer text-3xl hover:text-indigo-700'></i>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>

                    </x-slot>
                </x-jet-dropdown>

            @endauth

        </div>

    </div>



    <nav id="navigation-menu" :class="{'block': open, 'hidden': !open}" x-show="open"
        class="bg-gray-700 bg-opacity-25 w-full absolute hidden">
        <div class="container mx-auto h-full">
            <div x-on:click.away="open=false" class="grid grid-cols-4 h-full relative">
                <ul class="bg-white">
                    @foreach ($categoria as $item)
                        <li class="navigation-link text-gray-500 hover:bg-orange-500 hover:text-white hover:bg-red-400">
                            <a href="" class="border-b py-3 px-5 text-xl flex items-center">

                                <span class="flex justify-center w-9">
                                    {!! $item->icon !!}
                                </span>

                                {{ $item->name }}
                            </a>
                            <div class="navigation-submenu bg-gray-100 absolute w-3/4 top-0 right-0 h-full hidden">
                                <x-subcategorias :category="$item" />
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="col-span-3 bg-gray-100">
                    <x-subcategorias :category="$item->first()" />
                </div>
            </div>

        </div>
    </nav>





</header>
