<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminSettingsCreateRequest;
use App\Setting;
use Illuminate\Support\MessageBag;

class SettingsController extends Controller
{

    public function create(AdminSettingsCreateRequest $request)
    {
        $input = $request->all();
        $message = new MessageBag();
        unset($input['_token']);
        foreach (array_keys($input) as $key) {
            if ($item = Setting::where('name', $key)->first()) $item->update(['value' => $input[$key]]);
            else Setting::create(['name' => $key, 'value' => $input[$key]]);
        }
        $message->add('success', "Pomyślnie edytowano ustawienia!");
        return $message->jsonSerialize();
    }
}
