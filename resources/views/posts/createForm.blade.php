<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8"'>
<link rel='stylesheet' href='/css/app.css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>


<header>
<h1 class='page-header'>投稿</h1>
</header>



<div class='container'>

<h2 class='page-header'>新しく投稿する</h2>

{!! Form::open(['url' => 'post/create']) !!}

<h5 class='page-header'>名前</h5>
<div class="form-group">
{!! Form::input('text', 'name', null, ['required', 'class' => 'form-control', 'placeholder' => '名前']) !!}
</div>

<h5 class='page-header'>本文</h5>
<div class="form-group">
{!! Form::input('text', 'newPost', null, ['required', 'class' => 'form-control', 'placeholder' => '投稿内容']) !!}

</div>


<button type="submit" class="btn btn-success pull-right">投稿</button>

{!! Form::close() !!}

</div>



<footer>
<small>Laravel@crud.curriculum</small>
</footer>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>


</html>
