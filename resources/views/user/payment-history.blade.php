@include('user.header')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment History</title>
  
  <style>
    .history-wrapper { max-width: 1100px; margin: 50px auto; padding: 20px; }
    .history-card { background: #fff; border-radius: 15px; box-shadow: 0 6px 15px rgba(0,0,0,0.08); padding: 25px; }
    .history-title { font-size: 1.6rem; font-weight: 600; margin-bottom: 20px; display: flex; align-items: center; gap: 10px; color: #333; }
    .table thead th { background: #f5f6fa; border-bottom: 2px solid #e0e0e0; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 0.5px; }
    .table tbody tr:hover { background: #fafafa; transition: 0.2s; }
    .status-completed { color: #0d6efd; font-weight: 600; }
    .status-pending { color: #fd7e14; font-weight: 600; }
    .status-failed { color: #dc3545; font-weight: 600; }
    .empty-history { text-align: center; padding: 40px 20px; color: #777; }
    .empty-history i { font-size: 2rem; margin-bottom: 10px; color: #bbb; }
  </style>
</head>
<body>
  <div class="history-wrapper">
    <div class="history-card">
      <h3 class="history-title">
        <i class="fas fa-receipt"></i> Payment History
      </h3>

     <div class="container py-4">
 

  @if($withdrawals->count() > 0)
    <div class="table-responsive">
      <table class="table table-bordered align-middle">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Type</th>
            <th>Details</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          @foreach($withdrawals as $withdrawal)
            <tr>
              <td>{{ $withdrawal->id }}</td>

              {{-- Determine Type Automatically --}}
              <td>
                @if($withdrawal->wallet_address)
                  Crypto
                @else
                  Bank
                @endif
              </td>

              {{-- Dynamic Details --}}
              <td>
                @if($withdrawal->wallet_address)
                  <strong>Network:</strong> {{ $withdrawal->crypto_network ?? '—' }} <br>
                  <strong>Wallet:</strong> {{ $withdrawal->wallet_address ?? '—' }}
                @else
                  <strong>Bank:</strong> {{ $withdrawal->bank_name ?? '—' }} <br>
                  <strong>Account:</strong> {{ $withdrawal->account_name ?? '—' }} <br>
                  <strong>Number:</strong> {{ $withdrawal->account_number ?? '—' }} <br>
                  @if($withdrawal->swift_code)
                    <strong>SWIFT:</strong> {{ $withdrawal->swift_code }} <br>
                  @endif
                  @if($withdrawal->narration)
                    <strong>Narration:</strong> {{ $withdrawal->narration }}
                  @endif
                @endif
              </td>

              {{-- Amount --}}
              <td>${{ number_format($withdrawal->amount, 2) }}</td>

              {{-- Status --}}
              <td>
                <span class="badge {{ $withdrawal->status == 1 ? 'bg-success' : 'bg-warning text-dark' }}">
                  {{ $withdrawal->status == 1 ? 'Completed' : 'Pending' }}
                </span>
              </td>

              {{-- Date --}}
              <td>{{ \Carbon\Carbon::parse($withdrawal->created_at)->format('M d, Y h:i A') }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @else
    <div class="text-center py-5">
      <i class="fas fa-folder-open fa-3x text-muted mb-3"></i>
      <p class="text-muted mb-0">No withdrawal history found.</p>
    </div>
  @endif
</div>

  </div>
</body>
</html>

@include('user.footer')
