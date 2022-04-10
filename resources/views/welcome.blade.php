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

    <!-- video - section -->
    <div class="relative">
        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/ZZ_4gzoDDAE?controls=0&autoplay=1"
            title="YouTube video player" frameborder="0" disablekb="1"></iframe>

        <div class="absolute bottom-3">
            <h2 class="text-2xl p-6 font-extrabold text-white">
                texto exemplo acima do video
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
                        <x-carrousel-item-numbered number="01" message="recusandae ducimus asperiores dicta impedit" />
                    </li>
                    <li class="splide__slide">
                        <x-carrousel-item-numbered number="02" message="Qui nobis harum quia dolorem" />
                    </li>
                    <li class="splide__slide">
                        <x-carrousel-item-numbered number="03" message="elit. Odio cupiditate neque" />
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        new Splide('.splide', {
            rewind: true,
            drag: true,
            lazyLoad: 'nearby',
            heightRatio: 1,
            direction: 'ttb',
            wheel: true,
            releaseWheel: true,
        }).mount();
    </script>

    <!-- Leaders section -->
    <section class="my-7 mx-4">

        <div class="mx-auto pt-2 pb-4 flex justify-center">
            <h1 class="text-2xl"> <b> {TITULO SECAO FOUNDERS} </b> </h1>
        </div>

        <figure class="p-3 mb-8 rounded-lg shadow-lg shadow-slate-300 border-t border-gray-300">
            <div class="flex justify-around items-center">
                <img class="rounded-full h-40 w-40" src="https://via.placeholder.com/300" alt="profile">
                <span class="text-xl"> <b> {NOME LIDER 1} </b> </span>
            </div>
            <p class="py-2 mx-auto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum atque officiis ad
                ullam? Tempora exercitationem placeat nemo saepe quis explicabo!
            </p>
        </figure>

        <figure class="p-3 mb-8 rounded-lg shadow-lg shadow-slate-300 border-t border-gray-300">
            <div class="flex justify-around items-center">
                <span class="text-xl"> <b> {NOME LIDER 2} </b> </span>
                <img class="rounded-full h-40 w-40" src="https://via.placeholder.com/300" alt="profile">
            </div>
            <p class="py-2 mx-auto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum atque officiis ad
                ullam? Tempora exercitationem placeat nemo saepe quis explicabo!
            </p>
        </figure>

    </section>

    <!-- Insta Reels section -->
    <section class="my-12 space-y-12">
        <x-reel-card mediaPath="https://via.placeholder.com/1080x1920.png?text=instagram+reel+placeholder"
            message="TEXTO PARA ACOMPANHAR REEL INSTAGRAM" />
        <x-reel-card mediaPath="https://via.placeholder.com/1080x1920.png?text=instagram+reel+placeholder"
            message="TEXTO PARA ACOMPANHAR REEL INSTAGRAM" />
    </section>


</x-layout>
