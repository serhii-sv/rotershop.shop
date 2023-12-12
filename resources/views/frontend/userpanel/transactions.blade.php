@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-title text-left bold-page-header-title">{{ __('frontend/user.transactions') }}</h3>

            @if(count($user_transactions))
            <div class="">
                <!-- <div class="card-header">{{ __('frontend/user.transactions_history') }}</div> -->
                <div class="">
                    <div class="table-responsive">
                        <table class="table table-transactions table-striped">
                            <thead>
                                <tr>
                                    <th width="5%" scope="col">{{ __('frontend/user.transactions_page.id') }}</th>
                                    <th width="10%" scope="col">{{ __('frontend/v5.payment_method') }}</th>
                                    <th width="18%" scope="col">{{ __('frontend/user.transactions_page.wallet') }}</th>
                                    <th width="20%" scope="col">{{ __('frontend/user.transactions_page.txid') }}</th>
                                    <th width="10%" scope="col">{{ __('frontend/user.transactions_page.status') }}</th>
                                    <th width="15%" scope="col">{{ __('frontend/user.transactions_page.amount') }}</th>
                                    <th width="10%" scope="col">{{ __('frontend/user.transactions_page.date') }}</th>
                                    <th width="12%" scope="col">{{ __('frontend/user.transactions_page.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user_transactions as $transaction)
                                <tr class="@if($transaction->isPending()) bg-light @elseif($transaction->isWaiting()) bg-light-2 @endif">
                                    <th scope="row">#{{ $transaction->id }}</th>
                                    <td>{{ strtoupper($transaction->payment_method) }}</td>
                                    <td>{{ strlen($transaction->wallet) ? decrypt($transaction->wallet) : '' }}</td>
                                    <td style="max-width:200px;">
                                        @if(strlen($transaction->txid) > 0)
                                            <div>
                                                <a href="https://btcpay0.voltageapp.io/i/{{ $transaction->txid }}" target="_blockchain_{{ $loop->iteration }}">
                                                    {{ $transaction->txid }}
                                                    <ion-icon name="open"></ion-icon>
                                                </a>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        @if($transaction->isPaid())
                                            <span class="label label-success">
                                                {{ __('frontend/user.transactions_page.confirmed') }}
                                            </span>
                                        @elseif($transaction->isPending())
                                            <span class="label label-warning">
                                                {{ __('frontend/user.transactions_page.confirmations', [
                                                    'confirms' => $transaction->confirmations,
                                                    'confirms_needed' => App\Models\Setting::get('shop.btc_confirms_needed')
                                                ]) }}
                                            </span>
                                        @else
                                            <span class="label label-secondary">
                                                {{ __('frontend/user.transactions_page.waiting') }}
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $transaction->getFormattedAmount() }}
                                    </td>
                                    <td>
                                        {{ $transaction->getDate() }}
                                    </td>
                                    <td>
                                        @if(!$transaction->isWaiting() && strlen($transaction->txid) > 0)
                                        <a href="https://btcpay0.voltageapp.io/i/{{ $transaction->txid }}" target="_blockchain_{{ $transaction->id }}">
                                            Blockchain
                                            <ion-icon name="open"></ion-icon>
                                        </a>
                                        @elseif($transaction->isWaiting())
                                        <form method="POST" action="{{ route('deposit-btc-post', $transaction->id) }}">
                                            @csrf
                                            
                                            <button type="submit" class="btn btn-link" style="margin: 0;padding: 0;">{{ __('frontend/user.i_paid_button') }}</button>
                                        </form>
                                        @elseif($transaction->isPending())
                                        <form method="POST" action="{{ route('deposit-btc-post', $transaction->id) }}">
                                            @csrf
                                            
                                            <button type="submit" class="btn btn-link" style="margin: 0;padding: 0;">{{ __('frontend/user.check_again') }}</button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {!! preg_replace('/' . $user_transactions->currentPage() . '\?page=/', '', $user_transactions->links()) !!}
                </div>
            </div>
            @else
                <div class="alert alert-warning">
                    {{ __('frontend/user.transactions_page.no_transactions_exists') }}
                </div>  
            @endif
        </div>
    </div>
</div>
@endsection
