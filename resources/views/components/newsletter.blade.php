<section class="py-16 bg-white">
    <div class="container mx-auto px-8">
        <div class="max-w-6xl mx-auto bg-[#f5f9fb] rounded-2xl py-24 px-8 lg:px-20 shadow-lg">
            <div class="text-center mb-12">
                <h2 class="text-[#334155] text-3xl lg:text-5xl font-bold tracking-tight">
                    Get Latest Update and Offers.
                </h2>
            </div>

            <form action="#" method="POST" class="flex flex-col lg:flex-row items-center justify-center gap-6">
                @csrf
                <div class="w-full lg:w-1/3">
                    <input 
                        type="text" 
                        name="name" 
                        placeholder="Your Name" 
                        class="w-full px-6 py-4 rounded-xl bg-white border-none text-gray-400 placeholder-gray-300 focus:ring-2 focus:ring-blue-100 shadow-[0_10px_30px_rgba(0,0,0,0.03)] transition-all outline-none"
                        required
                    >
                </div>

                <div class="w-full lg:w-1/3">
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Your Email" 
                        class="w-full px-6 py-4 rounded-xl bg-white border-none text-gray-400 placeholder-gray-300 focus:ring-2 focus:ring-blue-100 shadow-[0_10px_30px_rgba(0,0,0,0.03)] transition-all outline-none"
                        required
                    >
                </div>

                <div class="w-full lg:w-auto">
                    <button 
                        type="submit" 
                        class="w-full lg:w-auto px-12 py-4 bg-[#0A81CB] hover:bg-[#086ba8] text-white font-bold rounded-xl shadow-[0_10px_25px_rgba(10,129,203,0.3)] transition-all transform active:scale-95"
                    >
                        Subscribe
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>