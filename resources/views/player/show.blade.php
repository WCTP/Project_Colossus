@extends ('layouts.master')

@section('content')
  <h1 class="title">{{ $user->username }}</h1>

  <div class="show-document-card">
    <h2>Name: {{ $user->name }}</h2>
    <h2>Email: {{ $user->email }}</h2>
    <h2>Character: {{ $user->username }}</h2>
    <a class="edit-link" href="/player/edit/{{ $user->id }}">Edit</a>
  </div>

  <h1 class="player-title">Combat Spheres</h1>

  <div class="player-canvas">
    <div class="player-stat">Hit Points
      <span class="player-stat-number sphere-background-hp">{{ Auth::user()->sphere_hp }}</span>
    </div>
    <div class="player-stat">Magic Points
      <span class="player-stat-number sphere-background-mp">{{ Auth::user()->sphere_mp }}</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Ability Points
      <span class="player-stat-number sphere-background-ap">{{ Auth::user()->sphere_ap }}</span>
    </div>
    <div class="player-stat">Strength
      <span class="player-stat-number sphere-background-str">{{ Auth::user()->sphere_str }}</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Movement
      <span class="player-stat-number sphere-background-mov">{{ Auth::user()->sphere_mov }}</span>
    </div>
    <div class="player-stat">Magic
      <span class="player-stat-number sphere-background-mag">{{ Auth::user()->sphere_mag }}</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Skill
      <span class="player-stat-number sphere-background-skl">{{ Auth::user()->sphere_skl }}</span>
    </div>
    <div class="player-stat">Defense
      <span class="player-stat-number sphere-background-def">{{ Auth::user()->sphere_def }}</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Evasion
      <span class="player-stat-number sphere-background-eva">{{ Auth::user()->sphere_eva }}</span>
    </div>
    <div class="player-stat">Resistance
      <span class="player-stat-number sphere-background-res">{{ Auth::user()->sphere_res }}</span>
    </div>
  </div>

  <h1 class="player-title">Role Playing Spheres</h1>

  <div class="player-canvas">
    <div class="player-stat">Vitality
      <span class="player-stat-number sphere-background-mov">{{ Auth::user()->sphere_vit }}</span>
    </div>
    <div class="player-stat">Intelligence
      <span class="player-stat-number sphere-background-mag">{{ Auth::user()->sphere_int }}</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Dexterity
      <span class="player-stat-number sphere-background-hp">{{ Auth::user()->sphere_dex }}</span>
    </div>
    <div class="player-stat">Wisdom
      <span class="player-stat-number sphere-background-mp">{{ Auth::user()->sphere_wis }}</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Constitution
      <span class="player-stat-number sphere-background-str">{{ Auth::user()->sphere_con }}</span>
    </div>
    <div class="player-stat">Charisma
      <span class="player-stat-number sphere-background-ap">{{ Auth::user()->sphere_cha }}</span>
    </div>
  </div>

  @include('player.footer')

@endsection
