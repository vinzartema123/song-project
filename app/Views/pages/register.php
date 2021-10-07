<div class="card register-form">
<article class="card-body">
<a href="/login" class="float-right btn btn-outline-primary">Already Have An Account?</a>
<h4 class="card-title mb-4 mt-1">Sign up</h4>
	<form action="/register" method="post">

    <div class="form-group">
    	<label>First Name</label>
        <input name="firstname" class="form-control" placeholder="First Name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group">
    	<label>Last Name</label>
        <input name="lastname" class="form-control" placeholder="Last Name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group">
    	<label>Email</label>
        <input name="email" class="form-control" placeholder="Email" type="email">
    </div> <!-- form-group// -->
    <div class="form-group">
    	<label>Password</label>
        <input class="form-control" name="password" placeholder="**************" type="password">
    </div> <!-- form-group// --> 
    <div class="form-group">
    	<label>Confirm Password</label>
        <input name="confirm-password" class="form-control" placeholder="**************" type="password">
    </div> <!-- form-group// -->

    <?php if (isset($validation)): ?>
    <div class="form-group">
        <div class="alert alert-danger" role="alert">
            <?= $validation->listErrors() ?>
        </div>
    </div> <!-- form-group// -->

    <?php endif; ?>



    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </div> <!-- form-group// -->                                                           
</form>
</article>
</div> <!-- card.// -->