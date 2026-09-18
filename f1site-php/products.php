<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$pageTitle       = 'Store & Experiences — Pit Wall';
$pageDescription = 'Fan gear and race-day experience packages from Pit Wall, a Formula 1 fan hub.';
$activePage      = 'products.php';
include 'includes/header.php';
?>

<section class="track-lines border-b border-panelline">
  <div class="max-w-6xl mx-auto px-5 py-14 md:py-16">
    <p class="mono text-xs tracking-widest text-cyan mb-3">STORE &amp; EXPERIENCES</p>
    <h1 class="display text-5xl md:text-6xl">GEAR UP. GET CLOSER.</h1>
    <p class="text-text-mid max-w-lg mt-4">
      Fan-grade merchandise and race-weekend experiences, organized the way a garage
      organizes a car: by what it's for, not what it costs.
    </p>
  </div>
</section>

<section class="max-w-6xl mx-auto px-5 py-16">
  <div class="flex items-end justify-between mb-8 flex-wrap gap-4">
    <h2 class="display text-4xl">FAN GEAR</h2>
    <p class="text-text-low mono text-xs tracking-widest">SAMPLE CATALOGUE — SCHOOL PROJECT PRICING</p>
  </div>

  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-px bg-panelline border border-panelline">

    <article class="panel border-0 p-6 flex flex-col">
      <div class="h-28 flex items-center justify-center border border-panelline mb-5">
        <svg width="70" height="34" viewBox="0 0 70 34" fill="none" aria-hidden="true">
          <path d="M4 26 L16 8 H30 L36 18 H58 L64 26 Z" stroke="#d4af37" stroke-width="2" fill="none"/>
          <circle cx="18" cy="27" r="4" stroke="#d4af37" stroke-width="2"/>
          <circle cx="52" cy="27" r="4" stroke="#d4af37" stroke-width="2"/>
        </svg>
      </div>
      <p class="code-tag mb-3 w-fit">CAP</p>
      <h3 class="display text-xl mb-1">PIT LANE SIX-PANEL CAP</h3>
      <p class="text-text-mid text-sm flex-1">Structured cotton cap with a woven pit-board patch. One size, adjustable strap.</p>
      <div class="flex items-center justify-between mt-5">
        <span class="mono text-lime text-lg">$28.00</span>
        <button class="btn btn-ghost text-xs">Add to bag</button>
      </div>
    </article>

    <article class="panel border-0 p-6 flex flex-col">
      <div class="h-28 flex items-center justify-center border border-panelline mb-5">
        <svg width="40" height="46" viewBox="0 0 40 46" fill="none" aria-hidden="true">
          <path d="M8 4 H32 V40 L20 44 L8 40 Z" stroke="#c9a6f0" stroke-width="2" fill="none"/>
          <path d="M14 4 V16 H26 V4" stroke="#c9a6f0" stroke-width="2"/>
        </svg>
      </div>
      <p class="code-tag mb-3 w-fit">OUTERWEAR</p>
      <h3 class="display text-xl mb-1">TEAM-RADIO SOFT SHELL</h3>
      <p class="text-text-mid text-sm flex-1">Water-resistant jacket with reflective trim, built for cold pit-lane mornings.</p>
      <div class="flex items-center justify-between mt-5">
        <span class="mono text-lime text-lg">$96.00</span>
        <button class="btn btn-ghost text-xs">Add to bag</button>
      </div>
    </article>

    <article class="panel border-0 p-6 flex flex-col">
      <div class="h-28 flex items-center justify-center border border-panelline mb-5">
        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" aria-hidden="true">
          <rect x="6" y="6" width="34" height="34" stroke="#d4af37" stroke-width="2"/>
          <path d="M6 23 H40 M23 6 V40" stroke="#d4af37" stroke-width="2"/>
        </svg>
      </div>
      <p class="code-tag mb-3 w-fit">SCALE MODEL</p>
      <h3 class="display text-xl mb-1">1:43 SEASON-SPEC MODEL</h3>
      <p class="text-text-mid text-sm flex-1">Die-cast replica of the current-season chassis shape, generic livery, display stand included.</p>
      <div class="flex items-center justify-between mt-5">
        <span class="mono text-lime text-lg">$44.00</span>
        <button class="btn btn-ghost text-xs">Add to bag</button>
      </div>
    </article>

    <article class="panel border-0 p-6 flex flex-col">
      <div class="h-28 flex items-center justify-center border border-panelline mb-5">
        <svg width="50" height="36" viewBox="0 0 50 36" fill="none" aria-hidden="true">
          <rect x="4" y="8" width="42" height="22" rx="1" stroke="#c9a6f0" stroke-width="2"/>
          <path d="M4 16 H46 M18 8 V30 M32 8 V30" stroke="#c9a6f0" stroke-width="1.5"/>
        </svg>
      </div>
      <p class="code-tag mb-3 w-fit">PRINT</p>
      <h3 class="display text-xl mb-1">TELEMETRY POSTER, A2</h3>
      <p class="text-text-mid text-sm flex-1">A lap's worth of throttle, brake and gear-shift data, printed as wall art.</p>
      <div class="flex items-center justify-between mt-5">
        <span class="mono text-lime text-lg">$22.00</span>
        <button class="btn btn-ghost text-xs">Add to bag</button>
      </div>
    </article>

    <article class="panel border-0 p-6 flex flex-col">
      <div class="h-28 flex items-center justify-center border border-panelline mb-5">
        <svg width="34" height="46" viewBox="0 0 34 46" fill="none" aria-hidden="true">
          <path d="M17 4 C24 4 29 10 29 18 C29 28 17 42 17 42 C17 42 5 28 5 18 C5 10 10 4 17 4 Z" stroke="#d4af37" stroke-width="2"/>
          <circle cx="17" cy="18" r="5" stroke="#d4af37" stroke-width="2"/>
        </svg>
      </div>
      <p class="code-tag mb-3 w-fit">ACCESSORY</p>
      <h3 class="display text-xl mb-1">CIRCUIT-PIN SET (5)</h3>
      <p class="text-text-mid text-sm flex-1">Enamel pins tracing five classic circuit outlines, from street tracks to permanent ones.</p>
      <div class="flex items-center justify-between mt-5">
        <span class="mono text-lime text-lg">$18.00</span>
        <button class="btn btn-ghost text-xs">Add to bag</button>
      </div>
    </article>

    <article class="panel border-0 p-6 flex flex-col">
      <div class="h-28 flex items-center justify-center border border-panelline mb-5">
        <svg width="46" height="34" viewBox="0 0 46 34" fill="none" aria-hidden="true">
          <rect x="4" y="4" width="38" height="26" rx="1" stroke="#c9a6f0" stroke-width="2"/>
          <path d="M4 24 L16 12 L24 18 L34 8 L42 16" stroke="#c9a6f0" stroke-width="2" fill="none"/>
        </svg>
      </div>
      <p class="code-tag mb-3 w-fit">MEDIA</p>
      <h3 class="display text-xl mb-1">SEASON REVIEW, DIGITAL</h3>
      <p class="text-text-mid text-sm flex-1">A downloadable end-of-season recap: standings, key moments, and stat breakdowns.</p>
      <div class="flex items-center justify-between mt-5">
        <span class="mono text-lime text-lg">$9.00</span>
        <button class="btn btn-ghost text-xs">Add to bag</button>
      </div>
    </article>

  </div>
