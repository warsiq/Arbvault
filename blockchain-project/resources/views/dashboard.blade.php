<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/@codingnepal -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ url('assets/style.css')}}" />
      <!-- base:css -->
  <link rel="stylesheet" href="{{ url('assets/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{ url('assets/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
    <!-- Linking Google Fonts for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  </head>
  <body>
    <!-- Mobile Sidebar Menu Button -->
    <button class="sidebar-menu-button">
      <span class="material-symbols-rounded">menu</span>
    </button>

    <aside class="sidebar">
      <!-- Sidebar Header -->
      <header class="sidebar-header">
        <a href="#" class="header-logo">
          <img id="sidebar-logo" src="{{ url('assets/logo.png')}}" alt="Logo" />
        </a>
        <button class="sidebar-toggler">
          <span class="material-symbols-rounded">chevron_left</span>
        </button>
      </header>

      <nav class="sidebar-nav">
        <!-- Primary Top Nav -->
        <ul class="nav-list primary-nav">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="material-symbols-rounded">dashboard</span>
              <span class="nav-label">Dashboard</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Dashboard</a></li>
            </ul>
          </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown-container">
            <a href="#" class="nav-link dropdown-toggle">
              <span class="material-symbols-rounded">calendar_today</span>
              <span class="nav-label">Services</span>
              <span class="dropdown-icon material-symbols-rounded">keyboard_arrow_down</span>
            </a>

            <!-- Dropdown Menu -->
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Services</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">IT Consulting</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Cloud Solutions</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Mobile Apps</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="material-symbols-rounded">notifications</span>
              <span class="nav-label">Notifications</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Notifications</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="material-symbols-rounded">local_library</span>
              <span class="nav-label">Resources</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Resources</a></li>
            </ul>
          </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown-container">
            <a href="#" class="nav-link dropdown-toggle">
              <span class="material-symbols-rounded">star</span>
              <span class="nav-label">Bookmarks</span>
              <span class="dropdown-icon material-symbols-rounded">keyboard_arrow_down</span>
            </a>

            <!-- Dropdown Menu -->
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Bookmarks</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Saved Tutorials</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Favorite Blogs</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Resource Guides</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="material-symbols-rounded">extension</span>
              <span class="nav-label">Extensions</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Extensions</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="material-symbols-rounded">settings</span>
              <span class="nav-label">Settings</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Settings</a></li>
            </ul>
          </li>
        </ul>

        <!-- Secondary Bottom Nav -->
        <ul class="nav-list secondary-nav">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="material-symbols-rounded">help</span>
              <span class="nav-label">Support</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Support</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="material-symbols-rounded">logout</span>
              <span class="nav-label">Sign Out</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Sign Out</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>
    <style>
      body {
          margin: 0;
          font-family: Arial, sans-serif;
          background: url('assets/img/hero_cleanup.png') no-repeat center center/cover;
          color: white;
          text-align: center;
      }

      /* Navbar */
     /* Navbar */
/* Navbar */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  background: #0d1224;
  border-bottom: 0.25px solid rgb(133, 127, 127);
}

.logo img {
  height: 60px;
  width: auto;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 60px;
}

.nav-links li {
  display: inline;
}

.nav-links a {
  text-decoration: none;
  color: white;
  font-size: 18px;
}

.wallet-btn {
  background: #1da1f2;
  color: #0b0f19;
  border: none;
  padding: 10px 15px;
  cursor: pointer;
  border-radius: 20px;
  font-size: 16px;
  font-weight: bold;
  box-shadow: 0px 4px 10px rgba(29, 161, 242, 0.5);
}

/* Hamburger Menu */
.hamburger {
  display: none;
  flex-direction: column;
  gap: 5px;
  cursor: pointer;
}

.hamburger .bar {
  width: 25px;
  height: 3px;
  background: white;
}

