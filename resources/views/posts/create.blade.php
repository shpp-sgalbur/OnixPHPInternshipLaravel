@extends('posts.layout')
@section('title', 'Окно создания нового блога')
@section('content') 
    <form method = "post" action = "/public/store">
        @csrf
        <p><b>Заголовок текста:</b></p>
        <input type="text" name="title"><br><br>
        <p><b>Текст:</b></p>
        <textarea  type="textarea" name="body" rows="10" cols="45"></textarea><br><br>
        <input type="submit">
    </form>
@endsection
