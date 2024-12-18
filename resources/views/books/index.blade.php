
    <h1>Biblioteca</h1>

    <!-- Adicionar Livro -->
    <p><a href="{{ route('books.create') }} ">Adicionar Livro</a></p>

    <!-- Barra de pesquisa -->
    <form method="GET" action="{{ route('books.index') }}">
        <input type="text" name="search" placeholder="Pesquisar livros" value="{{ request('search') }}" />
        <button type="submit">Search</button>
    </form>

    <h1>Livros</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Genero</th>
                <th>ISBN</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <td><a href="{{ route('books.show', $book->id) }}">{{ $book->id }}</a></td>
                <td>{{ $book->title }}</td>
                <td> <a href=""> {{ $book->author->first_name }} {{ $book->author->last_name }} </a></td>
                <td> {{ $book->genre }} </td>
                <td> {{ $book->isbn }} </td>
            </tr>
        @endforeach
        </tbody>
    </table>

