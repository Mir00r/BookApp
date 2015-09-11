<?php 

	namespace App;

interface AuthenticateUserListener {
    /**
     * @param $user
     * @return mixed
     */
    //public function userHasLoggedIn($user);

    public function userHasLoggedIn($user) {
    	\Session::flash('message', 'Welcome, ' . $user->username);
    	return redirect('/library');
	}
}