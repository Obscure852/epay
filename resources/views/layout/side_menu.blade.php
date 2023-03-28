<div class="offcanvas offcanvas-start sidebar-nav sysSidebar" tabindex="-1" id="sidebar">
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark mt-5">
          <ul class="navbar-nav">
            
            <li>
              <a href="{{ url('pages.home') }}" class="nav-link px-3 active">
                <span class="me-2"><i class="fa-solid fa-gauge"></i></span>
                <span>Dashboard</span>
              </a>
            </li>

            <li>
              <a href="{{ url('pages.customers') }}" class="nav-link px-3 active">
                <span class="me-2"><i class="fa-solid fa-user-group"></i></span>
                <span>Customers</span>
              </a>
            </li>

            <li>
              <a href="{{ url('pages.items') }}" class="nav-link px-3 active">
                <span class="me-2"><i class="fa-solid fa-cart-shopping"></i></span>
                <span>Items</span>
              </a>
            </li>


            <li>
              <a href="{{ url('pages.estimates') }}" class="nav-link px-3 active">
                <span class="me-2"><i class="fa-solid fa-file-circle-question"></i></span>
                <span>Estimates</span>
              </a>
            </li>

            <li>
              <a href="{{ url('pages.invoices') }}" class="nav-link px-3 active">
                <span class="me-2"><i class="fa-solid fa-file-circle-plus"></i></span>
                <span>Invoices</span>
              </a>
            </li>

            <li>
              <a href="{{ url('pages.salesreceipts') }}" class="nav-link px-3 active">
                <span class="me-2"><i class="fa-solid fa-file-lines"></i></span>
                <span>Sales Receipts</span>
              </a>
            </li>

            <!--li>
 
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="fa-solid fa-receipt"></i></span>
                <span>Payments Received</span>
              </a>
            </li-->

            <li>
              <a href="{{ url('pages.reports') }}" class="nav-link px-3 active">
                <span class="me-2"><i class="fa-solid fa-file-invoice-dollar"></i></span>
                <span>Reports</span>
              </a>
            </li>   
            <li>
              <a href="{{ url('/') }}" class="nav-link px-3 active">
                <span class="me-2"><i class="fa-solid fa-right-from-bracket"></i></span>
                <span>Log Out</span>
              </a>
            </li>                          
          </ul>
        </nav>
      </div>
    </div>