<x-layout>
<x-slot name="title">
        Edit Post - 編集ページ
    </x-slot>
<div class="back-link">
        &laquo;<a href = "{{route('posts.show',$post)}}">Back</a>
    </div>
    <h1> Edit Post - 編集ページ</h1>
<form action="{{route('posts.update',$post)}}" method="post">
    @method('PATCH')
    @csrf
    <p>Title</p>
    <input type="text" name="title" value="{{old('title',$post -> title)}}">
    @error('title')
    <div class="error">{{$message}}</div>

    @enderror
    <p>
        Body
    </p>
        <textarea name="body"> {{old('body',$post -> body)}}</textarea>
    @error('body')
    <div class="error">{{$message}}</div>

    @enderror

    <button>update</button>

</form>
</x-layout>
