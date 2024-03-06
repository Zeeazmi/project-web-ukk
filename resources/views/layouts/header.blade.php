<!-- App header actions start -->
<div class="app-header">
    <div class="header-actions">
        <div class="dropdown ms-2">
            <a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none" href="#!"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="icon-box md bg-info text-white rounded-4">{{ auth()->user()->name ?? '' }}</div>
            </a>

            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item d-flex align-items-center" href="{{ route('signout') }}"><i
                        class="bi bi-escape fs-4 me-2"></i>Logout</a>
            </div>
        </div>
    </div>
    <!-- App header actions end -->

</div>
<!-- App header ends -->
