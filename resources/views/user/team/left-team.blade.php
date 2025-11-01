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
         flex-direction: row-reverse;
         /* ✅ Reverse direction: starts from right */
         flex-wrap: wrap;
         gap: 6px;
         list-style: none;
         padding-left: 0;
         margin: 0;
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

     /* Disabled page */
     .page-item.disabled .page-link {
         color: #aaa;
         background-color: #f8f9fa;
         border-color: var(--pagination-border);
         pointer-events: none;
         opacity: 0.6;
     }

     /* Responsive behavior */
     @media (max-width: 576px) {
         .pagination-container {
             justify-content: center;
             /* Center pagination on small screens */
             padding-right: 0;
         }
     }
 </style>
 <main class="referral-wrapper">
     <!-- <div class="page-header">
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
                          class="ref-link">{{route('login')}}/?{{Auth::user()->username}}</span>
                      <button class="btn-copy"
                          onclick="copyToClipboard(this)">Copy</button>
                  </div>
                  <div class="stats-grid">
                      <div class="stat-card">
                          <div class="label">Total Referrals</div>
                          <div class="value">0</div>
                      </div>
                      <div class="stat-card">
                          <div class="label">Active Referrals</div>
                          <div class="value">0</div>
                      </div>
                      <div class="stat-card">
                          <div class="label">Total Earned</div>
                          <div class="value accent">0.00</div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="inviter-card">
              <div class="inviter-icon">🤝</div>
              <div class="inviter-label">Your Inviter</div>
              <div class="inviter-name">No Sponsor</div>
          </div>
      </div> -->
     <section class="ops-card">
         <div class="card-header">
             <h3>My Networks</h3>
         </div>

         <div class="ops-filter">
             <a class="" href="{{route('user.referral-team')}}">Direct Team</a>
             <a class="active" href="{{route('user.left-team')}}">Left Team</a>
             <a class="" href="{{route('user.right-team')}}">Right Team</a>
             <a class="" href="{{route('user.tree-view')}}">Genealogy Tree</a>
             <!-- <a class="" href="?type=referrals">Referrals</a>  -->
         </div>
         <!-- <div class="col">
              <div class="inputLine">
                  <?php
                    $segments = request()->segments();
                    $page = end($segments); ?>

                  <label for="">type:</label>
                  <select name="type" class="selectricBl" onchange="location = this.value;">
                      <option value="">--SELECT--</option>
                      <option <?php ($page == "roi-bonus") ? 'selected' : ''; ?> value="{{route('user.referral-team')}}">Referral Team</option>

                      <option <?php ($page == "level-income") ? 'selected' : ''; ?> value="{{route('user.level-team')}}">Total Team</option>



                  </select>
              </div>
          </div> -->
         <table class="deposits-table">
             <thead>
                 <tr>
                     <th>S.No</th>
                     <th>Name</th>
                     <th>User ID</th>
                     <!-- <th>Mobile No</th> -->
                     <th>Email</th>
                     <th>Joining Date</th>
                     <th>Position</th>

                     <th>Status</th>
                 </tr>
             </thead>
             <tbody>
                 @forelse($direct_team as $key => $deposit)
                 <tr>
                     <td>{{ $key + 1 }}</td>
                     <!-- <td>${{ number_format($deposit->amount, 2) }}</td> -->
                     <!-- <td>{{ \Carbon\Carbon::parse($deposit->created_at)->format('d M Y') }}</td> -->
                     <td>{{ ($deposit->name) }}</td>
                     <td>{{ ($deposit->username) }}</td>
                     <td>{{ ($deposit->email) }}</td>
                     <td>{{ ($deposit->jdate) }}</td>
                     <td>{{ ($deposit->position) }}</td>

                     <td>
                         @if($deposit->status == 'pending')
                         <span style="color:orange;">Pending</span>
                         @elseif($deposit->status == 'approved')
                         <span style="color:green;">Approved</span>
                         @else
                         <span style="color:red;">Declined</span>
                         @endif
                     </td>
                 </tr>
                 @empty
                 <ul class="ops-list">

                     <li class="tx-empty"style="text-align: center;">No operations yet.</li>
                 </ul>
                 @endforelse
             </tbody>
         </table>
         {{-- Pagination --}}
         <div class="pagination justify-content-center mt-3">
             {{ $direct_team->links('pagination::bootstrap-4') }}
         </div>

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

             .ops-filter {
                 display: flex;
                 flex-wrap: wrap;
                 gap: 8px;
                 margin: 6px 0 12px;
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
         </style>
     </section>


     <section class="section-card">
         <h3>Standard Commission Rates</h3>
         <div class="levels-grid">
             <div class="level-card">
                 <div class="level-title">Level 1</div>
                 <div class="level-percent">7%</div>
                 <div class="level-description">
                     From deposits of your direct referrals. </div>
             </div>
             <div class="level-card">
                 <div class="level-title">Level 2</div>
                 <div class="level-percent">2%</div>
                 <div class="level-description">
                     From your referrals' referrals. </div>
             </div>
             <div class="level-card">
                 <div class="level-title">Level 3</div>
                 <div class="level-percent">1%</div>
                 <div class="level-description">
                     From the 3rd line of your structure. </div>
             </div>
         </div>
     </section>

     <section class="section-card">
         <h3>Your Referrals (Level 1)</h3>
         <div class="referrals-table-wrapper">
             <table class="referrals-table">
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
     function copyToClipboard(button) {
         const textToCopy = document.getElementById('refLink').innerText.trim();

         const temp = document.createElement('textarea');
         temp.value = textToCopy;
         document.body.appendChild(temp);
         temp.select();
         document.execCommand('copy');
         document.body.removeChild(temp);

         const originalText = button.innerText;
         button.innerText = 'Copied!';
         button.style.backgroundColor = '#6c47ff';

         setTimeout(() => {
             button.innerText = originalText;
             button.style.backgroundColor = '#9d7bff';
         }, 2000);
     }
 </script>

 </body>

 </html>