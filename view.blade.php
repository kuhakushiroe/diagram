@php
    $accounts = Account::all();

    foreach ($accounts as $account) {
        $debit = $account->transactionDetails()->where('debit_credit', 'debit')->sum('amount');
        $credit = $account->transactionDetails()->where('debit_credit', 'credit')->sum('amount');
        $balance = $debit - $credit;
        $account->update(['balance' => $balance]);
    }
@endphp
