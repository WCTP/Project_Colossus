@extends ('layouts.master')

@section('content')
  <h1 class="player-title">{{ Auth::user()->username }}&nbsp&nbsp&nbsp
    <span class="player-title-number"><span class="hp">HP</span> {{ Auth::user()->hp }}/{{ Auth::user()->max_hp }}</span>
    <span class="player-title-number"><span class="mp">MP</span> {{ Auth::user()->mp }}/{{ Auth::user()->max_mp }}</span>
  </h1>

  <h1 class="player-title">Combat Skills</h1>

  <div class="player-canvas">
    <div class="player-stat">Ability Points
      <span class="player-stat-number">{{ Auth::user()->ap }}</span>
    </div>
    <div class="player-stat">Strength
      <span class="player-stat-number">{{ Auth::user()->str }}</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Movement
      <span class="player-stat-number">{{ Auth::user()->mov }}</span>
    </div>
    <div class="player-stat">Magic
      <span class="player-stat-number">{{ Auth::user()->mag }}</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Skill
      <span class="player-stat-number">{{ Auth::user()->skl }}</span>
    </div>
    <div class="player-stat">Defense
      <span class="player-stat-number">{{ Auth::user()->def }}</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Evasion
      <span class="player-stat-number">{{ Auth::user()->eva }}</span>
    </div>
    <div class="player-stat">Resistance
      <span class="player-stat-number">{{ Auth::user()->res }}</span>
    </div>
  </div>

  <h1 class="player-title">Role Playing Skills</h1>

  <div class="player-canvas">
    <div class="player-stat">Vitality
      <span class="player-stat-number">{{ Auth::user()->vit }}</span>
    </div>
    <div class="player-stat">Intelligence
      <span class="player-stat-number">{{ Auth::user()->int }}</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Dexterity
      <span class="player-stat-number">{{ Auth::user()->dex }}</span>
    </div>
    <div class="player-stat">Wisdom
      <span class="player-stat-number">{{ Auth::user()->wis }}</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Constitution
      <span class="player-stat-number">{{ Auth::user()->con }}</span>
    </div>
    <div class="player-stat">Charisma
      <span class="player-stat-number">{{ Auth::user()->cha }}</span>
    </div>
  </div>

  @include('player.footer')

@endsection
