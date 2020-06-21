<?php 

$current_user_role = 'admin';

class User {
  public $current_user_role = 'admin';

  public function hasRole( $role ) {
    return $this->current_user_role === $role;
  }

  public function hasRoles( $roles ) {

    $hasRole = false;
    foreach ($roles as $role) {

      $hasRole = $this->hasRole($role);

      if ( ! $hasRole ) {
        break;
      }

    }
    return $hasRole;

  }
}



$user = new User;
$roles = [
  'employee',
  'admin',
];
$bool = $user->hasRoles( $roles );

var_dump( $bool );





