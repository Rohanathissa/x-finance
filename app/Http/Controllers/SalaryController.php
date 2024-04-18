<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Models\User;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = User::find(1);
        $salaries = $user->salaries;

        foreach ($salaries as $salary) {
            echo $salary->amount; // Assuming 'amount' is a column in your 'salaries' table
        }
//
//
        $users = User::all();
//        $salaries = Salary::all();
        return view('salary.index', compact('users', 'salaries'));
//        return view('user.index', ['users'=>$users, 'salaries'=>$salaries]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Salary $salary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salary $salary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salary $salary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salary $salary)
    {
        //
    }
}
