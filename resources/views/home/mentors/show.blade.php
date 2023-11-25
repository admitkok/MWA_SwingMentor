<x-site-layout title="{{$mentor->name}}">
    @auth
    <div class="flex items-baseline py-9">
        <a href="{{route('home.mentor.toggle-change', $mentor, $user)}}" class="shadow-xl shadow-gray-100/20 bg-gradient-to-r from-blue-500/90 via-green-600/90 to-green-500/90 px-3 py-3 rounded-md hover:bg-white active:bg-gradient-to-r from-blue-300 via-green-600 to-green-300 focus:outline-none focus:ring text-white text-lg font-normal font-mono" aria-current="page">Start now</a>
    </div>
    @endauth
    <ul class="list-disc ml-4 text-white">
        @foreach($mentor->posts as $post)
            <li>
                <a class="underline text-white" href="{{route('posts.show', ['post' => $post])}}">
                    {{$post->title}}
                </a>
            </li>
        @endforeach
    </ul>

</x-site-layout>
