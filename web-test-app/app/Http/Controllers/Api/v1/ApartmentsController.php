<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentsController extends Controller
{
    public function index()
    {
        $paginator = Apartment::paginate(8);
        return $paginator;
    }
}
