<x-layout>
    <x-slot name="title">
        トップページ
    </x-slot>
<h1>
    <span>投稿ページ</span>
    <a href="{{route('posts.create')}}">[add]</a>

</h1>
    <ul>
       @forelse ($posts as $post)
        <li>
            <a href="{{route('posts.show',$post)}}">{{$post -> title}}</a>

        </li>
       @empty
        <li>空です</li>
       @endforelse
    </ul>
</x-layout>
