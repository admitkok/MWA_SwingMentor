<x-site-layout title="ADMIN ZONE - MENTORS">
    <a class="underline" href="{{route('admin.mentors.index')}}">Back to the index</a>


    <x-crud-success-message/>


    <p class="font-bold">
        {{$mentor->name}}
    </p>

    <a class="underline" href="{{route('admin.mentors.edit', $mentor)}}">Edit</a>

    <form action="{{route('admin.mentors.destroy', $mentor)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="underline">Delete</button>
    </form>


</x-site-layout>
