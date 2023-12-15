<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\JobRecord;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $feedbackExists = Feedback::where('job_record_id', $id)->first();

        if ($feedbackExists) {
            return redirect(route('list.record.job'))->with('message-danger', 'Feedback already added');
        } else {
            return view('job-record.feedback.add', [
                'jobRecord' => JobRecord::find($id)
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $job_record_id)
    {
        Feedback::newFeedback($request, $job_record_id);
        return redirect(route('list.record.job'))->with('message', 'Feedback added for the job');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $feedback)
    {
        return view('job-record.feedback.edit', [
            'feedback' => Feedback::where('job_record_id', $feedback)->first(),
            'jobRecord' => JobRecord::find($feedback)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $feedback_id)
    {
        Feedback::updateFeedback($request, $feedback_id);
        return back()->with('message', 'Feedback for the job has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