/* Responsive Styles */
@media (max-width: 768px) {
  .hamburger {
      display: flex;
  }

  .nav-links {
      display: none;
      flex-direction: column;
      gap: 10px;
      position: absolute;
      top: 80px;
      right: 20px;
      background: #0d1224;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
  }

  .nav-links.active {
      display: flex;
  }

  .wallet-btn {
      margin-top: 10px;
  }
}        .wallet-btn {
          background: #1da1f2;
          color: #0b0f19;
          border: none;
          padding: 10px 15px;
          cursor: pointer;
          border-radius: 20px;
          font-size: 16px;
          font-weight: bold;
          box-shadow: 0px 4px 10px rgba(29, 161, 242, 0.5);
      }

   
      /* Mobile Styles */
@media (max-width: 768px) {
  /* Navbar */
  .navbar {
      flex-direction: column;
      align-items: flex-start;
      padding: 10px;
  }

  .nav-links {
      flex-direction: column;
      gap: 10px;
      margin-top: 10px;
  }

  .wallet-btn {
      margin-top: 10px;
  }

}

.fade-in {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.fade-in.visible {
  opacity: 1;
  transform: translateY(0);
}

.slide-in-left {
  opacity: 0;
  transform: translateX(-50px);
  transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.slide-in-right {
  opacity: 0;
  transform: translateX(50px);
  transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.slide-in-left.visible, .slide-in-right.visible {
  opacity: 1;
  transform: translateX(0);
}

* Main content area */
.main-panel {
    margin-left: 250px; /* Match the width of the sidebar */
    flex: 1;
    transition: margin-left 0.3s ease;
}

.sidebar.closed ~ .main-panel {
    margin-left: 80px; /* Adjust when sidebar is closed */
}

/* Container for the boxes */
/* Sidebar styling */
.sidebar {
    width: 250px; /* Adjust the width of the sidebar */
    background-color: #0d1224;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    transition: width 0.3s ease;
    z-index: 1000; /* Ensure sidebar is above other content */
}

.sidebar.closed {
    width: 80px; /* Adjust the width when sidebar is closed */
}

/* Main content area */
.main-panel {
    margin-left: 250px; /* Match the width of the sidebar */
    flex: 1;
    transition: margin-left 0.3s ease;
}

.sidebar.closed ~ .main-panel {
    margin-left: 80px; /* Adjust when sidebar is closed */
}

/* Container for the boxes */
.container {
    display: flex;
    gap: 10px; /* Reduce this value to decrease the gap between boxes */
    width: calc(100% - 20px); /* Adjust width to fit the remaining space */
    margin-top: 20px;
    padding: 0 10px; /* Add some padding */
}

/* Box styling */
.box {
    background-color: rgba(18, 170, 255, 0.19);
    padding: 20px;
    border-radius: 10px;
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: margin-left 0.3s ease; /* Smooth transition */
    max-width: 400px; /* Adjust this value to reduce the width */
    width: 100%; /* Ensure it takes full width within the max-width limit */
    position: relative;
}

/* Ensure the boxes don't overlap with the sidebar */
.sidebar.closed ~ .main-panel .container .box {
    margin-left: 0; /* Adjust based on reduced sidebar width */
}
.cards {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}
.grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}
.card {
    background-color: #161B22;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
button {
    background-color: #238636;
    color: white;
    border: none;
    padding: 5px 10px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 4px;
}
      </style>
</head>
<body>
  <nav class="navbar">
      <div class="logo">
          <img src="{{ url('assets/img/logo.png')}}" alt="ArbVault Logo">
      </div>
      <!-- Hamburger Menu Icon -->
      <div class="hamburger" onclick="toggleNav()">
          <div class="bar"></div>
          <div class="bar"></div>
      </div>
      <!-- Navigation Links -->
      <ul class="nav-links" id="navLinks">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Plans</a></li>
          <li><a href="#">Roadmap</a></li>
          <li><a href="#">Support</a></li>
      </ul>
      <button class="wallet-btn">Connect Wallet</button>
  </nav>

 

  <div class="main-panel">
    <div class="content-wrapper">

      <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column"><br>
            <h5 class="mb-2 text-titlecase mb-4">Welcome Back, Mr. {{ Auth::user()->name }} 👋 </h5>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column justify-content-between">
                
        <div class="balance-section">
            <h3>User Balance:</h3>
            <input id="address" type="text" placeholder="Enter Ethereum address">
            <button onclick="getBalance()">Get Balance</button>
            <div id="balance-display"></div>
        </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                  <div class="d-flex flex-column align-items-start">
                  
          <p class="mb-2 text-muted">From Address</p>
          <input id="from" type="text" class="form-control" placeholder="From Address">
        </div>
        <!-- Orders input -->
        <div class="d-flex flex-column align-items-start">
          <p class="mb-2 text-muted">To Address</p>
          <input id="to" type="text" class="form-control" placeholder="From Address">
        </div>
        <!-- Revenue input -->
        <div class="d-flex flex-column align-items-start">
          <p class="mb-2 text-muted">Amount</p>
          <input id="amount" type="text" class="form-control" placeholder="From Address">
        </div>
       
      
                  </div>
                  <button onclick="transferTokens()">Transfer</button>
                  <div id="transaction-status"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row h-100">
            <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
              <div class="card">
                <div class="card-body d-flex flex-column justify-content-between">
                  <p class="text-muted">Sales Analytics</p>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <h3 class="mb-">27632</h3>
                    <h3 class="mb-">78%</h3>
                  </div>
                  <canvas id="sales-chart-b" class="mt-auto" height="38"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-6 stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row h-100">
                    <div class="col-6 d-flex flex-column justify-content-between">
                      <p class="text-muted">CPU</p>
                      <h4>55%</h4>
                      <canvas id="cpu-chart" class="mt-auto"></canvas>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-between">
                      <p class="text-muted">Memory</p>
                      <h4>123,65</h4>
                      <canvas id="memory-chart" class="mt-auto"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><br>
        <div class="col-xl-6 grid-margin stretch-card flex-column">
          <br><br><br>
          <div class="row h-100">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-start flex-wrap">
                    <div>
                      <p class="mb-3">Monthly Increase</p>
                      <h3>67842</h3>
                    </div>
                    <div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
                  </div>
                  <canvas id="income-chart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body border-bottom">
              <div class="d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-2 mb-md-0 text-uppercase font-weight-medium">Overall sales</h6>
                <div class="dropdown">
                  <button class="btn bg-white p-0 pb-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Last 30 days
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                    <h6 class="dropdown-header">Settings</h6>
                    <a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:;">Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <canvas id="sales-chart-c" class="mt-2"></canvas>
              <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3 mt-4">
                <div class="d-flex flex-column justify-content-center align-items-center">
                  <p class="text-muted">Gross Sales</p>
                  <h5>492</h5>
                  <div class="d-flex align-items-baseline">
                    <p class="text-success mb-0">0.5%</p>
                    <i class="typcn typcn-arrow-up-thick text-success"></i>
                  </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                  <p class="text-muted">Purchases</p>
                  <h5>87k</h5>
                  <div class="d-flex align-items-baseline">
                    <p class="text-success mb-0">0.8%</p>
                    <i class="typcn typcn-arrow-up-thick text-success"></i>
                  </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                  <p class="text-muted">Tax Return</p>
                  <h5>882</h5>
                  <div class="d-flex align-items-baseline">
                    <p class="text-danger mb-0">-04%</p>
                    <i class="typcn typcn-arrow-down-thick text-danger"></i>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <div class="dropdown">
                  <button class="btn bg-white p-0 pb-1 pt-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Last 7 days
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                    <h6 class="dropdown-header">Settings</h6>
                    <a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:;">Separated link</a>
                  </div>
                </div>
                <p class="mb-0">overview</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
          <div class="row">


      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="table-responsive pt-3">
              <table class="table table-striped project-orders-table">
                <thead>
                  <tr>
                    <th class="ml-5">ID</th>
                    <th>Project name</th>
                    <th>Customer</th>
                    <th>Deadline</th>
                    <th>Payouts	</th>
                    <th>Traffic</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>#D1</td>
                    <td>Consectetur adipisicing elit </td>
                    <td>Beulah Cummings</td>
                    <td>03 Jan 2019</td>
                    <td>$ 5235</td>
                    <td>1.3K</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                          Edit
                          <i class="typcn typcn-edit btn-icon-append"></i>                          
                        </button>
                        <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                          Delete
                          <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>#D2</td>
                    <td>Correlation natural resources silo</td>
                    <td>Mitchel Dunford</td>
                    <td>09 Oct 2019</td>
                    <td>$ 3233</td>
                    <td>5.4K</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                          Edit
                          <i class="typcn typcn-edit btn-icon-append"></i>                          
                        </button>
                        <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                          Delete
                          <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>#D3</td>
                    <td>social capital compassion social</td>
                    <td>Pei Canaday</td>
                    <td>18 Jun 2019</td>
                    <td>$ 4311</td>
                    <td>2.1K</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                          Edit
                          <i class="typcn typcn-edit btn-icon-append"></i>                          
                        </button>
                        <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                          Delete
                          <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>#D4</td>
                    <td>empower communities thought</td>
                    <td>Gaynell Sharpton</td>
                    <td>23 Mar 2019</td>
                    <td>$ 7743</td>
                    <td>2.7K</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                          Edit
                          <i class="typcn typcn-edit btn-icon-append"></i>                          
                        </button>
                        <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                          Delete
                          <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>#D5</td>
                    <td> Targeted effective; mobilize </td>
                    <td>Audrie Midyett</td>
                    <td>22 Aug 2019</td>
                    <td>$ 2455</td>
                    <td>1.2K</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                          Edit
                          <i class="typcn typcn-edit btn-icon-append"></i>                          
                        </button>
                        <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                          Delete
                          <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                        </button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
   
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

<script src="https://cdn.jsdelivr.net/npm/ethers@5.7.2/dist/ethers.umd.min.js"></script>
    <script>
        let provider;
        let signer;
        let contract;

        const contractABI = [ [
	{
		"inputs": [],
		"stateMutability": "nonpayable",
		"type": "constructor"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "spender",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "allowance",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "needed",
				"type": "uint256"
			}
		],
		"name": "ERC20InsufficientAllowance",
		"type": "error"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "sender",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "balance",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "needed",
				"type": "uint256"
			}
		],
		"name": "ERC20InsufficientBalance",
		"type": "error"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "approver",
				"type": "address"
			}
		],
		"name": "ERC20InvalidApprover",
		"type": "error"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "receiver",
				"type": "address"
			}
		],
		"name": "ERC20InvalidReceiver",
		"type": "error"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "sender",
				"type": "address"
			}
		],
		"name": "ERC20InvalidSender",
		"type": "error"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "spender",
				"type": "address"
			}
		],
		"name": "ERC20InvalidSpender",
		"type": "error"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "owner",
				"type": "address"
			}
		],
		"name": "OwnableInvalidOwner",
		"type": "error"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "account",
				"type": "address"
			}
		],
		"name": "OwnableUnauthorizedAccount",
		"type": "error"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "address",
				"name": "owner",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "spender",
				"type": "address"
			},
			{
				"indexed": false,
				"internalType": "uint256",
				"name": "value",
				"type": "uint256"
			}
		],
		"name": "Approval",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "address",
				"name": "previousOwner",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "newOwner",
				"type": "address"
			}
		],
		"name": "OwnershipTransferred",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "address",
				"name": "from",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "to",
				"type": "address"
			},
			{
				"indexed": false,
				"internalType": "uint256",
				"name": "value",
				"type": "uint256"
			}
		],
		"name": "Transfer",
		"type": "event"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "owner",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "spender",
				"type": "address"
			}
		],
		"name": "allowance",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "spender",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "value",
				"type": "uint256"
			}
		],
		"name": "approve",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "account",
				"type": "address"
			}
		],
		"name": "balanceOf",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "decimals",
		"outputs": [
			{
				"internalType": "uint8",
				"name": "",
				"type": "uint8"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "to",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "amount",
				"type": "uint256"
			}
		],
		"name": "mint",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "name",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "owner",
		"outputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "renounceOwnership",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "symbol",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "totalSupply",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "to",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "value",
				"type": "uint256"
			}
		],
		"name": "transfer",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "from",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "to",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "value",
				"type": "uint256"
			}
		],
		"name": "transferFrom",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "newOwner",
				"type": "address"
			}
		],
		"name": "transferOwnership",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	}
] ];
        const contractAddress = "0x0c1D7F8c03e6664a4a840311CD6198434ff7E27C"; // Replace with your contract address

        // Initialize Ethereum provider (for interacting with MetaMask or Web3 wallets)
        if (typeof window.ethereum !== 'undefined') {
            provider = new ethers.providers.Web3Provider(window.ethereum);
            signer = provider.getSigner();
            contract = new ethers.Contract(contractAddress, contractABI, signer);
        } else {
            alert("Please install MetaMask or another Ethereum wallet.");
        }

        // Get Ethereum balance for the given address
        function getBalance() {
            const address = document.getElementById('address').value;

            if (!address) {
                alert("Please enter an Ethereum address.");
                return;
            }

            contract.balanceOf(address).then(balance => {
                let etherBalance = ethers.utils.formatEther(balance);
                document.getElementById('balance-display').innerText = `Balance: ${etherBalance} ETH`;
            }).catch(error => {
                console.error('Error fetching balance:', error);
                document.getElementById('balance-display').innerText = 'Error fetching balance';
            });
        }

        // Transfer Ethereum from one address to another
        function transferTokens() {
            const from = document.getElementById('from').value;
            const to = document.getElementById('to').value;
            const amount = document.getElementById('amount').value;

            if (!from || !to || !amount) {
                alert("Please fill in all the fields.");
                return;
            }

            const amountInWei = ethers.utils.parseEther(amount);

            contract.transfer(to, amountInWei).then(transaction => {
                document.getElementById('transaction-status').innerText = `Transaction Hash: ${transaction.hash}`;
            }).catch(error => {
                console.error('Error transferring tokens:', error);
                document.getElementById('transaction-status').innerText = 'Transaction failed';
            });
        }
    </script>

