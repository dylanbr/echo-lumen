<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EchoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function echo(Request $request)
    {
        $data = [
            'ip' => $request->getClientIp()
        ];
        if($request->has('name')) {
            $data['greeting'] = "Hello " . $request->input('name');
        }
        return response()
            ->json($data)
            ->header('x-hello-world',"dpb");
    }

    //
}
