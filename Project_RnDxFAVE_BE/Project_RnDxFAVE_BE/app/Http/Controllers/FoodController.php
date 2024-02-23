<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Add;
use App\Models\Category;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function create(){
        // $this->authorize('isAdmin');
        $categories = Category::all();
        return view('createFood', compact('categories'));
    }

    public function store(Request $request){

        $extension = $request->file('Image')->getClientOriginalExtension();
        $filename = $request->Nama.'_'.$request->Harga.'.'.$extension;
        $request->file('Image')->storeAs('/public/Food/', $filename);
        Food::create([
            'Nama' => $request-> Nama,
            'Harga' => $request -> Harga,
            'Deskripsi' => $request -> Deskripsi,
            // 'Jumlah' => $request -> Jumlah,
            // 'Kode' => $request -> Kode,
            // 'Total' => $request -> Total,
            'Image' => $filename,
            'category_id' => $request-> category
        ]);
        //Nama dari model => nama dari form
        return redirect('/list-food');
    }

    public function index(){
        $foods = Food::all();

        return view('welcome', compact('foods'));
    }

    public function indexUser(){
        $foods = Food::all();

        return view('showFood', compact('foods'));
    }
    public function edit($id){
        $food = Food::findOrFail($id);
        return view('editFood', compact('food'));
    }

    public function update(Request $request, $id){
        $extension = $request->file('Image')->getClientOriginalExtension();
        $filename = $request->Nama.'_'.$request->Harga.'.'.$extension;
        $request->file('Image')->storeAs('/public/Food/', $filename);
        Food::findOrFail($id)->update([
            'Nama' => $request-> Nama,
            'Harga' => $request -> Harga,
            'Deskripsi' => $request -> Deskripsi,
            // 'Jumlah' => $request -> Jumlah,
            // 'Kode' => $request -> Kode,
            // 'Total' => $request -> Total,
            'Image' => $filename
        ]);

        return redirect('/list-food');
    }

    public function delete($id){
        Food::destroy($id);

        return redirect('/list-food');
    }

    // public function productList()
    // {
    //     $foods = Food::all();

    //     return view('products', compact('foods'));
    // }

    // public function search(Request $request)
    // {
    // $searchTerm = $request->input('search');
    // $foods = Food::where('name', 'LIKE', '%' . $searchTerm . '%')->get();
    // return view('foodsSearch', compact('foods'));
    // }
}
