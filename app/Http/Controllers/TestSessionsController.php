<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\TestSession;

class TestSessionsController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function getSessions($courseId,$testCenterId)
    {
        $sessions = TestSession::where('courseId',$courseId)->where('testCenterId',$testCenterId)->get();
        $html = '<option selected>Choisir ...</option>';
        foreach($sessions as $session)
        {
            $html .= '<option value="'. $session->id .'">'.$session->date.'</option>';
        }
        return $html;
    }
}

?>