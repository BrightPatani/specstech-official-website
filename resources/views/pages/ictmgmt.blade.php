@extends('layouts.app')

@section('title', 'ICT Management - Specstech Africa')

@section('content')
    {{-- Hero Section --}}
    <div class="relative h-[50vh] md:h-[60vh] w-full flex items-center justify-center bg-[#000000]">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[#000000]/50 z-10"></div>
            <img src="{{ asset('images/services/servicehero.png') }}" class="h-full w-full object-cover" alt="ICT Management">
        </div>

        <div class="relative z-20 space-y-4 text-[#FFFFFF] text-center animate-fade-in-up px-6 max-w-4xl mx-auto">
            <h1 class="text-lg md:text-2xl lg:text-3xl font-bold leading-tight">
                ICT Management Services
            </h1>
            <p class="text-xs md:text-sm opacity-90">
                Comprehensive management of your technology infrastructure
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
                            ICT Management Overview
                        </h2>
                        <p class="text-[#444444] leading-relaxed mb-4">
                            Our ICT Management Service is focused on providing customer-driven and efficient ICT management and infrastructure services by deploying technology-driven solutions to solving strategic problems to enhance productivity and efficiency.

                            With their focus shifting towards core business capabilities, many organizations are outsourcing selected business functions to third party IT experts who can perform them more efficiently and cost-effectively. By outsourcing IT services, companies are able to give more attention to their primary occupation, hence building a stronger and more efficient organization. The peace of mind that comes from entrusting IT processes to industry leaders enables companies to pursue excellence and innovation in their field of specialization.
                        </p>
                        <p class="text-[#444444] leading-relaxed">
                            Specstech Africa assumes ongoing responsibility for monitoring and managing the day-to-day system operations of its customers. Our mission is to provide standard and bespoke support services to our customers. This we achieve through a comprehensive combination of onsite and remote service offerings, spanning cabling infrastructure, software support, incident management, network support, disaster recovery, desktop migration, and end-user support. Our services enable our customers to reduce downtime, lower operating costs, lower the risks of not meeting IT goals and increase productivity while maximizing technology investment.

                            With over 17 years of cumulative work experience from our Lead Consultant, we have been exposed to various IT environments in the financial sectors and hospitality. We deliver real competitive advantage to our customers by proactively monitoring and fixing problems before they happen. Our support services allow our customers to focus on their core business objectives and strategic IT initiatives while receiving greater value from their IT investments.
                        </p> 
                    </div>

                    {{-- Key Services --}}
                    <div class="mb-12" x-data="{ activeAccordion: 1 }">
                        <h2 class="text-xl md:text-2xl font-bold text-[#0A81CB] mb-6">
                            Service Deliveries
                        </h2>
                        
                        <div class="space-y-3">
                            @php
                                $services = [
                                    [
                                        'id' => 1,
                                        'title' => 'Network Support',
                                        'desc' => [
                                                    'This involves the management of your network infrastructure ',
                                                    'Support of VPN links Troubleshooting, Network design and implementation',
                                                ],
                                    ],
                                    [
                                        'id' => 2,
                                        'title' => 'Security support',
                                        'desc' => [
                                            'IT security support is tailored to your needs, and best practices;',
                                            'Protection of mission-critical solutions with a scalable and consistent IT security strategy;',
                                            'Constant situational overview covering all IT security systems;',
                                            'Prompt actions by security specialists to minimize identified risks.',
                                            'IT security support is tailored to you rneeds, and best practices;',
                                        ],
                                    ],
                                    [
                                        'id' => 3,
                                        'title' => 'Application Support',
                                        'desc' => [
                                            'We provide technical support to teams within the organization, and to external clients when required',
                                            'We provide assistance with systems integrations',
                                            'managing ticketed query system and ensuring a comprehensive database of queries and resolutions is kept up to date',
                                            'Maintaining and updating technical documents and procedures',
                                            'Identifying and resolving technical issues',
                                            'Managing coordination at a local and international level where required',
                                        ],
                                    ],
                                    [
                                        'id' => 4,
                                        'title' => 'Disaster Recovery Solutions',
                                        'desc' => 'Implementation and management of security policies and protocols.'
                                    ],
                                    [
                                        'id' => 5,
                                        'title' => 'Backup & Disaster Recovery',
                                        'desc' => 'Comprehensive backup and recovery solutions to protect your data.'
                                    ],
                                ];
                            @endphp


                            @foreach($services as $service)
                            <div class="border border-gray-100 rounded-xl overflow-hidden transition-all duration-300"
                                :class="activeAccordion === {{ $service['id'] }} ? 'bg-blue-50/50 border-[#0A81CB]/20' : 'bg-white'">
                                
                                {{-- Accordion Header --}}
                                <button @click="activeAccordion = activeAccordion === {{ $service['id'] }} ? null : {{ $service['id'] }}"
                                        class="w-full flex items-center justify-between gap-4 p-4 text-left outline-none">
                                    
                                    <div class="flex items-center gap-4">
                                        <div class="font-bold text-xl flex-shrink-0 transition-colors duration-300"
                                            :class="activeAccordion === {{ $service['id'] }} ? 'text-[#0A81CB]' : 'text-gray-300'">
                                            ✓
                                        </div>
                                        <h3 class="font-bold text-[#1e293b] text-sm md:text-base transition-colors"
                                            :class="activeAccordion === {{ $service['id'] }} ? 'text-[#0A81CB]' : ''">
                                            {{ $service['title'] }}
                                        </h3>
                                    </div>

                                    {{-- Chevron Icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                        class="h-5 w-5 text-gray-400 transition-transform duration-300" 
                                        :class="activeAccordion === {{ $service['id'] }} ? 'rotate-180 text-[#0A81CB]' : ''"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                {{-- Accordion Body --}}
                                <div x-show="activeAccordion === {{ $service['id'] }}" 
                                    x-collapse
                                    x-cloak>
                                    <div class="px-14 pb-5">
                                        <div class="text-[#444444] text-md leading-relaxed border-l-2 border-[#0A81CB]/30 pl-4">
                                            @if(is_array($service['desc']))
                                                <ul class="list-disc pl-5 space-y-1">
                                                    @foreach($service['desc'] as $item)
                                                        <li>{{ $item }}</li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <p>{{ $service['desc'] }}</p>
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

    {{-- partners --}}
    <x-partner />

    {{-- Footer --}}
    <x-footer />
@endsection
