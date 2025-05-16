<?php

namespace App\Http\Controllers;

use App\Models\Student;

class WelcomeController
{
    public function index()
    {
        $student = Student::first();
        $data = $student->getAttributes();
        return '學生ID=' . $data['id'] . '，姓名：' . $data['name'] . '，年齡：' . $data['age'];
    }
}