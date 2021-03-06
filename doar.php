<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOS Criança Feliz</title>
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Text+Me+One" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon-16x16.png">
    <link rel="manifest" href="./assets/site.webmanifest">
    <link rel="mask-icon" href="./assets/safari-pinned-tab.svg" color="#fbec68">
    <meta name="msapplication-TileColor" content="#fbec68">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <nav class="nav-primary navbar navbar-expand-lg nav__sos   fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home"><img src="assets/logo-sos.png" alt="Logo do SOS Criança Feliz"></a>
            <!-- botão responsivo -->
            <button class="navbar-toggler button-nav-sos" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span><img class="navbar-toggler-icon" src="./assets/menu.png" alt="icone do menu"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.html" id="home">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./doar.php" id="doar">Doar <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./estoque.php" id="estoque">Estoque</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contato.html" id="contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="header-doar">
        <h1>Desperte o sorriso no rosto<br>de uma criança</h1>
    </header>
    <main>
        <section class="mt-5">
            <div class="container">
                <h2 class="title-sos">Faça sua Doação</h2>
                <div class="row flex-wrap my-3">
                    <div class="col-lg-6 doacoes my-5">
                        <div class="card cards-doar" style="width: 28rem; ">
                            <div class="card-body doacoes-itens">
                                <h5 class="card-title">Roupas</h5>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1">
                                    <span>Doar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 doacoes my-5">
                        <div class="card cards-doar" style="width: 28rem;">
                            <div class="card-body doacoes-itens">
                                <h5 class="card-title">Alimentos</h5>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2">
                                    <span>Doar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 doacoes my-5">
                        <div class="card cards-doar" style="width: 28rem;">
                            <div class="card-body doacoes-itens">
                                <h5 class="card-title">Brinquedos</h5>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal3">
                                    <span>Doar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 doacoes my-5">
                        <div class="card cards-doar" style="width: 28rem;">
                            <div class="card-body doacoes-itens">
                                <h5 class="card-title">Outros</h5>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal4">
                                    <span>Doar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><strong>Cadastre seu item</strong></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="roupa-doar" method="POST">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Localização</label>
                                    <input name="roupa-localizacao" type="text" class="form-control" id="formGroupExampleInput0" placeholder="Cidade e Estado">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Tipo</label>
                                    <input name="roupa-tipo" type="text" class="form-control" id="formGroupExampleInpu1" placeholder="Calça, camiseta, agasalho...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Cor</label>
                                    <input name="roupa-cor" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Vermelho, amarelo, colorido...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Tamanho</label>
                                    <input name="roupa-tamanho" type="text" class="form-control" id="formGroupExampleInput3" placeholder="3 meses, 4 anos, G...">
                                </div>
                                <input type="hidden" value="submit" name="action">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <input type="submit" value="Doar" name="submitRoupas" class="btn btn-danger" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><strong>Cadastre seu item</strong></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="alimento-doar" method="POST">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Localização</label>
                                    <input name="alimento-localizacao" type="text" class="form-control" id="formGroupExampleInput0" placeholder="Cidade e Estado">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Tipo</label>
                                    <input name="alimento-tipo" type="text" class="form-control" id="formGroupExampleInpu1" placeholder="Leite, arroz, bolacha...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Data de Validade</label>
                                    <input name="alimento-validade" type="text" class="form-control" id="formGroupExampleInput2" placeholder="00/00/0000">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Quantidade</label>
                                    <input name="alimento-quantidade" type="text" class="form-control" id="formGroupExampleInput3" placeholder="4, 500gr, 1kg...">
                                </div>
                                <input type="hidden" value="alimento" name="alimento"/>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <input type="submit" value="Doar" name="submitAlimentos" class="btn btn-danger"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><strong>Cadastre seu item</strong></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="brinquedo-doar" method="POST">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Localização</label>
                                    <input name="brinquedo-localizacao" type="text" class="form-control" id="formGroupExampleInput0" placeholder="Cidade e Estado">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Tipo</label>
                                    <input name="brinquedo-tipo" type="text" class="form-control" id="formGroupExampleInpu1" placeholder="Carrinho, avião, boneca...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Cor</label>
                                    <input name="brinquedo-cor" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Vermelho, amarelo, colorido...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Tamanho</label>
                                    <input name="brinquedo-tamanho" type="text" class="form-control" id="formGroupExampleInput3" placeholder="Grande, médio ou pequeno">
                                </div>
                                <input type="hidden" value="brinquedo" name="brinquedo">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <input type="submit" value="Doar" name="submitBrinquedos" class="btn btn-danger"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><strong>Cadastre seu item</strong></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="outro-doar" method="POST">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Localização</label>
                                    <input name="outro-localizacao" type="text" class="form-control" id="formGroupExampleInput0" placeholder="Cidade e Estado">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Tipo</label>
                                    <input name="outro-tipo" type="text" class="form-control" id="formGroupExampleInpu1" placeholder="Bombinha de leite, acessórios, material escolar...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Cor</label>
                                    <input name="outro-cor" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Vermelho, amarelo, colorido...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Tamanho</label>
                                    <input name="outro-tamanho" type="text" class="form-control" id="formGroupExampleInput3" placeholder="3 meses, 4 anos, G...">
                                </div>
                                <input type="hidden" value="outro" name="outro">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <input type="submit" value="Doar" name="submitOutros" class="btn btn-danger"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-content">
                        <p class="ml-2">Doação realizada com sucesso!</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php

        if($_POST)
        {
            if(isset($_POST['submitRoupas'])){
                insertRoupas();
            }elseif(isset($_POST['submitAlimentos'])){
                insertAlimentos();
            }elseif(isset($_POST['submitBrinquedos'])){
                insertBrinquedos();
            }elseif(isset($_POST['submitOutros'])){
                insertOutros();
            }
        }  

        function insertRoupas()
        {
            $servername = "localhost";
            $username = "root";
            $password = "123";
            $dbname = "dbsoscriancafeliz";
            $roupalocalizacao = '';
            $roupatipo = '';
            $roupacor = '';
            $roupatamanho = '';
            $roupahidden = '';

            $roupalocalizacao = $_POST['roupa-localizacao'];
            $roupatipo = $_POST['roupa-tipo'];
            $roupacor = $_POST['roupa-cor'];
            $roupatamanho = $_POST['roupa-tamanho'];
        
            $sql = "INSERT INTO itenssos (categoria, localizacao, tipo, cor, tamanho) VALUES ('roupa', '".$roupalocalizacao."', '".$roupatipo."','".$roupacor."','".$roupatamanho."')";

            // Cria a conexão
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verifica a conexão
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            // Executa a query
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }   
        
        function insertAlimentos()
        {
            $servername = "localhost";
            $username = "root";
            $password = "123";
            $dbname = "dbsoscriancafeliz";

            $alimentolocalizacao = '';
            $alimentotipo = '';
            $alimentovalidade = '';
            $alimentoquantidade = '';
            $alimentohidden = '';

            $alimentolocalizacao = $_POST['alimento-localizacao'];
            $alimentotipo = $_POST['alimento-tipo'];
            $alimentovalidade = $_POST['alimento-validade'];
            $alimentoquantidade = $_POST['alimento-quantidade'];
        
            $sql = "INSERT INTO itenssos (categoria, localizacao, tipo, validade, quantidade) VALUES ('alimento', '".$alimentolocalizacao."', '".$alimentotipo."','".$alimentovalidade."','".$alimentoquantidade."')";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }   

        function insertBrinquedos()
        {
            $servername = "localhost";
            $username = "root";
            $password = "123";
            $dbname = "dbsoscriancafeliz";

            $brinquedolocalizacao = '';
            $brinquedotipo = '';
            $brinquedocor = '';
            $brinquedotamanho = '';
            $brinquedohidden = '';

            $brinquedolocalizacao = $_POST['brinquedo-localizacao'];
            $brinquedotipo = $_POST['brinquedo-tipo'];
            $brinquedocor = $_POST['brinquedo-cor'];
            $brinquedotamanho = $_POST['brinquedo-tamanho'];
        
            $sql = "INSERT INTO itenssos (categoria, localizacao, tipo, cor, tamanho) VALUES ('brinquedo', '".$brinquedolocalizacao."', '".$brinquedotipo."','".$brinquedocor."','".$brinquedotamanho."')";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }   

        function insertOutros()
        {
            $servername = "localhost";
            $username = "root";
            $password = "123";
            $dbname = "dbsoscriancafeliz";

            $outrolocalizacao = '';
            $outrotipo = '';
            $outrocor = '';
            $outrotamanho = '';
            $outrohidden = '';

            $outrolocalizacao = $_POST['outro-localizacao'];
            $outrotipo = $_POST['outro-tipo'];
            $outrocor = $_POST['outro-cor'];
            $outrotamanho = $_POST['outro-tamanho'];
        
            $sql = "INSERT INTO itenssos (categoria, localizacao, tipo, cor, tamanho) VALUES ('outro', '".$outrolocalizacao."', '".$outrotipo."','".$outrocor."','".$outrotamanho."')";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
    ?>

    <footer class="footer-sos">
        <div class="container">
            <div class="row flex-wrap my-2">
                <div class="col-sm footer-icons my-2">
                    <a href="#"><img src="./assets/icone-linkedin.png" alt="Icone do Linkedin" target="blank"></a>
                    <a href="https://www.instagram.com/sianeleal/"><img src="./assets/icone-instagram.png" alt="Icone do Instagram"
                            target="blank"></a>
                    <a href="#"><img src="./assets/icone-facebook.png" alt="Icone do Facebook" target="blank"></a>
                </div>
                <div class="col-sm my-2 footer-icons">
                    <p>© Copyright 2018 - <a href="http://jldevelopment.netlify.com" target="blank">JL Developmente</a></p>
                </div>
                <div class="col-sm my-2">
                    <a class="footer-logo" href="./index.html"><img src="./assets/logo-sos.png" alt="Logo do SOS Criança Feliz"></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    
</body>

</html>