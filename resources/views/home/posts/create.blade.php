<x-site-layout title="Create new post">

    <form action="{{route('home.posts.store')}}" method="post" enctype="multipart/form-data">

        @csrf

        <x-crud-input-field name="title" label="Title" placeholder="..."/>

        <br/>

        <x-crud-textarea name="body" label="Your post" placeholder="Just start typing" />

        <br/>
        <label for="file">File</label>
        <input name="video" type="file" />
        <br/>

        <button class="text-white" type="submit">Create</button>
    </form>

</x-site-layout>
