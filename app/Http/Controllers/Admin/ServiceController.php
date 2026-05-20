<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ServiceController extends BaseController
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $services = Service::all();
            return DataTables::of($services)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '';

                    $actionBtn .= '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" 
                                        data-id="' . $row->id . '" 
                                        data-ser_title="' . $row->ser_title . '" 
                                        data-ser_desc="' . $row->ser_desc . '" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#editModal">
                                        <i class="fa fa-edit"></i>
                                    </a>';

                    $actionBtn .= '<button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                        <i class="fa fa-trash"></i>
                                   </button>
                                   <form id="delete-form-' . $row->id . '" action="' . route('service.destroy', $row->id) . '" method="POST" style="display: none;">
                                        ' . csrf_field() . '
                                        ' . method_field('DELETE') . '
                                   </form>';

                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.service.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ser_title' => 'required|string|max:255',
            'ser_desc'  => 'required|string',
        ]);

        Service::newService($request);

        $this->toastr->success('Service created successfully!');
        return back();
    }

      public function edit(Service $service)
    {
        return view('admin.pages.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ser_title' => 'required|string|max:255',
            'ser_desc'  => 'required|string',
        ]);

        Service::updateService($request, $id);

        $this->toastr->success('Service updated successfully!');
        return back();
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        Service::deleteService($service);

        $this->toastr->success('Service deleted successfully!');
        return back();
    }
}