<?php

    namespace App\Http\Controllers\Admin;

    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class AdminBaseController extends Controller
    {
        public function __construct()
        {
            $this->middleware('admin');
        }

        /**
         * @param $header_name
         * @param string $description
         * @param string $icon
         * @return mixed
         */
        protected function _setPageHeader($header_name, $description = '&nbsp;', $icon = 'gi gi-flash')
        {
            return view()->share('page_header', [
                'name'        => $header_name,
                'description' => $description,
                'icon'        => $icon
            ]);
        }

        /**
         * @param $breadcrumb
         * @return mixed
         */
        protected function _setBreadCrumb($breadcrumb)
        {
            // Example data format
            /*$breadcrumb = [
                [
                    'name' => 'some name',
                    'url' => route('systems_login')
                ],
                [
                    'name' => 'some other name'
                ]
            ];*/

            return view()->share('breadcrumb', $breadcrumb);
        }

    }
