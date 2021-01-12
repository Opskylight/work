<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
        font{
            color:white;
        }
        input{border:0;
              background-color:#003C9D;
              color:#fff;
              border-radius:10px;
              cursor:pointer;
              float:right;}
        input:hover{
        color:#003C9D;
        background-color:#fff;
        border:2px #003C9D solid;
        }
        </style> 
        <body bgcolor="#f5f5f0">
        
        <h1>評論區</h1>

@foreach($posts as $post)

    {{ $post->content }}
     
    <a href="http://localhost:898/work-1/public/posts/1/edit">
    <input type="button" value="編輯" name="按鈕名稱" style="width:60px;height:20px;"></a>
    <hr />

@endforeach
</body>
