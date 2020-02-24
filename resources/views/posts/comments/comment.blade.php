<hr />
@if(auth()->check())

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('comment.store') }}" method="post" class="form">
        @csrf
        <input type="hidden" name="post_id" value="{{$post->id}}">
        <div class="form-group">
            <input type="text" name="title" placeholder="Título" 
                class="form-control" />
        </div>
        <div class="form-group">
            <textarea name="body" class="form-control" id="body" 
                        cols="30" rows="3" placeholder="Seu comentário aqui"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
@else
    <p><a href="{{ route('login') }}">Faça login</a> para comentar</p>
@endif

<hr>
<h2>Comentários</h2>
@forelse ($post->comments->sortByDesc('id') as $comment)
<p> {{ $comment->title }} </p>
<p> {{ $comment->body }} </p>
<hr>
@empty
<p>Seja o primeiro a comentar!</p>   
@endforelse
