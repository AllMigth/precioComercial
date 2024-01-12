<x-layouts.app
    title="Crear nuevo post"
    meta-description="Formulario para crear un nuevo blog post">
  

<h1> Create new post </h1>

<form action="{{ route ('posts.store')}}" method="POST">
    @csrf
    <label >
        Title <br>
        <input name="title" type="text" value="{{old('title')}}">
    </label>   
    @error('title')
    <br>
    <small style="color: red"> {{ $message }} </small>
    @enderror
    <br>
    <label>
        Body <br>
        <textarea name="body">{{old('body')}}</textarea>
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