</section>

<div class="checker-strip"></div>

<section class="border-b border-panelline">
  <div class="max-w-6xl mx-auto px-5 py-16">
    <div class="flex items-end justify-between mb-8 flex-wrap gap-4">
      <h2 class="display text-4xl">RACE-WEEKEND EXPERIENCES</h2>
      <p class="text-text-low mono text-xs tracking-widest">SERVICES — BOOK AHEAD OF THE CALENDAR</p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      <div class="panel p-6">
        <p class="mono text-xs text-text-low tracking-widest mb-3">TIER 01</p>
        <h3 class="display text-2xl mb-2">GRANDSTAND WEEKEND</h3>
        <p class="text-text-mid text-sm mb-5">Three-day grandstand access, a seat guide for your circuit, and a printable timing-sheet kit.</p>
        <p class="stat-num text-3xl mb-5">$249</p>
        <a href="contact.php" class="btn btn-ghost w-full justify-center">Inquire</a>
      </div>
      <div class="panel p-6 border-lime" style="border-color: var(--lime);">
        <p class="mono text-xs text-lime tracking-widest mb-3">TIER 02 — MOST BOOKED</p>
        <h3 class="display text-2xl mb-2">PADDOCK CLUB DAY</h3>
        <p class="text-text-mid text-sm mb-5">Paddock-adjacent viewing, a pit-lane walk slot, and a briefing on what the strategists are watching for.</p>
        <p class="stat-num text-3xl mb-5">$690</p>
        <a href="contact.php" class="btn btn-primary w-full justify-center">Inquire</a>
      </div>
      <div class="panel p-6">
        <p class="mono text-xs text-text-low tracking-widest mb-3">TIER 03</p>
        <h3 class="display text-2xl mb-2">KARTING COACH DAY</h3>
        <p class="text-text-mid text-sm mb-5">A half-day at a local circuit with a coach, timing data from your own laps, and a debrief.</p>
        <p class="stat-num text-3xl mb-5">$180</p>
        <a href="contact.php" class="btn btn-ghost w-full justify-center">Inquire</a>
      </div>
    </div>
  </div>
</section>

<section class="max-w-6xl mx-auto px-5 py-16">
  <h2 class="display text-4xl mb-8">BEFORE YOU BOOK</h2>
  <div class="max-w-2xl">

    <div class="border-b border-panelline py-4">
      <button class="faq-question w-full flex items-center justify-between text-left" aria-expanded="false">
        <span class="text-lg">Are these real Formula 1 tickets or merchandise?</span>
        <span class="mono text-text-low">+</span>
      </button>
      <div class="faq-answer text-text-mid text-sm mt-3" style="display:none;">
        No — Pit Wall is a fan-built school project. The catalogue and experience tiers above are
        illustrative content, not a live store, and Pit Wall has no affiliation with Formula 1, the FIA,
        or any team.
      </div>
    </div>

    <div class="border-b border-panelline py-4">
      <button class="faq-question w-full flex items-center justify-between text-left" aria-expanded="false">
        <span class="text-lg">Can I customize gear with a specific team livery?</span>
        <span class="mono text-text-low">+</span>
      </button>
      <div class="faq-answer text-text-mid text-sm mt-3" style="display:none;">
        The demo catalogue intentionally uses generic designs rather than official team liveries,
        since those belong to the teams and the sport's rights holders.
      </div>
    </div>

    <div class="border-b border-panelline py-4">
      <button class="faq-question w-full flex items-center justify-between text-left" aria-expanded="false">
        <span class="text-lg">How do experience bookings work?</span>
        <span class="mono text-text-low">+</span>
      </button>
      <div class="faq-answer text-text-mid text-sm mt-3" style="display:none;">
        Use the Contact page to send an inquiry with your preferred circuit and date. Submitted
        inquiries are saved to the database so they can be reviewed and followed up on.
      </div>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
