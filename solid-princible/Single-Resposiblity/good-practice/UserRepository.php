<?php
class UserRepository
{
  public function save(User $user)
  {
    echo "saving {$user->name} to the database";
  }
}
