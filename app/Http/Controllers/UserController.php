<?php

namespace App\Http\Controllers;

use App\Helpers\Tsokotsa\generalHelpers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $users = User::query();
        $roles = DB::table('roles')->get();
        $data = DataTables::of($users)->addIndexColumn()->toJson();

        return view('user.index')->with(['user' => $user, 'roles' => $roles]);
    }

    public function getUsers(Request $request)
    {
        try {
            $users = User::query();

            return DataTables::of($users)->make(true);
        } catch (\Exception $e) {
            return response()->json([
                'draw' => intval($request->input('draw')),
                'recordsTotal' => 0,
                'recordsFiltered' => 0,
                'data' => [],
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add_user(Request $request)
    {

        $uid= auth()->user();
        $user = new User;
        $GH = new generalHelpers();

        $request->validate([
            'user-avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Check if user have old Avatar
        if ($user->avatar) {
            // Delete the old avatar
            Storage::disk('public')->delete($user->avatar);
        }

        //Store the user into the storage
        Log::info("Storing avatar into the storage ....");
        $avatarPath = $request->file('user-avatar')->store($this->get_user_avatar_path(), 'public');

        // Extract the file name
        $filename = basename($avatarPath);
            
        // Extract the directory path without the filename
        $directoryPath = dirname($avatarPath);

        // Assigning default password to user 
        Log::info("Assigning default password to user");

        $password = $GH->User_Password();
        $file = [
            'file_path' =>  "storage/$directoryPath",
            'file_name' =>  $filename
        ];

        $user->name         = $request->name;
        $user->surname      = $request->surname;
        $user->password     = $password;
        $user->email        = $request->email;
        $user->tel1         = $request->phone;
        $user->avatar       = json_encode($file);
        $user->telegram_id  = $request->telegram;
        $user->save();

        // User created and saved into the DB 
        Log::info("User " . json_encode($user) . " Created");

        Log::info('Get the latest ID of the inserted User ....');
        $lastInsertedId = $user->id;
        
        // Find the role by ID
        $role = Role::findOrFail($request->user_role);

        // Assign the role to the user
        $user->assignRole($role);
        Log::info("Assigning $role ID to User with [ID ::: $lastInsertedId]");

        return response()->json(['message' => 'User successfull created'], 200);
    }

    public function get_user_avatar_path()
    {
        $avatar_path = DB::table('app_paths')->where('model_name', 'user')->first();
        Log::info("Getting the path to store the avatar. Path [ $avatar_path->storage_path ] found ....." .__FUNCTION__ );

        return $avatar_path->storage_path;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function edit_user($uid)
    {
        $user_edit = User::find($uid);
        return $user_edit;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
