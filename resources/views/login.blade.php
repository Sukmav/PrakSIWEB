<?php
if (session('user')) {
    header("Location: " . route('home'));
    exit();
}

$error = session('error') ?? request('error', '');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Manajemen Pet Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="bi bi-hospital"></i> Pet Clinic
            </a>
        </div>
    </nav>

    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h1>Login</h1>
            </div>

            <?php if ($error): ?>
                <div class="alert alert-error" role="alert">
                    <i class="bi bi-exclamation-circle"></i> <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="{{ route('process-login') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">
                        <i class="bi bi-person"></i> Username
                    </label>
                    <input type="text" id="username" name="username" class="form-control"
                        value="<?php echo htmlspecialchars($_COOKIE['username'] ?? ''); ?>" 
                        placeholder="Masukkan username" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">
                        <i class="bi bi-lock"></i> Password
                    </label>
                    <input type="password" id="password" name="password" class="form-control" 
                        placeholder="Masukkan password" required>
                </div>

                <div class="form-check mb-4">
                    <input type="checkbox" id="remember" name="remember" class="form-check-input">
                    <label class="form-check-label" for="remember">
                        Ingat Saya
                    </label>
                </div>

                <button type="submit" class="btn btn-login w-100 mb-3">Login
                </button>
            </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>