<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Donate;
use Illuminate\Http\Request;
use Carbon\Carbon;
class DashboardController extends Controller
{
    //

    function index(){

      return view('Dashboard.index');
    }

    function indexv2(){

      return view('Dashboard.indexv2');
    }

    function about(){

      return view('Dashboard.aboutus');
    }

    function service(){

      return view('Dashboard.service');
    }

    function gallery(){

      return view('Dashboard.gallery');
    }

    function blog(){

      return view('Dashboard.blog');
    }

    function contact(){

      return view('Dashboard.contact');
    }
    function donate(){

      return view('Dashboard.donate');
    }

    function post_donate(Request $request)
    {
          $request->validate([

                 'first_name'          =>'required',
                 'last_name'         =>'required',
                 'email'      =>'required',
                 'amount'      =>'required',


               ]); //echo "string";
             //$last_inserted_id = product::insertGetId($request->except('_token'));

            $last_inserted_id = Donate::insertGetId([

              'first_name'          =>$request->first_name,
              'last_name'           =>$request->last_name,
              'email'               =>$request->email,
              'amount'              =>$request->amount,
              'slug'                  =>Str::slug($request->email),
              'form_checked'          =>1,
              'created_at'            =>Carbon::now()

            ]);

            return back();
    }

    function view_donate(){

      $lists =Donate::latest()->simplePaginate(1);
      $donates = Donate::all();
      return view('Dashboard.view_donate',compact('donates','lists'));
    }


    function stripe($id){

              $lists= Donate:: findOrFail($id);
              return view('stripe.stripe',compact('lists'));


            }





    }
