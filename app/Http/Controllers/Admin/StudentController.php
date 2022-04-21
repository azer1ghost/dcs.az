<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Session;
use App\Models\Student;
use App\Models\Training;

class StudentController extends Controller
{
    public function index(Training $training, Session $session)
    {
        $session->load('students');

        return view('voyager::students.index',[
            'students' => Student::query()->get(),
            'session' => $session,
            'training' => $training
        ]);
    }

    public function attachStudent(Training $training, Session $session)
    {
        $student = Student::query()->findOrFail(request('student_id'))->only('id');

        $session->students()->syncWithoutDetaching($student);

        return back()->with('success');
    }

    public function detachStudent(Training $training, Session $session)
    {
        $student = Student::query()->findOrFail(request('student_id'));

        $session->students()->detach($student);

        Certificate::query()->whereBelongsTo($training)->whereBelongsTo($session)->whereBelongsTo($student)->delete();

        return back()->with('success');
    }

    public function certificate(Training $training, Session $session, Student $student)
    {
        $certificate = Certificate::query()
            ->firstOrCreate(
                [
                    'student_id' => $student->getAttribute('id'),
                    'training_id' => $training->getAttribute('id'),
                    'session_id' => $session->getAttribute('id')
                ],
                [
                    'title' => $training->getTranslatedAttribute('name'),
                    'company' => $training->getTranslatedAttribute('company'),
                    'student' => $student->getAttribute('fullname'),
                    'teacher_id' => $session->getAttribute('teacher_id'),
                    'teacher' => 'Samir Nabiyev',
                    'start_at' => $session->getAttribute('start_time'),
                    'end_at' => $session->getAttribute('end_time'),
                    'expired_at' => $session->getAttribute('cert_expired_at'),
                ]
            );

        return $certificate->getPDF();
    }
}
