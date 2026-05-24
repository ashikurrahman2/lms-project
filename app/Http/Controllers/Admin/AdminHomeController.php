<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminHomeController extends Controller
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }

    public function index()
    {
        $totalEditor = Admin::role('editor')->count();
        $totalAdmin = Admin::role('admin')->count();
        $totalSuperadmin = Admin::role('super-admin')->count();

        return view('admin.dashboard', compact('totalEditor', 'totalAdmin', 'totalSuperadmin'));
    }

    public function show()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.adminprofile.profile', compact('admin'));
    }

    public function edit()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.adminprofile.edit', compact('admin'));
    }

    public function update(Request $request)
    {
        $admin = Auth::guard('admin')->user();

        $request->validate([
            'name'            => 'required|string|max:255',
            'email'           => 'required|email|unique:admins,email,' . $admin->id,
            'mobile_number'   => 'nullable|string|max:20',
            'gender'          => 'nullable|string',
            'religion'        => 'nullable|string',
            'blood_group'     => 'nullable|string',
            'profession_type' => 'nullable|string',
            'division'        => 'nullable|string',
            'district'        => 'nullable|string',
            'upazila'         => 'nullable|string',
            'image'           => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Assuming this static method exists in your Admin Model
        Admin::updateAdmin($request, $admin->id);

        $this->toastr->success('Profile updated successfully!');
        return back();
    }

    /**
     * Fix: Added missing method
     * Even if using a modal, the route requires this method if accessed via GET
     */
    public function passwordChange()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profile.password_change', compact('admin')); 
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password'     => 'required|min:8|confirmed',
        ]);

        $admin = Auth::guard('admin')->user();

        if (Hash::check($request->old_password, $admin->password)) {
            $admin->update([
                'password' => Hash::make($request->password)
            ]);

            $this->toastr->success('Password changed successfully!');
            return back();
        } else {
            $this->toastr->error('Old password does not match!');
            return back()->withErrors(['old_password' => 'Old password does not match.']);
        }
    }
}