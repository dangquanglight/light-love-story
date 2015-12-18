<?php
    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use Illuminate\Foundation\Auth\ThrottlesLogins;
    use Sarav\Multiauth\Foundation\AuthenticatesAndRegistersUsers;

    class AdminAuthController extends Controller
    {
        use AuthenticatesAndRegistersUsers, ThrottlesLogins;

        /**
         * Define redirect path after authentication successful
         *
         * @var string
         */
        protected $redirectPath = 'systems';

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
        protected $loginPath = 'systems/login';

        /**
         * Define redirect url after logout
         *
         * @var string
         */
        protected $redirectAfterLogout = 'systems/login';

        /**
         * Create a new authentication controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->user = "admin";
            $this->middleware('admin.guest', ['except' => 'getLogout']);
        }
    }