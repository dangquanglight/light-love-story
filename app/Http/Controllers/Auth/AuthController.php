<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use Sarav\Multiauth\Foundation\AuthenticatesAndRegistersUsers;
    use Illuminate\Foundation\Auth\ThrottlesLogins;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class AuthController extends Controller
    {
        /*
        |--------------------------------------------------------------------------
        | Registration & Login Controller
        |--------------------------------------------------------------------------
        |
        | This controller handles the registration of new users, as well as the
        | authentication of existing users. By default, this controller uses
        | a simple trait to add these behaviors. Why don't you explore it?
        |
        */

        use AuthenticatesAndRegistersUsers, ThrottlesLogins;

        /**
         * Define redirect path after authentication successful
         *
         * @var string
         */
        protected $redirectPath = '/';

        /**
         * Define name of username field
         *
         * @var string
         */
        protected $username = 'username';

        /**
         * Define login path
         *
         * @var string
         */
        protected $loginPath = 'auth/login';

        /**
         * Create a new authentication controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->user = "user";
            $this->middleware('guest', ['except' => 'getLogout']);
        }

        /**
         * Handle a login request to the application.
         *
         * @param  \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function postLogin(Request $request)
        {
            $this->validate($request, [
                //$this->loginUsername() => 'required',
                'password' => 'required',
            ]);

            $request->merge(array('username' => 'admin'));

            // If the class is using the ThrottlesLogins trait, we can automatically throttle
            // the login attempts for this application. We'll key this by the username and
            // the IP address of the client making these requests into this application.
            $throttles = $this->isUsingThrottlesLoginsTrait();

            if ($throttles && $this->hasTooManyLoginAttempts($request))
            {
                return $this->sendLockoutResponse($request);
            }

            $credentials = $this->getCredentials($request);

            if (Auth::attempt($this->user(), $credentials, $request->has('remember')))
            {
                return $this->handleUserWasAuthenticated($request, $throttles);
            }

            // If the login attempt was unsuccessful we will increment the number of attempts
            // to login and redirect the user back to the login form. Of course, when this
            // user surpasses their maximum number of attempts they will get locked out.
            if ($throttles)
            {
                $this->incrementLoginAttempts($request);
            }

            if ($redirectUrl = $this->loginPath())
            {
                return redirect($redirectUrl)
                    ->withInput($request->only($this->loginUsername(), 'remember'))
                    ->withErrors([
                        $this->loginUsername() => $this->getFailedLoginMessage(),
                    ]);
            }
            else
            {
                return back()
                    ->withInput($request->only($this->loginUsername(), 'remember'))
                    ->withErrors([
                        $this->loginUsername() => $this->getFailedLoginMessage(),
                    ]);
            }
        }

    }
