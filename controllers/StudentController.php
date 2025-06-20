<?php
require_once '../models/Student.php';
require_once '../models/Country.php';

class StudentController extends Controller {
    
    public function index() {
        $student = new Student();
        $country = new Country();

        $data = [
            'students' => $student->getAll(),
            'countries' => $country->getAll()
        ];

        $this->view('students/index', $data);
    }

    public function create() {
        $student = new Student();
        $student->create([
            'name' => 'Nuevo',
            'lastname' => 'Estudiante',
            'sex' => 'M',
            'date_born' => date('2000-01-01'),
            'country_id' => 1
        ]);
    }

    public function delete($id) {
        $student = new Student();
        $student->delete($id);
    }

    public function update() {
        $student = new Student();
        $student->update($_POST['id'], $_POST['column'], $_POST['value']);
    }
}
