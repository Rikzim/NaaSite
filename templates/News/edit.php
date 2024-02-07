<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr>
            <td><h1>Edit News</h1></td>
        </tr>
        <tr>
            <td>
                <?php
                    echo $this->Form->create($new);
                    echo $this->Form->input('title', array(
                        'placeholder'=>'Add a Title',
                        'style' =>'
                        background-color:transparent;
                        height : 45px;
                        width : 500px;
                        border-radius: 5px;
                        padding:15px;
                        border: 2px solid blueviolet;
                        '
                    ));
                ?>
                <br>
                <?php
                    echo $this->Form->input('subtitle', array(
                        'placeholder'=>'Add a Subtitle',
                        'style' =>
                        '
                        background-color:transparent;
                        height : 45px;
                        width : 500px;
                        border-radius: 5px;
                        padding:15px;
                        border: 2px solid blueviolet;
                        '
                    ));
                ?>
                <br>
                <?php
                    echo $this->Form->input('body', array(
                        'style' =>
                        '
                        background-color:transparent;
                        width : 500px;
                        height: 150px;
                        border-radius: 5px;
                        padding:15px;
                        border: 2px solid blueviolet;
                        ',
                        'type' => 'textarea'
                    ));
                ?>
                <br>
                <?php
                echo $this->Form->button(__('Salvar artigo')); echo $this->Form->end();
                ?>  
            </td>
        </tr>
    </table>   
</body>
</html>