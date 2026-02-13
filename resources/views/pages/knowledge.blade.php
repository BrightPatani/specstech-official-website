@extends('layouts.app')

@section('title', 'Knowledge Transfer - Specstech Africa')

@section('content')
    {{-- Hero Section --}}
    <div class="relative h-[50vh] md:h-[60vh] w-full flex items-center justify-center bg-[#000000]">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[#000000]/50 z-10"></div>
            <img src="{{ asset('images/blog/bloghero.png') }}" class="h-full w-full object-cover" alt="Knowledge Transfer">
        </div>

        <div class="relative z-20 space-y-4 text-[#FFFFFF] text-center animate-fade-in-up px-6 max-w-4xl mx-auto">
            <h1 class="text-lg md:text-2xl lg:text-3xl font-bold leading-tight">
                Knowledge Transfer & IT Training
            </h1>
            <p class="text-xs md:text-sm opacity-90">
                Empower your team with essential IT skills and expertise
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
                            Empower Your Team Through Training
                        </h2>
                        <p class="text-[#444444] leading-relaxed mb-4">
                            Knowledge Transfer is our training initiative where we provide comprehensive training programs that equip your team with the skills and expertise needed to effectively manage and maintain your ICT infrastructure.
                        </p>
                        <p class="text-[#444444] leading-relaxed">
                            We offer different categories of training programs tailored to your team's skill levels and organizational needs. From basic fundamentals to advanced specialized topics, we prepare your personnel for the challenges of modern IT management.
                        </p>
                    </div>

                    {{-- Training Programs --}}
                    <div class="mb-12" x-data="{ activeTraining: 1 }">
                        <h2 class="text-xl md:text-2xl font-bold text-[#0A81CB] mb-6">
                            Training Programs We Offer
                        </h2>
                        
                        <div class="space-y-3">
                            @php
                                $programs = [
                                    [
                                        'id' => 1,
                                        'title' => 'Network Administration & Security',
                                        'desc' => 'Comprehensive training in network setup, configuration, maintenance, and security best practices.'
                                    ],
                                    [
                                        'id' => 2,
                                        'title' => 'System Administration',
                                        'desc' => 'Training on operating systems, server management, user administration, and system monitoring.'
                                    ],
                                    [
                                        'id' => 3,
                                        'title' => 'Cybersecurity Fundamentals',
                                        'desc' => 'Essential cybersecurity knowledge including threats, vulnerabilities, and protective measures.'
                                    ],
                                    [
                                        'id' => 4,
                                        'title' => 'Cloud Technologies',
                                        'desc' => 'Training in cloud platforms, migration strategies, and cloud-based service management.'
                                    ],
                                    [
                                        'id' => 5,
                                        'title' => 'Help Desk & User Support',
                                        'desc' => 'Training for technical support staff on troubleshooting, customer service, and ticket management.'
                                    ],
                                    [
                                        'id' => 6,
                                        'title' => 'Database Management',
                                        'desc' => 'Hands-on training in database administration, backup, and optimization.'
                                    ],
                                ];
                            @endphp

                            @foreach($programs as $program)
                                <div class="border border-gray-100 rounded-xl overflow-hidden transition-all duration-300 shadow-sm"
                                    :class="activeTraining === {{ $program['id'] }} ? 'bg-blue-50/30 border-[#0A81CB]/30' : 'bg-white'">
                                    
                                    {{-- Accordion Header --}}
                                    <button @click="activeTraining = activeTraining === {{ $program['id'] }} ? null : {{ $program['id'] }}"
                                            class="w-full flex items-center justify-between p-4 md:p-5 text-left focus:outline-none group">
                                        
                                        <div class="flex items-center gap-4">
                                            <div class="font-bold text-xl flex-shrink-0 transition-colors duration-300"
                                                :class="activeTraining === {{ $program['id'] }} ? 'text-[#0A81CB]' : 'text-gray-300'">
                                                ✓
                                            </div>
                                            <h3 class="font-bold text-[#1e293b] text-sm md:text-base group-hover:text-[#0A81CB] transition-colors">
                                                {{ $program['title'] }}
                                            </h3>
                                        </div>

                                        {{-- Dynamic Chevron --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" 
                                            class="h-5 w-5 text-gray-400 transition-transform duration-500" 
                                            :class="activeTraining === {{ $program['id'] }} ? 'rotate-180 text-[#0A81CB]' : ''"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>

                                    {{-- Accordion Body (Slide Animation) --}}
                                    <div x-show="activeTraining === {{ $program['id'] }}" 
                                        x-collapse 
                                        x-cloak>
                                        <div class="px-14 pb-6">
                                            <div class="text-[#444444] text-sm leading-relaxed border-l-2 border-[#0A81CB]/20 pl-4">
                                                @if(is_array($program['desc']))
                                                    <ul class="list-disc pl-5 space-y-1">
                                                        @foreach($program['desc'] as $item)
                                                            <li>{{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <p>{{ $program['desc'] }}</p>
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
