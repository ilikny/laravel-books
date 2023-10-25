<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
  /**
   * The model to policy mappings for the application.
   *
   * @var array<class-string, class-string>
   */
  protected $policies = [
    //
  ];

  /**
   * Register any authentication / authorization services.
   */
  public function boot(): void
  {
    Gate::define('admin', function ($user) {

      return $user->id == 2;
    });

    //decide if the user is an administrator
    // if (str_end_with($user->email, '@data4you.cz')){
    //   return true;
    // }
    // else{
    //   return false;
    // }
    //or not
    // })
  }
}
