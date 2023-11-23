<x-site-layout title="Featured swings">

    <div class="my-4">
        {{$posts->links()}}
    </div>

    <ul class="grid grid-cols-4 gap-4">
    @foreach($posts as $post)

        <li class="shadow-lg shadow-gray-100/30 bg-gray-100 hover:shadow-lg rounded-lg grid grid-rows-2 grid-cols-1 md:grid-rows-1 overflow-hidden justify-end items-end">

            <a href="{{route('posts.show', ['post' => $post])}}" class="h-full bg-red-50 rounded-l overflow-hidden">
                <video height="auto" width="300" autoplay muted  class="rounded-l h-full group-hover:scale-110 transition duration-500 cursor-pointer object-cover ">
                       <source src="{{$post->media->first() ? $post->media->first()->getUrl() : "demo.mp4"}}" type="video/mp4">
                </video>
            </a>

            <div class="col-span-2 p-2">
                <div class="flex gap-x-2 mb-2">
                    @foreach($post->categories as $category)
                        <a href="{{route('categories.show', ['id' => $category->id])}}" class="uppercase bg-gradient-to-r from-blue-500/90 via-green-600/90 to-green-500/90 hover:bg-teal-600 text-white text-center rounded-full py-1 px-4 text-xs">
                            {{$category ? $category->name : 'Tiger Woods'}}
                        </a>
                    @endforeach
                        @ray($post->media->first())
                </div>

                <a href="{{route('posts.show', ['post' => $post])}}" class="">
{{--                    <h2 class="font-bold text-lg line-clamp-1" >{{$post->title}}</h2>--}}
                    <span class="">{{$post->author?->name ?? 'UNKNOWN AUTHOR' }}</span>
{{--                    <span class="text-teal-500 mx-1">|</span>--}}
{{--                    <span>{{$post->published_at->format('Y-m-d H:i')}}</span>--}}

{{--                    <div class="px-1 pt-2 line-clamp-3">--}}
{{--                        {{ Str::limit($post->body, 200) }}--}}
{{--                    </div>--}}
                </a>


            </div>

        </li>
    @endforeach
    </ul>

</x-site-layout>
