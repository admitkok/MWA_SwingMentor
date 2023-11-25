<x-site-layout title="Mentors">
    @auth
    <ul class="grid grid-cols-4 gap-4">
    @foreach($mentors as $mentor)
        <li class="block p-2 bg-white rounded text-center font-mono">
            <a href="{{route('home.mentors.show', ['id' => $mentor->id])}}">
                {{$mentor->name}}
            </a>
        </li>
    @endforeach
    </ul>
    @endauth


</x-site-layout>
