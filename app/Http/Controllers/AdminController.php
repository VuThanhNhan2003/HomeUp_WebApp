<?php
namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Property;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function currentAdmin(){
        $currentUser = Auth::user();
        $currentAdmin = Admin::where('id', $currentUser->id)->first();  

        $properties = Property::where('is_verified', false)->get();

        if (!$currentAdmin) {
            return redirect()->back()->with('error', 'No admin data found for this user.');
        }

        $data = [
            'currentAdmin' => $currentAdmin,
            'properties'=> $properties,
        ];
        // dd($properties);
        // return view('admin.dashboard', $data);
        return view('admin.dashboard', $data);

    }
    public function unverifiedProperties()
    {
        $properties = Property::where('is_verified', false)->orderBy('updated_at', 'desc')->get();

        return view('admin.dashboard', compact('properties'));
    }

    public function verifyProperty($propertyId)
    {
        $property = Property::findOrFail($propertyId);
        $property->is_verified = true;
        $property->save();

        return redirect()->to('admin/dashboard')->with('success', 'Property has been verified successfully.');
    }
    
    public function updatecurrentAdmin(Request $request, $admin_id) {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $admin_id, 
        ]);


        $admin = Admin::find($admin_id);
        
        if ($admin) {
            $admin->name = $request->input('name');
            $admin->save();
            $user = $admin->user;
            if ($user) {
                $user->email = $request->input('email');
                $user->save();
            }

            Session::put('message', 'Admin updated successfully.');
        } else {
            Session::put('message', 'Admin not found.');
            return redirect()->back();
        }

        return redirect()->to('admin/dashboard');
    }


// --------------------Manage Admin -------------------------------------
    public function manage_admin(){  
        $Alladmins = Admin::with('user')->get();
        return view('admin.manage_admin', compact('Alladmins'));
    }
    public function editAdmin($admin_id){
        $editAdmin = Admin::with('user')->find($admin_id);
        // $helo='Nghia'; 
        $data = [
            'editAdmin' => $editAdmin,
            // 'heelo'=> $helo,
        ];
        // dd($editAdmin);
        return view('admin.edit_Admin', $data);
    }
    public function updateAdmin(Request $request, $admin_id){
        $data= $request->all();
        $admin = Admin::with('user')->find($admin_id);
        if (!$admin) {
            return redirect()->back()->withErrors(['error' => 'Admin not found']);
        }
        
        // $admin->admin_id  = $data['admin_id'];
        $admin->name = $data['name'];
        $admin->user->email = $data['email'];
        
        $admin->save();
        Session::put('message','Update admin successful');
        return Redirect::to('manage_admin');
    }
    public function deleteAdmin($admin_id){
        $admin = Admin::with('user')->find($admin_id);
        if ($admin) {
            $user = $admin->user;
            if ($user) {
                $user->delete(); 
            }
            $admin->delete();
            Session::flash('message', 'Delete Admin sucesfull');
        } else {
            Session::flash('message', 'Admin does not exist');
        }
        return Redirect::to('manage_admin');
    }
    
}
