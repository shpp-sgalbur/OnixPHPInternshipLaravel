                                                                                                                                                                                                                                                                @extends('posts.layout')

@section('title')
    Защищенная страница
@endsection
@section('content') 

        
        <p><b>Что бы получить доступ к странице, вам необходимо войти или зарегистрироваться</b></p>
        <form><p><button formaction="/dashboard" formmethod="get" >Ok</button></p></form>
        
       
    
@endsection
