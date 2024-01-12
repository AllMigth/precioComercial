<x-layouts.app
    :title="$post -> title"
    :meta-description="$post -> body">
  

<h1> Edit Form </h1>

<form action="{{ route ('posts.update', $post)}}" method="POST">
    @csrf @method('PATCH')
    <label >
        Title <br>
        <input name="title" type="text" value="{{old('title',$post->title)}}">
    </label>   
    @error('title')
    <br>
    <small style="color: red"> {{ $message }} </small>
    @enderror
    <br>
    <label>
        Body <br>
        <textarea name="body">{{old('body',$post->body)}}</textarea>
    </label> 
    @error('body')
    <br>
    <small style="color: red"> {{ $message }} </small>
    @enderror
    <br>
    <button type="submit">Send</button>
</form>

<a href="{{ route ('posts.index')}}">Regresar</a>

</x-layouts.app>