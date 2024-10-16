<style>
    nav {
        /* background-color: #10443f; */
    }
    nav::after{
        background-color: #00000080;
    }
    .layout-navbar.navbar-detached {
    width: calc(100% -(1.625rem* 2));
    margin: 0.75rem auto 0;
    border-radius: 0.375rem;
    padding: 0 0rem !important;
}
</style>
@if(false)
<nav style="height: 150px; position: static !important; background-image: url('https://store.hp.com/app/assets/images/uploads/prod/typing-keyboarding-practice-games-and-lessons1604681748818430.jpg'); background-repeat: no-repeat; background-size: cover; background-color: #0a1e1998 !important; border: 0.1px solid #3c4b44; box-shadow: none !important;" class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div style="position: absolute; z-index: -1; width: 100%; height: 100%; background-image: linear-gradient(to right, #00000041 0%, #00000080 50%, #000000c4 100%);"></div>
    <div class="navbar-nav-right d-flex align-items-center" style="
    width: 80% !important;
    margin-left: 40%;
    margin-right: 2%;
    width: 100% !important;" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center" style="width: 100% !important;">
            <div class="nav-item d-flex align-items-center" style="width: 100% !important;">
                <div style="width: 100% !important; display: flex; flex-direction: column; justify-content: center; align-items: end;">
                    <div style="margin-bottom: 0.5rem !important; width: 100%; display: flex; flex-direction: row; justify-content: space-between; align-items: center; color: #afafaf; font-size: 12px; text-transform: uppercase;">
                        <p style="color: #fff; margin-bottom: 0px; font-size: 15px;">
                            Achievement
                        </p>
                        <span style="color: white; margin-left: 8px;"> 0 / 0 USDT</span>
                    </div>
                    <div class="progress" style="width: 100% !important;">
                        <div
                            class="progress-bar progress-bar-striped bg-success"
                            role="progressbar"
                            style="width: 100%"
                            aria-valuenow="40"
                            aria-valuemin="0"
                            aria-valuemax="100"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Search -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <style>
                @media (max-width:800px) {
                    .usrname{
                        display: hidden !important;
                        color: transparent !important;
                    }
                }
            </style>
        </ul>
    </div>
</nav>
@endif
<nav style="padding-left: 15px !important; padding-right: 15px !important;" class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>
    <div class="navbar-nav-right d-flex align-items-center"  id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                >
            </div>
        </div>
        <!-- /Search -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->
            <li class="nav-item lh-1 me-3">
                <!-- <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                >UniquePay
                </a> -->
                UniquePay
            </li>
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <div class="nav-link dropdown-toggle hide-arrow" style="display: flex; flex-direction: row; justify-content: center; align-items: center;" data-bs-toggle="dropdown">
                    <div class="avatar">
                        <img src="/tst/grnyellow.png" alt class="w-px-40 h-auto rounded-circle">
                    </div>
                </a>
                <!-- <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">John Doe</span>
                                    <small class="text-muted">Admin</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <span class="d-flex align-items-center align-middle">
                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                <span class="flex-grow-1 align-middle">Billing</span>
                                <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="auth-login-basic.html">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                </ul> -->
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>
