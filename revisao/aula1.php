<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Recordando o uso do Bootstrap</h1>
    <div class="row"><!--1ª linha-->
        <div class="col-md-4"><!--1ª coluna-->
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quod, vel asperiores aperiam provident, voluptate, voluptatem tempore eos beatae debitis temporibus vitae excepturi explicabo sequi! Fugiat sapiente debitis qui et.
        </div>
        <div class="col-md-4"><!--2ª coluna-->
            <img src="flor1.jpg" class="img-fluid">
        </div>
        <div class="col-md-4"><!--3ª coluna-->
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid quis dolorum ducimus non ullam cumque error, impedit veniam alias beatae? Dicta, modi. Culpa unde cum eius sit, a amet reiciendis!
        </div>
    </div>
    <div class="row"><!--2ª linha-->
        <div class="col-md-6"><!--1ª coluna-->
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt delectus nihil molestiae enim aspernatur optio ab quaerat vero doloremque saepe, repudiandae ducimus neque qui voluptate unde ex obcaecati! Repudiandae, eaque.
        </div>
        <div class="col-md-6"><!--2ª coluna-->
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus eum id officiis consectetur, asperiores voluptates veniam perspiciatis cupiditate rem corrupti esse, magni doloribus animi earum dolore debitis eos dolor hic.
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <img src="flor1.jpg" class="img-fluid">
        </div>
        <div class="col-md-3">
            <img src="flor1.jpg" class="img-fluid">
        </div>
        <div class="col-md-3">
            <img src="flor1.jpg" class="img-fluid">
        </div>
        <div class="col-md-3"> 
            <img src="flor1.jpg" class="img-fluid">
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="mostrar.php" method="post">
                Nome<input type="text" name="txt_nome" class="form-control" required><br>
                E-mail<input type="email" name="txt_email" class="form-control" required><br>
                Login <input type="text" name="txt_login" class="form-control"><br>
                Senha<input type="password" name="txt_senha" class="form-control"><br>
                Telefone<input type="tel" name="txt_telefone" class="form-control"><br>
                Data de Cadastro<input type="date" name="txt_data" class="form-control"><br>
                <input type="submit">
                <input type="reset" value="Cancelar">
            </form>
        </div>
    </div>

    
</body>
</html>