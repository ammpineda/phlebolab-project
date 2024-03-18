<?php

use App\Http\Controllers\LabProgressController;
use App\Http\Controllers\ReadingProgressController;
use App\Http\Controllers\SummativeResultController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('/login', [UserController::class, 'login'])->name('login-user');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [UserController::class, 'register'])->name('register-user');

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
})->name('terms-and-conditions');

Route::get('/home', 
    [UserController::class, 'displayHome']
)->name('home');


// Start Reading Materials

Route::get('/reading-materials', 
    [ReadingProgressController::class, 'retrieveReadingProgress']
)->name('reading-materials');


// chapter 1

Route::get('/reading-chapter-1', 
    [ReadingProgressController::class, 'toChapterOne']
)->name('first_chapter');

Route::post('/chapter1-done', [ReadingProgressController::class, 'markChapterOneAsDone'])->name('chapter1-done');

// chapter 2

Route::get('/reading-chapter-2', 
    [ReadingProgressController::class, 'toChapterTwo']
)->name('second_chapter');

Route::post('/chapter2-done', [ReadingProgressController::class, 'markChapterTwoAsDone'])->name('chapter2-done');

// chapter 3

Route::get('/reading-chapter-3', 
    [ReadingProgressController::class, 'toChapterThree']
)->name('third_chapter');

Route::post('/chapter3-done', [ReadingProgressController::class, 'markChapterThreeAsDone'])->name('chapter3-done');

// chapter 4

Route::get('/reading-chapter-4', 
    [ReadingProgressController::class, 'toChapterFour']
)->name('fourth_chapter');

Route::post('/chapter4-done', [ReadingProgressController::class, 'markChapterFourAsDone'])->name('chapter4-done');

// chapter 5

Route::get('/reading-chapter-5', 
    [ReadingProgressController::class, 'toChapterFive']
)->name('fifth_chapter');

Route::post('/chapter5-done', [ReadingProgressController::class, 'markChapterFiveAsDone'])->name('chapter5-done');

// chapter 6

Route::get('/reading-chapter-6', 
    [ReadingProgressController::class, 'toChapterSix']
)->name('sixth_chapter');

Route::post('/chapter6-done', [ReadingProgressController::class, 'markChapterSixAsDone'])->name('chapter6-done');



// Start Lab Exercises

Route::get('/laboratory-exercises',
    [LabProgressController::class, 'retrieveLabProgress']
)->name('laboratory-exercises');


// Exercise 1 
Route::get('/laboratory-exercise-1', function () {
    return view('lab exercises/lab1');
})->name('exercise_1');

Route::get('/laboratory-exercise-1/quiz',
    [LabProgressController::class, 'toPracticeQuizOne']
)->name('exercise_1_quiz');

Route::post('/lab1-done', [LabProgressController::class, 'markExerciseOneAsDone'])->name('lab1-done');


// Exercise 2

Route::get('/laboratory-exercise-2', function () {
    return view('lab exercises/lab2');
})->name('exercise_2');

Route::get('/laboratory-exercise-2/quiz',
    [LabProgressController::class, 'toPracticeQuizTwo']
)->name('exercise_2_quiz');

Route::post('/lab2-done', [LabProgressController::class, 'markExerciseTwoAsDone'])->name('lab2-done');

// Exercise 3

Route::get('/laboratory-exercise-3', function () {
    return view('lab exercises/lab3');
})->name('exercise_3');

Route::get('/laboratory-exercise-3/quiz',
    [LabProgressController::class, 'toPracticeQuizThree']
)->name('exercise_3_quiz');

Route::post('/lab3-done', [LabProgressController::class, 'markExerciseThreeAsDone'])->name('lab3-done');



// Start Summative
Route::get('/summative-assessment',
    [SummativeResultController::class, 'toTest']
)->name('summative-quiz');

Route::post('/test-done', [SummativeResultController::class, 'saveScore'])->name('test-done');

Route::get('/summative-assessment-answers', function () {
    return view('summative-quiz-answer-key');
})->name('summative-quiz-answers');

