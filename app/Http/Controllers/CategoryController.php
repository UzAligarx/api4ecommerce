<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       try{
        $categories = Category::all();

        return response()->json([
            'success' => true,
            'data' => $categories,
            'messaga' => 'Ma\'lumot muvaffaqqiyatli olindi'
        ], 200);
       }
       catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Malumotlar muvvaqqiyatsizlikka uchradi',
                'error' => $e->getMessage()
            ]);
       }
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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
