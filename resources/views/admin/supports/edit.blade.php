<h1>Editar Dúvida - {{$support->id}}</h1>

<a href="{{route('supports.index')}}">Voltar</a>

@if($errors->any())
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
@endif

<form action="{{route('supports.update', $support->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" placeholder="Assunto" name="subject" value="{{$support->subject}}">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{$support->body}}</textarea>
    <button type="submit">Atualizar</button>
</form>
