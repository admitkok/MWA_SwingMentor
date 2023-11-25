<x-site-layout title="{{$user->name}}">
    <div class="text-gray-300">
    {{$user->email}}
    {{$user->created_at}}
    </div>
    @ray($user)
    <h2 class="font-bold text-gray-300">Posts by this author</h2>
    <ul class="list-disc ml-5 text-gray-300 underline">
        @foreach($user->posts as $post)
            @ray($post)
            <li>
                <a href="{{route('posts.show', ['post' => $post->slug])}}">{{$post->title}}</a>
            </li>
        @endforeach

    </ul>
</x-site-layout>
