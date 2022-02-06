<x-layout>

    <!-- section -->
    <div class="relative">
        <img src="https://via.placeholder.com/1080x1920">

        <!-- text -->
        <div class="absolute bottom-36">
            <h2 class="text-2xl p-2 text-center">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aliquam illum voluptatum velit.
            </h2>
        </div>

        <!-- cta -->
        <div class="absolute bottom-10 left-1/3">
            <a class="text-center bg-wsorange-100 text-wsblue-100 py-4 p-3 rounded-lg" href="">
                APPLY NOW!
            </a>
        </div>
    </div>

    <!-- section -->
    <div class="relative">
        <img src="https://via.placeholder.com/1920x1080">

        <!-- text -->
        <div class="absolute bottom-10">
            <h2 class="text-2xl p-6 font-extrabold">
                voluptate quibusdam, quae cupiditate dolore ipsam.
            </h2>
        </div>
    </div>

    <!-- section - carrousel -->
    <div class="bg-wsorange-100 text-white">
        <h2>Processo de seleção</h2>

        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div>
                            <img src="https://via.placeholder.com/1080">
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div>
                            <img src="https://via.placeholder.com/1080">
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div>
                            <img src="https://via.placeholder.com/1080">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        new Splide('.splide').mount();
    </script>

</x-layout>
