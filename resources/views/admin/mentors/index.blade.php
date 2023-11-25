<x-site-layout title="ADMIN ZONE - MENTORS">
    <a class="underline" href="{{route('admin.mentors.create')}}">Create a mentor</a>

    <hr/><br/>

    <x-crud-success-message/>

    <ul>
        @foreach($mentors as $mentor)
            <li>
                {{$mentor->name}} -
                <a class="underline" href="{{route('admin.mentors.show', $mentor)}}">show</a>
                <a class="underline" href="{{route('admin.mentors.edit', $mentor)}}">edit</a>
            </li>
        @endforeach
    </ul>

</x-site-layout>
