<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\OptionPoll;
use App\Models\Poll;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PollController extends Controller
{
    public function submitVote($poll, $option) {
        if($poll && $option){
            $addVote = OptionPoll::where('polls_id',$poll)->where('option_id',$option)->first();
            $addVote->increment('votes',1);
            $addVote->save();
        }
        $polls = Poll::with('options')->get();

        return redirect('/')->with('newVoteAdded','you have successfully voted')->with('polls' , $polls);
    }

    public function pollList() {
        $polls = Poll::with('options')->first();
        return $polls;
    }

    public function addPoll(Request $request) {
        $arr = [];
        $poll = new Poll();
        $poll->title = $request->title;
        $poll->save();
        foreach($request->options as $option){
            $addoption = new Option();
            $addoption->option = $option;
            $addoption->save();

            $getId = Option::where('option',$option)->first();
            array_push($arr,$getId->id);
        }
        $poll = Poll::where('title',$request->title)->first();
        $poll->options()->attach($arr);
        return redirect('/');
        // return response()->json(['error' => $error], 422);
    }
}
