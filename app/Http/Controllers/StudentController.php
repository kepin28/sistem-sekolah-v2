<?php
 
namespace App\Http\Controllers;
 
use App\Models\Student;
use Illuminate\Http\Request;
 
class StudentController extends Controller
{
    public function index()
    {
    $title ='Sistem Sekolah - Daftar Siswa';

    $students = Student::select(['id', 'name', 'class', 'major'])->get();

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
 
    public function edit(string $student)
    {
         $title ='Sistem Sekolah - Mengubah Daftar Siswa';

        return view('students.edit', [
            'title' => $title,
            'student' => $student
        ]);
    }
 
    public function store(Request $request)
    {
        $validatedrequest = $request->validate([
            'nis'=> ['required', 'string', 'size:4', 'unique:students,nis'],
            'name'=> ['required', 'string'],
            'gender'=> ['required', 'string', 'in:Laki-Laki,Perempuan'],
            'major' =>['required', 'string', 'in:AKL,TKJ,BID'],
            'class'=> ['required', 'string']
        ]);

        student::create($validatedrequest);


        return redirect()->route('students.index');

    }
 
    public function update(string $id)
    {
        return "Melakukkan perubahan data siswa {$id}";
    }
 
    public function destroy(string $id)
    {
        return "Menghapus data siswa {$id}";
    }
 
 
}
 
 