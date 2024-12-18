
<div class="container">
    <h1>{{ $book->title }}</h1>
    <p> <strong>Autor:</strong> {{ $book->author->first_name }} {{ $book->author->last_name }} </p>
    <p><strong>Gênero:</strong> {{ $book->genre }}</p>
    <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
    <p><strong>Publicado em:</strong> {{ $book->published }}</p>
    <p><strong>Observações:</strong> {{ $book->observations }}</p>

    
    <a href="{{ route('books.edit', $book->id, 'edit') }}" class="btn btn-warning">Editar</a>
    <form method="POST" action="{{ route('books.destroy', $book->id) }}" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
    
</div>
