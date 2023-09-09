<div class="quixnav non_print">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Master Data</li>
                <li>
                    <a  href="/dashboard"><i class="bi bi-display"></i><span class="nav-text">Dashboard</span></a>
                </li>    
                @can('admin')                    
                    <li>
                        <a href="/masyarakat"><i class="bi bi-people-fill"></i></i><span class="nav-text active">Masyarakat</span></a>
                    </li>
                    <li>
                        <a href="/petugas"><i class="bi bi-person"></i><span class="nav-text">Petugas</span></a>
                    </li>                    
                    <li>
                        <a href="/kategori"><i class="fa-solid fa-book"></i><span class="nav-text">Kategori</span></a>
                    </li>
                @endcan
            </li>
            <li class="nav-label first">Laporan</li>
                <li>
                    <a  href="/laporanmasuk"><i class="bi bi-envelope-exclamation-fill"></i><span class="nav-text">Laporan Masuk</span></a>
                </li>
                <li>
                    <a  href="/laporan-dalam-proses"><i class="bi bi-envelope-fill"></i><span class="nav-text">Laporan Dalam Proses</span></a>
                </li>
                <li>
                    <a  href="/laporan-selesai"><i class="bi bi-envelope-check-fill"></i><span class="nav-text">Laporan Selesai</span></a>
                </li>
            </li>
            @can('admin')
                <li class="nav-label first">Report</li>
                    <li>
                        <a  href="/generate-report"><i class="bi bi-printer"></i><span class="nav-text">Generate Report</span></a>
                    </li>
                </li>    
            @endcan
            <li class="nav-label first">Account</li>
                <li>
                    <a  href="/profile"><i class="bi bi-person-circle"></i><span class="nav-text">Profile</span></a>
                </li>
            </li>
        </ul>
    </div>
</div>