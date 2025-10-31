  <style>
      /* ===================================================================
           SETTINGS PAGE LAYOUT
           =================================================================== */
      .settings-wrapper {
          padding: 40px 60px 60px;
          max-width: 1440px;
          margin: 0 auto;
      }

      .page-header {
          margin-bottom: 40px;
      }

      .page-header h1 {
          font-size: 46px;
          margin-bottom: 5px;
      }

      .page-header h1 span {
          color: var(--sandy-brown);
      }

      .page-header p {
          color: var(--text-muted);
          font-size: 18px;
          max-width: 600px;
          margin: 0;
      }

      .settings-layout {
          display: grid;
          grid-template-columns: 1fr 420px;
          gap: 40px;
          align-items: start;
      }

      .main-content {
          display: flex;
          flex-direction: column;
          gap: 40px;
      }

      .sidebar {
          position: sticky;
          top: 40px;
      }

      .section-card {
          background: var(--card-bg);
          border-radius: var(--border-radius);
          padding: 30px;
          box-shadow: 0 10px 40px rgba(48, 54, 59, 0.05);
          border: 1px solid var(--border-color);
      }

      .section-card h3 {
          font-size: 24px;
          margin-bottom: 25px;
      }

      .card-footer {
          margin-top: 30px;
          border-top: 1px solid var(--border-color);
          padding-top: 20px;
          display: flex;
          justify-content: flex-end;
      }

      /* ===================================================================
           FORMS & INPUTS
           =================================================================== */
      .form-grid {
          display: grid;
          gap: 20px;
      }

      .input-group {
          display: flex;
          flex-direction: column;
          gap: 8px;
      }

      .input-group label {
          font-size: 14px;
          font-weight: 600;
          color: var(--dark-slate-grey);
      }

      .input-field {
          width: 100%;
          padding: 15px 20px;
          border-radius: 14px;
          border: 2px solid var(--border-color);
          background-color: var(--background);
          color: var(--dark-slate-grey);
          font-size: 16px;
          font-family: 'Inter', sans-serif;
          outline: none;
          transition: all 0.3s ease;
      }

      .input-field:focus {
          border-color: var(--sandy-brown);
          background-color: #fff;
          box-shadow: 0 0 0 4px rgba(244, 161, 89, 0.1);
      }

      .input-field[readonly] {
          background-color: var(--border-color);
          color: var(--text-muted);
          cursor: not-allowed;
      }

      .btn-primary {
          background-color: var(--sandy-brown);
          color: var(--dark-slate-grey);
          padding: 15px 30px;
          border-radius: 14px;
          font-family: 'Bowler', sans-serif;
          font-size: 16px;
          cursor: pointer;
          transition: all 0.3s ease;
          border: none;
      }

      .btn-primary:hover {
          background-color: var(--dark-slate-grey);
          color: #fff;
          box-shadow: var(--glow-shadow);
      }

      .wallet-list {
          display: flex;
          flex-direction: column;
          gap: 25px;
      }

      .wallet-item {
          display: flex;
          align-items: center;
          gap: 20px;
      }

      .wallet-icon {
          flex-shrink: 0;
          width: 48px;
          height: 48px;
      }

      .wallet-input-group {
          flex-grow: 1;
      }

      .wallet-input-group .wallet-label {
          font-size: 16px;
          font-weight: 600;
          margin-bottom: 8px;
          display: block;
      }

      .security-card {
          background-color: var(--card-dark-bg);
          color: var(--text-light);
          padding: 30px;
          border-radius: var(--border-radius);
          position: relative;
          overflow: hidden;
      }

      .security-card::before {
          content: "";
          position: absolute;
          inset: -1px;
          border-radius: var(--border-radius);
          background: var(--futuristic-glow);
          pointer-events: none;
          z-index: 0;
          opacity: 0.7;
      }

      .security-content {
          position: relative;
          z-index: 1;
          display: flex;
          flex-direction: column;
          gap: 25px;
      }

      .security-card h3 {
          color: #fff;
      }

      .security-feature {
          display: flex;
          flex-direction: column;
          align-items: center;
          text-align: center;
          gap: 15px;
          padding: 20px;
          background: var(--dark-grey-lighter);
          border-radius: 16px;
      }

      .security-feature-icon {
          font-size: 48px;
          line-height: 1;
      }

      .security-feature-title {
          font-family: 'Bowler', sans-serif;
          font-size: 20px;
          color: #fff;
          margin: 0;
      }

      .security-feature-desc {
          font-size: 14px;
          color: var(--text-muted);
          margin: 0;
          max-width: 300px;
      }

      .btn-security {
          background-color: var(--sandy-brown);
          color: var(--dark-slate-grey);
          padding: 12px 25px;
          border-radius: 12px;
          font-family: 'Bowler', sans-serif;
          font-size: 16px;
          cursor: pointer;
          transition: all 0.3s ease;
          border: none;
          display: inline-flex;
          align-items: center;
          gap: 10px;
          text-decoration: none;
      }

      .btn-security:hover {
          background-color: #fff;
          color: var(--dark-slate-grey);
      }

      .status-badge {
          display: inline-flex;
          align-items: center;
          gap: 8px;
          padding: 6px 12px;
          border-radius: 8px;
          font-size: 14px;
          font-weight: 600;
      }

      .status-badge.enabled {
          background-color: rgba(40, 167, 69, 0.1);
          color: var(--status-success);
      }

      .status-badge.enabled::before {
          content: '';
          width: 8px;
          height: 8px;
          border-radius: 50%;
          background-color: var(--status-success);
      }

      .status-badge.disabled {
          background-color: rgba(220, 53, 69, 0.1);
          color: var(--status-danger);
      }

      .status-badge.disabled::before {
          content: '';
          width: 8px;
          height: 8px;
          border-radius: 50%;
          background-color: var(--status-danger);
      }

      /* ===================================================================
           RESPONSIVE STYLES
           =================================================================== */
      @media (max-width: 1200px) {
          .settings-layout {
              grid-template-columns: 1fr;
          }

          .sidebar {
              position: static;
          }
      }

      @media (max-width: 991px) {
          .settings-wrapper {
              padding: 30px 40px;
          }
      }

      @media (max-width: 767px) {
          .settings-wrapper {
              padding: 20px;
          }

          .page-header h1 {
              font-size: 36px;
          }

          .page-header p {
              font-size: 16px;
          }

          .settings-layout {
              gap: 30px;
          }

          .section-card {
              padding: 20px;
          }

          .wallet-item {
              flex-direction: column;
              align-items: flex-start;
          }
      }

      /* STATUS BADGE (COMPIT style) */
      .status-badge {
          display: inline-flex;
          align-items: center;
          gap: 8px;
          padding: 6px 10px;
          border-radius: 999px;
          font-weight: 700;
          font-size: 12px;
          letter-spacing: .3px;
          border: 1px solid rgba(48, 54, 59, .18);
          background: #fff;
          color: var(--dark-slate-grey);
          box-shadow: 0 8px 24px rgba(48, 54, 59, .06);
      }

      .status-badge .text {
          line-height: 1;
      }

      .status-badge .dot {
          width: 10px;
          height: 10px;
          border-radius: 50%;
          box-shadow: 0 0 0 3px rgba(0, 0, 0, .04) inset;
      }

      .status-badge.enabled {
          border-color: rgba(34, 197, 94, .32);
          background: linear-gradient(180deg, #e8fdf3, #d8faeb);
          color: #146c43;
          box-shadow: 0 8px 24px rgba(16, 185, 129, .12);
      }

      .status-badge.enabled .dot {
          background: #22c55e;
      }

      .status-badge.disabled {
          border-color: rgba(239, 68, 68, .28);
          background: linear-gradient(180deg, #fff5f5, #ffecec);
          color: #7f1d1d;
          box-shadow: 0 8px 24px rgba(239, 68, 68, .10);
      }

      .status-badge.disabled .dot {
          background: #ef4444;
      }

      .btn-security {
          display: inline-flex;
          align-items: center;
          gap: 8px;
          margin-top: 12px;
          border: 2px solid var(--dark-slate-grey);
          padding: .6rem 1rem;
          border-radius: 12px;
          background: var(--dark-slate-grey);
          color: #fff;
          font-weight: 800;
          text-decoration: none;
          transition: .15s ease;
      }

      .btn-security:hover {
          background: #fff;
          color: var(--dark-slate-grey);
      }
  </style>

  <main class="settings-wrapper">
      <div class="page-header">
          <h1>Account <span>Settings</span></h1>
          <p>Manage your account details, security settings, and payment
              information.</p>
      </div>

      <div class="settings-layout">
          <div class="main-content">
              <section class="section-card">
                  <h3>Change Password</h3>
                  <form action="{{route('user.edit-password')}}"
                      method="post" class="form-grid">
                      @csrf
                     
                      <div class="input-group">
                          <label for="field-old_password">Old
                              Password</label>
                          <input type="password" id="field-old_password"
                              name="old_password" class="input-field"
                              placeholder="..." required>
                      </div>
                      <div class="input-group">
                          <label for="field-new_password">New
                              Password</label>
                          <input type="password" id="field-new_password"
                              name="password" class="input-field"
                              placeholder="..." required>
                      </div>
                      <div class="input-group">
                          <label for="field-repeat_new_password">Repeat
                              the New Password</label>
                          <input type="password"
                              id="field-repeat_new_password"
                              name="password_confirmation"
                              class="input-field" placeholder="..."
                              required>
                      </div>

                      <div class="card-footer">
                          <button type="submit" name="save_password"
                              value="1" class="btn-primary">Update
                              Password</button>
                      </div>
                  </form>
              </section>
                      @include('partials.notify')

              <section class="section-card">
                  <h3>Payment Details</h3>
                  <form action="/handlers/user/save-wallets.php"
                      method="post">
                      <input type="hidden" name="csrf"
                          value="901a7f730969f8c29b5e1d9657bf2775">
                      <input type="hidden" name="from"
                          value="/user/settings/">
                      <div
                          class="wallet-list">
                          <div class="wallet-item">
                              <img
                                  src="{{asset('')}}assets/icons/bitcoin.png"
                                  alt="BitCoin_BTC" class="wallet-icon">
                              <div class="wallet-input-group">
                                  <label for="wallet-bitcoin_btc"
                                      class="wallet-label">Bitcoin,
                                      BTC</label>
                                  <input type="text"
                                      id="wallet-bitcoin_btc"
                                      name="BitCoin_BTC" value
                                      class="input-field"
                                      placeholder="Your Wallet Address">
                              </div>
                          </div>
                          <div class="wallet-item">
                              <img
                                  src="{{asset('')}}assets/icons/litecoin.png"
                                  alt="LiteCoin_LTC" class="wallet-icon">
                              <div class="wallet-input-group">
                                  <label for="wallet-litecoin_ltc"
                                      class="wallet-label">Litecoin,
                                      Ltc</label>
                                  <input type="text"
                                      id="wallet-litecoin_ltc"
                                      name="LiteCoin_LTC" value
                                      class="input-field"
                                      placeholder="Your Wallet Address">
                              </div>
                          </div>
                          <div class="wallet-item">
                              <img
                                  src="{{asset('')}}assets/icons/dogecoin.png"
                                  alt="DogeCoin_DOGE" class="wallet-icon">
                              <div class="wallet-input-group">
                                  <label for="wallet-dogecoin_doge"
                                      class="wallet-label">Dogecoin,
                                      Doge</label>
                                  <input type="text"
                                      id="wallet-dogecoin_doge"
                                      name="DogeCoin_DOGE" value
                                      class="input-field"
                                      placeholder="Your Wallet Address">
                              </div>
                          </div>
                          <div class="wallet-item">
                              <img
                                  src="{{asset('')}}assets/icons/ethereum.png"
                                  alt="Ethereum_ETH" class="wallet-icon">
                              <div class="wallet-input-group">
                                  <label for="wallet-ethereum_eth"
                                      class="wallet-label">Ethereum,
                                      Eth</label>
                                  <input type="text"
                                      id="wallet-ethereum_eth"
                                      name="Ethereum_ETH" value
                                      class="input-field"
                                      placeholder="Your Wallet Address">
                              </div>
                          </div>
                          <div class="wallet-item">
                              <img
                                  src="{{asset('')}}assets/icons/ripple.png"
                                  alt="Ripple_XRP" class="wallet-icon">
                              <div class="wallet-input-group">
                                  <label for="wallet-ripple_xrp"
                                      class="wallet-label">Ripple,
                                      XRP</label>
                                  <input type="text"
                                      id="wallet-ripple_xrp"
                                      name="Ripple_XRP" value
                                      class="input-field"
                                      placeholder="Your Wallet Address">
                              </div>
                          </div>
                          <div class="wallet-item">
                              <img
                                  src="{{asset('')}}assets/icons/ripple.png"
                                  alt="ripple_tag" class="wallet-icon">
                              <div class="wallet-input-group">
                                  <label for="wallet-ripple_tag"
                                      class="wallet-label">Ripple
                                      Tag</label>
                                  <input type="text"
                                      id="wallet-ripple_tag"
                                      name="ripple_tag" value
                                      class="input-field"
                                      placeholder="Your Wallet Address">
                              </div>
                          </div>
                          <div class="wallet-item">
                              <img
                                  src="{{asset('')}}assets/icons/usdt_trc20.png"
                                  alt="TRON_TRX" class="wallet-icon">
                              <div class="wallet-input-group">
                                  <label for="wallet-tron_trx"
                                      class="wallet-label">Tron,
                                      TRX</label>
                                  <input type="text" id="wallet-tron_trx"
                                      name="TRON_TRX" value
                                      class="input-field"
                                      placeholder="Your Wallet Address">
                              </div>
                          </div>
                          <div class="wallet-item">
                              <img
                                  src="{{asset('')}}assets/icons/binancecoin.png"
                                  alt="BinanceCoin_BNB"
                                  class="wallet-icon">
                              <div class="wallet-input-group">
                                  <label for="wallet-binancecoin_bnb"
                                      class="wallet-label">BINANCECOIN,
                                      BNB</label>
                                  <input type="text"
                                      id="wallet-binancecoin_bnb"
                                      name="BinanceCoin_BNB" value
                                      class="input-field"
                                      placeholder="Your Wallet Address">
                              </div>
                          </div>
                          <div class="wallet-item">
                              <img
                                  src="{{asset('')}}assets/icons/usdt_trc20.png"
                                  alt="USDT_TRC20_USDT"
                                  class="wallet-icon">
                              <div class="wallet-input-group">
                                  <label for="wallet-usdt_trc20_usdt"
                                      class="wallet-label">USDT_TRC20,
                                      USDT</label>
                                  <input type="text"
                                      id="wallet-usdt_trc20_usdt"
                                      name="USDT_TRC20_USDT" value
                                      class="input-field"
                                      placeholder="Your Wallet Address">
                              </div>
                          </div>
                          <div class="wallet-item">
                              <img
                                  src="{{asset('')}}assets/icons/usdt_bep20.png"
                                  alt="USDT_BEP20_USDT"
                                  class="wallet-icon">
                              <div class="wallet-input-group">
                                  <label for="wallet-usdt_bep20_usdt"
                                      class="wallet-label">USDT_BEP20,
                                      USDT</label>
                                  <input type="text"
                                      id="wallet-usdt_bep20_usdt"
                                      name="USDT_BEP20_USDT" value
                                      class="input-field"
                                      placeholder="Your Wallet Address">
                              </div>
                          </div>
                          <div class="wallet-item">
                              <img
                                  src="{{asset('')}}assets/icons/usdt_ton.png"
                                  alt="USDT_TON_USDT" class="wallet-icon">
                              <div class="wallet-input-group">
                                  <label for="wallet-usdt_ton_usdt"
                                      class="wallet-label">USDT_TON,
                                      USDT</label>
                                  <input type="text"
                                      id="wallet-usdt_ton_usdt"
                                      name="USDT_TON_USDT" value
                                      class="input-field"
                                      placeholder="Your Wallet Address">
                              </div>
                          </div>
                          <div class="wallet-item">
                              <img
                                  src="{{asset('')}}assets/icons/ton.png"
                                  alt="TON_TON" class="wallet-icon">
                              <div class="wallet-input-group">
                                  <label for="wallet-ton_ton"
                                      class="wallet-label">Ton,
                                      Ton</label>
                                  <input type="text" id="wallet-ton_ton"
                                      name="TON_TON" value
                                      class="input-field"
                                      placeholder="Your Wallet Address">
                              </div>
                          </div>
                      </div>
                      <div class="card-footer">
                          <button type="submit" class="btn-primary">Save
                              Wallets</button>
                      </div>
                  </form>
              </section>
          </div>

          <div class="sidebar">
              <div class="security-card">
                  <div class="security-content">
                      <h3>Security Center</h3>

                      <div class="security-feature">
                          <h4 class="security-feature-title">
                              Two-Factor Authentication (2FA)
                          </h4>

                          <p class="security-feature-desc">
                              Add an Extra Layer of Security to Your
                              Account by Requiring a Second Verification
                              Step Upon Login. </p>

                          <div class="status-badge disabled">
                              <svg width="14" height="14"
                                  viewBox="0 0 24 24" fill="none"
                                  aria-hidden="true">
                                  <path
                                      d="M12 3l7 3v6c0 5-3.5 8-7 9-3.5-1-7-4-7-9V6l7-3z"
                                      stroke="currentColor"
                                      stroke-width="1.6"
                                      fill="none"></path>
                                  <path d="M8.5 8.5l7 7m0-7l-7 7"
                                      stroke="currentColor"
                                      stroke-width="1.6"
                                      stroke-linecap="round"></path>
                              </svg>
                              <span class="text">
                                  Disabled </span>
                              <span class="dot" aria-hidden="true"></span>
                          </div>

                          <a href="/2fa_setup.php" class="btn-security">
                              <svg xmlns="http://www.w3.org/2000/svg"
                                  width="16" height="16"
                                  fill="currentColor" viewBox="0 0 16 16"
                                  aria-hidden="true">
                                  <path
                                      d="M11.596 8.5H16v-1H11.596a.5.5 0 0 1 0-1H16v-1H11.596a.5.5 0 0 1 0-1H16v-1H11.596a.5.5 0 0 1 0-1H16V2a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-2h-4.404a.5.5 0 0 1 0-1H16v-1h-4.404a.5.5 0 0 1 0-1zm-10-5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1z"></path>
                              </svg>
                              Manage 2fa Settings </a>
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </main>
  </body>

  </html>