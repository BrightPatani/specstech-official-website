@extends('layouts.app')

@section('title', 'ICT Solutions - Specstech Africa')

@section('content')
    {{-- Hero Section --}}
    <div class="relative h-[50vh] md:h-[60vh] w-full flex items-center justify-center bg-[#000000]">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[#000000]/50 z-10"></div>
            <img src="{{ asset('images/about/abouthero.png') }}" class="h-full w-full object-cover" alt="Solutions">
        </div>

        <div class="relative z-20 space-y-4 text-[#FFFFFF] text-center animate-fade-in-up px-6 max-w-4xl mx-auto">
            <h1 class="text-lg md:text-2xl lg:text-3xl font-bold leading-tight">
                ICT Solutions
            </h1>
            <p class="text-xs md:text-sm opacity-90">
                Tailored technology solutions for your business
            </p>
        </div>
    </div>

    {{-- Main Content Section --}}
    <section class="py-16 md:py-24 bg-[#FFFFFF]">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                
                {{-- Main Content --}}
                <div class="lg:col-span-2">
                    
                    {{-- Introduction --}}
                    <div class="mb-12">
                        <h2 class="text-xl md:text-2xl font-bold text-[#0A81CB] mb-6">
                            Business-Driven ICT Solutions
                        </h2>
                        <p class="text-[#444444] leading-relaxed mb-4">
                            Today's businesses are driven by ICT solutions. Specstech Africa is one of Nigeria's leading solution providers, delivering innovative and customized technology solutions that solve strategic business problems.
                        </p>
                        <p class="text-[#444444] leading-relaxed">
                            Whether you need infrastructure redesign, cloud migration, cybersecurity implementation, or custom application development, our solutions are designed to deliver measurable business value and support your growth objectives.
                        </p>
                    </div>

                    {{-- Solution Areas --}}
                    <div class="mb-12" x-data="{ activeSolution: 1 }">
                        <h2 class="text-xl md:text-2xl font-bold text-[#0A81CB] mb-6">
                            Our Solution Areas
                        </h2>
                        
                        <div class="space-y-3">
                            @php
                                $solutions = [
                                    [
                                        'id' => 1,
                                        'title' => 'Infrastructure Design & Deployment',
                                        'desc' => 'Custom infrastructure solutions that scale with your business needs and optimize operational efficiency.'
                                    ],
                                    [
                                        'id' => 2,
                                        'title' => 'Cloud Solutions',
                                        'desc' => 'Migration to cloud platforms with minimal disruption and maximum efficiency.'
                                    ],
                                    [
                                        'id' => 3,
                                        'title' => 'Cybersecurity Solutions',
                                        'desc' => 'Comprehensive security implementation to protect your assets and data from threats.'
                                    ],
                                    [
                                        'id' => 4,
                                        'title' => 'Business Applications',
                                        'desc' => 'Custom and packaged business applications that streamline operations.'
                                    ],
                                    [
                                        'id' => 5,
                                        'title' => 'Digital Transformation',
                                        'desc' => 'End-to-end digital transformation to modernize your business operations.'
                                    ],
                                ];
                            @endphp

                            @foreach($solutions as $solution)
                                <div class="border border-gray-100 rounded-xl overflow-hidden transition-all duration-300 shadow-sm"
                                    :class="activeSolution === {{ $solution['id'] }} ? 'bg-blue-50/30 border-[#0A81CB]/30' : 'bg-white'">
                                    
                                    {{-- Header / Toggle Button --}}
                                    <button @click="activeSolution = activeSolution === {{ $solution['id'] }} ? null : {{ $solution['id'] }}"
                                            class="w-full flex items-center justify-between p-4 md:p-5 text-left focus:outline-none group">
                                        
                                        <div class="flex items-center gap-4">
                                            <div class="font-bold text-xl flex-shrink-0 transition-colors duration-300"
                                                :class="activeSolution === {{ $solution['id'] }} ? 'text-[#0A81CB]' : 'text-gray-300'">
                                                ✓
                                            </div>
                                            <h3 class="font-bold text-[#1e293b] text-sm md:text-base group-hover:text-[#0A81CB] transition-colors">
                                                {{ $solution['title'] }}
                                            </h3>
                                        </div>

                                        {{-- Dynamic Chevron --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" 
                                            class="h-5 w-5 text-gray-400 transition-transform duration-500" 
                                            :class="activeSolution === {{ $solution['id'] }} ? 'rotate-180 text-[#0A81CB]' : ''"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>

                                    {{-- Animated Body --}}
                                    <div x-show="activeSolution === {{ $solution['id'] }}" 
                                        x-collapse 
                                        x-cloak>
                                        <div class="px-14 pb-6">
                                            <div class="text-[#444444] text-sm leading-relaxed border-l-2 border-[#0A81CB]/20 pl-4">
                                                @if(is_array($solution['desc']))
                                                    <ul class="list-disc pl-5 space-y-1">
                                                        @foreach($solution['desc'] as $item)
                                                            <li>{{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <p>{{ $solution['desc'] }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Recent Posts Sidebar --}}
                <div class="lg:col-span-1">
                    <div class="sticky top-24">
                        <h3 class="text-lg font-bold text-[#0A81CB] mb-6">
                            Related Articles
                        </h3>
                        
                        <div class="space-y-6">
                            @forelse($blogs as $blog)
                                <a href="{{ route('blog.show', $blog->slug) }}" class="group">
                                    <div class="overflow-hidden rounded-lg h-32 mb-3">
                                        <img 
                                            src="{{ asset('images/blog/' . ($blog->image ?? 'blog1.png')) }}" 
                                            alt="{{ $blog->title }}"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                        >
                                    </div>
                                    <h4 class="font-bold text-[#1e293b] text-sm leading-tight group-hover:text-[#0A81CB] transition-colors mb-2">
                                        {{ Str::limit($blog->title, 50) }}
                                    </h4>
                                    <p class="text-[#888888] text-xs leading-relaxed">
                                        {{ $blog->published_at->format('M j, Y') }}
                                    </p>
                                </a>
                            @empty
                                <p class="text-[#888888] text-sm">No articles available.</p>
                            @endforelse
                        </div>

                        <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 mt-8 text-[#0A81CB] font-bold text-sm hover:gap-3 transition-all">
                            View All Articles
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>

            {{-- Back Button --}}
            <div class="mt-16 pt-8 border-t border-[#888888]/60">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 bg-linear-to-r from-[#0A81CB] via-[#37A2E5] to-[#0A8ACB] hover:bg-linear-to-r hover:from-[#37A2E5] hover:via-[#0A81CB] hover:to-[#37A2E5] text-[#FFFFFF] px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Home
                </a>
            </div>
        </div>
    </section>

    {{-- partner --}}
    <x-partner />

    {{-- Newsletter --}}
    <x-newsletter />

    {{-- Footer --}}
    <x-footer />
@endsection
