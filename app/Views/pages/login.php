  <div class="card login-form">
   <article class="card-body">
  <a href="/register" class="float-right btn btn-outline-primary">Sign up</a>
  <h4 class="card-title mb-4 mt-1">Log In</h4>
    <form action="/login/index" method="post">

    <?php  if(session()->get('success')):   ?>
      <div class="alert alert-success" role="alert">

      <?= session()->get('success') ?>

      </div>

    <?php endif; ?>

      <div class="form-group">
        <label>Email</label>
          <input name="email" class="form-control" placeholder="Email" type="email">
      </div> <!-- form-group// -->
      <div class="form-group">
        <a class="float-right" href="#">Forgot?</a>
        <label>Password</label>
          <input name="password" class="form-control" placeholder="Type Your Password" type="password">
      </div> <!-- form-group// --> 
        <?php if (isset($validation)): ?>
        <div class="form-group">
            <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
            </div>
        </div> <!-- form-group// -->

        <?php endif; ?>
      <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Login</button>
      </div> <!-- form-group// -->                                                           
    </form>
  </article>
</div> <!-- card.// -->