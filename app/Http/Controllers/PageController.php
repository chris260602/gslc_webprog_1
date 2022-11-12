<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class PageController extends Controller
{

    public function index()
    {
        return view("home");
    }

    public function getMahasiswa(Request $request, $id)
    {
        $object1 = new stdClass();
        $object2 = new stdClass();

        $object1->name = 'Christoper Lim';
        $object1->id = 1;
        $object1->motto = 'You need to learn and improve because technology is always improving';
        $object1->gpa = 3.5;

        $object2->name = 'Andika';
        $object2->id = 2;
        $object2->motto = 'Dont worry, be happy';
        $object2->gpa = 3;
        $mhsDatas = [];
        array_push($mhsDatas, $object1);
        array_push($mhsDatas, $object2);
        $availableStudentID = [1, 2];
        $mhs = "";
        if (in_array($id, $availableStudentID)) {
            for ($i = 0; $i < count($mhsDatas); $i++) {
                if ($mhsDatas[$i]->id == $id) {
                    $mhs = $mhsDatas[$i];
                }
            }
            return view("mahasiswa")->with("mahasiswa", $mhs);
        } else {
            abort(404);
        }
        // return $id;
    }
}
