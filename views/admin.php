<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админ панель</title>
</head>
<body>
<table border="1">
    <?php foreach($data as $article): ?>
    <tr>
        <td class="id"><h2><?php echo $article["article_id"]; ?></h2></td>
        <td class="title"><h2><?php echo $article["article_title"]; ?></h2></td>
        <td class="date"><?php echo $article["article_pubdate"]; ?></td>
        <td class="form">
            <form action="/blog/admin/form" method="post">
                <input type="hidden" name="id" value="<?php echo $article["article_id"]; ?>">
                <input type="submit" name="action" value="edit"><br>
                <input type="submit" name="action" value="delete">
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>