<?php

namespace App\Http\Services\Panel;

use App\Models\ItCity\Store\Service;
use Illuminate\Database\Eloquent\Builder;

class serviceService
{
    public function store($request)
    {
        return $this->query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
//            'password' => Hash::make($request->password),
        ]);
    }

    public function update($request, $id)
    {
        return $this->query()->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    }

    private function query(): Builder
    {
        return Service::query();
    }
}
