<style>
    ul.client-links {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 40px;
        padding: 0;
        margin: 0;
    }

    li.client-nav-item {
        cursor: pointer;
        text-transform: uppercase;
        font-size: 16px;
        font-weight: bold;
    }

    .nav-link.active {
        color: #c45026 !important;
    }
</style>
<ul class="client-links">
    <li class="client-nav-item">
        <a
            href="{{ route('client.dashboard') }}"class="nav-link {{ Route::currentRouteName() == 'client.dashboard' ? 'active' : '' }}">Home
        </a>
    </li>

    <li class="client-nav-item">
        <a href="{{ route('client.profile') }}"
            class="nav-link {{ Route::currentRouteName() == 'client.profile' ? 'active' : '' }}">Profile</a>
    </li>

    <li class="client-nav-item">
        <a href="{{ route('client.orders.index') }}"
            class="nav-link {{ Route::currentRouteName() == 'client.orders.index' ? 'active' : '' }}">Bookings</a>
    </li>
</ul>
