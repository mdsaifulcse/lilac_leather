<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use Laravel\Fortify\Fortify;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->auth)
                //->orWhere('username', $request->auth)
                ->orWhere('mobile', $request->auth)
                ->first();

            if ($user &&
                Hash::check($request->password, $user->password)) {
                return $user;

                //LoginHistoryEvent::dispatch($user); // dispatch / fire event -------
                //event(new LoginHistoryEvent($user));

            }
        });

        Fortify::loginView(function () {
            return redirect('login/admin');
//            $company=\App\Models\Setting::first()->value('company_name');
//            return view('auth.metroniclogin', ['url' => '/admin','company'=>$company]);
        });

        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
