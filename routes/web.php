<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    $object1 = new stdClass();
    $object2 = new stdClass();
    $object3 = new stdClass();
    $object4 = new stdClass();
    $object5 = new stdClass();
    $object6 = new stdClass();

    $object1->name = 'Compilation Techniques';
    $object1->code = 'COMP6062001';
    $object1->desc = 'Compilation technique is a technique that translates the source program into a final program for a particular computer language. This course also discussing the theory of automata and formal languages, Finite Automata and Grammar particularly useful in designing the lexical analyzer and parser syntactic as a part of compiler. Moreover automata theory can also be used for text editor, pattern matching, text processing and file searching. After learning this course, students should be able to make or practice a simple compiler. This course has same connections with subjects such as: operating systems, computer organization and architecture, also other computer languages';
    $object1->link = 'https://newbinusmaya.binus.ac.id/lms/course/3d7ced01-7ac0-4820-863b-6ff1b3e2a55c/session/';
    $object1->eligible = false;

    $object2->name = 'Entrepreneurship';
    $object2->code = 'ENTR6511001';
    $object2->desc = 'Entrepreneurship Market Validation is a course that studies how to validate a business concept to its target market and to continue or revise the business idea by learning from potential customers.  ';
    $object2->link = 'https://newbinusmaya.binus.ac.id/lms/course/030876b1-d166-442d-8005-cacb41edf476/session/';
    $object2->eligible = true;

    $object3->name = 'Framework Layer Architecture';
    $object3->code = 'COMP6122001';
    $object3->desc = 'This course introduces the concepts and practice related to design pattern and its implementation in Java. This topic course learn : work with each of the design patterns, implement design patterns in real-world applications,  choose from alternative design patterns by comparing their pros and cons, use the Eclipse IDE to write code and generate output';
    $object3->link = 'https://newbinusmaya.binus.ac.id/lms/course/13bc6252-771c-49e8-a76e-dd2fd550c958/session/';
    $object3->eligible = true;

    $object4->name = 'Mobile Programming';
    $object4->code = 'MOBI6059001';
    $object4->desc = 'Mobile Community Solution is a subject in Mobile Application & Technology Program that gives the student knowledge about the basic concept and main features of Android Platform.';
    $object4->link = 'https://newbinusmaya.binus.ac.id/lms/course/2c8ad356-e99c-4c31-a873-d4ca901b6e52/session/';
    $object4->eligible = true;

    $object5->name = 'Operating System';
    $object5->code = 'COMP6697001';
    $object5->desc = 'This course covers the basic concepts of the Operating System taking examples from the two most commonly used Operating Systems, UNIX and Windows, and discusses the fundamentals of Operating System design in each of the main components of the Operating Systems, i.e. Process Management, Memory Management, I/O Management, File Management and Computer Security. This course covers systems programming using C programming language. It is required for students to have basic knowledge in C.';
    $object5->link = 'https://newbinusmaya.binus.ac.id/lms/course/34c44654-30ed-40c0-b8bc-39dd3efec347/session/';
    $object5->eligible = false;

    $object6->name = 'Web Programming';
    $object6->code = 'COMP6681001';
    $object6->desc = 'Web Programming course gives a guidance how the way to design and develop a Static and dynamic website. This
    subject explains the concept of web programming with PHP and using Laravel Framework. Laravel is a web application
    framework with expressive, elegant syntax. Laravel is accessible, yet powerful, providing tools needed for large, robust
    applications.';
    $object6->link = 'https://newbinusmaya.binus.ac.id/lms/course/3613f60d-f58d-4b07-a7d3-f65f0ff7d76d/session/';
    $object6->eligible = true;

    $datas = [];
    array_push($datas, $object1);
    array_push($datas, $object2);
    array_push($datas, $object3);
    array_push($datas, $object4);
    array_push($datas, $object5);
    array_push($datas, $object6);
    return view('home', ['datas' => $datas]);
});
