<?php

namespace App\View\Components;

use App\Models\Budget;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class BudgetSection extends Component
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
        $budgets = Budget::where('user_id', Auth::id())->get();
        return view('components.budget-section')->with('budgets', $budgets);
    }
}
