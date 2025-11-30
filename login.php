<?php
// login.php
// Simple login page scaffold. authenticate_user is a placeholder.
// Minimal server-side handling included. CSS can be pasted into the <style> block below
// or into your shared stylesheet.

session_start();

$errors = [];
$username = '';

// CSRF token helper
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
}

// Simple placeholder authenticator -- use admin for both username and password to succeed
function authenticate_user(string $user, string $pass): bool {
    // TODO: Replace this stub with real authentication (database lookup + password_verify)
    // Example test credential (remove in production):
    // return $user === 'test@example.com' && $pass === 'password';
    if ($user === "admin" && $pass === "admin") {
        return true;
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic CSRF check
    if (empty($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        $errors[] = 'Invalid request. Please try again.';
    } else {
        $username = trim((string)($_POST['username'] ?? ''));
        $password = (string)($_POST['password'] ?? '');

        if ($username === '') {
            $errors[] = 'Username is required.';
        }
        if ($password === '') {
            $errors[] = 'Password is required.';
        }

        if (empty($errors)) {
            if (authenticate_user($username, $password)) {
                // Authentication succeeded
                $_SESSION['user'] = $username;
                // Regenerate token after login
                session_regenerate_id(true);
                // Redirect to protected area (adjust as needed)
                header('Location: /dashboard.php');
                exit;
            } else {
                $errors[] = 'Invalid username or password.';
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="css/site.css" />
   
    <style>
        /* --- CSS Variables for Theming (from algorithms page) --- */
        :root {
            --bg-color: #F5F7FA;
            --card-bg: #FFFFFF;
            --text-dark: #2D3748;
            --text-light: #718096;

            /* Pastel Palette */
            --color-intro: #E57373;   /* Coral */
            --color-search: #81C784;  /* Moss Green */
            --color-data: #4DB6AC;    /* Teal */
            --color-sort: #9575CD;    /* Purple */
            --color-chal: #FFB74D;    /* Orange */

            /* small helpers for login mapping */
            --login-max-width: 460px;
        }

        /* --- Global Reset & Typography --- */
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Nunito', system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: linear-gradient(180deg, #f7fafc 0%, #eef2f7 100%);
            color: var(--text-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 24px;
        }

        /* Reuse dashboard card aesthetics for login */
        .page-wrapper { width: 100%; max-width: var(--login-max-width); padding: 12px; }

        .auth-card {
            background: linear-gradient(135deg, #91e7abff 0%, #80dfcaff 100%);
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 12px 40px rgba(0,0,0,0.08), 0 4px 12px rgba(229,115,115,0.06);
            border: 1px solid rgba(0,0,0,0.04);
            transition: transform 0.12s ease, box-shadow 0.12s ease;
            color: var(--text-dark);
        }
        .auth-card:focus-within { transform: translateY(-3px); box-shadow: 0 18px 48px rgba(0,0,0,0.12); }

        .auth-title {
            margin: 0 0 12px;
            font-size: 1.5rem;
            font-weight: 900;
            color: #f1f1f1ff;
            letter-spacing: 0.002em;
            text-shadow: 0 1px 0 rgba(75, 59, 59, 0.98);
        }

        .form-row { margin-bottom: 14px; display: flex; flex-direction: column; }
        label { font-size: 13px; margin-bottom: 6px; color: var(--text-dark); font-weight: 700; }

        /* Inputs styled to match bubbly theme */
        .input {
            padding: 12px 14px;
            border-radius: 12px;
            font-size: 14px;
            background: linear-gradient(180deg, #ffffff, #fff6f6);
            border: 1px solid rgba(173,40,49,0.08);
            color: var(--text-dark);
            transition: box-shadow 0.12s ease, border-color 0.12s ease, transform 0.06s ease;
            outline: none;
        }
        .input::placeholder { color: rgba(45,55,72,0.35); }
        .input:focus {
            border-color: rgba(40, 135, 224, 0.9);
            box-shadow: 0 8px 26px rgba(229,115,115,0.10);
            transform: translateY(-1px);
        }

        /* Buttons adapted to the pastel accent */
        .btn { display:inline-block; padding:10px 14px; border-radius:999px; border:0; cursor:pointer; font-weight:800; }
        .btn-primary {
            background: linear-gradient(90deg, var(--color-chal), #ffd89a);
            color: #3b2a10;
            min-width: 110px;
            box-shadow: 0 10px 30px rgba(255,183,77,0.12);
            transition: transform 0.08s ease, box-shadow 0.12s ease;
        }
        .btn-primary:hover { transform: translateY(-2px); }
        .btn:focus { outline: 3px solid rgba(255,183,77,0.12); outline-offset: 2px; }

        .form-error {
            color: #c53030;
            background: rgba(229,115,115,0.07);
            border: 1px solid rgba(229,115,115,0.08);
            padding: 10px 12px;
            border-radius: 10px;
            font-size: 13px;
            margin-bottom: 12px;
        }

        .form-actions { display:flex; align-items:center; justify-content:space-between; margin-top:8px; gap: 12px; }
        .muted { font-size:13px; color: var(--text-light); }
        a.small { font-size:13px; color: rgba(45,55,72,0.7); text-decoration:none; }
        a.small:hover { text-decoration: underline; color: var(--text-dark); }

        input[required] { box-shadow: none; }

        @media (max-width: 480px) {
            .auth-card { padding: 20px; border-radius: 16px; }
            .auth-title { font-size: 1.2rem; }
            .page-wrapper { padding: 10px; }
            .btn-primary { min-width: 90px; padding: 9px 12px; }
        }
    </style>
</head>
<body>
    <main class="page-wrapper" role="main">
        <section class="auth-card" aria-labelledby="login-heading">
            <h1 id="login-heading" class="auth-title">Sign in</h1>

            <?php if (!empty($errors)): ?>
                <div class="form-error" role="alert" aria-live="assertive">
                    <?php echo htmlspecialchars(implode(' ', $errors), ENT_QUOTES, 'UTF-8'); ?>
                </div>
            <?php endif; ?>

            <form method="post" action="login.php" novalidate>
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES); ?>">

                <div class="form-row">
                    <label for="username">Email or username</label>
                    <input id="username" name="username" class="input" type="text" autocomplete="username" value="<?php echo htmlspecialchars($username, ENT_QUOTES); ?>" required>
                </div>

                <div class="form-row">
                    <label for="password">Password</label>
                    <input id="password" name="password" class="input" type="password" autocomplete="current-password" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <div class="muted">
                        <a class="small" href="/forgot.php">Forgot?</a>
                    </div>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
