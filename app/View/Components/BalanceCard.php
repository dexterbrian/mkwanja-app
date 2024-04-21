<?php

namespace App\View\Components;

use App\Models\Transaction;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class BalanceCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $debitTotal = Transaction::where('user_id', Auth::id())->sum('debit');
        $creditTotal = Transaction::where('user_id', Auth::id())->sum('credit');
        $balance = $creditTotal - $debitTotal;

        return view('components.balance-card')->with('balance', $balance);
    }
}
