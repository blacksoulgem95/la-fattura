<x-guest-layout>

    <div class="hero min-h-screen" style="background-image: url(/img/herobg.jpg);">
        <div class="hero-overlay bg-opacity-80"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                <p class="mb-5">This website is a private software.</p>
                <p class="mb-5">Only authorized personnel can access.</p>
                <a href="{{ route('dashboard') }}" class="btn btn-primary">Log in</a>
            </div>
        </div>
    </div>

</x-guest-layout>
