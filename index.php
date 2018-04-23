<!DOCTYPE html>

<?php
    require_once("db_connect.php");

    if(isset($_POST["send"])):
        $errors = array();
        $dbmat = mysqli_escape_string($connect, $_POST["mat"]);
        $dbwork = mysqli_escape_string($connect, $_POST["work"]);
        $dbdate = mysqli_escape_string($connect, $_POST["date"]);

        if(empty($dbmat) or empty($dbwork) or empty($dbdate)):
            $errors[] = "Preencha todos os campos <br>";
        else:
            $sql = "SELECT * FROM works";
            $result = mysqli_query($connect, $sql);

            /*if(mysqli_num_rows($result) > 0):
                $errors[] = "Tarefa já existente <br>";
            else: 
                $sql = "INSERT INTO works (mat,homework,dateofworks); VALUES ($dbmat, $dbwork, $dbdate)";
            endif; */
            $sql = "INSERT INTO works (mat,homework,dateofworks); VALUES ('MATERIA', $dbwork, $dbdate)";
            if (mysqli_query($connect, $sql)):
                echo("Dados inseridos");
            else:
                echo("Deu merda");
            endif;
        endif;
    endif;
        
?>
<html lang="pt-br">

<head>

    <link rel="stylesheet" href="_css/styles.css">
    <meta charset="utf-8"/>
    <title>Random</title>
</head>
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
    <?php
       $sql = "SELECT * FROM works";
       $result = mysqli_query($connect, $sql);
       $dates = mysqli_fetch_array($result);
       echo $dates;
    ?>
<br>
</div>
<hr>
<form method="post" action="">
<h4>Inserir nova tarefa</h4>
    <input type="text" name="mat" placeholder="Matéria">
    <br>
    <input type="text" name="work" placeholder="Tarefa">
    <br>
    <input type="text" name="date" placeholder="Data de Entrega">
    <br>
    <input type="submit" value="Enviar" name="send">
</form> 
</body>
</html>