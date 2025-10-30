
        <main class="dashboard-wrapper">
            <div class="dashboard-header">
                <h1>Welcome back, <span>{{Auth::user()->name}}</span></h1>
                <div class="dashboard-quick-actions">
                    <a href="/user/invest" class="btn-action btn-deposit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"><line
                                x1="12" y1="5" x2="12" y2="19"></line><line
                                x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Make a Deposit
                    </a>
                    <a href="/user/payment" class="btn-action btn-withdraw">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"><path
                                d="M21 12H3"></path><path
                                d="M12 19l-7-7 7-7"></path></svg>
                        Withdraw Funds
                    </a>
                </div>
            </div>

            <section class="main-stats-grid">
                <div class="stat-card">
                    <div class="stat-card-content">
                        <span class="label">Total Balance</span>
                        <div class="value value-accent">$ 0.00</div>
                        <div class="sub-value">Total account value</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-content">
                        <span class="label">Active Deposits</span>
                        <div class="value">$ 0.00</div>
                        <div class="sub-value">in 0 active plans</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-content">
                        <span class="label">Referral Rewards</span>
                        <div class="value">$ 0.00</div>
                        <div class="sub-value">from 0 referrals</div>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-content">
                        <span class="label">Total Withdrawn</span>
                        <div class="value">$ 0.00</div>
                        <div class="sub-value">Total funds paid out</div>
                    </div>
                </div>
            </section>

            <div class="dashboard-main-layout">
                <div class="main-column">

                    <section class="dashboard-card">
                        <div class="card-header">
                            <h3>Account Balances</h3>
                            <a href="#">View All</a>
                        </div>
                        <div class="balances-grid">
                            <div class="balance-item">
                                <img src="{{asset('')}}assets/icons/bitcoin.png"
                                    alt="BitCoin"
                                    onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                                <div class="currency-name">BitCoin</div>
                                <div class="currency-amount">0.00000000
                                    BTC</div>
                            </div>
                            <div class="balance-item">
                                <img src="{{asset('')}}assets/icons/litecoin.png"
                                    alt="LiteCoin"
                                    onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                                <div class="currency-name">LiteCoin</div>
                                <div class="currency-amount">0.00000000
                                    LTC</div>
                            </div>
                            <div class="balance-item">
                                <img src="{{asset('')}}assets/icons/dogecoin.png"
                                    alt="DogeCoin"
                                    onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                                <div class="currency-name">DogeCoin</div>
                                <div class="currency-amount">0.00000000
                                    DOGE</div>
                            </div>
                            <div class="balance-item">
                                <img src="{{asset('')}}assets/icons/ethereum.png"
                                    alt="Ethereum"
                                    onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                                <div class="currency-name">Ethereum</div>
                                <div class="currency-amount">0.00000000
                                    ETH</div>
                            </div>
                            <div class="balance-item">
                                <img src="{{asset('')}}assets/icons/ripple.png" alt="Ripple"
                                    onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                                <div class="currency-name">Ripple</div>
                                <div class="currency-amount">0.000000 XRP</div>
                            </div>
                            <div class="balance-item">
                                <img src="{{asset('')}}assets/icons/tron.png" alt="TRON"
                                    onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                                <div class="currency-name">TRON</div>
                                <div class="currency-amount">0.000000 TRX</div>
                            </div>
                            <div class="balance-item">
                                <img src="{{asset('')}}assets/icons/binancecoin.png"
                                    alt="BinanceCoin"
                                    onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                                <div class="currency-name">BinanceCoin</div>
                                <div class="currency-amount">0.00000000
                                    BNB</div>
                            </div>
                            <div class="balance-item">
                                <img src="{{asset('')}}assets/icons/usdt_trc20.png"
                                    alt="USDT_TRC20"
                                    onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                                <div class="currency-name">USDT_TRC20</div>
                                <div class="currency-amount">0.00000000
                                    USDT</div>
                            </div>
                            <div class="balance-item">
                                <img src="{{asset('')}}assets/icons/usdt_bep20.png"
                                    alt="USDT_BEP20"
                                    onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                                <div class="currency-name">USDT_BEP20</div>
                                <div class="currency-amount">0.00000000
                                    USDT</div>
                            </div>
                            <div class="balance-item">
                                <img src="{{asset('')}}assets/icons/usdt_ton.png"
                                    alt="USDT_TON"
                                    onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                                <div class="currency-name">USDT_TON</div>
                                <div class="currency-amount">0.00000000
                                    USDT</div>
                            </div>
                            <div class="balance-item">
                                <img src="{{asset('')}}assets/icons/ton.png" alt="TON"
                                    onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                                <div class="currency-name">TON</div>
                                <div class="currency-amount">0.00000000
                                    TON</div>
                            </div>
                        </div>
                    </section>

                    <section class="dashboard-card">
                        <div class="card-header">
                            <h3>Active &amp; Closed Deposits</h3>
                            <a href="/user/invest">Investment History</a>
                        </div>

                        <div style="overflow-x:auto;">
                            <table class="deposits-table">
                                <thead>
                                    <tr>
                                        <th>Amount</th>
                                        <th>Accrual</th>
                                        <th>Ends</th>
                                        <th>Profit (now)</th>
                                        <th>Progress</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="6"
                                            style="text-align:center;color:var(--text-muted);">
                                            No deposits found.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                </div>
                <div class="sidebar-column">

                    <section class="dashboard-card referral-card">
                        <div class="card-header">
                            <h3>Referral Program</h3>
                        </div>
                        <p
                            style="color: var(--text-muted); font-size: 14px; margin-top: -15px;">Invite
                            users and earn from their deposits.</p>
                        <div class="ref-link-wrapper">
                            <span
                                class="ref-link">{{route('login')}}/?{{Auth::user()->username}}</span>
                            <button class="btn-copy"
                                onclick="copyRefLink(this)">Copy</button>
                        </div>
                        <div class="referral-stats">
                            <div>
                                <div class="label">Your Referrals</div>
                                <div class="value">0</div>
                            </div>
                            <div>
                                <div class="label">Total Earned</div>
                                <div class="value">$0.00</div>
                            </div>
                        </div>
                    </section>

                    <section class="dashboard-card">
                        <div class="card-header">
                            <h3>Latest Activity</h3>
                            <a href="/user/operations">All</a>
                        </div>

                        <ul class="transactions-list">
                            <li class="transaction-item-empty"><p>No
                                    transactions yet.</p></li>
                        </ul>
                    </section>

                </div>
            </div>

        </main>

        <script>
        function copyRefLink(buttonElement) {
            const linkText = document.querySelector('.ref-link').innerText;
            navigator.clipboard.writeText(linkText).then(() => {
                buttonElement.innerText = 'Copied!';
                setTimeout(() => {
                    buttonElement.innerText = 'Copy';
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy text: ', err);
            });
        }
    </script>

    </body></html>