

<x-site-layout title="ADMIN ZONE - CATEGORIES - EDIT">


    <form action="{{route('admin.mentors.update', $mentor->id)}}" method="post">

        @csrf
        @method('PUT')

        <x-crud-input-field name="name" label="Category name" value="{{$mentor->name}}" placeholder="..."/>

        <button type="submit">Update</button>
    </form>

</x-site-layout>
