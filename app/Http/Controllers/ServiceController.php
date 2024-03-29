<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::all();

        return response()->json($service);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = Service::create($request->all());
        $data = [
            'message' => 'Service has been created succesfully',
            'service' => $service
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        $service = Service::find($service);
        
        if (!$service) {
            return response()->json([
                'messasge' => 'There is no service'
            ]);
        }
        return response()->json($service);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $service->update($request->all());
        $data = [
            'message' => 'Service has been updated succesfully',
            'service' => $service
        ];

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        $data = [
            'message' => 'Service has been deleted succesfully',
            'service' => $service
        ];

        return response()->json($data);
    }

    public function clients(Request $request)
    {
        $service = Service::find($request->service_id);
        $clients = $service->client;

        $data =[
            'message' => 'Clients fetched succesfully',
            'data' => $clients
        ];

        return response()->json($data);
    }
}
