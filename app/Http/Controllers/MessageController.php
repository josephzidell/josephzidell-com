<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name'       => $request->input('name'),
            'title'      => $request->input('title'),
            'email'      => $request->input('email'),
            'message'    => $request->input('message'),
            'name'       => $request->input('name'),
            'referer'    => \Illuminate\Support\Facades\URL::previous(),
            'ip'         => $request->ip(),
            'user_agent' => $request->header('User-Agent')
        ];

        // $this->Message->set($this->request->data);
        // if ($this->Message->validates() && $this->Message->save()) {
        //     return $this->redirect(['controller' => 'pages', 'action' => 'index', '?' => 'thankyou', '#' => 'contact']);
        // } else {
        //     return $this->redirect(['controller' => 'pages', 'action' => 'index', 'error', '#' => 'contact']);
        // }

        Mail::send(['text' => 'emails.contact'], ['data' => $data], function ($m) use ($data) {
            $m->from($data['email'], $data['name']);

            $m->to('joseph@josephzidell.com', 'Joseph Zidell')->subject('[Site contact form]');
        });

        // $to = 'joseph@josephzidell.com';
        // // $to = 'joez0828@gmail.com';
        // if (mail($to, '[Site contact form]', $message)) {
        //  header('Location: index.php?thankyou#contact');
        // } else {
        //  header('Location: index.php');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
