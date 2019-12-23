<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/pocket-books-53db6-c2993117ef16.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://pocket-books-53db6.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        // $newPost = $database
        // ->getReference('blog/posts')
        // ->push([
        // 'title' => 'Laravel FireBase Tutorial' ,
        // 'category' => 'Laravel'
        // ]);
        // echo '<pre>';
        // print_r($newPost->getvalue());
    }

}