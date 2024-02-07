<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article view</title>
</head>
<body>
    <?php foreach($news as $new): ?>
        <table>
            <tr>
                <td>
                    <h1> <?= h($new->title) ?></h1>
                    <h2> <?= h($new->subtitle) ?></h2> <p><small>Published in: <?= $new->created->format(DATE_RFC850) ?></small></p><br>
                </td>
            </tr>
            <tr>
                <td>
                    <p> <?= h($new->body) ?></p>
                </td>
            </tr>
        </table>
    <?php endforeach; ?>
</body>
</html>