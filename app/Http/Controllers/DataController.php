<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Imports\DataImport;
use App\Http\Requests\StoreDataRequest;
use Excel;

class DataController extends Controller
{
    
    function import(StoreDataRequest $request)
    {
        Excel::import(new DataImport,request()->file('select_file'));
           
        return back()->with('success', 'Excel Data Imported successfully.');;
    }
}