<div x-data="{ isMenuOpen: false }" class="relative">
    
    <nav class="absolute top-0 inset-x-0 z-50 flex max-w-[90%] mx-auto items-center justify-between px-8 py-6 lg:px-12">
        <div class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Specstech Africa" class="h-40 w-auto lg:h-12">
        </div>

        {{-- Desktop Menu --}}
        <div class="hidden space-x-8 lg:flex">
            <a href="{{ route('home') }}" class="text-sm font-semibold tracking-wider text-[#FFFFFF] hover:text-blue-400 {{ request()->routeIs('home') ? 'bg-blue-500 px-4 py-1 rounded' : '' }}">
                HOME
            </a>
            <a href="{{ route('about') }}" class="text-sm font-semibold tracking-wider text-[#FFFFFF] hover:text-blue-400 {{ request()->routeIs('about') ? 'bg-blue-500 px-4 py-1 rounded' : '' }}">
                ABOUT
            </a>
            <a href="{{ route('services') }}" class="text-sm font-semibold tracking-wider text-[#FFFFFF] hover:text-blue-400 {{ request()->routeIs('services') ? 'bg-blue-500 px-4 py-1 rounded' : '' }}">
                SERVICES
            </a>
            <a href="{{ route('contact') }}" class="text-sm font-semibold tracking-wider text-[#FFFFFF] hover:text-blue-400 {{ request()->routeIs('contact') ? 'bg-blue-500 px-4 py-1 rounded' : '' }}">
                CONTACT US
            </a>
            <a href="{{ route('blog') }}" class="text-sm font-semibold tracking-wider text-[#FFFFFF] hover:text-blue-400 {{ request()->routeIs('blog') ? 'bg-blue-500 px-4 py-1 rounded' : '' }}">
                BLOG
            </a>
            <a href="{{ route('project') }}" class="text-sm font-semibold tracking-wider text-[#FFFFFF] hover:text-blue-400 {{ request()->routeIs('project') ? 'bg-blue-500 px-4 py-1 rounded' : '' }}">
                PROJECT
            </a>
            <a href="{{ route('feedback') }}" class="text-sm font-semibold tracking-wider text-[#FFFFFF] hover:text-blue-400 {{ request()->routeIs('feedback') ? 'bg-blue-500 px-4 py-1 rounded' : '' }}">
                FEEDBACK
            </a>
        </div>

        {{-- Mobile Hamburger Button --}}
        <button @click="isMenuOpen = true" class="block lg:hidden outline-none focus:outline-none">
            <img src="{{ asset('images/menu.png') }}" class="h-10 w-10" alt="Open Menu">
        </button>
    </nav>

    {{-- Mobile Sidebar --}}
    <div x-show="isMenuOpen" 
        x-cloak
        @click.outside="isMenuOpen = false"
        @keydown.escape.window="isMenuOpen = false"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed inset-y-0 right-0 z-[100] w-64 bg-[#FFFFFF] p-6 shadow-xl lg:hidden">
        
        {{-- Close Button --}}
        <div class="flex justify-end mb-8">
            <button @click="isMenuOpen = false" class="outline-none focus:outline-none">
                {{-- Using a standard 'X' icon or your menu.png --}}
                <img src="{{ asset('images/menu.png') }}" alt="Close" class="w-8 h-8 rotate-45">
            </button>
        </div>

        <div class="flex flex-col items-center space-y-2 w-full">
            @php
                $navItems = [
                    ['route' => 'home', 'label' => 'HOME'],
                    ['route' => 'about', 'label' => 'ABOUT'],
                    ['route' => 'services', 'label' => 'SERVICES'],
                    ['route' => 'contact', 'label' => 'CONTACT US'],
                    ['route' => 'blog', 'label' => 'BLOG'],
                    ['route' => 'project', 'label' => 'PROJECT'],
                    ['route' => 'feedback', 'label' => 'FEEDBACK'],
                ];
            @endphp

            @foreach($navItems as $item)
                <a href="{{ route($item['route']) }}" 
                   @click="isMenuOpen = false"
                   class="w-full text-center py-3 px-4 text-lg font-medium transition-colors rounded-lg
                   {{ request()->routeIs($item['route']) ? 'bg-[#0A81CB] text-white' : 'text-black hover:text-[#0A81CB] hover:bg-blue-50' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
    </div>

    {{-- Overlay to dim background when menu is open --}}
    <div x-show="isMenuOpen" 
         x-cloak
         x-transition:opacity
         class="fixed inset-0 bg-black/50 z-[90] lg:hidden"></div>
</div>

<style>
    /* Prevents menu from flickering on page load */
    [x-cloak] { display: none !important; }
</style>