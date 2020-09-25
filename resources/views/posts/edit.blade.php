@extends('posts.layout')

@section('title', 'Окно редактирования')
@section('content') 
    <form method = "post" action = "/public/update/{{$id}}">
        @csrf
        <p><b>Заголовок текста:</b></p>
        <input type="text" name="title" value="{{$title}}"><br><br>
        <p><b>Текст:</b></p>
        <textarea  type="textarea" name="body" rows="10" cols="45">{{$body}}</textarea><br><br>
        <input type="submit">
    </form>
@endsection
