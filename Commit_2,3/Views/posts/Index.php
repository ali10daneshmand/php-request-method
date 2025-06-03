<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1>List of popsts</h1>
    <?php
    use App\Model\Post;
    $posts = Post::where('user_id',$_SESSION['user_id'])->get(); 
    ?>
    <div>
        <a href="/WebProgramming/post/create"
           class="btn btn-success">
            Add New Post
        </a>
    </div>
    <table class="table table-bordered">
        <thead>
            <th>#</th>
            <th>Title</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($posts as $post):?>
            <tr>
                <td><?= $post->id ?></td>
                <td><?= $post->title ?></td>
                <td>
                    <a class="btn btn-primary" 
                    href="/WebProgramming/post/show?id=<?=$post->id?>">Show</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>