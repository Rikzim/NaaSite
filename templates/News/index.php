<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/table.min.css" integrity="sha512-LO7R36eoQTR8mctOTFrAUUGCBiqbouo0mzi5dicyVrW76ECJSI4leeTh3PIX4Hp+09++NA3TVFPRg/0C7viORA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Articles Blog</title>
</head>
<style>
    thead{
        background-color:blueviolet;
        text-align:center;
    }
    tr{
        text-align:center;
    }
</style>
<body>
    <div class="content">
        <h1>Releases</h1>
        <?= $this->Html->link('Adicionar release',['action' => 'add'], array('class' => 'button-1')) ?>
        <?= $this->Html->link('Ver releases', ['action' => 'releases'], array('class' => 'button-1')) ?><!-- LINK PARA VER AS NOTICIAS -->
        <br>
        <br>
        <table class="ui inverted celled table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Data de Publicação</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <?php foreach($news as $new): ?><!-- Loop para mostrar o conteudo-->
            <tbody>
                <tr>
                    <td><?= $new->id ?></td>
                    <td><?= $this->Html->link($new->title, ['action' => 'view', $new->id]) ?></td>
                    <td><?= $new->created->format(DATE_RFC850) ?></td>
                    <td> 
                        <?= $this->Html->link('Editar', ['action' => 'edit', $new->id], array('class' => 'button-1')) ?> 
                        <?= $this->Form->postLink( 'Deletar', ['action' => 'delete', $new->id], array('class' => 'button-1', 'confirm' => 'Deseja deletar?')) ?>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>