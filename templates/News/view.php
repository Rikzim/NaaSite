<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article view</title>
</head>
<style>
    .cont{
        padding:2.5rem;
    }
    .text{color:white;}
    h1,h3{margin:1px;}
</style>
<body>
    <div class="cont">
        <table>
            <tr>
                <td>
                    <h1><b><?= h($new->title) ?></b></h1> 
                    <h3><b> <?= h($new->subtitle) ?></b></h3> <p><small>Published in: <?= $new->created->format(DATE_RFC850) ?></small></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="text"> <?= h($new->body) ?></p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>