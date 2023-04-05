<main class="px-3">
    <h1>Login</h1>
    <p class="lead">The most simple framework, make it your own.</p>
    <p class="lead">
    </p>
</main>
<div class="row justify-content-center">
    <div class="col-5">
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label d-flex">Email address</label>
                <input type="email"  name="email" class="form-control <?php echo $model->hasError('login')?'is-invalid':'';?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label d-flex">Password</label>
                <input type="password"  name="password" class="form-control <?php echo $model->hasError('login')?'is-invalid':'';?>" id="exampleInputPassword1">
                <div class="invalid-feedback"><?php foreach ($model->errors['login'] as $loginError){echo $loginError;}?></div>
            </div>
            <button type="submit" class="btn btn-primary w-100" >Login</button>
        </form>
        <p>Don't have account <a href="/register">Register</a></p>

    </div>
</div>

<br>
<br>
<?php var_dump($model->errors); ?>


<?php

//session_destroy();
//print_r($_SESSION);




