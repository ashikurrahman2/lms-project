<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    // Fillable fields to allow mass assignment
    protected $fillable = [
        'ser_title',
        'ser_desc',
    ];

    // Create a new Service entry
    public static function newService($request)
    {
        $service = new self();
        self::saveServiceInfo($service, $request);
    }

    // Update an existing Service entry
    public static function updateService($request, $id)
    {
        $service = self::findOrFail($id);
        self::saveServiceInfo($service, $request);
    }

    // Save or update Service info
    private static function saveServiceInfo($service, $request)
    {
        $service->ser_title = $request->ser_title;
        $service->ser_desc  = $request->ser_desc;
        $service->save();
    }

    // Delete a Service entry
    public static function deleteService($service)
    {
        $service->delete();
    }
}