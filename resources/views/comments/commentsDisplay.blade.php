@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <strong>{!!$comment->username!!}</strong>
        <p>{{ $comment->body }}&nbsp&nbsp
            @if(Auth::user()&&Auth::user()->authorize==1)
            <a href="delete/{{ $comment->id }}"><input type="button" style="background-color:red;" value="delete" class="btn btn-danger"></a>
            @endif
        </p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="body" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" style="background-color:yellow;color:blue;" class="btn btn-warning mt-3" value="Reply" />
            </div>
            
        </form>
        @include('comments.commentsDisplay', ['comments' => $comment->replies])
    </div>
    
@endforeach