<h1>CADASTRE-SE</h1>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<form action="cadastrar_action.php" method="POST" role="form">
    <legend>Form title</legend>

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
        
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Digite seu email">
        
        <label for="">Senha</label>
        <input type="password" class="form-control" name="password" placeholder="Digite sua senha">
    </div>

    

    <button type="submit" value="salvar" class="btn btn-primary">CADASTRAR</button>
</form>
