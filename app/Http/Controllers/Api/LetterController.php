<?php

namespace App\Http\Controllers\Api;

use App\Models\Letter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LetterController extends Controller
{
    public function index(Request $request){
        $validator = Validator::make($request->all(), [
            'number' => 'required | integer | between:0,99999999',
        ]);

        if($validator->fails()) {
            return response()->json([
                'message' => 'The introduced data is not valid',
                'errors' => $validator->errors(),
            ], 400);
        }

        $validated = $validator->validated();

        $rest = ($validated['number'] % 23) + 1;

        $result = Letter::findOrFail($rest);
        
        return response()->json(['letter' => $result->letter,], 200);
    }
}
