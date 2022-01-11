<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Account;
use App\Models\Beverage;
use App\Models\Order;
use App\Models\Package;
use App\Models\StoreBranch;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FrontEndController extends Controller
{
    public function index(){
        return view('/frontend/welcome');
    }

    public function dashboard(){
        return view('/frontend/page/dashboard/dashboard',[
            'beverages' => Beverage::all(),
            'branches' => StoreBranch::all()
        ]);
    }

    public function package(Package $package){
        return view('/frontend/page/dashboard/viewPackage',[
            'branches' => StoreBranch::all(),
            // 'store' => StoreBranch::getStoreById($request->id),
            // 'packages' => Package::all()
            // 'packages' => StoreBranch::getData()
            'package' => Package::getPackageById($package->id)
        ]);
    }

    public function dashboardBranch(Request $request){
        return view('/frontend/page/dashboard/dashboardBranch',[
            'beverages' => Beverage::all(),
            'store' => StoreBranch::getStoreById($request->id),
            'branches' => StoreBranch::all(),
            'packages' => StoreBranch::getPackageInBranch($request->id)
        ]);
    }

    public function dashboardWarnet () {
        return view('/frontend/page/dashboard/warnet',[
            'branches' => StoreBranch::all()
        ]);
    }

    public function profile(){
        $user = User::getUserByAcc(auth()->user()->id);
        return view('/frontend/page/profile/profile',[
            'user' => User::getUser(auth()->user()->id),
            'js' => '/frontend/js/btnLogout.js',
            'orders' => Order::getUserData($user->id)
        ]);
    }

    public function editProfile (User $user) {
        return view('frontend/page/profile/editProfile',[
            'user' => $user,
            'account' => Account::getAccount($user->account_id)
        ]);
    }

    public function editPass (Request $request, Account $account) {
        if(Hash::check($request->password, $account->password) || $request->isMethod('get')) {
            return view('frontend/page/profile/editPass',[
                'account' => $account
            ]);
        }

        return redirect('/wanbo/profile')->with('fail', 'Wrong password!');
    }

    public function updateProfile(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:64',
            'email' => 'required|email',
            'membership_type' => 'required',
            'account_id' => 'required'
        ]);

        User::where('id', $user->id)->update($validatedData);

        return redirect('/wanbo/profile')->with('success', 'Profile has been updated!');
    }

    public function updatePass (Request $request, Account $account)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:64',
            'password' => 'required|confirmed|min:6',
            'is_admin' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        Account::where('id', $account->id)->update($validatedData);

        return redirect('/wanbo/profile')->with('success', 'Password has been updated!');
    }
}
