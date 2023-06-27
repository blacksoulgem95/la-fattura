<div class="navbar bg-base-100">
    <div class="flex-1">
        <a href="{{ route('dashboard') }}" class="btn btn-ghost normal-case text-xl">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
        </a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            <li><a>Link</a></li>
            @if ( null !== Auth::user() )
               <li>
                <details>
                    <summary>
                        {{ Auth::user()->name }}
                    </summary>
                    <ul class="p-2 bg-base-100">
                        <li><a>Link 1</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                            <button type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </details>
            </li>
            @else
                <li>
                    <a href="{{ route('login') }}">Login</a>
                </li>
            @endif
        </ul>
    </div>
</div>

