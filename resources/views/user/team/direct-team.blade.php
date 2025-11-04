<style>
    /* ===== Right-to-Left Pagination ===== */
    :root {
        --pagination-color: #9d7bff;
        /* Main accent color */
        --pagination-text-color: #333;
        /* Text color */
        --pagination-bg: #fff;
        /* Background */
        --pagination-border: #ddd;
        /* Border color */
        --pagination-hover-bg: #f2ebff;
        /* Hover background */
    }

    /* Main container */
    .pagination-container {
        display: flex;
        justify-content: flex-end;
        /* Align pagination block to right edge */
        margin-top: 1.5rem;
        padding-right: 15px;
    }

    /* Pagination list styling */
    .pagination {
        display: flex;
        justify-content: flex-end;
        /* ✅ Aligns pagination to the right */
        flex-wrap: wrap;
        gap: 6px;
        list-style: none;
        padding-left: 0;
        margin: 2px;
    }

    .pagination li a,
    .pagination li span {
        padding: 8px 14px;
        border: 1px solid #ddd;
        border-radius: 6px;
        text-decoration: none;
        color: #555;
        transition: 0.3s;
    }

    .pagination li a:hover {
        background-color: #f0ebff;
        color: #9d7bff;
    }

    .pagination li.active span {
        background-color: #9d7bff;
        color: #fff;
        border-color: #9d7bff;
    }

    /* Each page item */
    .page-item {
        margin: 0;
    }

    /* Page links */
    .page-link {
        display: block;
        padding: 0.5rem 0.9rem;
        color: var(--pagination-text-color);
        background-color: var(--pagination-bg);
        border: 1px solid var(--pagination-border);
        border-radius: 0.35rem;
        font-size: 0.95rem;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.25s ease;
    }

    /* Hover effect */
    .page-link:hover {
        color: var(--pagination-color);
        background-color: var(--pagination-hover-bg);
        border-color: var(--pagination-color);
    }

    /* Active page */
    .page-item.active .page-link {
        color: #fff;
        background-color: var(--pagination-color);
        border-color: var(--pagination-color);
        box-shadow: 0 0 8px rgba(157, 123, 255, 0.4);
    }

    .page-item.disabled .page-link {
        color: #aaa;
        background-color: #f8f9fa;
        border-color: var(--pagination-border);
        pointer-events: none;
        opacity: 0.6;
    }

    @media (max-width: 576px) {
        .pagination-container {
            justify-content: flex-end;
            /* ✅ Right align container */
            padding-left: 10px;
            /* Thoda spacing right side se */
        }

        .pagination {
            flex-wrap: nowrap;
            justify-content: flex-end;
        }
    }
