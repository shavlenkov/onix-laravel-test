@extends('layouts.app')

@section('title', 'Blog - Створити статью')

@section('content')
    <div class="row">
        <div class="col-lg-4 mx-auto mt-4">
            <h3 class="text-center">Створити статью</h3>
            <form class="form-group" method="POST" action="{{ route('profile.articles.store') }}">
                @csrf
                <textarea class="form-control" placeholder="Текст статті" style="resize: none" name="text" id="" cols="50" rows="10">
                    {{ old('text') }}
                </textarea>
                <br/>
                <button type="submit" class="btn btn-primary">Створити</button>
            </form>
        </div>
    </div>
@endsection
