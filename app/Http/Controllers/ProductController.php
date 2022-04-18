<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\product_type;
use App\Models\product_model;
use App\Models\product_number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ProductController extends Controller
{
    // All Products

    public function index()
    {
        try {
            // $product = DB::table('products')->where('product_types_id',$product_types_id)->get();
            $product = DB::table('products')->join('product_types', 'product_types.id', '=', 'products.product_types_id')
                ->join('product_models', 'product_models.products_id', '=', 'products.id')
                ->join('product_numbers', 'product_numbers.product_model_id', '=', 'product_models.id')
                ->select('product_types.name as type_name', 'products.name', 'product_models.model_number', 'product_numbers.product_number', 'product_numbers.titleName')->get();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('admin.product.index', ['product' => $product]);
    }

    public function create()
    {
        try {
            $product_type = Product_type::all();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('admin.product.create', ['product_type' => $product_type]);
    }


    public function createproductTypes()
    {
        return view('admin.product.addProductType');
    }

    public function productTypestore(Request $request)
    {
        // dd($request->all());
        $request = Product_type::create([
            'name' => $request->name
        ]);

        $request->save();
        return Redirect::back()->with('msg', 'New Product Type Add');
    }

    public function productSeries()
    {
        $product_type = Product_type::get();
        return view('admin.product.addSeries', compact('product_type'));
    }

    public function productSeriesstore(Request $request)
    {
        // dd($request->all());
        $form = Product::create([
            'product_types_id' => $request->product_types_id,
            'name' => $request->name
        ]);

        $form->save();
        return Redirect::back()->with('msg', 'New Product Series Add');
    }

    public function productModelsCreate()
    {
        $data['product_type'] = Product_type::get(["name", "id"]);
        return view('admin.product.addModels', $data);
    }

    public function productModelsStore(Request $request)
    {
        // dd($request->all());
        $form = product_model::create([
            'products_id' => $request->products_id,
            'model_number' => $request->model_number
        ]);

        $form->save();
        return Redirect::back()->with('msg', 'New Product Model Add');
    }

    public function productNumberCreate()
    {
        $data['product_type'] = Product_type::get(["name", "id"]);
        return view('admin.product.addProductNumber', $data);
    }

    public function productNumberStore(Request $request)
    {
        // dd($request->all());
        $form = product_number::create([
            'product_model_id'  => $request->product_model_id,
            'product_number'    => $request->product_number,
            'titleName'         => $request->titleName
        ]);

        $form->save();
        return Redirect::back()->with('msg', 'New Product Number & Product Configuration');
    }

    public function productConfigurationCreate()
    {
        $data['product_type'] = Product_type::get(["name", "id"]);
        return view('admin.product.addproductConfiguration', $data);
    }

    public function productConfigurationStore(Request $request)
    {
        dd($request->all());
        $form = product_number::create([
            'product_model_id' => $request->product_model_id,
            'product_number' => $request->product_number,
            'titleName' => $request->titleName,
        ]);

        $form->save();
        return Redirect::back()->with('msg', 'The Message');
    }
}
