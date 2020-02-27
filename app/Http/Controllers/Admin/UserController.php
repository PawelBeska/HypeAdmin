<?php

namespace App\Http\Controllers\Admin;

use App\Group;
use App\Http\Requests\AdminUserCreateRequest;
use App\Http\Requests\AdminUserDestroyRequest;
use App\Http\Requests\AdminUserStoreRequest;
use App\Http\Requests\AdminUserUpdateRequest;
use App\User;
use Illuminate\Support\MessageBag;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{

    public function store(AdminUserStoreRequest $request)
    {
        return DataTables::of(User::with('group')->get())->make(true);
    }

    public function create(AdminUserCreateRequest $request)
    {
        $input = $request->all();
        $message = new MessageBag();
        $message->add('success', 'Pomyślnie utworzono użytkownika!');
        User::create(['name' => $input['name'], 'email' => $input['email'], 'password' => bcrypt($input['password']), 'group_id' => $input['group']]);
        return $message->jsonSerialize();
    }

    public function update($id, AdminUserUpdateRequest $request)
    {
        $message = new MessageBag();
        if ($user = User::find($id)) {
            $input = $request->all();
            if (key_exists('password', $input)) $user->update(['password' => bcrypt($input['password'])]);
            $user->update(['name' => $input['name'], 'email' => $input['email'], 'group_id' => $input['group']]);
            $message->add('success', 'Pomyślnie edytowano użytkownika!');
        } else $message->add('error', 'Taki użytkownik nie istnieje!');
        return $message->jsonSerialize();
    }
    public function destroy($id, AdminUserDestroyRequest $request)
    {
        $message = new MessageBag();
        if ($user = User::find($id)) {
            $user->delete();
            $message->add('success', 'Pomyślnie usunięto użytkownika!');
        } else $message->add('error', 'Taki użytkownik nie istnieje!');
        return $message->jsonSerialize();
    }
}
