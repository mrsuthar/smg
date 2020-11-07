<?php

Route::set('index.php',function(){
    Index::CreateView('Index');
});

Route::set('Index',function(){
    Index::CreateView('Index');
});

Route::set('Login',function(){
    Login::LoginPage();
});

Route::set('LoginCheck',function(){
    LoginCheck::Validate();
});

Route::set('Logout',function(){
    Logout::logoutnow();
});

Route::set('Student',function(){
    Student::CreateView('Student');
});

Route::set('AddStudent',function(){
    Student::AddStudent();
});

Route::set('StudentAdded',function(){
    Student::StudentAdded();
});

Route::set('EditStudent',function(){
    EditStudent::CreateView('EditStudent');
});

Route::set('UpdateStudent',function(){
    EditStudent::UpdateStudent();
});

Route::set('DeleteStudent',function(){
    Student::DeleteStudent();
});

Route::set('Course',function(){
    Course::CreateView('Course');
});

Route::set('AddCourse',function(){
    AddCourse::CreateView('AddCourse');
});

Route::set('CourseAdded',function(){
    AddCourse::AdCourse();
});

Route::set('EditCourse',function(){
    EditCourse::CreateView('EditCourse');
});

Route::set('UpdateCourse',function(){
    EditCourse::UpdateCourse();
});

Route::set('DeleteCourse',function(){
    AddCourse::DeleteCourse();
});

Route::set('Subject',function(){
    Subject::CreateView('Subject');
});

Route::set('AddSubject',function(){
    AddSubject::CreateView('AddSubject');
});

Route::set('SubjectAdded',function(){
    AddSubject::AdSubject();
});

Route::set('EditSubject',function(){
    EditSubject::CreateView('EditSubject');
});

Route::set('UpdateSubject',function(){
    EditSubject::UpdateSubject();
});

Route::set('DeleteSubject',function(){
    AddSubject::DeleteSubject();
});

Route::set('Grade',function(){
    Grade::CreateView('Grade');
});

Route::set('AddGrade',function(){
    Grade::AddGrade();
});

Route::set('GradeUpload',function(){
    Grade::GradeUpload();
});

Route::set('GradeUploaded',function(){
    Grade::GradeUploaded();
});

Route::set('Result',function(){
    Result::CreateView('Result');
});

?>