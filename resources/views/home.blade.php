@extends('layouts.app')

@section('content')
<div class="chat-container row justify-content-center">
    <div class="chat-area">
        <div class="card">
            <div class="card-header">Comment</div>
            <div class="card-body chat-card">
                <div class="media">
                    <div class="media-body comment-body">
                        <div class="row">
                            <span class="comment-body-user">ダミータイトル</span>
                            <span class="comment-body-time">2020-01-06 12:16:45</span>
                        </div>
                        <span class="comment-body-content">ダミーの内容</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form method="" action="">
    <div class="comment-container row justify-content-center">
        <div class="input-group comment-area">
            <textarea class="form-control" placeholder="input massage" aria-label="With textarea" name="comment"></textarea>
            <button type="submit" class="btn btn-outline-primary comment-btn">Submit</button>
        </div>
    </div>
</form>
@endsection
