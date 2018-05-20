@extends ('layouts.master')

@section('content')
  <h1 class="player-title">Mikros Dasofylakas&nbsp&nbsp&nbsp
    <span class="player-title-number"><span class="hp">HP</span> 10/10</span>
    <span class="player-title-number"><span class="mp">MP</span> 20/20</span>
  </h1>

  <h1 class="player-title">Combat Skills</h1>

  <div class="player-canvas">
    <div class="player-stat">Ability Points
      <span class="player-stat-number">22</span>
    </div>
    <div class="player-stat">Strength
      <span class="player-stat-number">42</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Movement
      <span class="player-stat-number">22</span>
    </div>
    <div class="player-stat">Magic
      <span class="player-stat-number">42</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Skill
      <span class="player-stat-number">22</span>
    </div>
    <div class="player-stat">Defense
      <span class="player-stat-number">42</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Evasion
      <span class="player-stat-number">22</span>
    </div>
    <div class="player-stat">Resistance
      <span class="player-stat-number">42</span>
    </div>
  </div>

  <h1 class="player-title">Role Playing Skills</h1>

  <div class="player-canvas">
    <div class="player-stat">Dexterity
      <span class="player-stat-number">22</span>
    </div>
    <div class="player-stat">Wisdom
      <span class="player-stat-number">42</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Constitution
      <span class="player-stat-number">22</span>
    </div>
    <div class="player-stat">Charisma
      <span class="player-stat-number">42</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Intelligence
      <span class="player-stat-number">22</span>
    </div>
  </div>

  <div class="player-footer-menu">
    <a href="/player/stats">Stats</a>
    <a href="/player/spheres">Spheres</a>
  </div>


@endsection
