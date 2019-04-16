@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Questions</div>
                @foreach( $questions as $question )
                <div class="card-body">
                   <div class="media">
                    <div class="media-body">
                        <h2 class="mt-0">{{ $question->title }}</h2>
                        {{ str_limit($question->body, 250) }}
                    </div>
                   </div>
                </div>
                @endforeach
            </div>
        </div>
        {{ $questions->links() }}
    </div>
</div>
@endsection
