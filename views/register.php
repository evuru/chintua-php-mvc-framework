<?php
/** @var $model \app\models\UserModel */
?>

<main class="px-3">
    <h1>Register</h1>
    <p class="lead">The most simple framework, make it your own.</p>
    <p class="lead">
    </p>
</main>
<?php //var_dump($model->errors); ?>
<div class="row justify-content-center">
    <div class="col-5">
        <form action="" method="post">
            <div class="mb-3 d-flex justify-content-start">
                <div class="flex-grow-1 me-md-1">
                    <label for="exampleInputPassword1" class="form-label d-flex">First Name</label>
                    <input type="text"  name="firstname" class="form-control <?php echo $model->hasError('firstname')?'is-invalid':'';?>" id="exampleInputPassword1">
                    <div class="invalid-feedback"><?php foreach ($model->errors['firstname'] as $firstnameError){echo $firstnameError;}?></div>
                </div>
                <div class="flex-grow-1 ms-md-1">
                    <label for="exampleInputPassword1" class="form-label d-flex">Last Name</label>
                    <input type="text"  name="lastname" class="form-control <?php echo $model->hasError('lastname')?'is-invalid':'';?>" id="exampleInputPassword1">
                    <div class="invalid-feedback"><?php foreach ($model->errors['lastname'] as $lastnameError){echo $lastnameError;}?></div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label d-flex">Email address</label>
                <input type="email"  name="email" class="form-control <?php echo $model->hasError('email')?'is-invalid':'';?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"><?php echo !$model->hasError('email')?"We'll never share your email with anyone else.":''?></div>
                <div class="invalid-feedback"><?php foreach ($model->errors['email'] as $emailError){echo $emailError;}?></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label d-flex">Password</label>
                <input type="password"  name="password" class="form-control <?php echo $model->hasError('password')?'is-invalid':'';?>" id="exampleInputPassword1">
                <div class="invalid-feedback"><?php foreach ($model->errors['password'] as $passwordError){echo $passwordError;}?></div>

                <label for="exampleInputPassword1" class="form-label d-flex">Confirm Password</label>
                <input type="password"  name="cpassword" class="form-control <?php echo $model->hasError('cpassword')?'is-invalid':'';?>" id="exampleInputPassword1">
                <div class="invalid-feedback"><?php foreach ($model->errors['cpassword'] as $cpasswordError){echo $cpasswordError.", ";}?></div>

            </div>
            <button type="submit" class="btn btn-primary w-100" >Register</button>
        </form>
        <p>Already have account <a href="/login">Login</a></p>
    </div>
</div>
<?php
//$strarr = [1,2,3,4];
//
//$newstrr = implode(',',array_map(function($a){ return 'ddsds';},$strarr));
//
//function aa($a){
//    return $a."1";
//}
//print_r($strarr);
//echo "<br>";
//echo $newstrr;
