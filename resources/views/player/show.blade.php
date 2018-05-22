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
    <div class="player-stat">Essence
      <span class="player-stat-number sphere-background-combat">{{ Auth::user()->sphere_ess }}</span>
    </div>
    <div class="player-stat">Speed
      <span class="player-stat-number sphere-background-combat">{{ Auth::user()->sphere_spd }}</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Attack
      <span class="player-stat-number sphere-background-combat">{{ Auth::user()->sphere_atk }}</span>
    </div>
    <div class="player-stat">Defense
      <span class="player-stat-number sphere-background-combat">{{ Auth::user()->sphere_def }}</span>
    </div>
  </div>

  <h1 class="player-title">Attribute Spheres</h1>

  <div class="player-canvas">
    <div class="player-stat">Magic
      <span class="player-stat-number sphere-background-attribute">{{ Auth::user()->sphere_magic }}</span>
    </div>
    <div class="player-stat">Skill
      <span class="player-stat-number sphere-background-attribute">{{ Auth::user()->sphere_skill }}</span>
    </div>
  </div>

  <h1 class="player-title">Key Spheres</h1>

  <div class="player-canvas">
    <div class="player-stat">Level 1 Key
      <span class="player-stat-number sphere-background-key">{{ Auth::user()->sphere_lvl_1 }}</span>
    </div>
    <div class="player-stat">Level 2 Key
      <span class="player-stat-number sphere-background-key">{{ Auth::user()->sphere_lvl_2 }}</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Level 3 Key
      <span class="player-stat-number sphere-background-key">{{ Auth::user()->sphere_lvl_3 }}</span>
    </div>
    <div class="player-stat">Level 4 Key
      <span class="player-stat-number sphere-background-key">{{ Auth::user()->sphere_lvl_4 }}</span>
    </div>
  </div>

  <h1 class="player-title">Role Playing Spheres</h1>

  <div class="player-canvas">
    <div class="player-stat">Vitality
      <span class="player-stat-number sphere-background-vit">{{ Auth::user()->sphere_vit }}</span>
    </div>
    <div class="player-stat">Intelligence
      <span class="player-stat-number sphere-background-int">{{ Auth::user()->sphere_int }}</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Dexterity
      <span class="player-stat-number sphere-background-dex">{{ Auth::user()->sphere_dex }}</span>
    </div>
    <div class="player-stat">Wisdom
      <span class="player-stat-number sphere-background-wis">{{ Auth::user()->sphere_wis }}</span>
    </div>
  </div>

  <div class="player-canvas">
    <div class="player-stat">Constitution
      <span class="player-stat-number sphere-background-con">{{ Auth::user()->sphere_con }}</span>
    </div>
    <div class="player-stat">Charisma
      <span class="player-stat-number sphere-background-cha">{{ Auth::user()->sphere_cha }}</span>
    </div>
  </div>

  @include('player.footer')

@endsection
