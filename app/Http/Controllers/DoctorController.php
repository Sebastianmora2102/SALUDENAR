<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $filterValue = $request->input('filterVaue');
        $doctoresfilter = User::role('Doctor')
                                ->where('name', 'LIKE', '%'.$filterValue.'%',);

        $doctores = $doctoresfilter->SimplePaginate(10);

        return view('doctores.index', [
            'doctores' => $doctores,
            'filterValue' => $filterValue,
        ]);
        
    }
}
