<?php
    session_start();
    if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipo'] !='aluno') {
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

        h1{ 
            text-align: center;
            font-family: Verdana, Arial, Helvetica, sans-serif;;
            font-size: 14px;
            color: rgb(43, 185, 14);
            
        }

    </style>

    <title>Área | Discente</title>
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
                <p>Curso: Sistemas de Informação - Seropédica</p>
                <div class="espacamento"></div>
            </div>

            <div class="microespacocabecalho" style="background-color: #3B4877"></div>

            <div class="cabecalho">
                <p>Enviar certificado > Projeto</p>
            </div>
            <br>

            <form style="background-color:#F9FBFD;">
                <form style="background-color:#F9FBFD;">
                    <fieldset>
                        <legend style="text-align: center;"><strong>Submeter Certificado de Conclusão do Projeto Extensionista - PEX</strong></legend>
                        <br>

                        <div class="textolarge">
                            <h1>CARGA HORÁRIA TOTAL CONCLUÍDA</h1><div class="microespaco">
                            <p>Discente <spen class="destaque">NATHAN PRESCOTT</spen> concluiu com êxito a carga horária de projeto extensionista e pode anexar o certificado emitido pela PROEXT (mais informações entrar em contato com a PROEXT)</p></div>

                        <div class="large">
                            <label for="login" style="font-size: 14px">Caixa de mensagem (opcional)</label><br>
                            <textarea name="caixagrande" id="caixagrande" cols="5" rows="5" required></textarea>
                        </div>
                            <div class="microespaco"></div>

                            <img src="imagens/estrela.png" alt="Campo obrigatorio">
                                <spen class="texto-formatado">Anexe aqui o pdf do certificado de conclusão emitido pela PROEXT: </spen><br><br>
                                <input type="file">
                            </img>
                            <div class="microespaco"></div>
                            <div class="microespaco"></div>
                            
                            <br>
                            <div class="centralizar">
                                <button class="btao-login"><a href="index.html" style="color:black">Cancelar</a></button>
                                <button class="btao-login">Confirmar</button></div>
                            </div> 
                    </fieldset>
                </form>
            </div>
        </main>
    </body>
    </html>