<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
            <div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                <label for="floatingInputEmail">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Login</button>
              </div>
            </div>
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
            <form wire:submit.prevent="submit">

              <div class="form-floating mb-3">
                <input type="text" wire:model="form.name" class="form-control" id="floatingInputUsername" placeholder="myusername"  autofocus>
                <label for="floatingInputUsername">Name</label>
              </div>
              @error('form.name') <span class="error text-danger">{{ $message }} </span>  @enderror

              <div class="form-floating mb-3">
                <input type="email" wire:model="form.email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                <label for="floatingInputEmail">Email address</label>
              </div>
              @error('form.email') <span class="error text-danger">{{ $message }}</span> @enderror
              <hr>

              <div class="form-floating mb-3">
                <input type="password" wire:model="form.password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              @error('form.password') <span class="error text-danger">{{ $message }}</span> @enderror

              <div class="form-floating mb-3">
                <input type="password" wire:model="form.confirm_password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password">
                <label for="floatingPasswordConfirm">Confirm Password</label>
              </div>
              @error('form.confirmPassword') <span class="error text-danger">{{ $message }}</span> @enderror

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
