<x-layout meta-title="Blog" meta-descrion="Blog Description">
    <h1>Blog</h1>
    @foreach ($posts as $post)
        <h2>{{ $post["title"] }}</h2>
    @endforeach
</x-layout>