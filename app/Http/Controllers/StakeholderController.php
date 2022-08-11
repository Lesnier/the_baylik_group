<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Contractor;
use App\Models\Seller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class StakeholderController extends Controller
{
    public function saveContractor(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255|min:3',
                'email' => 'required|email:rfc|unique:users',
                'phone' => 'required',
                'lic' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $validated = $validator->validated();

            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'password' => Hash::make('123')
            ]);

            $contractor = Contractor::create([
                'licencia' => $validated['lic'],
                'users_id' => $user->id
            ]);

            return response()->json(['message' => 'Successfully Registered Contractor!'], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 500);
        }

    }

    public function saveSeller(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255|min:3',
                'email' => 'required|email:rfc|unique:users',
                'phone' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $validated = $validator->validated();

            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'password' => Hash::make('123')
            ]);

            $contractor = Seller::create([
                'address' => $request->input('address'),
                'links' => $request->input('links'),
                'users_id' => $user->id
            ]);


            return response()->json(['message' => 'Successfully Registered Seller!'], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 500);
        }

    }

    public function saveBuyer(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255|min:3',
                'email' => 'required|email:rfc|unique:users',
                'phone' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $validated = $validator->validated();

            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'password' => Hash::make('123')
            ]);

            $buyer = Buyer::create([
                'punto_precio' => $request->input('punto_precio'),
                'users_id' => $user->id
            ]);

            return response()->json(['message' => 'Successfully Registered Buyer!'], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 500);
        }

    }

    public function getContractorList()
    {
        try {
            $list = Contractor::with('user')->paginate(15);
            for ($i = 0; $i < count($list); $i++) {
                $list[$i]->infoUser = $list[$i]->user;
            }

            return response()->json(['message' => 'List obtained successfully!', 'list' => $list], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 500);
        }
    }

    public function getSellersList()
    {
        try {
            $list = Seller::with('user')->paginate(15);
            for ($i = 0; $i < count($list); $i++) {
                $list[$i]->infoUser = $list[$i]->user;
            }
            return response()->json(['message' => 'List obtained successfully!', 'list' => $list], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 500);
        }
    }

    public function getBuyerList()
    {
        try {
            $list = Buyer::with('user')->paginate(15);
            for ($i = 0; $i < count($list); $i++) {
                $list[$i]->infoUser = $list[$i]->user;
            }
            return response()->json(['message' => 'List obtained successfully!', 'list' => $list], 200);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 500);
        }
    }

    public function getUserProfile(){

    }
}
