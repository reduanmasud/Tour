

<div class="col-4 ">
    <div class="list-group rounded p-3 shadow-lg p-3 mb-5  rounded">

            <div class="list-group">
                <a class="list-group-item list-group-item-action {{ Request::routeIs('account.tour.add') ? 'active' : '' }}" href="{{ route('account.tour.add') }}">Add Tour</a>
                <a class="list-group-item list-group-item-action {{ Request::routeIs('account.tour.active') ? 'active' : '' }}" href="{{ route('account.tour.active') }}" >Active Tours</a>
                <a class="list-group-item list-group-item-action {{ Request::routeIs('account.tour.closed') ? 'active' : '' }}" href="{{ route('account.tour.closed') }}" >Closed Tours</a>
                @if(Auth::user()->role == 3)
                    <a class="list-group-item list-group-item-action {{ Request::routeIs('account.site.settings') ? 'active' : '' }}" href="{{ route('account.site.settings') }}" >Settings</a>
                    <a class="list-group-item list-group-item-action {{ Request::routeIs('account.site.confirm.pay') ? 'active' : '' }}" href="{{ route('account.site.confirm.pay') }}" >Confirm Bookings Payment</a>
                    <a class="list-group-item list-group-item-action {{ Request::routeIs('account.site.users') ? 'active' : '' }}" href="{{ route('account.site.users') }}" >Users</a>
                    <a class="list-group-item list-group-item-action {{ Request::routeIs('account.contact.us') ? 'active' : '' }}" href="{{ route('account.contact.us') }}">Contact Page</a>
                @endif
            </div>

    </div>
</div>
