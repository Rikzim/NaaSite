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
                        color:white;
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
                        color:white;
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
                        color:white;
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
                echo $this->Form->button(__('Salvar artigo'), array('style' => '
                color: white;
                    background-color: blueviolet;
                    width: 200px;
                    height: 55px;
                    border-radius:5px;
                    border:none;
                    font-size:15px;
                ', 'class' => 'button-3'));
                echo $this->Form->end();
                ?>  
            </td>
        </tr>
    </table>   
</body>
</html>