<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller {


    function index(Request $request) {
        $services = Service::status(Status::ACTIVE)
                        ->when($request->search, fn($query, $keyword) => $query->where('name', 'LIKE', "%{$keyword}%"))
                        ->paginate();
        return view('services.index', compact(['services']));
    }

    function show(Service $service){
        $services = Service::status(Status::ACTIVE)
                        ->whereNot('id', $service->id)
                        ->limit(3)
                        ->get();

        return view('services.show', compact('service', 'services'));
    }

}
