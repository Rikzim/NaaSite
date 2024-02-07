<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles Blog</title>
</head>
<body>
    <div class="content">
        <h1>Notícias</h1>
        <?= $this->Html->link('Adicionar artigo',['action' => 'add'], array('class' => 'button-1')) ?>
        <?= $this->Html->link('Ver artigos', ['action' => 'releases'], array('class' => 'button-1')) ?>
        <br>
        <br>
        <table>
            <tr>
                <th>id</th>
                <th>Título</th>
                <th>Data de Publicação</th>
                <th>Opções</th>
            </tr>
            <?php foreach($news as $new): ?>
            <tr>
                <td><?= $new->id ?></td>
                <td><?= $this->Html->link($new->title, ['action' => 'view', $new->id]) ?></td>
                <td><?= $new->created->format(DATE_RFC850) ?></td>
                <td> 
                    <?= $this->Html->link('Editar', ['action' => 'edit', $new->id], array('class' => 'button-1')) ?> 
                    <?= $this->Form->postLink( 'Deletar', ['action' => 'delete', $new->id], array('class' => 'button-1'), ['confirm' => 'Nah, id lose?']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>