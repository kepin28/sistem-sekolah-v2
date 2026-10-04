<?php
 
namespace App\Http\Controllers;
 
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;
 
class StudentController extends Controller
{
    public function index()
    {
    $title ='Sistem Sekolah - Daftar Siswa';

    $students = Student::select(['id', 'nis', 'name', 'class', 'major'])->get();

    return view('students.index', [
        'title'=> $title,
        'students'=> $students
    ]);
    }
 
    public function show(Student $student)
    {
         $title ='Sistem Sekolah - Menampilkan Nama Siswa';

        return view('students.show', [
            'title' => $title,
            'student' => $student
        ]);
    }
   
    public function create()
    {
         $title ='Sistem Sekolah - Membuat Daftar Siswa';
        return view('students.create', [
            'title' => $title
        ]);
    }
 
    public function edit(Student $student)
    {
         $title ='Sistem Sekolah - Mengubah Daftar Siswa';

        return view('students.edit', [
            'title' => $title,
            'student' => $student
        ]);
    }
 
    public function store(StoreRequest $request)
    {
        $validatedrequest = $request->validated();

        Student::create($validatedrequest);
        return redirect()->route('students.index');
    }
 
    public function update(student $student, UpdateRequest $request)
    {
           $validatedrequest = $request->validated();

        $student->update($validatedrequest);
        return redirect()->route('students.index');
    }
 
    public function destroy(student $student)
    {
        $student->delete();

        return redirect()->route('students.index');
    }
 
 
}
 
 