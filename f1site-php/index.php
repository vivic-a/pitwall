<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$pageTitle       = 'Pit Wall — A Formula 1 Fan Hub';
$pageDescription = 'Pit Wall is a fan-built hub covering the 2026 Formula 1 season: cars, teams, gear and race-day experiences.';
$activePage      = 'index.php';
include 'includes/header.php';
?>

<section class="track-lines border-b border-panelline">
  <div class="max-w-6xl mx-auto px-5 pt-16 pb-14 md:pt-24 md:pb-20 grid md:grid-cols-12 gap-8 items-end">
    <div class="md:col-span-8">
      <p class="mono text-xs tracking-widest text-cyan mb-4">2026 SEASON &middot; 77TH WORLD CHAMPIONSHIP</p>
      <h1 class="display text-[3.2rem] leading-[0.92] md:text-[5.5rem]">
        NEW CARS.<br>
        NEW RULES.<br>
        SAME OBSESSION.
      </h1>
      <p class="text-text-mid max-w-md mt-6 text-lg">
        Pit Wall is a fan-built hub for the 2026 regulation reset — lighter cars, active aero,
        and an eleven-team grid. Built for people who read the tyre data before the headline.
      </p>
      <div class="flex flex-wrap gap-4 mt-8">
        <a href="products.php" class="btn btn-primary">Browse the store</a>
        <a href="about.php" class="btn btn-ghost">Why this site exists</a>
      </div>
    </div>

    <div class="md:col-span-4">
      <div class="panel p-5">
        <p class="mono text-xs text-text-low tracking-widest mb-3">SEASON OPENER</p>
        <p class="display text-2xl leading-tight">MELBOURNE<br>ALBERT PARK</p>
        <div class="h-px bg-panelline my-4"></div>
        <div class="flex justify-between mono text-sm text-text-mid">
          <span>ROUND</span><span class="text-text-hi">01 / 24</span>
        </div>
        <div class="flex justify-between mono text-sm text-text-mid mt-2">
          <span>DATE</span><span class="text-text-hi">MAR 8</span>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="checker-strip"></div>

<section class="border-b border-panelline">
  <div class="max-w-6xl mx-auto px-5 py-14 grid grid-cols-2 md:grid-cols-4 gap-8">
    <div>
      <p class="stat-num text-5xl"><span class="js-counter" data-target="11">0</span></p>
      <p class="mono text-xs text-text-low tracking-widest mt-2">TEAMS ON THE GRID</p>
    </div>
    <div>
      <p class="stat-num text-5xl"><span class="js-counter" data-target="24">0</span></p>
      <p class="mono text-xs text-text-low tracking-widest mt-2">RACES THIS SEASON</p>
    </div>
    <div>
      <p class="stat-num text-5xl"><span class="js-counter" data-target="30" data-suffix="kg">0</span></p>
      <p class="mono text-xs text-text-low tracking-widest mt-2">LIGHTER THAN 2025</p>
    </div>
    <div>
      <p class="stat-num text-5xl"><span class="js-counter" data-target="50" data-suffix="%">0</span></p>
      <p class="mono text-xs text-text-low tracking-widest mt-2">ELECTRIC POWER SPLIT</p>
    </div>
  </div>
</section>

