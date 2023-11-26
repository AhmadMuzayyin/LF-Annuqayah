<?php

namespace App\Http\Controllers\Subscription;

use App\Http\Controllers\Controller;
use App\Http\Requests\LayananStoreRequest;

class LayananController extends Controller
{
    public function index()
    {
        return view('subscription.index');
    }

    public function store(LayananStoreRequest $request)
    {

    }

    public function edit($id)
    {
        dd($id);
    }
}
