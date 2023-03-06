@extends('admin.layouts.app')

@section('title', $item->name)

@section('content')
    <div class="row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="{{ $item->name }}">
        </div>
        <div class="col-md-8">
            <h1>{{ $item->name }}</h1>
            <p class="lead">{{ $item->description }}</p>
            <p>Starting Price: Rp{{ number_format($item->starting_price) }}</p>
            <p>Current Bid: Rp{{ number_format($item->current_bid) }}</p>
            <p>Time Left: {{ $item->time_left }}</p>

            @if($item->is_open)
                <form action="{{ route('bids.store', $item->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="bid_price">Your Bid:</label>
                        <input type="number" name="bid_price" id="bid_price" class="form-control" min="{{ $item->current_bid + $item->bid_increment }}" value="{{ old('bid_price') }}" required>
                        @error('bid_price')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Place Bid</button>
                </form>
            @else
                <p class="text-danger">This auction has ended.</p>
            @endif
        </div>
    </div>

    <hr>

    <h2>Bidding History</h2>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Bidder</th>
                    <th>Bid Amount</th>
                    <th>Bid Time</th>
                </tr>
            </thead>
            <tbody>
                @forelse($item->bids as $bid)
                    <tr>
                        <td>{{ $bid->user->name }}</td>
                        <td>Rp{{ number_format($bid->bid_price) }}</td>
                        <td>{{ $bid->created_at->diffForHumans() }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No bids yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
