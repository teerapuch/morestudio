<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

// model
use App\Models\CarModel;
use App\Models\SalesHistories;

class AnswerController extends Controller
{
    public function answer1()
    {
        return view('answer.1');
    }
    
    public function answer2()
    {
        return view('answer.2');
    }
    
    public function answer3_1(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $sales = DB::table('saleshistories')
            ->select('BrandID', DB::raw('COUNT(*) as total_sales'))
            ->whereBetween('SaleDate', [$startDate, $endDate])
            ->groupBy('BrandID')
            ->get();
        return response()->json($sales);
    }
    
    public function answer3_2(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $sales = DB::table('saleshistories')
        ->select('BrandID', 'ModelID', DB::raw('COUNT(*) as total_sales'))
        ->whereBetween('SaleDate', [$startDate, $endDate])
        ->groupBy('BrandID', 'ModelID')
        ->get();
        return response()->json($sales);
    }
    
    public function answer3_3(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $employeeId = $request->input('employeeId');
        $query = DB::table('saleshistories')
            ->where('EmployeeID', $employeeId)
            ->whereBetween('SaleDate', [$startDate, $endDate])
            ->selectRaw('BrandID, ModelID, count(*) as total_sales')
            ->groupBy('BrandID', 'ModelID')
            ->orderBy('total_sales', 'desc');
        $sales = $query->get();
        return response()->json($sales);
    }

    public function answer3_4(Request $request)
    { 
        $validatedData = $request->validate([
            'BrandID' => 'required',
            'ModelID' => 'required',
            'EmployeeID' => 'required',
            'SaleDate' => 'required|date',
        ]);
    
        $sale = new SalesHistories;
        $sale->BrandID = $request->BrandID;
        $sale->ModelID = $request->ModelID;
        $sale->EmployeeID = $request->EmployeeID;
        $sale->SaleDate = $request->SaleDate;
        $sale->save();
    
        return response()->json($sale);
    }

    public function answer3_5_1(Request $request)
    {
        $validatedData = $request->validate([
            'BrandID' => 'required',
            'ModelName' => 'required|string',
        ]);
    
        $model = CarModel::create([
            'BrandID' => $validatedData['BrandID'],
            'ModelName' => $validatedData['ModelName'],
            'updated_at' => date("Y-m-d H:i:s"),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    
        return response()->json($model);
    }
    
    public function answer3_5_2(Request $request)
    {
        $validatedData = $request->validate([
            'ModelID' => 'required',
            'BrandID' => 'required',
            'ModelName' => 'required|string',
        ]);

        CarModel::where('ModelID', $validatedData['ModelID'])
            ->update([
                'BrandID' => $validatedData['BrandID'],
                'ModelName' => $validatedData['ModelName'],
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        $model = CarModel::where('ModelID', $validatedData['ModelID'])->get();
        return response()->json($model);
    }
}
