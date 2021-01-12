
<?php
use App\Models\Post;
use App\Models\Subject;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InspiringController;
$post = App\Models\Post::find(1);
return $post;
{{ $posts->content }}
?>