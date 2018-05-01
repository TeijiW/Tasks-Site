<!DOCTYPE html>
<html lang="pt-br">

<head>

    <link rel="stylesheet" href="_css/styles.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">-->
    <meta charset="utf-8"/>
    <title>Random</title>
</head>

<?php
    require_once("db_connect.php");
    require_once("insert.php");
    ?>
<body>
    <div>
    <header>
            <nav class="topnav">
                    <a class="active"href="#home">Home</a>
                    <a href="about">About</a>
                    <a href="options">Options</a>
            </nav>
    <hgroup>
        <h2>Tarefas</h2>
    </hgroup>
    </header>
    </div>
    </br>
    <p class="textclass">
Nesse site, você pode checar quais trabalhos ou tarefas a turma 7131.2A de Informática ainda tem para entregar.
    </p>
<br>
<br>
<div id="box">
<br>
       <table style="width:100%">
            <thead>
                <tr>
                    <th>Matéria</th>
                    <th>Descrição da Tarefa</th>
                    <th>Data para Entrega</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM works";
                $result = mysqli_query($connect, $sql);
                #if (empty(mysqli_fetch_array($result))){
                 #   echo "Vazio";
                 #   }
                while($data = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $data['mat']; ?></td>
                    <td><?php echo $data['homework']; ?></td>
                    <td><?php echo $data['dateofworks']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
                
       </table>
<br>
</div>
<hr>
<form method="post" action="">
<h4>Inserir nova tarefa</h4>
    <input type="text" name="mat" placeholder="Matéria">
    <br>
    <input type="text" name="work" placeholder="Tarefa">
    <br>
    <input type="date" name="date" placeholder="Data de Entrega">
    <br>
    <input type="submit" value="Enviar" name="send">
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>
