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
            border:2px #003C9D solid;
            }
        input{border:0;
                background-color:#003C9D;
                color:#fff;
                border-radius:10px;
                cursor:pointer;}
        </style>
    </head>
    <body>
        <h1>偶速第一個新聞</h1>
        <<div class="form-group">
            <label for="ttt">發表你的評論</label>
            <textarea id="ttt" class="form-control" name="in" rows="3"></textarea>
            <input type="button" value="送出" name="按鈕名稱" style="width:150px;height:50px;">
        </div>
    </body>