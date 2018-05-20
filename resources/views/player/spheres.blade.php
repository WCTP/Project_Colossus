@extends ('layouts.master')

@section('content')
  <h1 class="player-title">Mikros Dasofylakas</h1>

  <h1 class="player-title">Combat Spheres</h1>

  <div class="player-canvas">
    <div class="player-stat">Hit Points
      <span class="player-stat-number sphere-background-hp">22</span>
    </div>
    <div class="player-stat">Magic Points
      <span class="player-stat-number sphere-background-mp">42</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Ability Points
      <span class="player-stat-number sphere-background-ap">22</span>
    </div>
    <div class="player-stat">Strength
      <span class="player-stat-number sphere-background-str">42</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Movement
      <span class="player-stat-number sphere-background-mov">22</span>
    </div>
    <div class="player-stat">Magic
      <span class="player-stat-number sphere-background-mag">42</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Skill
      <span class="player-stat-number sphere-background-skl">22</span>
    </div>
    <div class="player-stat">Defense
      <span class="player-stat-number sphere-background-def">42</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Evasion
      <span class="player-stat-number sphere-background-eva">22</span>
    </div>
    <div class="player-stat">Resistance
      <span class="player-stat-number sphere-background-res">42</span>
    </div>
  </div>

  <h1 class="player-title">Role Playing Spheres</h1>

  <div class="player-canvas">
    <div class="player-stat">Dexterity
      <span class="player-stat-number sphere-background-hp">22</span>
    </div>
    <div class="player-stat">Wisdom
      <span class="player-stat-number sphere-background-mag">42</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Constitution
      <span class="player-stat-number sphere-background-str">22</span>
    </div>
    <div class="player-stat">Charisma
      <span class="player-stat-number sphere-background-ap">42</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Intelligence
      <span class="player-stat-number sphere-background-mp">22</span>
    </div>
  </div>

  <div class="player-footer-menu">
    <a href="/player/stats">Stats</a>
    <a href="/player/spheres">Spheres</a>
  </div>


@endsection
