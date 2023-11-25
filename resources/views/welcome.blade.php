<x-site-layout title="Elevate your game!">

    <div class="grid grid-cols-2">
        <h2 class="text-3xl font-light font-mono text-white">Swing by Swing</h2>
            <div class="hidden md:block mx-auto max-w-7xl px-9 py-9"></div>
        @guest
                <div class="flex items-baseline py-9">
                    <a href="{{route('register')}}" class="shadow-xl shadow-gray-100/20 bg-gradient-to-r from-blue-500/90 via-green-600/90 to-green-500/90 px-3 py-3 rounded-md hover:bg-white active:bg-gradient-to-r from-blue-300 via-green-600 to-green-300 focus:outline-none focus:ring text-white text-lg font-normal font-mono" aria-current="page">Start now</a>
                </div>
        @endguest

        @auth
            <div class="flex items-baseline py-9">
                <a href="{{route('home.posts.index')}}" class="shadow-xl shadow-gray-100/20 bg-gradient-to-r from-blue-500/90 via-green-600/90 to-green-500/90 px-3 py-3 rounded-md hover:bg-white active:bg-gradient-to-r from-blue-300 via-green-600 to-green-300 focus:outline-none focus:ring text-white text-lg font-normal font-mono" aria-current="page">Start now</a>
            </div>
        @endauth
        <img src="https://img.pikbest.com/ai/illus_our/20230427/d1c07ac4a5b33cfdddb1e5f4ecd7df25.jpg!w700wp" class="right-0 rounded-l h-50 group-hover:scale-110 transition duration-500 cursor-pointer object-cover">
</div>

</x-site-layout>
