<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Log;
use App\Models\Auth\User;
use Illuminate\Support\Facades\Auth;


/**
 * Class AccountController.
 */
class AccountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        // Log::info(\Auth::user()->info);
        // return view('frontend.user.account');
        return view('work.account');

    }
    public function settings(){

        return view('work.settings');
    }
    public function userAccount($id){
        if ($id==auth()->user()->id) {
            return redirect()->route('frontend.user.account'); 
        }
        $user=User::findOrFail($id);
        $FriendShip=auth()->user()->getFriendship($user);
        $groups=$FriendShip->groups;
        $close=false;
$family=false;
$school=false;
        foreach ($groups as $group) {
            # code...
             $group->group_id == 1 ? $close=true:null;
             $group->group_id == 2 ? $family=true:null;
             $group->group_id == 3 ? $school=true:null;
        }
        $user->isFriendWith(auth()->user());
        return view('work.profile', ['close'=>$close,'family'=>$family,'school'=>$school,'user' => $user ,
        'isFriend'  => $user->isFriendWith(auth()->user())
        ,'isSent'=>auth()->user()->hasSentFriendRequestTo($user),'hasSend'=>$user->hasSentFriendRequestTo(auth()->user())]);
    }
    public function userAddFriend($id){
        $userSender = Auth::user();
        $userReceiver=User::findOrFail($id);
        if($userSender->isFriendWith($userReceiver)){
            $userSender->unfriend($userReceiver);}
        elseif($userSender->hasSentFriendRequestTo($userReceiver)){
            $userReceiver->denyFriendRequest($userSender);
        }elseif($userReceiver->hasSentFriendRequestTo($userSender)){
            $userSender->denyFriendRequest($userReceiver);
        }else{
            $userSender->befriend($userReceiver);
        }

        return redirect()->back();

    }
    public function acceptFriend($id)
    {
        
        auth()->user()->acceptFriendRequest(User::findOrFail($id));
        return redirect()->back()->withFlashSuccess('friend accepted');

    }
    public function addTofamily($id)
    {
        $user=User::findOrFail($id);
        $FriendShip=auth()->user()->getFriendship($user);
        $groups=$FriendShip->groups;
        $close=false;
$family=false;
$school=false;
        foreach ($groups as $group) {
            # code...
             $group->group_id == 1 ? $close=true:null;
             $group->group_id == 2 ? $family=true:null;
             $group->group_id == 3 ? $school=true:null;
        }
        if ($family) {
            auth()->user()->ungroupFriend(User::findOrFail($id), 'family');
            return redirect()->back();
        }
        auth()->user()->groupFriend(User::findOrFail($id), 'family');
        return redirect()->back();
    }
    public function addToclose($id)
    {
        $user=User::findOrFail($id);
        $FriendShip=auth()->user()->getFriendship($user);
        $groups=$FriendShip->groups;
        $close=false;
$family=false;
$school=false;
        foreach ($groups as $group) {
            # code...
             $group->group_id == 1 ? $close=true:null;
             $group->group_id == 2 ? $family=true:null;
             $group->group_id == 3 ? $school=true:null;
        }
        if ($close) {
            auth()->user()->ungroupFriend(User::findOrFail($id), 'close_friends');
            return redirect()->back();
        }
        auth()->user()->groupFriend(User::findOrFail($id), 'close_friends');
        return redirect()->back();
    }
    public function addToschool($id)
    {
        $user=User::findOrFail($id);
        $FriendShip=auth()->user()->getFriendship($user);
        $groups=$FriendShip->groups;
        $close=false;
$family=false;
$school=false;
        foreach ($groups as $group) {
            # code...
             $group->group_id == 1 ? $close=true:null;
             $group->group_id == 2 ? $family=true:null;
             $group->group_id == 3 ? $school=true:null;
        }
        if ($school) {
            auth()->user()->ungroupFriend(User::findOrFail($id), 'school_friends');
            return redirect()->back();
        }
        auth()->user()->groupFriend(User::findOrFail($id),  'school_friends');
        return redirect()->back();
    }
}
