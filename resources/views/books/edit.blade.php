@extends('layouts.app')

@section('content')

    <div class="container mx-auto flex justify-center items-center min-h-screen">
        <div class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Adicionar Livro</h1>

            <!-- Formulário para Adicionar Livro -->
            <form method="POST" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" value="{{ $book->title }}" required />
        </div>
        <div>
            <label for="genre">Gênero:</label>
            <select id="genre" name="genre" required>
                <option value="Fiction" {{ $book->genre === 'Fiction' ? 'selected' : '' }}>Fiction</option>
                <option value="Non-fiction" {{ $book->genre === 'Non-fiction' ? 'selected' : '' }}>Non-fiction</option>
                <option value="Mystery" {{ $book->genre === 'Mystery' ? 'selected' : '' }}>Mystery</option>
                <option value="Romance" {{ $book->genre === 'Romance' ? 'selected' : '' }}>Romance</option>
                <option value="Science Fiction" {{ $book->genre === 'Science Fiction' ? 'selected' : '' }}>Science Fiction</option>
                <option value="Fantasy" {{ $book->genre === 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
            </select>
        </div>
        <div>
            <label for="isbn">ISBN:</label>
            <input type="text" id="isbn" name="isbn" value="{{ $book->isbn }}" required />
        </div>
        <div>
            <label for="published">Publicado em:</label>
            <input type="date" id="published" name="published" value="{{ $book->published }}" required />
        </div>
        <div>
            <label for="observations">Observações:</label>
            <textarea id="observations" name="observations">{{ $book->observations }}</textarea>
        </div>
        <button type="submit">Atualizar</button>
    </form>
        </div>
    </div>

@endsection