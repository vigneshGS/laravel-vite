<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="{{ route('index') }}" class="sidebar-logo">
            <!-- <img src="{{ asset('assets/images/logo.png') }}" alt="site logo" class="light-logo">
            <img src="{{ asset('assets/images/logo-light.png') }}" alt="site logo" class="dark-logo">
            <img src="{{ asset('assets/images/logo-icon.png') }}" alt="site logo" class="logo-icon"> -->
            <h5>N.E.E.D.S</h5>
        
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
           
                <li >
        <a href="home.html">
          <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
          <span>Dashboard</span>
        </a>
        <!-- <ul class="sidebar-submenu">
          <li>
            <a href="home.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Report</a>
          </li>
       
        </ul> -->
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="mage:user" class="menu-icon"></iconify-icon>
          <span>Users</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="profiles"><iconify-icon icon="mage:user-circle" class="menu-icon"></iconify-icon>
                <span> Profiles</span></a>
          </li>
          <li>
            <a href="permissions">  <iconify-icon icon="mage:user-cross" class="menu-icon"></iconify-icon>
                <span> Permissions</span></a>
          </li> 
        
        </ul>
      </li>

      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="mage:file-plus" class="menu-icon"></iconify-icon>
          <span>Admissions</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
           
            <a href="admission">
                <iconify-icon icon="mage:dashboard-chart-arrow" class="menu-icon"></iconify-icon>
                <span>Admission</span></a>
          </li>
        <li>
          <li>
           
            <a href="activity">
                <iconify-icon icon="mage:dashboard-chart-arrow" class="menu-icon"></iconify-icon>
                <span>Activity</span></a>
          </li>
        </ul>
      </li>


      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="flowbite:landmark-outline" class="menu-icon"></iconify-icon>
          <span>Universities</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="university">
                <iconify-icon icon="mage:building-tree" class="menu-icon"></iconify-icon>
                <span>Colleges</span></a>
          </li>
          <li>
            <a href="programs">
                <iconify-icon icon="mage:building-tree" class="menu-icon"></iconify-icon><span>Programs</span></a>
          </li> 
        
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="mage:megaphone-a" class="menu-icon"></iconify-icon>
          <span>Promo</span> 
        </a>
        <ul class="sidebar-submenu">
            <li>
                <a href="email">
                  <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
                  <span>Email</span>
                </a>
              </li>
              <li>
                <a href="leads">
                    <iconify-icon icon="mage:filter-2" class="menu-icon"></iconify-icon>
                  <span>Leads</span> 
                </a>
              </li>
              <li>
                <a href="referals">
                  <iconify-icon icon="mage:users" class="menu-icon"></iconify-icon>
                  <span>Referals</span> 
                </a>
              </li>
        
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="mage:file-records" class="menu-icon"></iconify-icon>
          <span>Accounting</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="invoice">
                <iconify-icon icon="mage:file-3" class="menu-icon"></iconify-icon>
          <span> 
          Invoices</span></a>
          </li>
          <li>
            <a href="ledger">
                <iconify-icon icon="mage:file-3" class="menu-icon"></iconify-icon>
          <span> 
          Ledger</span></a>
          </li>
          
        
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="mage:settings" class="menu-icon"></iconify-icon>
          <span>Settings</span> 
        </a>
        <ul class="sidebar-submenu">
            <li>
                <a href="transactions">
                  <iconify-icon icon="mage:file-3" class="menu-icon"></iconify-icon>
                  <span>Transactions</span>
                </a>
              </li>
              <li>
                <a href="commissions">
                  <iconify-icon icon="mage:magnet-left" class="menu-icon"></iconify-icon>
                  <span>Commissions</span>
                </a>
              </li>
              <li>
                <a href="payment">
                  <iconify-icon icon="mage:filter" class="menu-icon"></iconify-icon>
                  <span>Payments Settings</span>
                </a>
              </li>
             
             
        
        </ul>
      </li>
        </ul>
    </div>
</aside>