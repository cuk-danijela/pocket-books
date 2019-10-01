<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomSearchController extends Controller
{
    function index(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->filter_author)) {
                $data = DB::table('products')
                    ->select('Image', 'Title', 'Author', 'Description', 'Year')
                    ->where('Author', $request->filter_author)
                    ->where('Year', $request->filter_year)
                    ->get();
            } else {
                $data = DB::table('products')->select('Image', 'Title', 'Author', 'Description', 'Year')->get();
            }
            return datatables()->of($data)->make(true);
        }

        $author_year = DB::table('products')->select('Author')->groupBy('Author')->orderBy('Author', 'ASC')->get();
        return view('home', compact('author_year'));
    }
}