<section class="max-w-6xl mx-auto px-5 py-16 md:py-20">
  <div class="flex items-end justify-between mb-10 flex-wrap gap-4">
    <h2 class="display text-4xl md:text-5xl">WHAT CHANGED<br>FOR 2026</h2>
    <p class="text-text-mid max-w-xs">The biggest technical overhaul in the sport's history — here's the short version.</p>
  </div>

  <div class="grid md:grid-cols-3 gap-px bg-panelline border border-panelline">
    <article class="panel border-0 p-6">
      <p class="code-tag mb-4">CHASSIS</p>
      <h3 class="display text-2xl mb-2">SMALLER, LIGHTER</h3>
      <p class="text-text-mid text-sm">Cars are shorter, roughly 10cm narrower and about 30kg lighter, with slimmer tyres to cut drag.</p>
    </article>
    <article class="panel border-0 p-6">
      <p class="code-tag mb-4">AERO</p>
      <h3 class="display text-2xl mb-2">ACTIVE AERO REPLACES DRS</h3>
      <p class="text-text-mid text-sm">Movable front and rear wings adjust automatically around the lap in an "Override Mode" for overtaking.</p>
    </article>
    <article class="panel border-0 p-6">
      <p class="code-tag mb-4">POWER UNIT</p>
      <h3 class="display text-2xl mb-2">50/50 HYBRID SPLIT</h3>
      <p class="text-text-mid text-sm">A near-even split between electric and combustion power, running on 100% sustainable fuel.</p>
    </article>
    <article class="panel border-0 p-6">
      <p class="code-tag mb-4">GRID</p>
      <h3 class="display text-2xl mb-2">AUDI JOINS AS A WORKS TEAM</h3>
      <p class="text-text-mid text-sm">Audi enters as a full manufacturer, partnering with the Sauber team it has been building toward since 2022.</p>
    </article>
    <article class="panel border-0 p-6">
      <p class="code-tag mb-4">GRID</p>
      <h3 class="display text-2xl mb-2">AN 11TH TEAM ARRIVES</h3>
      <p class="text-text-mid text-sm">A new constructor joins the grid for the first time since 2016, expanding the field to 22 cars.</p>
    </article>
    <article class="panel border-0 p-6">
      <p class="code-tag mb-4">CALENDAR</p>
      <h3 class="display text-2xl mb-2">24 RACES WORLDWIDE</h3>
      <p class="text-text-mid text-sm">The season opens in Melbourne in March and spans a record-length calendar across five continents.</p>
    </article>
  </div>
</section>

<section class="border-t border-panelline">
  <div class="max-w-6xl mx-auto px-5 py-16 md:py-20">
    <div class="flex items-end justify-between mb-10 flex-wrap gap-4">
      <h2 class="display text-4xl md:text-5xl">CARS THROUGH<br>THE ERAS</h2>
      <p class="text-text-mid max-w-xs">
        From screaming naturally-aspirated V8s to today's hybrid rockets — five eras, five very different machines.
        <span class="block text-text-low text-xs mono mt-2">ILLUSTRATIONS BELOW ARE ORIGINAL, NOT TEAM ARTWORK.</span>
      </p>
    </div>

    <div class="grid md:grid-cols-5 gap-px bg-panelline border border-panelline">

      <article class="panel border-0 p-5 flex flex-col">
        <div class="photo-slot mb-4">
          <span class="photo-slot-icon">🏎️</span>
          <span class="photo-slot-text">ADD PHOTO<br>assets/cars/90s.jpg</span>
        </div>
        <p class="code-tag mb-2 w-fit">1990s</p>
        <h3 class="display text-lg mb-1">NA V8 / V10 / V12</h3>
        <p class="text-text-mid text-xs">High-revving naturally aspirated engines, manual and early semi-auto gearboxes, and driver aids banned from 1994.</p>
      </article>

      <article class="panel border-0 p-5 flex flex-col">
        <div class="photo-slot mb-4">
          <span class="photo-slot-icon">🏎️</span>
          <span class="photo-slot-text">ADD PHOTO<br>assets/cars/2006-v8.jpg</span>
        </div>
        <p class="code-tag mb-2 w-fit">2006–2013</p>
        <h3 class="display text-lg mb-1">THE 2.4L V8 ERA</h3>
        <p class="text-text-mid text-xs">A single-spec 2.4-litre V8 formula for every team, revving past 18,000 rpm — the sound most fans mean by "classic F1."</p>
      </article>

      <article class="panel border-0 p-5 flex flex-col">
        <div class="photo-slot mb-4">
          <span class="photo-slot-icon">🏎️</span>
          <span class="photo-slot-text">ADD PHOTO<br>assets/cars/2014-hybrid.jpg</span>
        </div>
        <p class="code-tag mb-2 w-fit">2014–2021</p>
        <h3 class="display text-lg mb-1">V6 TURBO-HYBRID</h3>
        <p class="text-text-mid text-xs">1.6L turbocharged V6s paired with energy recovery systems (ERS) — quieter, but far more efficient and complex.</p>
      </article>

      <article class="panel border-0 p-5 flex flex-col">
        <div class="photo-slot mb-4">
          <span class="photo-slot-icon">🏎️</span>
          <span class="photo-slot-text">ADD PHOTO<br>assets/cars/2022-groundeffect.jpg</span>
        </div>
        <p class="code-tag mb-2 w-fit">2022–2025</p>
        <h3 class="display text-lg mb-1">GROUND-EFFECT ERA</h3>
        <p class="text-text-mid text-xs">Underfloor tunnels replaced most bodywork downforce, 18-inch wheels arrived, and a cost cap reshaped the grid.</p>
      </article>

      <article class="panel border-0 p-5 flex flex-col">
        <div class="photo-slot mb-4">
          <span class="photo-slot-icon">🏎️</span>
          <span class="photo-slot-text">ADD PHOTO<br>assets/cars/2026.jpg</span>
        </div>
        <p class="code-tag mb-2 w-fit">2026–</p>
        <h3 class="display text-lg mb-1">ACTIVE-AERO HYBRID</h3>
        <p class="text-text-mid text-xs">Smaller, lighter chassis, movable aero, and a near-even hybrid split running on sustainable fuel.</p>
      </article>

    </div>
    <p class="text-text-low text-xs mono mt-4">
      TIP — replace any .photo-slot div with an &lt;img src="assets/cars/your-file.jpg" alt="..."&gt; tag once you've added your own photo to the assets/cars/ folder.
    </p>
  </div>
