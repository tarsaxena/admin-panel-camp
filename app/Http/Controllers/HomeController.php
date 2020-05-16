<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

/**
* A Function For of showing the Home Page
*/      

    public function index()
    {
      return view('home');
    }



/**
* A Function For of fetching the  userList using Guzzle
*/   
    public function userList()
    {
        $client = new \GuzzleHttp\Client();
        // Create a request
        $request = $client->get('http://localhost/campaign/list');
        // Get the actual response without headers
        $response = $request->getBody()->getContents();
        $json = json_decode($response,true);
        return view('userlist')->with('response',$json);
    }

/**
* A Function For of Delete the  userList using Guzzle
*/ 
     public function delete($id)
      {
        $client = new \GuzzleHttp\Client();
        // Create a request
        $req = $client->get('http://localhost/campaign/delete/'.$id);
        session()->flash("data","User is Now  Successfully Deleted...!");
        return redirect('/userlist');
      }


/**
* A Function For of Fecthing  the  user Detail using Guzzle
*/ 
      public function userDetail($id)
        {
         $client = new \GuzzleHttp\Client();
         // Create a request
         $request = $client->get('http://localhost/campaign/userdetail/'.$id);
         // Get the actual response without headers
         $response = $request->getBody()->getContents();
         $json = json_decode($response,true);
         //dd($json);
          return view('userdetail')->with('response',$json);
        }
                  

/**
* A Function For of fetching   the  user Detail for Edit  using Guzzle
*/ 
        public function editUser($id)
         {
          $client = new \GuzzleHttp\Client();
          // Create a request
          $request = $client->get('http://localhost/campaign/userdetail/'.$id);
          // Get the actual response without headers
          $response = $request->getBody()->getContents();
          $json = json_decode($response,true);
         //dd($json);
          return view('useredit')->with('response',$json);
        }

/**
* A Function For of Updating   the  user Detail using Guzzle
*/ 
        
        public function updateUser(Request $request, $id)
         {

            $client = new \GuzzleHttp\Client();
            $client->put(
            "http://localhost/campaign/updateuser/".$id,
            array(
            'form_params' => array(
            'name' =>   $request->name,   
            'email' =>  $request->email,
            'mobile' => $request->mobile,
            'dob' =>    $request->dob,
            'city' => $request->city,
            'amount' => $request->amount
            )
            )
            );

            session()->flash("data","User is Now  Successfully Updated ..!!");
            return redirect('/userlist');
         }



/**
* A Function For of Updating   the  doner using Guzzle
*/ 

       
      public function doner($id)
        {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://localhost/campaign/confermdoner/'.$id);
        session()->flash("data","User is now  Successfully updated as a Confirmed Doner...!");
        return redirect('/userlist');
        }
      

}
