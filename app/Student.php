<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Student extends Model
{
    //
    protected $guarded = [];

    public function school(){
        return $this->belongsTo(School::class, 'school_id', 'id');
    }

    public function classroom() {
        $classroom = DB::table('class_students_list')->select('class_id')->where([
            ['academic_session_id', $this->school->academic_session_id],
            ['student_id', $this->id]
            ])->first();
        // return $this->belongsTo(Classroom::class);
        if(empty($classroom)){return null;}
        return (Classroom::find($classroom->class_id));
    }

    public function guardian() {
        return $this->hasOne(Guardian::class, 'id', 'parent_id');
    }
}
