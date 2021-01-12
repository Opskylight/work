
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<style>
        input:hover{
            color:#003C9D;
            background-color:#fff;
            border:3px #003C9D solid;
            }
        input{border:0;
                background-color:#003C9D;
                color:#fff;
                border-radius:10px;
                cursor:pointer;
                float:left;}
</style>
<body bgcolor="#f5f5f0">
<h1>編輯文章</h1>
<form action="{{ route('posts.update', [ 'post' => $post]) }}" method="POST">

    @method('PUT')

    @csrf

    <label>內容：

        <textarea name="content">{{ $post->content }}</textarea>

    </label><br>
    <input type="submit" value="送出文章">
</form>
<form action="{{ route('posts.destroy', [ 'post' => $post]) }}" method="POST">

    @method('DELETE')

    @csrf
    <input type="submit" value="刪除文章">

</form>
</body>