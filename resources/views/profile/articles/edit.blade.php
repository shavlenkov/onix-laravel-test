@extends('layouts.app')

@section('title', 'Blog - Відредагувати статью')

@section('content')
    <div class="row">
        <div class="col-lg-4 mx-auto mt-4">
            <h3 class="text-center">Відредагувати статью</h3>
            <form class="form-group" method="POST" action="{{ route('profile.articles.update', $article->id) }}">
                @csrf
                @method('PUT')
                <textarea class="form-control" placeholder="Текст статті" style="resize: none" name="text" id="" cols="50" rows="10">
                    {{ $article->text }}
                </textarea>
                <br/>
                <button type="submit" class="btn btn-primary">Відредагувати</button>
            </form>
        </div>
    </div>
@endsection
