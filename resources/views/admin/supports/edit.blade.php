<h1>Editar Dúvida - {{$support->id}}</h1>

<form action="{{route('')}}" method="POST">
    @csrf

    <input type="text" placeholder="Assunto" name="subject" value="{{$support->subject}}">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{$support->body}}</textarea>
    <button type="submit">Editar</button>
</form>
