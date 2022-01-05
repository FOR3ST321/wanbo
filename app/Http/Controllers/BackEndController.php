<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\StoreBranch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BackEndController extends Controller
{
    public function profile (Account $account) {
        return view('admin/page/profile/profile',[
            'active' => [null, false, null],
            'account' => $account,
            'store_branches' => StoreBranch::all()
        ]);
    }

    public function editProfile (Request $request, Account $account) {
        if(Hash::check($request->password, $account->password) || $request->isMethod('get')) {
            return view('admin/page/profile/editProfile',[
                'active' => [null, false, null],
                'account' => $account
            ]);
        }

        return redirect('/wanboAdmin/account/'.$account->id)->with('fail', 'Wrong password!');
    }

    public function updateProfile (Request $request, Account $account) {
        $validatedData = $request->validate([
            'username' => 'required|max:64',
            'password' => 'required|confirmed|min:6',
            'is_admin' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        Account::where('id', $account->id)->update($validatedData);

        return redirect('/wanboAdmin/account/'.$account->id)->with('success', 'Profile has been updated!');
    }
    
    public function branch (StoreBranch $store_branch) {
        return view('admin/page/profile/branch', [
            'active' => [null, false, null],
            'store_branch' => $store_branch
        ]);
    }

    public function updateBranch (Request $request, StoreBranch $store_branch) {
        $validatedData = $request->validate([
            'store_name' => 'required|max:64',
            'address' => 'required|max:255',
            'account_id' => 'required'
        ]);

        StoreBranch::where('id', $store_branch->id)->update($validatedData);

        return redirect('/wanboAdmin/account/'.$store_branch->account_id)->with('success', 'Branch data has been updated!');
    }
}
