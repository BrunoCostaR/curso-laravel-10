<h1>Detalhes da Dúvida {{ $support->id }}</h1>

<ul>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Status: {{ $support->status }}</li>
    <li>Descrição: {{ $support->body }}</li>
</ul>

<form action="{{ route('support.destroy', $support->id) }}" method="POST">
    @method('DELETE')
    @csrf()
    <button type="submit">Excluir</button>
</form>