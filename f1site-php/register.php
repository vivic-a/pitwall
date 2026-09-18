<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

if (is_logged_in()) {
    redirect('index.php');
}

$errors = [];
$old    = ['username' => '', 'email' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_submit'])) {
    $old['username']  = trim($_POST['username'] ?? '');
    $old['email']      = trim($_POST['email'] ?? '');
    $password          = $_POST['password'] ?? '';
    $confirmPassword   = $_POST['confirm_password'] ?? '';

    if (mb_strlen($old['username']) < 3) {
        $errors['username'] = 'Username must be at least 3 characters.';
    }
    if (!filter_var($old['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Enter a valid email address.';
    }
    if (strlen($password) < 6) {
        $errors['password'] = 'Password must be at least 6 characters.';
    }
    if ($password !== $confirmPassword) {
        $errors['confirm_password'] = 'Passwords do not match.';
    }

    // Check for an existing username/email only if the basic checks passed.
    if (empty($errors)) {
        $stmt = $pdo->prepare('SELECT id FROM users WHERE username = :username OR email = :email');
        $stmt->execute([':username' => $old['username'], ':email' => $old['email']]);
        if ($stmt->fetch()) {
            $errors['username'] = 'That username or email is already registered.';
        }
    }

    if (empty($errors)) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare(
            'INSERT INTO users (username, email, password_hash) VALUES (:username, :email, :hash)'
        );
        $stmt->execute([
            ':username' => $old['username'],
            ':email'    => $old['email'],
            ':hash'     => $hash,
        ]);

        $_SESSION['user_id']  = $pdo->lastInsertId();
        $_SESSION['username'] = $old['username'];

        set_flash('success', 'Welcome, ' . $old['username'] . ' — your account has been created.');
        redirect('index.php');
    }
}

$pageTitle       = 'Sign Up — Pit Wall';
$pageDescription = 'Create a Pit Wall account.';
$activePage      = 'register.php';
include 'includes/header.php';
?>

<section class="track-lines border-b border-panelline">
  <div class="max-w-6xl mx-auto px-5 py-14 md:py-16">
    <p class="mono text-xs tracking-widest text-cyan mb-3">ACCOUNT</p>
    <h1 class="display text-5xl md:text-6xl">JOIN THE GRID.</h1>
    <p class="text-text-mid max-w-lg mt-4">Create an account to keep track of your inquiries and orders.</p>
  </div>
</section>

<section class="max-w-6xl mx-auto px-5 py-16 grid md:grid-cols-12 gap-10">
  <form method="POST" action="register.php" novalidate class="md:col-span-7 panel p-6 md:p-8">
    <input type="hidden" name="register_submit" value="1">

    <div class="mb-5">
      <label for="field-username" class="field-label">Username</label>
      <input type="text" id="field-username" name="username" class="field-input" placeholder="e.g. paddockpat" value="<?= h($old['username']) ?>">
      <p class="field-error<?= isset($errors['username']) ? ' show' : '' ?>"><?= h($errors['username'] ?? '') ?></p>
    </div>

    <div class="mb-5">
      <label for="field-email" class="field-label">Email</label>
      <input type="email" id="field-email" name="email" class="field-input" placeholder="you@email.com" value="<?= h($old['email']) ?>">
      <p class="field-error<?= isset($errors['email']) ? ' show' : '' ?>"><?= h($errors['email'] ?? '') ?></p>
    </div>

    <div class="mb-5">
      <label for="field-password" class="field-label">Password</label>
      <input type="password" id="field-password" name="password" class="field-input" placeholder="At least 6 characters">
      <p class="field-error<?= isset($errors['password']) ? ' show' : '' ?>"><?= h($errors['password'] ?? '') ?></p>
    </div>

    <div class="mb-6">
      <label for="field-confirm-password" class="field-label">Confirm password</label>
      <input type="password" id="field-confirm-password" name="confirm_password" class="field-input" placeholder="Re-enter your password">
      <p class="field-error<?= isset($errors['confirm_password']) ? ' show' : '' ?>"><?= h($errors['confirm_password'] ?? '') ?></p>
    </div>

    <button type="submit" class="btn btn-primary w-full justify-center">Create account</button>
    <p class="text-text-mid text-sm mt-4">Already have an account? <a href="login.php" class="text-cyan hover:underline">Log in</a>.</p>
  </form>

  <div class="md:col-span-5 space-y-6">
    <div class="panel p-6">
      <p class="mono text-xs text-text-low tracking-widest mb-3">WHY SIGN UP</p>
      <p class="text-text-mid text-sm">Accounts are stored in MySQL with hashed passwords, as part of the school project's database requirement.</p>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
