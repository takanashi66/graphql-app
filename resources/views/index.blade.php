<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="icon" href="" type="image/png">
    <title>Document</title>
</head>
<body>
    <h1>登録</h1>

    <form action="{{ route('store') }}" method="post">
        @csrf

        <label for="title">タイトル</label>
        <input type="text" name="title" id="title" value="{{ old('title', isset($post) ? $post->title : '')}}">
        @error('title')<p class="err">{{ $message }}</p>@enderror
        <br>
        <label for="subtitle">サブタイトル</label>
        <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', isset($post) ? $post->subtitle : '')}}">
        @error('subtitle')<p class="err">{{ $message }}</p>@enderror
        <br>
        <label for="body">本文</label>
        <textarea name="body" id="body" cols="30" rows="10">
            {{ old('body', isset($post) ? $post->body : '')}}
        </textarea>
        @error('body')<p class="err">{{ $message }}</p>@enderror
        <br>
        <input type="submit" value="登録">
    </form>

    <style>
        h1{
            text-align: center;
        }
        form{
            display: block;
            max-width: 600px;
            margin: 0 auto;
        }

        label{
            display: block;
            margin-bottom: 5px;
        }

        input[type=text],
        textarea{
            width: 100%;
            display: block;
            padding: .8em;
        }

        .err{
            color: #f00;
            margin-top: 10px;
        }
    </style>
</body>
</html>
