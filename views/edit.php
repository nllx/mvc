<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
    <title>UPDATE</title>
</head>
<body>

<div class="container bs-docs-container">
<form action="" method="post">
    <div class="form-group">
        <label for="article_title">Title</label>
        <input type="text" class="form-control" id="article_title" name="title" value="<?php echo $data["article_description"];?>">
    </div>
    <div class="form-group">
        <label for="article_description">Description</label>
        <textarea class="form-control" rows="3" name="description"><?php echo $data["article_description"];?></textarea>
    </div>
    <div class="form-group">
        <label for="article_text">Text</label>
        <textarea class="form-control" name="text" rows="15"><?php echo $data["article_text"];?></textarea>
    </div>
    <div class="form-group">
        <label for="article_date">Date</label>
        <input type="date" class="form-control" id="article_date" value="<?php echo $data["article_pubdate"];?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $data["article_id"];?>">
    <select class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
    <button type="submit" name="action" value="postEdit" class="btn btn-default">Submit</button>
</form>
</div>

</body>
</html>