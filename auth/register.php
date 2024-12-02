<?php
session_start();
require '../functions.php';

if (isset($_SESSION['login'])) {
  header('Location: /');
  exit;
}

if (isset($_POST["register"])) {
  if (register($_POST) > 0) {
    echo "
        <script>
            alert('User berhasil ditambahkan');
        </script>
        ";
    header("Location: login.php");
  } else {
    echo mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../assets/img/halo.png">
  <title>OldShop | Register Page</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Custom color scheme */
    body {
      background-color: #007bff; /* Blue background */
      color: #ffffff; /* White text for contrast */
    }

    .container {
      background-color: #ffffff; /* White background for form container */
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }

    .btn-primary {
      background-color: #0069d9; /* Darker blue button */
      border-color: #0062cc;
    }

    .btn-primary:hover {
      background-color: #0056b3; /* Darker blue on hover */
      border-color: #0056b3;
    }

    .form-label {
      color: #333333; /* Dark text for labels */
    }

    .invalid-feedback {
      color: #dc3545; /* Red color for invalid feedback */
    }

    .text-secondary {
      color: #6c757d; /* Light gray text for secondary text */
    }

    .text-primary {
      color: #0069d9; /* Blue color for the login link */
    }

    .text-primary:hover {
      color: #0056b3; /* Darker blue when hovering */
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-100" data-bs-theme="dark">
  <div class="container my-5 p-4">
    <h1 class="mb-4 text-center text-primary">Create an Account</h1>
    <form action="" method="post" class="needs-validation border p-2-md p-5 rounded shadow-sm" novalidate>
      <div class="mb-3">
        <label for="firstname" class="form-label">Full Name</label>
        <div class="input-group">
          <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name" required>
          <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name" required>
          <div class="invalid-feedback">
            Please enter your full name.
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="username" name="username" id="username" class="form-control" placeholder="Username here" autocomplete="username" required>
        <div class="invalid-feedback">
          Please enter your username.
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email here" autocomplete="email" required>
        <div class="invalid-feedback">
          Please enter your email address.
        </div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
        <div class="invalid-feedback">
          Please enter your password.
        </div>
      </div>
      <div class="mb-3">
        <label for="password2" class="form-label">Confirm Password</label>
        <input type="password" name="password2" id="password2" class="form-control" required>
        <div class="invalid-feedback">
          Please confirm your password.
        </div>
      </div>
      <button type="submit" name="register" class="btn btn-primary w-100">Create Account</button>
      <div class="mt-3 text-center">
        <span class="text-secondary">Already have an account? </span>
        <a href="login.php" class="text-primary">Login here</a>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script>
    // Bootstrap form validation
    (function () {
      'use strict'

      var forms = document.querySelectorAll('.needs-validation')

      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>
</body>

</html>
