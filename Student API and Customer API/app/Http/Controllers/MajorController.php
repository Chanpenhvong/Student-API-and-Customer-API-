<?php

namespace App\Http\Controllers;

use App\Models\MajorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MajorModel::all();
    }


    public function show( $id)
    {
        return MajorModel::find($id);
    }

}
