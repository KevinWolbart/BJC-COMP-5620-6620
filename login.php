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
        /* Merged dark theme: use dashboard colors + system font, keep login markup/classes */
        :root {
            --bg: #0b1020;
            --card-bg: #141b33;
            --accent: #ffb347;
            --accent-soft: #ffe3b3;
            --text-main: #f4f4f8;
            --text-soft: #b8bed6;
            --danger: #f06f6f;
            --radius: 12px;
            --max-width: 420px;
            --shadow-strong: 0 14px 40px rgba(0,0,0,0.45);
            --shadow-soft: 0 8px 30px rgba(0,0,0,0.28);
        }

        /* Base reset + font from dashboard CSS */
        * { box-sizing: border-box; }
        html,body { height: 100%; }
        body {
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: radial-gradient(circle at top, #1d2750, #050814 60%);
            color: var(--text-main);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Page wrapper keeps centered narrow card */
        .page-wrapper { width: 100%; max-width: var(--max-width); padding: 24px; }

        /* Card uses dark card-bg and larger radius like dashboard */
        .auth-card {
            background: linear-gradient(180deg, var(--card-bg), #0f1730);
            border-radius: var(--radius);
            padding: 28px;
            box-shadow: var(--shadow-strong);
            border: 1px solid rgba(255,255,255,0.04);
            transition: transform 0.12s ease, box-shadow 0.12s ease, border-color 0.12s ease;
        }
        .auth-card:focus-within { transform: translateY(-2px); box-shadow: 0 18px 48px rgba(0,0,0,0.55); }

        /* Title */
        .auth-title {
            margin: 0 0 12px;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--text-main);
            letter-spacing: 0.002em;
        }

        /* Form row & labels */
        .form-row { margin-bottom: 14px; display: flex; flex-direction: column; }
        label { font-size: 13px; margin-bottom: 6px; color: var(--text-soft); font-weight: 600; }

        /* Inputs: dark background, subtle border */
        .input {
            padding: 12px 14px;
            border-radius: 10px;
            font-size: 14px;
            background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
            border: 1px solid rgba(255,255,255,0.06);
            color: var(--text-main);
            transition: box-shadow 0.12s ease, border-color 0.12s ease, transform 0.06s ease;
            outline: none;
        }
        .input::placeholder { color: rgba(184,190,214,0.45); }
        .input:focus {
            border-color: rgba(255,179,71,0.9);
            box-shadow: 0 8px 26px rgba(255,179,71,0.08);
            transform: translateY(-1px);
        }

        /* Buttons adapted to accent */
        .btn { display:inline-block; padding:10px 14px; border-radius:999px; border:0; cursor:pointer; font-weight:700; }
        .btn-primary {
            background: linear-gradient(90deg, var(--accent), #ffdf8a);
            color: #20120a;
            min-width: 110px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.45);
            transition: transform 0.08s ease, box-shadow 0.12s ease;
        }
        .btn-primary:hover { transform: translateY(-2px); }
        .btn:focus { outline: 3px solid rgba(255,179,71,0.12); outline-offset: 2px; }

        /* Messages / errors use danger color */
        .form-error {
            color: var(--danger);
            background: rgba(240,111,111,0.06);
            border: 1px solid rgba(240,111,111,0.08);
            padding: 10px 12px;
            border-radius: 10px;
            font-size: 13px;
            margin-bottom: 12px;
        }

        /* Actions & helpers */
        .form-actions { display:flex; align-items:center; justify-content:space-between; margin-top:8px; gap: 12px; }
        .muted { font-size:13px; color: var(--text-soft); }
        a.small { font-size:13px; color: var(--accent-soft); text-decoration:none; }
        a.small:hover { text-decoration: underline; color: var(--accent); }

        input[required] { box-shadow: none; }

        @media (max-width: 480px) {
            .auth-card { padding: 20px; border-radius: 14px; }
            .auth-title { font-size: 1.15rem; }
            .page-wrapper { padding: 12px; }
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