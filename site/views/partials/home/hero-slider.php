    <!--===== start wpo-hero-slider =====-->
    <section class="wpo-hero-slider">
        <div class="swiper-container">
            <div class="relative w-full h-screen overflow-hidden">
                <video
                    class="absolute top-0 left-0 w-full h-full object-cover"
                    autoplay
                    loop
                    muted
                    playsinline>
                    <source src="<?= $assets ?>/videos/landing-video.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>

                <!-- Overlay content similar to slider text -->
                <!-- <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
					<div class="text-center text-white px-4">
					<h2 class="text-3xl md:text-5xl font-bold leading-tight">
						Innovation in Every Line, Strength 
						<span class="inline-block align-middle">
						<img src="<?= $assets ?>/images/slider/hero-text.jpg" alt="" class="inline w-28 md:w-36" />
						</span> 
						in Every Build
					</h2>
					</div>
				</div> -->
            </div>

            <!-- <div class="swiper-pagination"></div> -->
        </div>
        <a href="#about" class="scroll-btn">
            <span>Scroll For More</span>
            <div class="scroll-befor">
                <img src="<?= $assets ?>/images/down-arrow.svg" alt="">
            </div>
        </a>
    </section>