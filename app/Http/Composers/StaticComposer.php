<?php
/**
 * Created by PhpStorm.
 * User: Ömer
 * Date: 29.6.2015
 * Time: 03:54
 */

namespace app\Http\Composers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\View\View;

/**
 * Class StaticComposer
 * @package app\Http\Composers
 */
class StaticComposer {

    /**
     * @param Guard $guard
     */
    function __construct(Guard $guard)
    {
        $this->guard = $guard;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with([
            'guard' => $this->guard->user(),
        ]);
    }

}