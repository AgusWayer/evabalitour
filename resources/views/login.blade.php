<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8" />
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{asset('css/login.css')}}" rel="stylesheet" />

  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
      <form action="login" method="POST">
        @csrf
       @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
       @endif
        @error('error')
          <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
        @enderror
        <img
          class="mb-4"
          src="../assets/brand/bootstrap-logo.svg"
          alt=""
          width="72"
          height="57"
        />
        <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>

        <div class="form-floating mb-3">
          <input
            type="text"
            class="form-control @error('username') is-invalid @enderror"
            id="username"
            name="username"
            placeholder="Username..."
          />
          <label for="username">Username</label>
          @error('username')
          <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            name="password"
            id="password"
            placeholder="Password"
          />
          <label for="password">Password</label>
           @error('password')
          <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
          @enderror
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">
          Sign in
        </button>

      </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
