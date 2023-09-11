<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    private static $feedback;

    public static function newFeedback($request, $job_record_id){
        self::$feedback = new Feedback();
        self::$feedback->job_record_id = $job_record_id;
        self::$feedback->contacted_yet = $request->contacted_yet;
        self::$feedback->contacted_on = $request->contacted_on;
        self::$feedback->contacted_via = $request->contacted_via;
        self::$feedback->viva_date = $request->viva_date;
        self::$feedback->viva_time = $request->viva_time;
        self::$feedback->email_or_phone = $request->email_or_phone;
        self::$feedback->save();
    }
}
