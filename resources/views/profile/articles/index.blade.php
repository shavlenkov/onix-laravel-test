@extends('layouts.app')

@section('title', 'Blog - Профіль')

@section('content')
    <a class="btn btn-success mt-4" href="{{ route('profile.articles.create') }}">Створити статтю</a>

    <table class="table table-dark table-bordered table-hover mt-4" border="2">
        <thead>
        <tr class="text-center">
            <th>Текст</th>
            <th>Створено</th>
            <th>Оновлено</th>
            <th>Відредагувати / Видалити</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->text }}</td>
                <td>{{ $article->created_at }}</td>
                <td>{{ $article->updated_at }}</td>
                <td class="text-center">
                    <div class="btn-group">
                        <a class="btn btn-warning" href="{{ route('profile.articles.edit', $article->id) }}">Відредагувати</a>
                        <form method="POST" action="{{ route('profile.articles.destroy',  $article->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Видалити</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $articles->links() }}

@endsection