<script type="module" src="{{ asset('build/js/app.js') }}"></script>
    <script>
        // Example JavaScript for Blockchain interaction
        function getBalance() {
            const address = document.getElementById('address').value;
            fetch(`/api/balance/${address}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('balance-display').innerText = `Balance: ${data.balance}`;
                })
                .catch(error => console.error('Error fetching balance:', error));
        }

        function transferTokens() {
            const from = document.getElementById('from').value;
            const to = document.getElementById('to').value;
            const amount = document.getElementById('amount').value;

            fetch('/api/transfer', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ from, to, amount })
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('transaction-status').innerText = `Transaction Hash: ${data.transactionHash}`;
            })
            .catch(error => console.error('Error transferring tokens:', error));
        }
    </script>
    <!-- Script -->
     <script>
      // Select elements
const sidebar = document.querySelector('.sidebar');
const sidebarToggler = document.querySelector('.sidebar-toggler');
const sidebarLogo = document.getElementById('sidebar-logo');

// Function to toggle sidebar
function toggleSidebar() {
  sidebar.classList.toggle('closed');

  // Change logo based on sidebar state
  if (sidebar.classList.contains('closed')) {
    sidebarLogo.src = 'assets/img/favicon.png'; // Show favicon when sidebar is closed
  } else {
    sidebarLogo.src = 'assets/img/logo.png'; // Show logo when sidebar is open
  }
}

// Add event listener to the sidebar toggler
sidebarToggler.addEventListener('click', toggleSidebar);


     </script>
    <script src="{{ url('assets/script.js')}}"></script>
  </body>
</html>
