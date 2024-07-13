<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function showCollection(Request $request)
    {
        // $request->input('data')->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'age' => ['required', 'integer', 'max:255'],
        //     'email' => ['required', 'string', 'max:255'],
        //     'city' => ['required', 'string', 'max:255'],
        //     'occupation' => ['required', 'string', 'max:255'],
        //     'hobbies' => ['required', 'array'],
        // ]);

        $collection = collect($request->input('data'));

        return response()->json($collection->all());
    }
    public function filterAge(Request $request)
    {
        $collection = collect($request->input('data'));
        $filterAge = $request->input('filterAge');
        $filtered = $collection->filter(function ($data) use ($filterAge) {
            return $data['age'] < $filterAge;
        });
        return response()->json($filtered);
    }
    public function getUsersBulk()
    {
        if (Cache::has('user')) {
            $users = Cache::get('user');
        } else {
            $users = User::all();
            Cache::put('user', $users, 120);
        }

        return $users;
    }
}