</style>
<style>
    .history-table-wrapper {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .history-table {
        width: 100%;
        min-width: 600px;
        border-collapse: collapse;
    }

    .history-table th,
    .history-table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid var(--border-color);
    }

    .history-table thead th {
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        color: var(--text-muted);
        font-weight: 500;
        text-transform: uppercase;
    }

    .history-table tbody tr:hover {
        background-color: var(--background);
    }

    .history-table .plan-name {
        font-weight: 600;
    }

    .history-table .amount-value {
        font-weight: 600;
    }

    .history-table .profit-value {
        font-weight: 600;
        color: var(--status-success);
    }

    /* ===================================================================
           RESPONSIVE STYLES
           =================================================================== */
    @media (max-width: 1200px) {
        .reinvest-layout {
            grid-template-columns: 1fr;
        }

        .sidebar {
            position: static;
        }
    }

    @media (max-width: 991px) {
        .reinvest-wrapper {
            padding: 30px 40px;
        }
    }

    @media (max-width: 767px) {
        .reinvest-wrapper {
            padding: 20px;
        }

        .page-header h1 {
            font-size: 36px;
        }

        .page-header p {
            font-size: 16px;
        }

        .reinvest-layout {
            gap: 30px;
            display: block;
        }

        .section-card {
            padding: 20px;
            margin-bottom: 20px;
        }

        .balance-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
<style>
    .ops-card,
    .dashboard-card {
        background: #fff;
        border: 1px solid #e0e1e2;
        border-radius: 20px;
        padding: 16px;
        margin-top: 16px;
    }

    .card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 8px;
    }

    .card-header .right a,
    .card-header a {
        text-decoration: none;
        color: #111827;
        border: 1px solid #e0e1e2;
        padding: 6px 10px;
        border-radius: 10px;
    }


    /* 🔹 Container holding both filter and search */
    .ops-filter-bar {
        display: flex;
        justify-content: space-between;
        /* filter left, search right */
        align-items: center;
        flex-wrap: wrap;
        margin: 10px 0 16px;
        gap: 10px;
    }

    /* Existing filter style retained */
    .ops-filter {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .ops-filter a {
        padding: 8px 12px;
        border: 1px solid #e0e1e2;
        border-radius: 12px;
        text-decoration: none;
        color: var(--dark-slate-grey);
        background: #fff;
    }

    .ops-filter a.active {
        border-color: var(--sandy-brown);
        color: #000;
        box-shadow: 0 0 0 2px rgb(244 161 89 / 20%);
    }

    /* 🔍 Right-side search box + reset */
    .ops-search-bar {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .search-input {
        padding: 8px 12px;
        border: 1px solid #e0e1e2;
        border-radius: 8px;
        font-size: 14px;
        width: 220px;
        outline: none;
    }

    .search-input:focus {
        border-color: var(--sandy-brown);
        box-shadow: 0 0 0 2px rgb(244 161 89 / 20%);
    }

    .btn-search,
    .btn-reset {
        padding: 8px 14px;
        border-radius: 8px;
        font-size: 14px;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .btn-search {
        background: var(--sandy-brown);
        color: #fff;
        border: 1px solid var(--sandy-brown);
    }

    .btn-search:hover {
        background: #e09d59;
    }

    .btn-reset {
        background: #fff;
        color: #111827;
        border: 1px solid #e0e1e2;
    }

    .btn-reset:hover {
        background: #f5f5f5;
    }
</style>
<main class="referral-wrapper">
    <div class="page-header">
        <h1>Referral <span>Program</span></h1>
        <p>Invite new members using your unique link and earn
            commissions from their deposits across multiple levels.</p>
    </div>

    <div class="referral-main-grid">
        <div class="referral-link-card">
            <div class="referral-link-content">
                <h3>Your Unique Referral Link</h3>
                <div class="ref-link-wrapper">
                    <span id="refLink"
                        class="ref-link">{{route('login')}}/?ref={{Auth::user()->username}}</span>
                    <button class="btn-copy"
                        onclick="copyToClipboard(this)">Copy</button>
                </div>
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="label">Total Referrals</div>
                        <div class="value">{{$total_team}}</div>
                    </div>
                    <div class="stat-card">
                        <div class="label">Active Referrals</div>
                        <div class="value">{{$active_total_team}}</div>
                    </div>
                    <div class="stat-card">
                        <div class="label">Total Earned</div>
                        <div class="value accent">{{$total_earned}}</div>
                    </div>
                </div>
            </div>


            <h4 class="mb-4 mt-5">Your Referral List</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Mobile No</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @if(is_array($direct_team) || is_object($direct_team))
                        @foreach ($direct_team as $value)
                        <tr>
                             <td>{{ $value->name }}</td>
                            <td><b>{{ $value->username }}</b></td>
                            <td>{{ $value->phone }}</td>
                            <td><a href="mailto:{{ $value->email }}" class="themed-link">{{ $value->email }}</a></td>
                            <td>
                               @if ($value->active_status!="Pending")
                                                            <span class="text-success">${{ number_format($value->package,2) }}</span>
                                                        @else
                                                            <span class="text-warning">No deposit yet</span>
                                                        @endif
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <small>
                                    
                                    <span class="badge bg-primary"></span>
                                </small>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                    <!-- <tfoot>
                        <tr>
                            <td colspan="3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><b>2-10 level referrals:</b> 1</div>
                                    <div><b>2-10 level active referrals:</b> 0</div>
                                </div>
                            </td>
                        </tr>
                    </tfoot> -->
                </table>

                {{-- Pagination --}}
                <div class="pagination justify-content-center mt-3">
                    {{ $direct_team->links('pagination::bootstrap-4') }}
                </div>

            </div>
        </div>
    </section>

    <section class="section-card">
        <h3>Your Referrals (Level 1)</h3>
        <div class="history-table-wrapper">
            <table class="history-table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Registration Date</th>
                        <th>Total Deposits</th>
                        <th>Your Commission</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4"
                            style="text-align:center; color: var(--text-muted); padding: 20px;">
                            You have no referrals on this level yet.
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </section>

</main>



<script>
    window.addEventListener('load', function () {
        // All resources (images, scripts, stylesheets, etc.) are loaded
        const preloaderContainer = document.querySelector('.preloader-container');
        const content = document.querySelector('.content');

        if (preloaderContainer) {
            // Add the 'hidden' class to trigger the fade-out animation
            preloaderContainer.classList.add('hidden');

            // Optional: If you want to completely remove the preloader from the DOM
            // after the transition, you can listen for the 'transitionend' event.
            preloaderContainer.addEventListener('transitionend', function () {
                if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer)
                    .opacity === '0') {
                    preloaderContainer.style.display = 'none'; // Or preloaderContainer.remove();
                }
            }, {
                once: true
            }); // {once: true} ensures the event listener is removed after it fires
        }

        if (content) {
            content.style.display = 'block'; // Or any other display type you need, e.g., 'flex'
            // If you used opacity for content:
            // content.style.opacity = '1';
            // content.style.visibility = 'visible';
        }
    });

    // Fallback in case 'load' event doesn't fire or takes too long (e.g., for broken images)
    // You might want to adjust the timeout duration
    setTimeout(function () {
        const preloaderContainer = document.querySelector('.preloader-container');
        const content = document.querySelector('.content');

        if (preloaderContainer && !preloaderContainer.classList.contains('hidden')) {
            console.warn("Preloader timeout reached. Forcing hide.");
            preloaderContainer.classList.add('hidden');
            if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer).opacity ===
                '0') {
                preloaderContainer.style.display = 'none';
            }
            if (content) {
                content.style.display = 'block';
            }
        }
    }, 10000); // 10 seconds timeout as an example

</script>


</body>

</html>