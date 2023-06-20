@extends('layouts.app')


@section('content')
<div class='container'>

  <div class='container'>


<!-- 更新 -->
{!! Form::open(['url' => 'post/create']) !!}

<h5 class='page-header'>名前</h5>
<div class="form-group">
{!! Form::input('text', 'name', null, ['required', 'class' => 'form-control', 'placeholder' => '名前']) !!}
</div>

<h5 class='page-header'>本文</h5>
<div class="form-group">
{!! Form::input('text', 'newPost', null, ['required', 'class' => 'form-control', 'placeholder' => '投稿内容']) !!}
</div>

<div>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</div>

<button type="submit" class="btn btn-success pull-right">投稿</button>

{!! Form::close() !!}
</div>









<div class="col-sm-4" style="padding:20px 0; padding-left:0px;">
<div class=t1>
<h2 class='page-header2'>投稿一覧</h2>
</div>
<!-- 検索 -->
<form class="form-inline" action="{{url('/search')}}">
  <div class="form-group">
  <input type="text" name="keyword"  class="form-control" placeholder="検索ワード">
  </div>
  <input type="submit" value="検索" class="btn btn-info">
</form>
</div>


  <!-- 一覧 -->
@foreach ($lists as $list)
<hr>
<div class=user>
  <span class=name>{{ $list->user_name }}</span>
  <span class=created>{{ $list->created_at }}</span>
</div>
<div class=post>{{ $list->contents}}</div>
<a class="btn btn-primary" href="/post/{{ $list->id }}/update-form">編集</a>
<a class="btn btn-danger" href="/post/{{ $list->id }}/delete"onclick="return confirm('こちらの投稿を削除してもよろしいでしょうか？')">削除</a>
@endforeach

@if (count($lists) === 0)
検索結果は０件です。
@endif



</div>
@endsection

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
