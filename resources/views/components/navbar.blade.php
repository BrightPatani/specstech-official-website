<div x-data="{ 
        isMenuOpen: false, 
        isScrolled: false 
    }" 
    @scroll.window="isScrolled = (window.pageYOffset > 20)"
    class="relative">
    
    <nav :class="{ 
            'bg-white/90 backdrop-blur-md shadow-md py-3': isScrolled, 
            'bg-transparent py-6': !isScrolled 
        }" 
        class="fixed top-0 inset-x-0 z-50 flex items-center justify-between px-8 lg:px-12 transition-all duration-300 w-full">
        
        <div class="flex items-center">
            {{-- Logo scales down slightly when scrolled for a sleeker look --}}
            <img src="{{ asset('images/logo.png') }}" 
                 alt="Specstech Africa" 
                 :class="isScrolled ? 'h-12 lg:h-16' : 'h-16 lg:h-24'"
                 class="w-auto transition-all duration-300">
        </div>

        {{-- Desktop Menu --}}
        <div class="hidden space-x-8 lg:flex">
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
                   :class="isScrolled ? 'text-gray-800 hover:text-[#0A81CB]' : 'text-[#FFFFFF] hover:text-[#0A81CB]'"
                   class="text-sm font-semibold tracking-wider transition-colors {{ request()->routeIs($item['route']) ? 'bg-linear-to-r from-[#0A81CB] via-[#37A2E5] to-[#0A8ACB] !text-white px-4 py-1 rounded' : '' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>

        {{-- Mobile Hamburger Button --}}
        <button @click="isMenuOpen = !isMenuOpen" class="block lg:hidden outline-none focus:outline-none">
            <img src="{{ asset('images/menu.png') }}" 
                 :class="isScrolled ? 'brightness-50' : 'brightness-100'"
                 class="h-10 w-10 transition-all duration-300" 
                 alt="Open Menu">
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
                <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
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
                   class="w-full text-center py-3 px-4 text-sm font-medium transition-colors rounded-lg
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