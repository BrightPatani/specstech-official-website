@extends('layouts.app')

@section('title', $blog->title)

@section('content')
    {{-- Hero Section --}}
    <div class="relative h-[50vh] md:h-[60vh] w-full flex items-center justify-center bg-[#000000]">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[#000000]/50 z-10"></div>
            @if($blog->image)
                <img src="{{ asset('images/blog/' . $blog->image) }}" class="h-full w-full object-cover" alt="{{ $blog->title }}">
            @else
                <img src="{{ asset('images/blog/blog1.png') }}" class="h-full w-full object-cover" alt="{{ $blog->title }}">
            @endif
        </div>

        <div class="relative z-20 space-y-4 text-[#FFFFFF] text-center animate-fade-in-up px-6 max-w-4xl mx-auto">
            <h1 class="text-lg md:text-2xl lg:text-3xl font-bold leading-tight">
                {{ $blog->title }}
            </h1>
            <p class="text-xs md:text-sm opacity-90">
                Published on {{ $blog->published_at->format('F j, Y') }}
            </p>
        </div>
    </div>

    {{-- Blog Content --}}
    <section class="py-16 md:py-24 bg-[#FFFFFF]">
        <div class="container mx-auto px-6 max-w-3xl">
            <article class="prose prose-sm md:prose lg:prose-lg max-w-none">
                <img src="{{ asset('images/blog/' . ($blog->image ?? 'blog1.png')) }}" 
                    alt="{{ $blog->title }}" 
                    class="w-full h-auto rounded-lg mb-8 shadow-md">
                
                <div class="blog-content text-[#444444] leading-relaxed">
                    {!! nl2br(e($blog->content)) !!}
                </div>
            </article>

            {{-- Back to Blog Button --}}
            <div class="mt-12 pt-8 border-t border-[#888888]/60">
                <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 bg-linear-to-r from-[#0A81CB] via-[#37A2E5] to-[#0A8ACB] hover:bg-linear-to-r hover:from-[#37A2E5] hover:via-[#0A81CB] hover:to-[#37A2E5] text-[#FFFFFF] px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Blog
                </a>
            </div>
        </div>
    </section>

    {{-- Related Posts (Optional) --}}
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-6 max-w-7xl">
            <h2 class="text-lg md:text-xl font-bold text-[#0A81CB] mb-12 text-center">More Blog Posts</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse(\App\Models\Blog::whereNotNull('published_at')->where('id', '!=', $blog->id)->latest('published_at')->take(3)->get() as $related)
                <a href="{{ route('blog.show', $related->slug) }}" class="blog-card bg-[#FFFFFF] rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 flex flex-col group no-underline">
                    <div class="h-40 overflow-hidden">
                        <img src="{{ asset('images/blog/' . ($related->image ?? 'blog1.png')) }}" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                            alt="{{ $related->title }}">
                    </div>

                    <div class="p-4 flex-grow">
                        <h3 class="text-[#1e293b] text-sm font-bold leading-tight mb-2 group-hover:text-[#0A81CB] transition-colors">
                            {{ $related->title }}
                        </h3>
                        <p class="text-[#888888] text-xs leading-relaxed mb-4">
                            {{ $related->excerpt }}
                        </p>
                        
                        <span class="inline-flex items-center text-[#0A81CB] font-bold text-xs hover:translate-x-1 transition-transform">
                            Read more 
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </a>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    {{-- Newsletter --}}
    <x-newsletter />

    {{-- Footer --}}
    <x-footer />
@endsection
