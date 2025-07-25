<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap 5 Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .h-700 {
            height: 700px;
        }

        .btn-google {
            background-color: rgba(107, 114, 128, 0.1);
            height: 3rem;
            border-radius: 9999px;
            transition: opacity 0.3s;
        }

        .btn-google:hover {
            opacity: 0.8;
        }

        .login_BTn:hover {
            background-color: black !important;
            color: white;
        }

        .form-control-rounded {
            border-radius: 9999px;
            height: 3rem;
            padding-left: 1rem;
            color: rgba(107, 114, 128, 0.8);
            background-color: transparent;
            border: 1px solid rgba(209, 213, 219, 0.6);
            width: 100%;
        }

        .form-control-rounded::placeholder {
            color: rgba(107, 114, 128, 0.8);
        }

        .login-btn {
            border-radius: 9999px;
            height: 3rem;
            width: 100%;
        }

        .container {
            position: relative;
            top: 250px;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: #6b7280;
            width: 16px;
            height: 16px;
        }

        .position-relative {
            position: relative;
        }
    </style>
</head>

<body>

    <div class="container d-flex justify-content-center p-5">
        <!-- Left image, visible md and up -->
        <div class="flex-shrink-0" style="width: 50%;">
            <img src="img11.jpg" alt="leftSideImage" class="h-100 w-100 object-fit-cover" style="object-fit: cover;">
        </div>

        <!-- Form container -->
        <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1 px-3 px-md-5" style="max-width: 400px;">
            <form action="login.php" method="POST" class="w-100">
                <h2 class="mb-2">Sign in</h2>
                <p class="text-muted mb-4 text-center">Welcome back! Please sign in to continue</p>

                <button type="button" class="btn btn-light w-100 border mb-4 d-flex align-items-center justify-content-center rounded-pill" style="height: 48px;">
                    <a href="https://accounts.google.com/signout/chrome/landing?continue=https%3A%2F%2Faccounts.google.com%2FServiceLogin%3Felo%3D1&hl=en">
                        <img src="https://raw.githubusercontent.com/prebuiltui/prebuiltui/main/assets/login/googleLogo.svg" alt="Google" height="20" class="me-2" />
                    </a>
                </button>

                <!-- Separator -->
                <div class="d-flex align-items-center text-muted mb-3 w-100">
                    <hr class="flex-grow-1" />
                    <span class="px-2 small">or sign in with email</span>
                    <hr class="flex-grow-1" />
                </div>


                <div class="mb-3">
                    <input type="email" name="email" id="email" class="form-control-rounded" placeholder="Enter your email" required />
                </div>

                <div class="mb-4">
                    <input type="password" name="password" id="password" class="form-control-rounded" placeholder="Enter your password" required />
                </div>

                <!-- Remember me and forgot password -->
                <div class="d-flex justify-content-between align-items-center mb-3 small text-muted">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rememberMe" />
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" class="text-decoration-underline">Forgot password?</a>
                </div>

                <button type="submit" class="btn btn-primary w-100 login-btn">Login</button>
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>