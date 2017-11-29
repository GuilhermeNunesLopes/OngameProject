<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <?php
  
         require_once 'Php/Usuario.php ';
         require_once 'Php/Valida.php ';

    ?>
        <meta charset="UTF-8">
        <title>Novo Tópico - Tópicos - Fórum</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    </head>
    <body>
        <main role="main" class="container-fluid pt-3">
                    <?php
         $usuario = new Usuario();
         $valida = new Valida();

            if(isset($_POST['cadastrar'])):
                    $titulo = $_POST['titulo'];
                    $user = $_POST['user'];
                    $avatar = $_POST['avatar'];
                    $mensagem = $_POST['mes'];
                    //Estou chamando os metodos da classe usuario
                       $usuario->setTitle($titulo);
                       $usuario->setUser($user);
                       $usuario->setAvatar($avatar);
                       $usuario->setMens($mensagem);
                       if($valida->Validar()){
                            echo "<script>alert(Validação basica realizada!);</script>";
                       }
               #insert
               if($usuario->insertTopico()){
                    echo "Inserido com sucesso!";
               }
              

            endif;
       
    ?>
            <div class="row">
                <div class="col-sm-12">
                    <h1>Novo Tópico</h1>
                </div>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Fórum</a></li>
                    <li class="breadcrumb-item"><a href="topic.php">Tópicos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Novo Tópico</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <table class="table table-striped table-forum">
                            <tbody>
                                <tr>
                                    <td>
                                        <form method="POST" action="">
                                            <div class="form-group">
                                                <label for="title">Título</label>
                                                <input class="form-control" id="title" placeholder="Digite o Título" maxlength="128" type="text" name="titulo">
                                            </div>
                                            <div class="form-group">
                                                <label for="user">Usuário</label>
                                                <input class="form-control" id="user" placeholder="Digite seu Usuário" maxlength="24" type="text" name="user">
                                            </div>
                                            <div class="form-group">
                                                <label for="avatar">Avatar</label>
                                                <input class="form-control" id="avatar" placeholder="Cole a URL do avatar" maxlength="128" type="text" name="avatar">
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Mensagem</label>
                                                <textarea class="form-control" id="message" placeholder="Digite sua mensagem com até 1024 caracteres" rows="4" name="mes"></textarea>
                                            </div>
                                            <button type="submit" name="cadastrar" class="btn btn-primary margin-top-10"><i class="fa fa-plus-circle"></i> Criar</button>
                                                <input type="hidden" name="pai" value="<?=$pai;?>">
                                                <input type="hidden" name="topico" value="<?=$topico;?>">
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>