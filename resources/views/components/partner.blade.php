<section class="bg-[#FFFFFF] py-8 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-8">
                
                <div class="whitespace-nowrap z-10 bg-[#FFFFFF] pr-8">
                    <p class="text-[#0A81CB] text-lg lg:text-xl">
                        We're trusted by
                    </p>
                </div>

                <div 
                    x-data="{ 
                        scroll: 0,
                        speed: 0.5,
                        init() {
                            const loop = () => {
                                this.scroll -= this.speed;
                                if (Math.abs(this.scroll) >= this.$refs.slider.scrollWidth / 2) {
                                    this.scroll = 0;
                                }
                                this.$refs.slider.style.transform = `translateX(${this.scroll}px)`;
                                requestAnimationFrame(loop);
                            };
                            loop();
                        }
                    }"
                    class="relative flex-1 overflow-hidden [mask-image:linear-gradient(to_right,transparent,black_10%,black_90%,transparent)]"
                >
                    <div 
                        x-ref="slider" 
                        class="flex items-center gap-12 lg:gap-20 w-max"
                    >
                        @php
                            $logos = ['specstech.png', 'zallasoft.png', 'elabsafrica.png', 'jtech.png'];
                            // Duplicate here for the purpose of scrolling
                            $displayLogos = array_merge($logos, $logos);
                        @endphp

                        @foreach($displayLogos as $logo)
                            <div class="flex-shrink-0">
                                <img 
                                    src="{{ asset('images/partners/' . $logo) }}" 
                                    alt="Partner Logo" 
                                    class="h-20 lg:h-20 w-auto opacity-80 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-300 object-contain"
                                >
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>