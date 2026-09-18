$(function () {

    $('#nav-toggle').on('click', function () {
    $('#mobile-nav').toggleClass('open');
    const expanded = $(this).attr('aria-expanded') === 'true';
    $(this).attr('aria-expanded', String(!expanded));
  });

    const path = window.location.pathname.split('/').pop() || 'index.php';
  $('.nav-link').each(function () {
    const href = $(this).attr('href');
    if (href === path) $(this).addClass('active');
  });

    $('.js-counter').each(function () {
    const $el = $(this);
    const target = parseFloat($el.data('target'));
    const decimals = $el.data('decimals') || 0;
    const suffix = $el.data('suffix') || '';
    const duration = 1200;
    const start = performance.now();

    function tick(now) {
      const progress = Math.min((now - start) / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      const value = (target * eased).toFixed(decimals);
      $el.text(value + suffix);
      if (progress < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  });

    $('.faq-question').on('click', function () {
    const $answer = $(this).next('.faq-answer');
    const isOpen = $(this).attr('aria-expanded') === 'true';
    $('.faq-answer').not($answer).slideUp(150);
    $('.faq-question').not(this).attr('aria-expanded', 'false');
    $answer.slideToggle(150);
    $(this).attr('aria-expanded', String(!isOpen));
  });

    // Client-side pre-check for the contact form. This is progressive
    // enhancement only: if a field fails, the real submit is blocked and
    // the error is shown. If everything looks fine, the form submits
    // normally via POST to contact.php, which does the real, authoritative
    // validation and saves the inquiry to the database.
    const $form = $('#contact-form');
  if ($form.length) {
    $form.on('submit', function (e) {
      let valid = true;

      const $name = $('#field-name');
      const $email = $('#field-email');
      const $topic = $('#field-topic');
      const $message = $('#field-message');

      function showError($field, $error, condition) {
        if (!condition) {
          $error.addClass('show');
          $field.css('border-color', 'var(--danger)');
          valid = false;
        } else {
          $error.removeClass('show');
          $field.css('border-color', 'var(--panel-line)');
        }
      }

      showError($name, $('#error-name'), $name.val().trim().length >= 2);

      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      showError($email, $('#error-email'), emailPattern.test($email.val().trim()));

      showError($topic, $('#error-topic'), $topic.val() !== '');

      showError($message, $('#error-message'), $message.val().trim().length >= 10);

      if (!valid) {
        e.preventDefault();
        $('#form-status')
          .text('Check the highlighted fields above before sending.')
          .css('color', 'var(--danger)')
          .show();
      }
      // If valid, let the browser submit the form as a normal POST.
    });
  }

    $('.newsletter-form').on('submit', function (e) {
    e.preventDefault();
    const $input = $(this).find('input[type="email"]');
    const $note = $(this).find('.newsletter-note');
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (emailPattern.test($input.val().trim())) {
      $note.text('You\u2019re on the list.').css('color', 'var(--lime)').show();
      $input.val('');
    } else {
      $note.text('Enter a valid email.').css('color', 'var(--danger)').show();
    }
  });

});
