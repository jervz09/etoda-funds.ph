<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Session;

use App\Models\User;
use App\Models\Member;
use App\Models\Transaction;
use App\Models\Loan;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_user');
    }

    public function index()
    {
        return view('user.home');
    }

    public function members()
    {
        $members = Member::get();
        return view('user.view-members', ['members' => $members]);
    }

    public function savings()
    {
        $members = Member::get();
        // dd($members);
        // $members = Member::latest()->where('user_id', auth()->user()->id)->get();
        return view('user.savings', ['members' => $members]);
    }

    public function loans()
    {
        $loans = Loan::latest()->where('user_id', auth()->user()->id)->get();
        return view('user.loans', ['loans' => $loans]);
    }

    public function reports()
    {
        return view('user.reports');
    }

    public function add_new_member_form()
    {
        return view('user.members.add-new');
    }

    public function add_new_member(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'gender' => 'required',
            'mobile_number' => 'required',
            'address' => 'required',
            'toda_group' => 'required',
            'plate_number' => 'required|max:7',
            'member_photo' => 'required|mimes:jpg,bmp,svg,png',
        ]);

        if($validator->fails()) {
            return redirect()->route('user.new-member')
                        ->withErrors($validator)
                        ->withInput();
        }

        $validated = $validator->validated();

        $file = $request->member_photo;

        $file_name = $file->getClientOriginalName();
        $file_path = $file->getRealPath();

        $destinationPath = 'uploads/member_photos';
        $file->move($destinationPath,$file_name);

        DB::transaction(function () use($validated, $destinationPath, $file_name){
            $username = substr($validated['first_name'], 0, 2).$validated['last_name'];
            $user = User::create([
                'name' => $validated['first_name'].' '.$validated['last_name'],
                'username' => $username,
                'is_admin' => 0,
                'password' => Hash::make(Str::random(6)),
            ]);

            if($user)
            {
                Member::create([
                    'user_id' => $user->id,
                    'first_name' => $validated['first_name'],
                    'last_name' => $validated['last_name'],
                    'gender' => $validated['gender'],
                    'mobile_number' => $validated['mobile_number'],
                    'address' => $validated['address'],
                    'toda_group' => $validated['toda_group'],
                    'plate_number' => $validated['plate_number'],
                    'photo_url' => $destinationPath.'/'.$file_name,
                ]);
            }


        });

        Session::flash('message', 'Member information has been successfully registered');

        return redirect()->route('admin.new-member');
    }

    public function view_member_savings_record(Request $request)
    {
        $member = Member::find($request->member_id);
        $savings = Transaction::where('member_id', $member->id)->where('transaction_type', 0)->latest()->get();
        return view('admin.members.savings', ['member' => $member, 'savings' => $savings]);
    }

    public function update_member_savings_record(Request $request)
    {
        $member = Member::find($request->member_id);
        $savings = Transaction::where('member_id', $member->id)->where('transaction_type', 0)->latest()->sum('amount');
        return view('admin.members.update-savings', ['member' => $member, 'savings' => $savings]);
    }

    public function add_savings(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount_paid' => 'required',
        ]);

        if($validator->fails()) {
            return redirect()->route('admin.update-member-savings-record', ['member_id' => $request->member_id])
                        ->withErrors($validator)
                        ->withInput();
        }

        DB::transaction(function () use($request){
            Transaction::create([
                'member_id' => $request->member_id,
                'transaction_type' => 0,
                'amount' => $request->amount_paid
            ]);


        });

        Session::flash('message', 'Savings successfully recorded');

        return redirect()->route('admin.update-member-savings-record', ['member_id' => $request->member_id]);

    }

    public function view_member_loans_record(Request $request)
    {
        $member = Member::find($request->member_id);
        $loans = Loan::where('member_id', $member->id)->latest()->get();
        return view('admin.members.loans', ['member' => $member, 'loans' => $loans]);
    }

    public function add_new_loan_record(Request $request)
    {
        $member = Member::find($request->member_id);
        return view('admin.members.new-loan', ['member' => $member]);
    }

    public function new_loan(Request $request)
    {
        $member = Member::find($request->member_id);
        $validator = Validator::make($request->all(), [
            'member_id' => 'required',
            'amount' => 'required',
            'interest' => 'required',
            'release_date' => 'required',
            'terms' => 'required',
            'maturity_date' => 'required',
        ]);

        if($validator->fails()) {
            return redirect()->route('admin.new-loan', ['member_id' => $member->id])
                        ->withErrors($validator)
                        ->withInput();
        }

        $validated = $validator->validated();

        DB::transaction(function () use($validated){
            Loan::create([
                'member_id' => $validated['member_id'],
                'amount' => $validated['amount'],
                'release_date' => $validated['release_date'],
                'maturity_date' => $validated['maturity_date'],
                'interest' => $validated['interest'],
                'terms' => $validated['terms'],
                'balance' => $validated['amount'],
                'status' => 0
            ]);
        });

        Session::flash('message', 'Loan Record successfully created.');

        return redirect()->route('admin.member-loans', ['member_id' => $member->id]);
    }


    public function profile_setting(Request $request)
    {
        $user = User::where('id',auth()->user()->id)->get();
        $member = Member::where('user_id', auth()->user()->id)->get();
        return view('layouts.profile_setting', ['user_id' => auth()->user()->id, 'user' => $user, 'member' => $member]);
    }

    public function update_profile_setting(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'gender' => 'required',
            'birthdate' => 'required',
            'mobile_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address' => 'required',
            'toda_group' => 'required',
            'plate_number' => 'required|max:7',
            'member_photo' => 'mimes:jpg,bmp,svg,png',
            'username' => 'required',
            'user_id' => 'required',
        ]);

        if($validator->fails()) {

            $user = User::where('id',$request->input()['user_id'])->get();
            $member = Member::where('user_id', $request->input()['user_id'])->get();
            return view('layouts.profile_setting', ['user_id' => $request->input()['user_id'], 'user' => $user, 'member' => $member])
                        ->withErrors($validator)
                        ->withInput($request->input());
        }

        $validated = $validator->validated();
        $file_name = "";
        $destinationPath = "";
        $file = $request->member_photo;
        if($file){
            $file_name = $file->getClientOriginalName();
            $file_path = $file->getRealPath();

            $destinationPath = 'uploads/member_photos';
            $file->move($destinationPath,$file_name);
        }

        DB::transaction(function () use($validated, $destinationPath, $file_name){
            // $username = strtolower(substr($validated['first_name'], 0, 2).$validated['last_name']);?
            $user = User::where('id',$validated['user_id'])->update([
                'name' => $validated['first_name'].' '.$validated['last_name'],
                'username' => $validated['username'],
            ]);

            if($user)
            {
                Member::where('user_id',$validated['user_id'])->update([
                    'user_id' => $validated['user_id'],
                    'first_name' => $validated['first_name'],
                    'last_name' => $validated['last_name'],
                    'gender' => $validated['gender'],
                    'birthdate' => $validated['birthdate'],
                    'mobile_number' => $validated['mobile_number'],
                    'address' => $validated['address'],
                    'toda_group' => $validated['toda_group'],
                    'plate_number' => $validated['plate_number'],
                    'photo_url' => $destinationPath.'/'.$file_name,
                ]);
            }


        });

        session()->flash('message', 'Member information has been successfully registered');

        return redirect()->route('user.profile_setting');
    }
}
