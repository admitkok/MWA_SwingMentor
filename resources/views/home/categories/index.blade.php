<x-site-layout title="Mentors">
    @auth
    <ul class="grid grid-cols-4 gap-4">
    @foreach($categories as $category)
        <li class="block p-2 bg-white rounded text-center font-mono">
            <a href="{{route('home.categories.show', ['id' => $category->id])}}">
                {{$category->name}}
            </a>
        </li>
    @endforeach
    </ul>
    @endauth


</x-site-layout>
