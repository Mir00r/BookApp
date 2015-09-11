<?php 

namespace App;

use Illuminate\Contracts\Auth\Authenticator;
use Illuminate\Contracts\Auth\Guard; 
use App\Repositories\UserRepository;
use Laravel\Socialite\Contracts\Factory as Socialite;
use Request; 

class AuthenticateUser {
    /**
     * @var UserRepository
     */
    private $users;
    /**
     * @var Socialite
     */
    private $socialite;
    /**
     * @var Authenticator
     */
    private $auth;
    /**
     * @param UserRepository $users
     * @param Socialite $socialite
     * @param Authenticator $auth
     */
    /*
    public function __construct(UserRepository $users, Socialite $socialite, Authenticator $auth)
    {
        $this->users = $users;
        $this->socialite = $socialite;
        $this->auth = $auth;
    }
    */

    public function __construct(Socialite $socialite, Guard $auth, UserRepository $users) {   
        $this->socialite = $socialite;
        $this->users = $users;
        $this->auth = $auth;
    }

    /**
     * @param boolean $hasCode
     * @param AuthenticateUserListener $listener
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */

    /*
    public function execute($hasCode, AuthenticateUserListener $listener)
    {
        if ( ! $hasCode) return $this->getAuthorizationFirst();
        $user = $this->users->findByUsernameOrCreate($this->getGithubUser());
        $this->auth->login($user, true);
        return $listener->userHasLoggedIn($user);
    }
    */


    public function execute($request, $listener, $provider) {

        if (!$request) 
            return $this->getAuthorizationFirst($provider);
            
        $user = $this->users->findByUserNameOrCreate($this->getSocialUser($provider));

        $this->auth->login($user, true);

        return $listener->userHasLoggedIn($user);
    }


    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    
    /*
    private function getAuthorizationFirst()
    {
        return $this->socialite->driver('github')->redirect();
    }

    */
    
    /**
     * @return \Laravel\Socialite\Contracts\User
     */
    
    /*
    private function getGithubUser()
    {
        return $this->socialite->driver('github')->user();
    }
    */



    private function getAuthorizationFirst($provider) { 
        return $this->socialite->driver($provider)->redirect();
    }

    private function getSocialUser($provider) {
        return $this->socialite->driver($provider)->user();
    }
}