<?php
/**
 * header.php
 * Expects $pageTitle, $pageDescription and $activePage to be set by
 * the including page before this file is required.
 */
$pageTitle       = $pageTitle ?? 'Pit Wall — A Formula 1 Fan Hub';
$pageDescription = $pageDescription ?? 'Pit Wall is a fan-built hub covering the 2026 Formula 1 season.';
$activePage      = $activePage ?? '';

$navLinks = [
    'index.php'    => 'Home',
    'products.php' => 'Store &amp; Experiences',
    'about.php'    => 'About',
    'contact.php'  => 'Contact',
];

$flash = get_flash();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= h($pageTitle) ?></title>
<meta name="description" content="<?= h($pageDescription) ?>">

<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          asphalt: '#1b0f2e',
          panel: '#251638',
          panelline: '#4a3468',
          lime: '#d4af37',
          cyan: '#c9a6f0',
        }
      }
    }
  }
</script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="site-nav">
  <div class="max-w-6xl mx-auto px-5 flex items-center justify-between h-16">
    <a href="index.php" class="display text-xl tracking-tight">PIT&nbsp;WALL</a>

    <nav class="hidden md:flex items-center gap-8">
      <?php foreach ($navLinks as $href => $label): ?>
        <a href="<?= h($href) ?>" class="nav-link<?= $activePage === $href ? ' active' : '' ?>"><?= $label ?></a>
      <?php endforeach; ?>
      <?php if (is_logged_in()): ?>
        <span class="mono text-xs text-text-mid">Hi, <?= h($_SESSION['username']) ?></span>
        <a href="logout.php" class="nav-link<?= $activePage === 'logout.php' ? ' active' : '' ?>">Log out</a>
      <?php else: ?>
        <a href="login.php" class="nav-link<?= $activePage === 'login.php' ? ' active' : '' ?>">Log in</a>
        <a href="register.php" class="nav-link<?= $activePage === 'register.php' ? ' active' : '' ?>">Sign up</a>
      <?php endif; ?>
    </nav>

    <button id="nav-toggle" aria-expanded="false" aria-controls="mobile-nav" class="md:hidden text-text-hi border border-panelline px-3 py-1.5 mono text-xs">
      MENU
    </button>
  </div>
  <div id="mobile-nav" class="md:hidden px-5">
    <div class="flex flex-col gap-4 pb-5 pt-1">
      <?php foreach ($navLinks as $href => $label): ?>
        <a href="<?= h($href) ?>" class="nav-link<?= $activePage === $href ? ' active' : '' ?>"><?= $label ?></a>
      <?php endforeach; ?>
      <?php if (is_logged_in()): ?>
        <span class="mono text-xs text-text-mid">Hi, <?= h($_SESSION['username']) ?></span>
        <a href="logout.php" class="nav-link">Log out</a>
      <?php else: ?>
        <a href="login.php" class="nav-link">Log in</a>
        <a href="register.php" class="nav-link">Sign up</a>
      <?php endif; ?>
    </div>
  </div>
</header>

<?php if ($flash): ?>
  <div class="max-w-6xl mx-auto px-5 pt-6">
    <p class="mono text-sm p-3 border" style="border-color: <?= $flash['type'] === 'success' ? 'var(--lime)' : 'var(--danger)' ?>; color: <?= $flash['type'] === 'success' ? 'var(--lime)' : 'var(--danger)' ?>;">
      <?= h($flash['message']) ?>
    </p>
  </div>
<?php endif; ?>
