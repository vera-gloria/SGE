<?php
require 'header.html';
?>
<div class="Cursos_banner">
    <div class="container">
        <h3>Cadastro</h3>

    </div>
</div>
<!-- //banner -->
<div class="Cursos_box1">
    <div class="container">
        <form class="login">
            <p class="lead">Cadastro</p>
            <div class="form-group">
                <input type="text" autocomplete="off" class="required form-control" placeholder="Nome *" name="nome" value="">
            </div>
            <div class="form-group">
                <input type="text" autocomplete="off" class="required form-control" placeholder="Nome de usuário *" name="nomeusuario" value="">
            </div>
            <div class="form-group">
                <input type="password" class="required form-control" placeholder="Senha *" name="password" value="">
            </div>
            <div class="form-group">
                <input type="password" class="required form-control" placeholder="Confirme senha *" name="Confirm Password" value="">
            </div>
            <div class="form-group">
                <input type="text" autocomplete="off" class="required form-control" placeholder="Email *" name="email" value="">
            </div>
            <div class="form-group">
                <input type="text" autocomplete="off" class="required form-control" placeholder="Confirme Email *" name="confirm email" value="">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg1 btn-block" name="submit" value="Cadastrar">
            </div>
            <p>Você já possui uma conta? <a href="login.html">Entre</a></p>
        </form>
    </div>
</div>
<?php
require 'footer.html';
?>