@extends('layouts.app')

@section('content')
<div class="chat-container row justify-content-center">
    <div class="chat-area">
        <div class="card">
            <div class="card-header">Comment</div>
            <div class="card-body chat-card">
                <div id="comment-data"></div>
            </div>
        </div>
    </div>
</div>

<form method="POST" action="{{ route('add') }}">
    @csrf
    <div class="comment-container row justify-content-center">
        <div class="input-group comment-area">
            <textarea class="form-control" placeholder="input massage" aria-label="With textarea" name="comment"></textarea>
            <button type="submit" class="btn btn-outline-primary comment-btn">Submit</button>
        </div>
    </div>
</form>
@endsection
