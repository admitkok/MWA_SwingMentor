<x-site-layout title="{{$post->title}}">

    <video  width=50% height="auto" autoplay muted  class="rounded-l h-full group-hover:scale-110 transition duration-500 cursor-pointer object-cover ">
        <source src="{{$post->media->first() ? $post->media->first()->getUrl() : "demo.mp4"}}" type="video/mp4">
    </video>
    <div class="py-7">
    @foreach($post->categories as $category)
        <a href="{{route('categories.show', ['id' => $category->id])}}" class="bg-gradient-to-r from-blue-500/90 via-green-600/90 to-green-500/90 mb-4 text-white rounded-full py-1 px-4 text-sm">
            {{$category->name}}
        </a>
    @endforeach
    </div>
    <div class="mb-2 text-white font-semibold">
        by: <a class="underline" href="{{route('users.show', ['id' => $post->author->id])}}">{{$post->author->name}}</a>
    </div>
    <div class="mb-2 text-white">
    {{$post->published_at}}
    </div>
{{--    {{$post->body}}--}}
</x-site-layout>
