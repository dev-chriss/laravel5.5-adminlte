<?php
  $allowedRoles = config('variables.role');
  if (Auth::user()->rolename() !== "Superadmin") {
    foreach ($allowedRoles as $key => $value ) {
      if ($key >= Auth::user()->role) {
          unset($allowedRoles[$key]);
      }
    }
  }

  //$img_url = (isset($item) ? $item->avatar : "http://placehold.it/160x160");
  $img_url = (isset($item) ? $item->avatar : url('/') . config('variables.avatar.public') . 'avatar0.png');
?>
{!! Form::myInput('text', 'name', 'Name') !!}

{!! Form::myInput('email', 'email', 'Email') !!}

{!! Form::myInput('password', 'password', 'Password') !!}

{!! Form::myInput('password', 'password_confirmation', 'Password confirmation') !!}

{!! Form::mySelect('role', 'Role', $allowedRoles) !!}

{!! Form::mySelect('active', 'Active', config('variables.boolean')) !!}

{!! Form::myFileImage('avatar', 'Avatar', $img_url) !!}
