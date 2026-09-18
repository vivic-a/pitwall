<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

if (is_logged_in()) {
    redirect('index.php');
}

$errors = [];
$old    = ['username' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_submit'])) {
    $old['username'] = trim($_POST['username'] ?? '');
    $password         = $_POST['password'] ?? '';

    if ($old['username'] === '' || $password === '') {
        $errors['general'] = 'Enter both your username/email and password.';
    } else {
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :login OR email = :login LIMIT 1');
        $stmt->execute([':login' => $old['username']]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id']  = $user['id'];
            $_SESSION['username'] = $user['username'];
            set_flash('success', 'Welcome back, ' . $user['username'] . '.');
            redirect('index.php');
        } else {
            $errors['general'] = 'Incorrect username/email or password.';
        }
    }
}

$pageTitle       = 'Log In — Pit Wall';
$pageDescription = 'Log in to your Pit Wall account.';
$activePage      = 'login.php';
include 'includes/header.php';
?>

<section class="track-lines border-b border-panelline">
  <div class="max-w-6xl mx-auto px-5 py-14 md:py-16">
    <p class="mono text-xs tracking-widest text-cyan mb-3">ACCOUNT</p>
    <h1 class="display text-5xl md:text-6xl">WELCOME BACK.</h1>
  </div>
</section>

<section class="max-w-6xl mx-auto px-5 py-16 grid md:grid-cols-12 gap-10">
  <form method="POST" action="login.php" novalidate class="md:col-span-7 panel p-6 md:p-8">
    <input type="hidden" name="login_submit" value="1">

    <?php if (isset($errors['general'])): ?>
      <p class="field-error show mb-4"><?= h($errors['general']) ?></p>
    <?php endif; ?>

    <div class="mb-5">
      <label for="field-username" class="field-label">Username or email</label>
      <input type="text" id="field-username" name="username" class="field-input" placeholder="Username or email" value="<?= h($old['username']) ?>">
    </div>

    <div class="mb-6">
      <label for="field-password" class="field-label">Password</label>
      <input type="password" id="field-password" name="password" class="field-input" placeholder="Your password">
    </div>

    <button type="submit" class="btn btn-primary w-full justify-center">Log in</button>
    <p class="text-text-mid text-sm mt-4">No account yet? <a href="register.php" class="text-cyan hover:underline">Sign up</a>.</p>
  </form>

  <div class="md:col-span-5 space-y-6">
    <div class="panel p-6">
      <p class="mono text-xs text-text-low tracking-widest mb-3">HOW THIS WORKS</p>
      <p class="text-text-mid text-sm">Your password is checked against a hashed value stored in MySQL — the plain password is never stored.</p>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
