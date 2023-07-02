<div class="navbar bg-base-100">
    <div class="flex-1">
        <a href="{{ route('dashboard') }}" class="btn btn-ghost normal-case text-xl">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800"/>
        </a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            @if ( null !== Auth::user() )
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li>
                    <details>
                        <summary>
                            <i class="ri-user-line"></i> {{ Auth::user()->name }}
                        </summary>
                        <ul class="p-2 bg-base-100">
                            <li><a><i class="ri-profile-line"></i> Profile</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"><i class="ri-logout-circle-line"></i> Logout</button>
                                </form>
                            </li>
                        </ul>
                    </details>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}"><i class="ri-login-circle-line"></i> Login</a>
                </li>
            @endif
        </ul>
        <div class="flex">

            @if ( null !== Auth::user() )
                <div class="drawer drawer-end">
                    <input id="my-drawer" type="checkbox" class="drawer-toggle"/>
                    <div class="drawer-content">
                        <!-- Page content here -->
                        <label for="my-drawer" class="btn btn-ghost drawer-button">
                            <i class="ri-menu-line"></i>
                        </label>
                    </div>
                    <div class="drawer-side z-50">
                        <label for="my-drawer" class="drawer-overlay"></label>
                        <ul class="menu p-4 w-80 h-full bg-base-200 text-base-content ">
                            <!-- Sidebar content here -->
                            <li>
                                <details open>
                                    <summary>
                                        <i class="ri-archive-drawer-line"></i> {{ __("Anagrafica") }}
                                    </summary>
                                    <ul>
                                        <li><a href="{{ route("customers.list") }}">Elenco Clienti</a></li>
                                        <li><a>Elenco Fornitori</a></li>
                                    </ul>
                                </details>
                            </li>
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

