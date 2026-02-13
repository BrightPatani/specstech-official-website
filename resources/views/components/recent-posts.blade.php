@props(['blogs' => null])

{{-- recent post --}}
<section class="bg-[#FFFFFF] py-8 lg:py-24 overflow-hidden" id="blog-section">
    <div class="container mx-auto px-6 lg:px-8">
        
        <div class="text-center mb-16 blog-header">
            <h2 class="text-[#0A81CB] text-lg lg:text-xl font-bold leading-tight">
                Recent Blog Post
            </h2>
            <p class="text-gray-800 text-xs mt-4 font-medium">
                Gain Value Reading Through Our Tech Blog
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @forelse($blogs ?? collect() as $blog)
                <div class="blog-card group bg-[#FFFFFF] rounded-2xl h-auto p-4 shadow-[0_10px_50px_rgba(0,0,0,0.06)] transition-all duration-500 hover:shadow-[0_20px_70px_rgba(0,0,0,0.12)] hover:-translate-y-2 border border-gray-50">
                    <div class="overflow-hidden rounded-xl h-[350px]">
                        <img 
                            src="{{ asset('images/blog/' . $blog->image) }}" 
                            alt="{{ $blog->title }}" 
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        >
                    </div>

                    <div class="py-6 px-2">
                        <h3 class="text-[#000000] text-xs font-bold leading-tight mb-4">
                            {{ $blog->title }}
                        </h3>
                        <p class="text-gray-500 text-xs leading-relaxed mb-6">
                            {{ $blog->excerpt }}
                        </p>
                        
                        <a href="{{ route('blog.show', $blog->slug) }}" class="inline-flex items-center text-[#0A81CB] text-[1rem] font-bold transition-all hover:gap-2">
                            Read more
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-12">
                    <p class="text-gray-500 text-base">No blog posts available at the moment.</p>
                </div>
            @endforelse
        </div>

        <div class="text-right blog-footer">
            <a href="{{ route('blog') }}" class="inline-flex items-center text-[#0A81CB] font-bold text-lg hover:gap-2 transition-all">
                See more
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</section>
