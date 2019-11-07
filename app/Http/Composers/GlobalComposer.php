<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use App\Models\Auth\User;

/**
 * Class GlobalComposer.
 */
class GlobalComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     */
    public function compose(View $view)
    {   
        $a=array();
        try {
            $frReq=[];
            $frReq=auth()->user()->getFriendRequests();
            foreach($frReq as $requests){
                $user=User::findOrFail($requests->sender_id);
                array_push($a,$user);
            }
                } catch (\Throwable $th) {
            //throw $th;
        }
       
        $view->with('logged_in_user', auth()->user())->with('requests',$a);
    }
}
