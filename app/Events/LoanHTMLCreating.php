<?php

namespace FI\Events;

use FI\Modules\Loans\Models\Loan;
use Illuminate\Queue\SerializesModels;

class LoanHTMLCreating extends Event
{
    use SerializesModels;

    public function __construct(Loan $loan)
    {
        $this->loan = $loan;
    }
}
