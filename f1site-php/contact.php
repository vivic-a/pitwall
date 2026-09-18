<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$errors  = [];
$old     = ['name' => '', 'email' => '', 'topic' => '', 'message' => ''];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $old['name']    = trim($_POST['name'] ?? '');
    $old['email']   = trim($_POST['email'] ?? '');
    $old['topic']   = trim($_POST['topic'] ?? '');
    $old['message'] = trim($_POST['message'] ?? '');

    $validTopics = ['general', 'order', 'experience', 'feedback'];

    if (mb_strlen($old['name']) < 2) {
        $errors['name'] = 'Enter at least 2 characters.';
    }
    if (!filter_var($old['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Enter a valid email address.';
    }
    if (!in_array($old['topic'], $validTopics, true)) {
        $errors['topic'] = 'Choose a topic.';
    }
    if (mb_strlen($old['message']) < 10) {
        $errors['message'] = 'Message should be at least 10 characters.';
    }

    if (empty($errors)) {
        $stmt = $pdo->prepare(
            'INSERT INTO inquiries (name, email, topic, message) VALUES (:name, :email, :topic, :message)'
        );
        $stmt->execute([
            ':name'    => $old['name'],
            ':email'   => $old['email'],
            ':topic'   => $old['topic'],
            ':message' => $old['message'],
        ]);

        $success = true;
        $old = ['name' => '', 'email' => '', 'topic' => '', 'message' => ''];
    }
}

$pageTitle       = 'Contact — Pit Wall';
$pageDescription = 'Get in touch with Pit Wall, a Formula 1 fan hub.';
$activePage      = 'contact.php';
include 'includes/header.php';
?>

<section class="track-lines border-b border-panelline">
  <div class="max-w-6xl mx-auto px-5 py-14 md:py-16">
    <p class="mono text-xs tracking-widest text-cyan mb-3">CONTACT</p>
    <h1 class="display text-5xl md:text-6xl">SEND IT OVER.</h1>
    <p class="text-text-mid max-w-lg mt-4">
      Questions about the site, the gear, or an experience booking — the form below saves
      straight to the inquiries database.
    </p>
  </div>
</section>

<section class="max-w-6xl mx-auto px-5 py-16 grid md:grid-cols-12 gap-10">

  <form id="contact-form" method="POST" action="contact.php" novalidate class="md:col-span-7 panel p-6 md:p-8">
    <input type="hidden" name="contact_submit" value="1">

    <div class="mb-5">
      <label for="field-name" class="field-label">Name</label>
      <input type="text" id="field-name" name="name" class="field-input" placeholder="Your name" value="<?= h($old['name']) ?>">
      <p id="error-name" class="field-error<?= isset($errors['name']) ? ' show' : '' ?>"><?= h($errors['name'] ?? 'Enter at least 2 characters.') ?></p>
    </div>

    <div class="mb-5">
      <label for="field-email" class="field-label">Email</label>
      <input type="email" id="field-email" name="email" class="field-input" placeholder="you@email.com" value="<?= h($old['email']) ?>">
      <p id="error-email" class="field-error<?= isset($errors['email']) ? ' show' : '' ?>"><?= h($errors['email'] ?? 'Enter a valid email address.') ?></p>
    </div>

    <div class="mb-5">
      <label for="field-topic" class="field-label">Topic</label>
      <select id="field-topic" name="topic" class="field-input">
        <option value="">Select a topic</option>
        <option value="general" <?= $old['topic'] === 'general' ? 'selected' : '' ?>>General question</option>
        <option value="order" <?= $old['topic'] === 'order' ? 'selected' : '' ?>>Store order</option>
        <option value="experience" <?= $old['topic'] === 'experience' ? 'selected' : '' ?>>Experience booking</option>
        <option value="feedback" <?= $old['topic'] === 'feedback' ? 'selected' : '' ?>>Site feedback</option>
      </select>
      <p id="error-topic" class="field-error<?= isset($errors['topic']) ? ' show' : '' ?>"><?= h($errors['topic'] ?? 'Choose a topic.') ?></p>
    </div>

    <div class="mb-6">
      <label for="field-message" class="field-label">Message</label>
      <textarea id="field-message" name="message" rows="5" class="field-input" placeholder="What's on your mind?"><?= h($old['message']) ?></textarea>
      <p id="error-message" class="field-error<?= isset($errors['message']) ? ' show' : '' ?>"><?= h($errors['message'] ?? 'Message should be at least 10 characters.') ?></p>
    </div>

    <button type="submit" class="btn btn-primary w-full justify-center">Send message</button>

    <?php if ($success): ?>
      <p id="form-status" class="mono text-sm mt-4" style="color: var(--lime);">
        Message received — thanks for the note. It's been saved to the database.
      </p>
    <?php elseif (!empty($errors)): ?>
      <p id="form-status" class="mono text-sm mt-4" style="color: var(--danger);">
        Check the highlighted fields above before sending.
      </p>
    <?php else: ?>
      <p id="form-status" class="mono text-sm mt-4" style="display:none;"></p>
    <?php endif; ?>
  </form>

  <div class="md:col-span-5 space-y-6">
    <div class="panel p-6">
      <p class="mono text-xs text-text-low tracking-widest mb-3">RESPONSE TIME</p>
      <p class="display text-2xl">UNDER 48H</p>
      <p class="text-text-mid text-sm mt-2">This form saves inquiries to a MySQL database as part of a school project.</p>
    </div>
    <div class="panel p-6">
      <p class="mono text-xs text-text-low tracking-widest mb-3">FOLLOW ALONG</p>
      <ul class="space-y-2 text-sm mt-2">
        <li><a href="#" class="hover:text-lime">@pitwall on socials</a></li>
        <li><a href="#" class="hover:text-lime">Race-weekend live thread</a></li>
        <li><a href="#" class="hover:text-lime">Newsletter archive</a></li>
      </ul>
    </div>
    <div class="panel p-6">
      <p class="mono text-xs text-text-low tracking-widest mb-3">BASED IN</p>
      <p class="display text-2xl">YOUR CITY</p>
      <p class="text-text-mid text-sm mt-2">Update this block with your own location for the final submission.</p>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
