@extends('layouts.app')

@section('content')
<div class='container'>

<h2 class='page-header'>投稿内容を変更する</h2>

{!! Form::open(['url' => '/post/update']) !!}

{!! Form::hidden('id', $post->id) !!}

<h5 class='page-header'>名前</h5>
<div class="form-group">
{!! Form::input('text', 'name', $post->user_name, ['required', 'class' => 'form-control']) !!}
</div>

<h5 class='page-header'>本文</h5>
<div class="form-group">
{!! Form::input('text', 'upPost', $post->contents, ['required', 'class' => 'form-control']) !!}
</div>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
<button type="submit" class="btn btn-primary pull-right">更新</button>

{!! Form::close() !!}

</div>


@endsection


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>


</html>
