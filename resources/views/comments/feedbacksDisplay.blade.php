@foreach($feedbacks as $feedback)
    <div class="display-comment">
        <strong>{!!$feedback->username!!}</strong>
        <p>{{ $feedback->text }}&nbsp&nbsp</p>
        {{-- <a href="" id="reply"></a> --}}
        {{-- <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="body" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply" />
            </div>
            
        </form> --}}
        
    </div>
    
@endforeach