<x-site-layout title="Leaderboard">
    <p class="mb-6">We currently have {{$users->count()}} active authors</p>
    <ul class="grid grid-cols-1 gap-4">
        @foreach($users as $user)
            @if($user->author->name)
            <li class="block p-2 shadow-sm bg-white rounded-lg">
                <a class="flex justify-between" href="{{route('users.show', ['id' => $user->id])}}">
                    <h2 class="font-bold text-lg" >{{$user->name}}</h2>
                    <span>{{$user->points}}</span>
                </a>
            </li>
            @endif
        @endforeach
    </ul>
</x-site-layout>
