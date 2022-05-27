<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $perm_;
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        $psr=Permission::all();
        foreach($psr as $pm)
        {
           $this->perm_=$pm;

            Gate::define($pm->name,
             function($user){
                $ps= $user->role->permissions;
                foreach($ps as $p)
                {
                    if($p->name===$this->perm_->name)
                    return true;
            }
            return false;
        });
        }
    Gate::define('isAdmin',
        function($user){
           
              if($user->role->name==='admin')
               return true;
          
        });
        //

  

        Gate::define('consultation.all',
        function($user){
           $ps= $user->role->permissions;
           foreach($ps as $p)
           {
               if($p->name==='consultation.supp' && $p->name==='consultation.supp')
               return true;
           }
            return false;
        });
    }
}
