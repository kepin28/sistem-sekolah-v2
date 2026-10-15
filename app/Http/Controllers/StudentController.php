<?php
 
namespace App\Http\Controllers;
 
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;
 
class StudentController extends Controller
{
    public function index(Request $request)
    {
    $title ='Sistem Sekolah - Daftar Siswa';

    $search = $request->input('search');
    $class = $request->query('class');
    $major = $request->query('major');

    $students = Student::select(['id', 'nis', 'name', 'class', 'major'])
    ->when($search, function ($query, $search) {
        $query->where(function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%")
             ->orWhere('nis', 'like', "%{$search}%");
        });
    })
    ->when($class, fn($query, $class) => $query->where('class', '=', $class))
    ->when($major, fn($query, $major) => $query->where('major', '=', $major))
    ->paginate(5)
    ->withQueryString();

    $schoolClasses = ['10 AKL', '11 AKL', '11 TKJ 1', '11 TKJ 2', '10 BiD', '12 TKJ 1', '12 TKJ 2', '12 TKJ 3'];
    $majors = ['AKL', 'BiD', 'TKJ'];

    return view('students.index', [
        'title'=> $title,
        'students'=> $students,
        'schoolClasses'=> $schoolClasses,
        'majors'=> $majors
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
 
 