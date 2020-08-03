<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="index">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    總覽</a>
                <div class="sb-sidenav-menu-heading">出缺勤管理</div>
                <a class="nav-link collapsed" href="leave_log" ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>出缺勤紀錄</a>
                <a class="nav-link collapsed" href="leave_page" ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>請假頁面</a>
                <a class="nav-link collapsed" href="leave_page" ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>線上打卡</a>
                <div class="sb-sidenav-menu-heading">其他設定</div>
                <a class="nav-link" href="/atten/schedules"><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>班表設定</a>
                <a class="nav-link" href="leave_set"><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>假別設定</a>
                <a class="nav-link" href="dept_set"><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>部門管理</a>
                <a class="nav-link" href="labor"><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>員工管理</a>
                <a class="nav-link" href="users"><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>系統使用者管理</a>
                <a class="nav-link" href="system"><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>系統參數</a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">您目前登入的帳號是:</div>
            {{ $user['name'] }}
        </div>
    </nav>
</div>