</section>

<section class="border-t border-panelline">
  <div class="max-w-6xl mx-auto px-5 py-16 md:py-20">
    <div class="flex items-end justify-between mb-8 flex-wrap gap-4">
      <h2 class="display text-4xl md:text-5xl">2025 FINAL<br>CONSTRUCTORS</h2>
      <a href="products.php" class="mono text-xs tracking-widest text-cyan border-b border-cyan pb-0.5">SEE FAN GEAR BY TEAM</a>
    </div>

    <div class="overflow-x-auto">
      <table class="timing-table min-w-[560px]">
        <thead>
          <tr>
            <th>POS</th>
            <th>TEAM</th>
            <th>CODE</th>
            <th>NOTE</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="mono text-lime">01</td>
            <td>McLaren</td>
            <td><span class="code-tag">MCL</span></td>
            <td class="text-text-mid text-sm">Took the 2025 constructors' title.</td>
          </tr>
          <tr>
            <td class="mono text-text-mid">02</td>
            <td>Mercedes</td>
            <td><span class="code-tag">MER</span></td>
            <td class="text-text-mid text-sm">Building toward the new power-unit era.</td>
          </tr>
          <tr>
            <td class="mono text-text-mid">03</td>
            <td>Red Bull Racing</td>
            <td><span class="code-tag">RBR</span></td>
            <td class="text-text-mid text-sm">New Ford power-unit partnership begins.</td>
          </tr>
          <tr>
            <td class="mono text-text-mid">04</td>
            <td>Ferrari</td>
            <td><span class="code-tag">FER</span></td>
            <td class="text-text-mid text-sm">Chasing a first title since 2008.</td>
          </tr>
          <tr>
            <td class="mono text-text-mid">—</td>
            <td>Audi</td>
            <td><span class="code-tag">AUD</span></td>
            <td class="text-text-mid text-sm">Debuts as a full works team in 2026.</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="text-text-low text-xs mono mt-4">STANDINGS SHOWN REFLECT THE FINAL 2025 CONSTRUCTORS' CHAMPIONSHIP.</p>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
