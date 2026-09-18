<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$pageTitle       = 'About — Pit Wall';
$pageDescription = 'Why Pit Wall exists: a fan-built Formula 1 hub made as a school web design project.';
$activePage      = 'about.php';
include 'includes/header.php';
?>

<section class="track-lines border-b border-panelline">
  <div class="max-w-6xl mx-auto px-5 py-14 md:py-16">
    <p class="mono text-xs tracking-widest text-cyan mb-3">ABOUT</p>
    <h1 class="display text-5xl md:text-6xl">BUILT BY A FAN,<br>NOT A TEAM.</h1>
  </div>
</section>

<section class="max-w-6xl mx-auto px-5 py-16 grid md:grid-cols-12 gap-10">
  <div class="md:col-span-7">
    <p class="text-text-mid text-lg leading-relaxed mb-6">
      Pit Wall started as a class assignment and became a place to put everything I like about
      Formula 1 in one spot: the cars, the strategy calls, the sound of a lap being put together
      piece by piece. It's not affiliated with Formula 1, the FIA, or any team — it's a fan project,
      built to look and work like a real motorsport site while I learn how to build one.
    </p>
    <p class="text-text-mid text-lg leading-relaxed mb-6">
      The 2026 rule change felt like the right moment to build this: smaller, lighter cars, a
      new hybrid split, active aero replacing DRS, and two new manufacturers joining the grid.
      A season with this much change deserved a hub that explains it plainly.
    </p>
    <p class="text-text-mid text-lg leading-relaxed">
      Every product and experience listed on this site is placeholder content made for the
      assignment — the design and the copy are real, the storefront isn't.
    </p>
  </div>

  <div class="md:col-span-5">
    <div class="panel p-6">
      <p class="mono text-xs text-text-low tracking-widest mb-4">PROJECT SPECS</p>
      <div class="space-y-3 mono text-sm">
        <div class="flex justify-between border-b border-panelline pb-3"><span class="text-text-mid">TYPE</span><span>School web project</span></div>
        <div class="flex justify-between border-b border-panelline pb-3"><span class="text-text-mid">STACK</span><span>PHP, MySQL, Tailwind, jQuery</span></div>
        <div class="flex justify-between border-b border-panelline pb-3"><span class="text-text-mid">PAGES</span><span>6</span></div>
        <div class="flex justify-between"><span class="text-text-mid">STATUS</span><span class="text-lime">In progress</span></div>
      </div>
    </div>
  </div>
</section>

<div class="checker-strip"></div>

<section class="max-w-6xl mx-auto px-5 py-16">
  <h2 class="display text-4xl mb-10">WHAT YOU'LL FIND HERE</h2>
  <div class="grid md:grid-cols-3 gap-px bg-panelline border border-panelline">
    <div class="panel border-0 p-6">
      <p class="mono text-xs text-text-low tracking-widest mb-3">01</p>
      <h3 class="display text-xl mb-2">SEASON CONTEXT</h3>
      <p class="text-text-mid text-sm">A home page tracking what's new for the 2026 regulation reset, in plain language.</p>
    </div>
    <div class="panel border-0 p-6">
      <p class="mono text-xs text-text-low tracking-widest mb-3">02</p>
      <h3 class="display text-xl mb-2">FAN GEAR</h3>
      <p class="text-text-mid text-sm">A sample store of caps, prints, and models, plus race-weekend experience packages.</p>
    </div>
    <div class="panel border-0 p-6">
      <p class="mono text-xs text-text-low tracking-widest mb-3">03</p>
      <h3 class="display text-xl mb-2">A WAY TO REACH OUT</h3>
      <p class="text-text-mid text-sm">A working contact form with server-side validation that saves inquiries to the database.</p>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
