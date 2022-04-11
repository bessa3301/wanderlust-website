<x-layout>

    <livewire:title-and-video title="{{ __('get-involved.title1') }}"
        gifPath='https://giphy.com/embed/1L9AwWrIhDFbBX9AZl' />

    <div class="m-4 flex justify-center items-center">
        <button class="p-4 rounded-md hover:bg-wsorange-100 transition bg-wsblue-100 text-white">
            {{ __('get-involved.donate-button') }}
        </button>
    </div>

    <livewire:title-and-content title="{{ __('get-involved.title2') }}"
        content="{{ __('get-involved.content2') }}" />

    <livewire:title-and-content title="{{ __('get-involved.title3') }}"
        content="{{ __('get-involved.content3') }}" />


    <!-- section - carrousel -->
    <div class="bg-wsorange-100 text-white">
        <h2>
            Supporters
        </h2>

        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <x-carrousel-item-numbered number="Amazon"
                            message="recusandae ducimus asperiores dicta impedit" />
                    </li>
                    <li class="splide__slide">
                        <x-carrousel-item-numbered number="McKinkley" message="Qui nobis harum quia dolorem" />
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

</x-layout>
