<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/accordion.min.css" integrity="sha512-EW5NoIdxRt4Kx9yB4sh9TKVYOveAOFf8WwjRwQs4ylh1hDueujFGLJtPNjm4zQKwlPk8Q2mYDLte7aK6NS+uoA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/components/accordion.min.js" integrity="sha512-VZ9OKywfKY7qvZnTAsFqNHS6jZ79QmSdfXbzoS3aMy3FpNkDFrR2NJfrHEE4nPQROp4A9u/hB9rTwL0UP5tzHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Article view</title>
</head>
<style>
    body{
        background-color:#282828;
    }

    .ui.fluid.styled.accordion{
        background-color:transparent;
        border:2px solid blueviolet;
        margin:1rem;
        border-radius:5px;
        color:white;
    }
    small{
        color:#606c76;
    }
    h1{
        margin:0px;
    }
    .text{
        padding: 1rem;
        text-align: justify;
    }
    .a{
        padding: 1rem;
    }
</style>
<body>
    <?php foreach($news as $new): ?> <!-- Loop para mostrar o conteudo-->
        
        <div class="ui inverted fluid styled accordion">
            <div class="title">
                <i class="dropdown icon"></i>
                <?= h($new->title) ?>
            </div>
            <div class="content">
                <p class="transition hidden">
                    <table>
                        <tr>
                            <td class="a">
                                <h1><b> <?= h($new->subtitle) ?></b></h1> <p><small>Published in: <?= $new->created->format(DATE_RFC850) ?></small></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="text"> <?= h($new->body) ?></p>
                            </td>
                        </tr>
                    </table>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
    <script>
        $(".ui.accordion").accordion();/**Inicializar o accordion no site */
    </script>
</body>
</html>

