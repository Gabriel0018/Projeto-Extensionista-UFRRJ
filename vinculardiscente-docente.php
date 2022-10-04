
<?php
require_once 'models/Projeto.php';
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipo'] != 'professor') {
    header('Location: index.php?nao_autorizado=true');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon/sigaa.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

    <style>
        @media screen and (max-width: 670px){
            .cabecalho{
                display: block;
            }
        }
    </style>

    <title>Área | Docente</title>
</head>
<body>
    <main>
        <div class="principal">
            <div class="cabecalho_ufrrj">
                <p>UFRRJ - Universidade Federal Rural do Rio de Janeiro</p>
            </div>
            
            <div class="microespacocabecalho"></div>

            <div class="cabecalho">
                <p>Nome: <?php echo($_SESSION['usuario']['nome']) ?></p>
                <p>Matrícula: <?php echo($_SESSION['usuario']['matricula']) ?></p>
                <p>Departamento: DCOMP - Seropédica</p>
                <div class="espacamento"></div>
            </div>

            <div class="microespacocabecalho" style="background-color: #3B4877"></div>

            <div class="cabecalho">
                <p>Vincular > Discente</p>
            </div>
            <form style="background-color:#F9FBFD;">
                <br>
                    <form style="background-color:#F9FBFD;">
                        <fieldset>
                            <legend style="text-align: center;"><strong>Dados do aluno</strong></legend>
                        <br>   
                        <div class="large" style="text-indent: 170px">
                            <img src="imagens/estrela.png" alt="Campo obrigatório">
                                <label for="login" style="font-size: 14px">Nome Completo:</label>
                                <input type="text" name="login" id="login" class="input_user" required>
                            </img>
                        </div>
                        <div class="microespaco"></div>

                        <div class="inputbox" style="text-indent: 222px">
                            <img src="imagens/estrela.png" alt="Campo obrigatório">
                                <label for="matricula">Matrícula:</label>
                                <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" id="matricula" class="input_user" required>
                            </img>
                        </div>
                        <div class="microespaco"></div>

                        <div class="inputbox">
                            <img src="imagens/estrela.png" alt="Campo obrigatório">
                                Escolha o projeto que deseja vincular:
                                <select name="Selecione">
                                    <option value="1">Sistema de monitoramento automatizado</option>
                                    <option value="2">Didática em Sistemas de Informação</option>
                                </select>
                            </img>
                        </div>
                        
                        <div class="microespaco"></div>
                        <div class="large">
                            <img src="imagens/estrela.png" alt="Campo obrigatório">
                                <label for="login" style="font-size: 14px">Atividades que serão realizadas pelo discente: </label><br>
                                <textarea name="caixagrande" id="caixagrande" cols="5" rows="5" required></textarea>
                            </img>
                        </div>
                        
                        <br>

                        <div class="centralizar">
                            <button class="btao-login"><a href="inicio-professor.php" style="color:black">Cancelar</a></button>
                            <button class="btao-login">Cadastrar</button></div>
                    </form>
                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>