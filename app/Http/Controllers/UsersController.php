<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Guard;
use App\Http\Requests\UserRequest;

/**
 * Class UsersController
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{
    /**
     * This routes middleware
     */
    function __construct()
    {
        $this->middleware('auth', ['except' => ['create', 'store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(UserRequest $request, Guard $auth)
    {
        User::create($request->all());

        $credentials = $request->only('email', 'password');

        if (!$auth->check()) $auth->attempt($credentials);

        flash()->overlay("You're created new user.", "Good Job");

        return redirect('users');
    }

    /**
     * @param User $user
     * @return \Illuminate\View\View
     */
    public function show(User $user)
    {
        return view('users.detail', compact('user'));
    }

    /**
     * @param User $user
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * @param User $user
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(User $user, UserRequest $request)
    {
        $user->update($request->all());

        flash()->success("You're updated this user.");

        return redirect()->back();
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('users');
    }
}
