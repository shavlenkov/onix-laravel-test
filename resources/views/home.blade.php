@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <div class="row">
        @foreach($articles as $article)
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-text w-50">{{$article->text}}</p>
                            <p class="card-text text-end">{{$article->created_at}}</p>
                        </div>
                        <a href="#">{{$article->user->login}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $articles->links() }}

@endsection
