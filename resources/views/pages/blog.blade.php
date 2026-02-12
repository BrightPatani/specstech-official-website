@extends('layouts.app')

@section('title', 'Blog')

@section('content')
     <div class="relative h-[70vh] w-full flex items-center justify-center bg-black">
        {{-- Background Image (Optional, based on your previous hero styles) --}}
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black/50  z-10"></div>
            <img src="{{ asset('images/blog/bloghero.png') }}" class="h-full w-full object-cover" alt="About Us Background">
        </div>

        {{-- Centered Text Content --}}
        <div class="relative z-20 space-y-6 text-[#FFFFFF] text-center animate-fade-in-up px-6">
            <h1 class="text-xl md:text-2xl lg:text-3xl font-bold leading-tight max-w-[60rem] mx-auto">
                Blog
            </h1>
        </div>
    </div>

    {{-- Recent Posts Section --}}
    <section class="blog-section py-20 bg-white">
        <div class="container mx-auto px-6 max-w-7xl">
            
            <div class="blog-header text-center mb-16">
                <h2 class="text-[#0A81CB] text-lg md:text-xl font-bold mb-4">Recent Blog Post</h2>
                <p class="text-gray-700 text-lg font-medium">Gain Value Reading Through Our Tech Blog</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                @php
                    $posts = [
                        ['img' => 'blog1.png', 'title' => 'Why You Should Swap Passord for Passphrase.'],
                        ['img' => 'blog2.png', 'title' => 'Why You Should Swap Passord for Passphrase.'],
                        ['img' => 'blog3.png', 'title' => 'Why You Should Swap Passord for Passphrase.'],
                        ['img' => 'blog4.png', 'title' => 'Why You Should Swap Passord for Passphrase.'],
                        ['img' => 'blog5.png', 'title' => 'Why You Should Swap Passord for Passphrase.'],
                        ['img' => 'blog1.png', 'title' => 'Why You Should Swap Passord for Passphrase.'],
                    ];
                @endphp

                @foreach($posts as $post)
                <div class="blog-card bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 flex flex-col group">
                    <div class="h-40 overflow-hidden">
                        <img src="{{ asset('images/blog/' . $post['img']) }}" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                            alt="Blog post thumbnail">
                    </div>

                    <div class="p-4 flex-grow">
                        <h3 class="text-[#1e293b] text-xl font-bold leading-tight mb-4 group-hover:text-[#0A81CB] transition-colors">
                            {{ $post['title'] }}
                        </h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-8">
                            Why you should change your router default password.
                        </p>
                        
                        <a href="#" class="inline-flex items-center text-[#0A81CB] font-bold text-sm hover:translate-x-1 transition-transform">
                            Read more 
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- newsletter --}}
    <x-newsletter />

    {{-- footer  --}}
    <x-footer />


    <script>
        document.addEventListener("DOMContentLoaded", () => {
            gsap.registerPlugin(ScrollTrigger);
            
            const blogTl = gsap.timeline({
                scrollTrigger: {
                    trigger: ".blog-section",
                    start: "top 75%", // Start slightly earlier for smoother feel
                    toggleActions: "play none none reverse"
                }
            });

            // Animate Header with smoother easing
            blogTl.from(".blog-header > *", {
                y: 40,
                opacity: 0,
                duration: 0.5, 
                stagger: 0.15,
                ease: "power2.out" // Smoother ease curve
            })
            
            // Animate Blog Cards with butter-smooth entrance
            .from(".blog-card", {
                y: 80, // Larger distance for more dramatic but smooth effect
                opacity: 0,
                scale: 0.9, // Slightly more scale difference
                duration: 0.7, // Longer duration = smoother
                stagger: {
                    each: 0.1, // Slightly more time between cards
                    from: "start",
                    ease: "power2.inOut" // Smooth stagger timing
                },
                ease: "power2.out", // Best ease for smooth deceleration
                clearProps: "all"
            }, "-=0.6"); // More overlap with header animation

            // Smoother Parallax Effect
            gsap.utils.toArray(".blog-card img").forEach(img => {
                gsap.to(img, {
                    scrollTrigger: {
                        trigger: img,
                        start: "top bottom",
                        end: "bottom top",
                        scrub: 1, // Increased from 1.5 for smoother motion
                    },
                    y: -40, // Slightly more movement
                    ease: "none"
                });
            });

            // BONUS: Add subtle hover enhancement (optional)
            gsap.utils.toArray(".blog-card").forEach(card => {
                card.addEventListener("mouseenter", () => {
                    gsap.to(card, {
                        y: -8,
                        duration: 0.5,
                        ease: "power2.out"
                    });
                });
                
                card.addEventListener("mouseleave", () => {
                    gsap.to(card, {
                        y: 0,
                        duration: 0.5,
                        ease: "power2.inOut"
                    });
                });
            });
        });
    </script>
@endsection
