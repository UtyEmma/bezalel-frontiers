<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller {


    function index() {
        $services = Service::status(Status::ACTIVE)->paginate();
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
