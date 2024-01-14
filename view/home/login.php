<?php
    require_once("");
?>

<div class="fondo-login">
    <div class="icon">
        <a href="/login/index.php">
            <i class="fa-solid fa-shield-dog"></i>
        </a>
    </div>
    <div class="titulo">
        Inicia sesion
    </div>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email addres</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">No compartimos tu Email con nadie</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="login">
        nuevo en dogcom? <a href="singup.php"style="text-decoration: none;">create una cuenta</a>
    </div>
</div>

<?php
    require_once("");
?>