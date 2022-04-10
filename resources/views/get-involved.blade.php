<x-layout>

    @livewire('title-and-video',[
    'title' => 'GET INVOLVED ... text',
    'gifPath' => 'https://giphy.com/embed/1L9AwWrIhDFbBX9AZl',
    ])

    @livewire('title-and-content', [
    'title' => 'More about getting involved',
    'content' =>
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique alias rem cum neque sapiente nesciunt!
    Ipsum, cumque. Eveniet neque, consequatur quas earum praesentium quis minima numquam distinctio reprehenderit hic
    cum tenetur rerum maxime, ratione vel tempore? Eaque similique nisi tenetur fuga excepturi, ullam, eos, omnis sed
    amet deleniti exercitationem?'
    ])

    @livewire('title-and-content', [
    'title' => 'some more stuff you guys want to talk about idk',
    'content' =>
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique alias rem cum neque sapiente nesciunt!
    vel tempore? Eaque similique nisi tenetur fuga excepturi, ullam, eos, omnis sedamet deleniti exercitationem?'
    ])

</x-layout>
