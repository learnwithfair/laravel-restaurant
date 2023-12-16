<li class="submenu">
    <a href="javascript:;">
        @php
            $profilePhoto = Auth::user()->profile_photo_url;
            $Photo = Auth::user()->image;
        @endphp

        @if ($Photo == null)
            <img class="home-icon admin_picture" src="{{ $profilePhoto }}" alt="" />
        @else
            <img class="home-icon admin_picture" src="{{ asset("storage/profileImages/$Photo") }}" alt="" />
        @endif
    </a>
    <ul style="right: 0;">
        <li>
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                    Log Out
                </a>
            </form>
        </li>

    </ul>
</li>
