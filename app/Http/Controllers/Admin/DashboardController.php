<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use App\Calendar;
use App\Deposit;
use App\Http\Controllers\Controller;
use App\Income;
use App\TrackingItem;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tracking = TrackingItem::query()->latest('datetime')->get();

        $users = User::all();

        $incomes = Income::query()
            ->with('user')
            ->whereIn('status', [Income::STATUS_PAID_BY_USER, Income::STATUS_WAITING])
            ->latest()
            ->get();
        $deposits = Deposit::query()
            ->with('user')
            ->whereIn('status',[Deposit::STATUS_NOT_PAYED,Deposit::STATUS_PAYED,Deposit::STATUS_CANCELED])
            ->latest()
            ->get();

        $forVerifications = User::query()
            ->where('is_verified', 1)
            ->latest('updated_at')
            ->get();

        return view('admin.dashboard', compact('tracking','deposits', 'users', 'incomes', 'forVerifications'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if(empty($request->input('datetime'))) {
            return back();
        }

        TrackingItem::updateOrCreate([
            'datetime' => $request->input('datetime'),
            'user_id' => $request->input('user_id') ?? null,
        ], [
            'high' => $request->input('high'),
            'low' => $request->input('low'),
            'open' => $request->input('open'),
            'close' => $request->input('close'),
        ]);

        return redirect()->route('admin.dashboard');
    }
}
