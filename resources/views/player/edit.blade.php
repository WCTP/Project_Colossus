@extends('layouts.master')

@section ('content')
  <h1 class="title">{{ $user->name }} Edit Form</h1>

  <div class="form-card">
    <form method="POST" action="/player/update/{{ $user->id }}">
      @csrf
      <label for="username">Character Name</label>
      <div>
        <input id="username" name="username" value="{{ $user->username }}" required autofocus>
      </div>
      <label for="name">Name</label>
      <div>
        <input id="name" name="name" value="{{ $user->name }}" required>
      </div>
      <label for="email">Email</label>
      <div>
        <input id="email" name="email" value="{{ $user->email }}" required>
      </div>
      <label for="privilege">Privilege</label>
      <div>
        <select name="privilege">
          <option value="player">player</option>
          <option value="game master">game master</option>
        </select>
      </div>
      <label for="sphere_ess">Essence Spheres</label>
      <div>
        <input id="sphere_ess" name="sphere_ess" value="{{ $user->sphere_ess }}" required>
      </div>
      <label for="sphere_spd">Speed Spheres</label>
      <div>
        <input id="sphere_spd" name="sphere_spd" value="{{ $user->sphere_spd }}" required>
      </div>
      <label for="sphere_atk">Attack Spheres</label>
      <div>
        <input id="sphere_atk" name="sphere_atk" value="{{ $user->sphere_atk }}" required>
      </div>
      <label for="sphere_def">Defense Spheres</label>
      <div>
        <input id="sphere_def" name="sphere_def" value="{{ $user->sphere_def }}" required>
      </div>
      <label for="sphere_magic">Magic Spheres</label>
      <div>
        <input id="sphere_magic" name="sphere_magic" value="{{ $user->sphere_magic }}" required>
      </div>
      <label for="sphere_skill">Skill Spheres</label>
      <div>
        <input id="sphere_skill" name="sphere_skill" value="{{ $user->sphere_skill }}" required>
      </div>
      <label for="sphere_lvl_1">Level 1 Key Spheres</label>
      <div>
        <input id="sphere_lvl_1" name="sphere_lvl_1" value="{{ $user->sphere_lvl_1 }}" required>
      </div>
      <label for="sphere_lvl_2">Level 2 Key Spheres</label>
      <div>
        <input id="sphere_lvl_2" name="sphere_lvl_2" value="{{ $user->sphere_lvl_2 }}" required>
      </div>
      <label for="sphere_lvl_3">Level 3 Key Spheres</label>
      <div>
        <input id="sphere_lvl_3" name="sphere_lvl_3" value="{{ $user->sphere_lvl_3 }}" required>
      </div>
      <label for="sphere_lvl_4">Level 4 Key Spheres</label>
      <div>
        <input id="sphere_lvl_4" name="sphere_lvl_4" value="{{ $user->sphere_lvl_4 }}" required>
      </div>
      <label for="sphere_vit">Vitality Spheres</label>
      <div>
        <input id="sphere_vit" name="sphere_vit" value="{{ $user->sphere_vit }}" required>
      </div>
      <label for="sphere_dex">Dexterity Spheres</label>
      <div>
        <input id="sphere_dex" name="sphere_dex" value="{{ $user->sphere_dex }}" required>
      </div>
      <label for="sphere_con">Constitution Spheres</label>
      <div>
        <input id="sphere_con" name="sphere_con" value="{{ $user->sphere_con }}" required>
      </div>
      <label for="sphere_int">Intelligence Spheres</label>
      <div>
        <input id="sphere_int" name="sphere_int" value="{{ $user->sphere_int }}" required>
      </div>
      <label for="sphere_wis">Wisdom Spheres</label>
      <div>
        <input id="sphere_wis" name="sphere_wis" value="{{ $user->sphere_wis }}" required>
      </div>
      <label for="sphere_cha">Charisma Spheres</label>
      <div>
        <input id="sphere_cha" name="sphere_cha" value="{{ $user->sphere_cha }}" required>
      </div>
      <label for="inventory">Inventory</label>
      <textarea id="inventory" name="inventory" value="{{ $user->inventory }}">{{ $user->inventory }}</textarea>
      <button type="submit">
          Submit
      </button>
    </form>
  </div>

  @include('player.footer')

  <script type="text/javascript">
    /* allows nice edit to save data */
    $("button").click(function () {
      $("textarea").each(function () {
        nicEditors.findEditor(this.id).saveContent();
      });
    });
  </script>
@endsection
