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
      <label for="sphere_hp">HP Spheres</label>
      <div>
        <input id="sphere_hp" name="sphere_hp" value="{{ $user->sphere_hp }}" required>
      </div>
      <label for="sphere_hp">MP Spheres</label>
      <div>
        <input id="sphere_mp" name="sphere_mp" value="{{ $user->sphere_mp }}" required>
      </div>
      <label for="sphere_ap">AP Spheres</label>
      <div>
        <input id="sphere_ap" name="sphere_ap" value="{{ $user->sphere_ap }}" required>
      </div>
      <label for="sphere_mov">Movement Spheres</label>
      <div>
        <input id="sphere_mov" name="sphere_mov" value="{{ $user->sphere_mov }}" required>
      </div>
      <label for="sphere_str">Strength Spheres</label>
      <div>
        <input id="sphere_str" name="sphere_str" value="{{ $user->sphere_str }}" required>
      </div>
      <label for="sphere_def">Defense Spheres</label>
      <div>
        <input id="sphere_def" name="sphere_def" value="{{ $user->sphere_def }}" required>
      </div>
      <label for="sphere_mag">Magic Spheres</label>
      <div>
        <input id="sphere_mag" name="sphere_mag" value="{{ $user->sphere_mag }}" required>
      </div>
      <label for="sphere_res">Resistance Spheres</label>
      <div>
        <input id="sphere_res" name="sphere_res" value="{{ $user->sphere_res }}" required>
      </div>
      <label for="sphere_eva">Evasion Spheres</label>
      <div>
        <input id="sphere_eva" name="sphere_eva" value="{{ $user->sphere_eva }}" required>
      </div>
      <label for="sphere_skl">Skill Spheres</label>
      <div>
        <input id="sphere_skl" name="sphere_skl" value="{{ $user->sphere_skl }}" required>
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

  <script type="text/javascript">
    /* allows nice edit to save data */
    $("button").click(function () {
      $("textarea").each(function () {
        nicEditors.findEditor(this.id).saveContent();
      });
    });
  </script>
@endsection
