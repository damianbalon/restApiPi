<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
   public function index(){
        return response()->json(People::all(), 200);
    }

    public function show($people): JsonResponse{
        $people = People::find($people);
        if (is_null($people))
            return $this->sendError('Person not found');=
        return response()->json([$people], 200);

    }

    public function store(Request $request){
        $people = People::create($request->all());
        return response()->json([$people], 201);

    }

    public function update(Request $request, People $people): JsonResponse{
        $people->update($request->all());
        return response()->json([$people], 202);

    }

    public function delete(People $people)
        $people->delete();
        return response()->json([$people], 202);

    } 
}
