<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\product;
use Session;
class productController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
        public function index()
        {
            $product = product::all()->toArray();

            return view('product.index')->with('products',product)->compact('product');
        }



    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
        public function create()
        {
            return view('product.create');
        }



    /**
     * 
     * Store a newly created resource in storage.
     *
     * @return Response
     */
        public function store()
        {
           
            $rules = array(
                
                'name'       => 'required',
                'email'      => 'required|email',
            );
           
            $validator = Validator::make(Input::all(), $rules);
            
            // process the login
        if ($validator->fails()) 
        {
            // return redirect()->to('product/create');
            // return Redirect::to('product/create')->withErrors($validator) ->withInput(Input::except('password'));
           return response()->json(['error' => 'Validation failed'], 422);
                
        } 
        else
         {
                // store
                $product = new product;
                $product->name       = request('name'); //  Input::get('name');
                $product->email      = request('email'); //Input::get('email');

                $product->save();
                return redirect()->to('product/index')->with('message', 'Profile updated!');
                // if($product->save())
                // {
                // // redirect
                // //Session::flash('message', 'Successfully created product!');
                // return redirect()->to('product/index')->with('message', 'Profile updated!');
                // }
                // else{
                //    return 'not valid details';
                // }
         }


        }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
        public function show($id)
        { 
        
            //$product =  product::all();
            $product= product::all();
            //return $product;
            return view('product.show')->with('product',$product);
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
        public function edit(Request $request, $id)
        {
           
            
              $product= product::find($id);
           
        //    

            // $products = product::find($id);
            $product->name = $request->input('name');
            $product->email = $request->input('email');
            $product->save();
            //return $product;
            return view('product.index')->with('product',$product);
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
        public function update(Request $request)
        {
               
            $product = product::find(request('id'));
            $product->name = $request->input('name');
            $product->email = $request->input('email');
            $product->save();
            return redirect()->to('product/index');
           
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
        public function destroy($id)
        {
           // alert($id);
           $product = product::find($id);
           $product->delete();
           return redirect()->to('product/index');
        }
}
