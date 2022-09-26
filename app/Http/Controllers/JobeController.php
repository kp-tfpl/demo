<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JobeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dispatch(new SendEmailJob)->delay(2);
        // dispatch(new SendEmailJob());
        // dispatch(new SendEmailJob())->onQueue('abc')->delay(20);
        
        // SendEmailJob::dispatchAfterResponse();

        // SendEmailJob::dispatch();

        // run job dairek after response back
        // SendEmailJob::dispatchAfterResponse();

        // dairack dispatch 
        // SendEmailJob::dispatchSync();
        
        // dispatch(new SendEmailJob());
        
        // Log::emergency('kishan');
        // Log::alert('kishan');
        // Log::critical('kishan');
        // Log::error('kishan');
        // Log::warning('kishan');
        // Log::notice('kishan');
        // Log::info('kishan');
        // Log::debug('kishan');

        return true;
        // dd('kp');
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
        //
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
