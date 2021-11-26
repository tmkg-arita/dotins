<x-layout>
<x-slot name="title">
        Add New Posts - トップページ
    </x-slot>
<div class="back-link">
        &laquo;<a href = "{{route('posts.create')}}">Back</a>
    </div>
    <h1> Add New Posts - トップページ</h1>
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <p>Title</p>
    <input type="text" name="title" value="{{old('title')}}">
    @error('title')
    <div class="error">{{$message}}</div>

    @enderror
    <p>
        Body
    </p>
        <textarea name="body"> {{old('body')}}</textarea>
    @error('body')
    <div class="error">{{$message}}</div>

    @enderror

    <button>Add</button>

</form>
</x-layout>
