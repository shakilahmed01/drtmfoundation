<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Donate;
use App\Models\Request_Donate;
use App\Models\Information;
use Illuminate\Http\Request;
use Carbon\Carbon;
class DashboardController extends Controller
{
    //
    function register(){
      return view('Dashboard.userlogin.user_register');
    }

    function login(){
      return view('Dashboard.userlogin.user_login');
    }




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
    function request_donate(){

      return view('Dashboard.request_donate');
    }


    function post_request_donate(Request $request)
    {
          $request->validate([

                 'name'          =>'required',
                 'email'         =>'required',
                 'mobile'      =>'required',
                 'amount'      =>'required',
                 'message'      =>'required',



               ]); //echo "string";
             //$last_inserted_id = product::insertGetId($request->except('_token'));

            $last_inserted_id = Request_Donate::insertGetId([

              'name'          =>$request->name,
              'mobile'           =>$request->mobile,
              'email'               =>$request->email,
              'amount'              =>$request->amount,
              'message'              =>$request->message,

              'slug'                  =>Str::slug($request->email),
              'form_checked'          =>1,
              'created_at'            =>Carbon::now()

            ]);


            return back();
    }

    function list_request_donate(){

      $lists =Request_Donate::latest()->simplePaginate(10);
      $request_donates = Request_Donate::all();
      return view('Dashboard.list_donate',compact('request_donates','lists'));
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


            return redirect('/view/donate');
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
            function post_information(Request $request)
            {
                  $request->validate([

                         'name'          =>'required',
                         'email'         =>'required',
                         'mobile'      =>'required',
                         'message'      =>'required',


                       ]); //echo "string";
                     //$last_inserted_id = product::insertGetId($request->except('_token'));

                    $request = Information::insertGetId([

                      'name'          =>$request->name,
                      'email'           =>$request->email,
                      'mobile'               =>$request->mobile,
                      'message'              =>$request->message,
                      'slug'                  =>Str::slug($request->email),
                      'form_checked'          =>1,
                      'created_at'            =>Carbon::now()

                    ]);


                    return back();
            }


    function view_information(){

        $lists = Information::latest()->simplePaginate(10);
        $informations = Information::all();
        return view('Dashboard.view_information',compact('lists','informations'));

    }



    }
