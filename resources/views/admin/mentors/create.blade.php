

<x-site-layout title="ADMIN ZONE - CATEGORIES">

    <form action="{{route('admin.mentors.store')}}" method="post">

        @csrf

        <x-crud-input-field name="name" label="Mentor name" placeholder="..."/>

        <button type="submit">Create</button>
    </form>

</x-site-layout>
