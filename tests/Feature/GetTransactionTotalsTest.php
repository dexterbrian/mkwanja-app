<?php

namespace Tests\Feature;

use App\Models\Transaction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class GetTransactionTotalsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_transaction_totals(): void
    {
        $debitTotal = Transaction::where('user_id', 1)->sum('debit');
        $creditTotal = Transaction::where('user_id', 1)->sum('credit');
        $balance = $creditTotal - $debitTotal;

        $this->assertEquals(100, $balance);
    }
}
