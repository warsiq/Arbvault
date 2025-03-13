<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArbVault</title>
    <link rel="stylesheet" href="{{ url('assets/styles.css')}}">
    <link href="{{ url('assets/img/favicon.png')}}" rel="icon">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('hero_cleanup.png') no-repeat center center/cover;
            color: white;
            text-align: center;
        }

        /* Navbar */
       /* Navbar */
/* Navbar */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: url('assets/img/hero_cleanup.png') no-repeat center center/cover;
    color: white;
    text-align: center;
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background: #0d1224;
    border-bottom: 0.25px solid rgb(133, 127, 127);
    position: relative;
}

.logo img {
    height: 60px;
    width: auto;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 60px;
    margin-left: 400px;
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
    margin-left: 500px;
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
    position: absolute;
    right: 0;
}

.hamburger .bar {
    width: 25px;
    height: 3px;
    margin-right: 15px;
    background: white;
}

@media (max-width: 768px) {
    .navbar {
        padding: 10px;
    }
    .nav-links {
        display: none;
        flex-direction: column;
        gap: 20px;
        position: absolute;
        top: 70px;
        width: 300px;
        height: 200px;
        right: 10px;
        background: #0d1224;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }
    .nav-links.active {
        display: flex;
    }
    .wallet-btn {
        margin-top: 0;
        margin-right: 400px;
        width: 150px;
        text-align: center;
    }
    .hamburger {
        display: flex;
    }
}

        /* Hero Section */
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 90vh;
            padding: 50px 20px;
            /* background: url('hero_cleanup.png') no-repeat center center/cover;  */
            position: relative;
        }

        /* Background Overlay */
        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background: rgba(0, 0, 0, 0.6); */
            z-index: 1;
        }

        .hero * {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        /* Hero Heading */
        .hero h1 {
            font-size: 56px;
            font-weight: bold;
            background: linear-gradient(125deg, #1da1f2, #ffffff);
            -webkit-background-clip: text;
            color: transparent;
        }

        .hero h1 span {
            font-weight: bold;
            color: white;
        }

        /* Hero Subheading */
        .hero h2 {
            font-size: 80px;  /* Increased font size */
            font-weight: bold;
            background: linear-gradient(125deg,#1da1f2, #ffffff, #1da1f2);  /* Light blue to white gradient */
            -webkit-background-clip: text;
            color: transparent;
        }

        /* Hero Paragraph */
        .hero p {
            font-size: 18px;
            max-width: 600px;
            margin: 20px auto;
            opacity: 0.9;
        }

        /* Buttons */
        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .primary-btn, .secondary-btn {
            padding: 12px 24px;
            font-size: 18px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }
        .container {
        text-align: center;
        max-width: 800px;
    }
    .section {
        margin-bottom: 30px;
    }
    .cards-container {
        display: flex;
        gap: 20px;
        justify-content: center;
    }
    .card {
        background-color: #1e293b;
        padding: 20px;
        border-radius: 12px;
        text-align: center;
        width: 250px;
        box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1);
    }
    .card h3 {
        margin-bottom: 10px;
    }
    .card p {
        font-size: 14px;
        color: #cbd5e1;
    }
    .button {
        display: inline-block;
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #2563eb;
        color: white;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
    }
    .button:hover {
        background-color: #1d4ed8;
    }

        /* Primary Button */
        .primary-btn {
            background: #1da1f2;
            color: #0b0f19;
            border: none;
            box-shadow: 0px 4px 10px rgba(29, 161, 242, 0.5);
        }

        /* Secondary Button */
        .secondary-btn {
            background: transparent;
            color:#1da1f2;
            border: 2px solid #1da1f2;
        }

        .primary-btn:hover {
            background: #1578b3;
        }

        .secondary-btn:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        /*about*/
        .about-section {
            text-align: center;
            padding: 50px 20px;
            color: white;
            max-width: 1200px;
            margin: auto;
           
        }
        .about-title {
            font-size: 80px;
            font-weight: bold;
        }
        .about-description {
            max-width: 1000px;
            margin: auto;
            font-size: 30px;
            opacity: 0.8;
        }
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 30px;
            
        }
        .about-box {
    text-align: left;
    padding: 20px;
    border-radius: 10px;
    box-shadow: none;
    background: none;
}

        .about-box h3 {
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            padding-bottom: 10px;
        }
        .about-section {
            text-align: center;
            padding: 50px 20px;
            color: white;
            max-width: 900px;
            margin: auto;
        }
       
        .about-box {
           
    text-align: left;
    padding: 20px;
    border-radius: 10px;
    box-shadow: none;
    background: none;


        }
      
      /* Staking Plans Heading */
      .staking-heading {
            background-color: rgba(18, 170, 255, 0.1);
            display: inline-block;
            padding: 20px 55px;
            border-radius: 50px;
            font-size: 20px;

            color: rgba(18, 170, 255, 1);
            margin-top: 50px;
        }

        /* Staking Cards Container */
        .staking-container {
            display: flex;
            justify-content: center;
            gap: 70px;
            margin-top: 30px;
        }

        /* Card Styling */
        .card-1 {
            background-color: rgba(18, 170, 255, 0.1);
            padding: 20px;
            border-radius: 22px;
            width: 300px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .card-1 h2 {
            margin-bottom: 15px;
            text-align: left; /* Align text to the right */
        }

        .card- p {
            margin: 5px 0;
            color: #a8b2d1;
            text-align: left; /* Align text to the right */
        }

        /* Stake Button Styling */
        .stake-button {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            border: 2px solid rgba(18, 170, 255, 1);
            color: rgba(18, 170, 255, 1);
            background: none;
            border-radius: 50px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .stake-button:hover {
            background-color: #0080ff;
            color: #ffffff;
        }
        .chart-section {
    background: rgba(0, 6, 37, 0.76);
    color: white;
    padding: 50px;
    border-radius: 25px;
    display: flex;
    justify-content: center; /* Centers content horizontally */
    align-items: center; /* Centers content vertically */
    flex-direction: column; /* Stacks elements vertically */
    text-align: center; /* Ensures text is centered */
}

.container {
    display: flex;
    justify-content: center; /* Centers content horizontally */
    align-items: center; /* Centers content vertically */
    flex-direction: column; /* Stack the content vertically */
}

.chart-section .container {
    display: flex;
    justify-content: space-between; /* Aligns content to left and chart to the right */
    align-items: center; /* Centers content vertically */
    flex-direction: row; /* Ensures horizontal alignment */
    gap: 50px; /* Adds space between the content and the chart */
    margin: 0 auto; /* Center the container horizontally */
}

.chart-section .content,
.chart-section .description {
    width: 100%; /* Ensure both content and description take up the same width */
    margin: 0; /* Remove any default margin to keep them aligned */
    padding: 0 20px; /* Optional padding for spacing */
}

.chart-section .chart-container {
    width: 40%; /* Adjust width of the chart container */
    height: 350px; /* Ensure enough height for the chart */
}

.content {
    width: 100%;
    text-align: center; /* Centers the text inside the content */
    margin-right: 100px;
}

.chart-container {
    position: relative;
    width: 500px;
    height: 400px;
    margin-top: 30px;

}


.plan-title {
    color: #3FA9F5;
    font-size: 5rem;
    font-weight: bold;
    text-align: left;
    line-height: 1;  /* Reduced line-height */
    margin-bottom: 10px; /* Reduced margin at the bottom */
}

.subtitle {
    font-size: 5rem;
    font-weight: bold;
    text-align: left;
    line-height: 1.5;  /* Reduced line-height */
    margin-bottom: 15px; /* Reduced margin at the bottom */
}

  
    .chart-container {
    position: relative;
    width: 400px;  /* Increased width */
    height: 400px; /* Increased height */
    margin-top: 30px;
}

.legend div {
    margin: 5px 0; /* Reduced space between the items */
    display: flex;
    align-items: center;
    cursor: pointer;
    font-size: 16px; /* Slightly smaller font size for the legend */
    line-height: 2.5; /* Reduced line-height for tighter spacing */
}

.description-1 p {
    font-size: 1rem;
    margin: 5px 0; /* Reduced margin for paragraphs */
    margin-left: 50px;
    line-height: 1.3; /* Reduced line height for tighter spacing */
    text-align: left;
}


.color-box {
    width: 25px; /* Increased size of the color box */
    height: 25px; /* Increased size of the color box */
    display: inline-block;
    margin-right: 10px; /* Increased space between box and text */
}

    .blue { background: #3FA9F5; }
    .dark-blue { background: #174C8F; }
    .gray { background: #2A3D55; }
    .light-blue { background: #7AC0E4; }
            /* Floating Icons */
        .floating-icons {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
        }

        .floating-icons img {
            position: absolute;
            width: 80px; /* Increased icon size */
            animation: float 4s infinite ease-in-out;
        }

        .floating-icons img:nth-child(1) { top: 20%; left: 10%; animation-delay: 0s; }
        .floating-icons img:nth-child(2) { top: 50%; left: 80%; animation-delay: 1s; }
        .floating-icons img:nth-child(3) { top: 70%; left: 20%; animation-delay: 2s; }
        .floating-icons img:nth-child(4) { top: 30%; left: 90%; animation-delay: 3s; }

        /* Floating Animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
/*next step*/
.container-1  {
            max-width: 900px;
            margin: auto;
        }
        .title {
            font-size: 56px;
            font-weight: bold;
        }
        .highlight {
            font-size: 56px;
            font-weight: bold;
            background: linear-gradient(125deg, rgba(18, 170, 255, 1),rgba(255, 255, 255, 1), rgba(18, 170, 255, 1)) ;
            -webkit-background-clip: text;
            color: transparent;
        }
        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .row {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .card {
            background-color: rgba(18, 170, 255, 0.1);
            padding: 20px;
            border-radius: 20px;
            width: 250px;
            height: 200px;
            text-align: left;
        }
        .card h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .cta {
            font-weight: bold;
            margin-top: 10px;
            color: #00AFFF;
        }
        .button {
    background-color: rgba(18, 170, 255, 0.15);
    color: white;
    border-radius: 50px; /* Keeping this for the rounded corners */
    border: 1px solid rgba(18, 170, 255, 1); /* Add border color and thickness */
    width: 250px;
    height: 10px;
    display: inline-block;
    padding: 20px 55px;
    color: rgb(255, 255, 255);
    margin-top: 50px;

    text-decoration: none;
    font-weight: bold;
}
/* Header */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(255, 255, 255, 0.05);
    padding: 40px;
    border-radius: 0;
    width: 100%;
    height: 500px;
    box-sizing: border-box;
}

.header h1 {
    font-size: 56px;
    font-weight: bold;
    background: linear-gradient(125deg, rgba(255, 255, 255, 1), rgba(0, 130, 203, 1), rgba(255, 255, 255, 1));
    -webkit-background-clip: text;
    color: transparent;
}

.header p {
    font-size: 15px;
    color: rgba(255, 255, 255, 0.75);
    text-align: left;
}

.form-container {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.input-box {
    background-color: #1E293B;
    border: 1px solid #334155;
    padding: 10px;
    width: 500px;
    height: 35px;
    border-radius: 11px;
    color: white;
}

.social-icons {
    display: flex;
    gap: 15px;
    color: rgba(255, 255, 255, 0.75);
    margin-top: 20px;
}

.social-icons i {
    font-size: 20px;
    cursor: pointer;
}

/* Footer */
.footer {
    padding: 40px 0;
    text-align: left;
}

.footer-container {
    display: flex;
    justify-content: center;
    gap: 100px;
}

.footer-column {
    text-align: left;
}

.footer-column h3 {
    font-size: 18px;
    margin-bottom: 15px;
}

.footer-column ul {
    list-style: none;
    padding: 0;
}

.footer-column ul li {
    margin: 8px 0;
}

.footer-column ul li a {
    text-decoration: none;
    color: white;
    opacity: 0.8;
    transition: 0.3s;
    line-height: 30px;
}

.footer-column ul li a:hover {
    opacity: 1;
}

.footer-line {
    width: 100%;
    height: 1px;
    background-color: rgba(255, 255, 255, 0.2);
    margin: 20px auto;
}

/* Mobile Styles Removed for Header and Footer */
@media (max-width: 768px) {
    /* Remove any overrides here for header and footer */
    .hero h1 {
        font-size: 56px;
    }

    .hero h2 {
        font-size: 28px;
    }

    .hero p {
        font-size: 16px;
        max-width: 90%;
    }

    .hero-buttons {
        flex-direction: column;
        gap: 10px;
    }

    .primary-btn, .secondary-btn {
        width: 100%;
    }

    .about-title {
        font-size: 36px;
    }

    .about-description {
        font-size: 18px;
    }

    .about-grid {
        grid-template-columns: 1fr;
    }

    .about-box {
        text-align: center;
    }

    .staking-container {
            display: flex;
            justify-content: center;
            gap: 70px;
            margin-top: 30px;
        }

        /* Card Styling */
        .card-1 {
            background-color: rgba(18, 170, 255, 0.1);
            padding: 20px;
            border-radius: 22px;
            width: 300px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .card-1 h2 {
            margin-bottom: 15px;
            text-align: left; /* Align text to the right */
        }

        .card- p {
            margin: 5px 0;
            color: #a8b2d1;
            text-align: left; /* Align text to the right */
        }

        /* Stake Button Styling */
        .stake-button {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            border: 2px solid rgba(18, 170, 255, 1);
            color: rgba(18, 170, 255, 1);
            background: none;
            border-radius: 50px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .stake-button:hover {
            background-color: #0080ff;
            color: #ffffff;
        }

    .chart-section {
    background: rgba(0, 6, 37, 0.76);
    color: white;
    padding: 50px;
    border-radius: 25px;
    display: flex;
  
    justify-content: center; /* Centers content horizontally */
    align-items: left; /* Centers content vertically */
    flex-direction: column; /* Stacks elements vertically */
    text-align: center; /* Ensures text is centered */
}

.container {
    display: flex;
    justify-content: center; /* Centers content horizontally */
    align-items: center; /* Centers content vertically */
    flex-direction: column; /* Stack the content vertically */
}

.chart-section .container {
    display: flex;
    justify-content: space-between; /* Aligns content to left and chart to the right */
    align-items: center; /* Centers content vertically */
    flex-direction: row; /* Ensures horizontal alignment */
    gap: 50px; /* Adds space between the content and the chart */
    margin: 0 auto; /* Center the container horizontally */
}

.chart-section .content,
.chart-section .description {
    width: 100%; /* Ensure both content and description take up the same width */
    margin: 0; /* Remove any default margin to keep them aligned */
    padding: 0 20px; /* Optional padding for spacing */
}

.chart-section .chart-container {
    width: 40%; /* Adjust width of the chart container */
    height: 350px; /* Ensure enough height for the chart */
}

.content {
    width: 100%;
    text-align: center; /* Centers the text inside the content */
    margin-right: 100px;
}

.chart-container {
    position: relative;
    width: 500px;
    height: 400px;
    margin-top: 30px;

}


.plan-title {
    color: #3FA9F5;
    font-size: 2rem;
    font-weight: bold;
    text-align: left;
    line-height: 1;  /* Reduced line-height */
    margin-bottom: 10px; /* Reduced margin at the bottom */
}

.subtitle {
    font-size: 2rem;
    font-weight: bold;
    text-align: left;
    line-height: 1.5;  /* Reduced line-height */
    margin-bottom: 15px; /* Reduced margin at the bottom */
}

  
    .chart-container {
    position: relative;
    width: 400px;  /* Increased width */
    height: 400px; /* Increased height */
    margin-top: 30px;
}

.legend div {
    margin: 5px 0; /* Reduced space between the items */
    display: flex;
    align-items: center;
    cursor: pointer;
    font-size: 8px; /* Slightly smaller font size for the legend */
    line-height: 2.5; /* Reduced line-height for tighter spacing */
}

.description-1 p {
    font-size: 10px;
    margin: 5px 0; /* Reduced margin for paragraphs */
    margin-left: 50px;
    line-height: 1.3; /* Reduced line height for tighter spacing */
    text-align: left;
}


.color-box {
    width: 25px; /* Increased size of the color box */
    height: 25px; /* Increased size of the color box */
    display: inline-block;
    margin-right: 10px; /* Increased space between box and text */
}

    .blue { background: #3FA9F5; }
    .dark-blue { background: #174C8F; }
    .gray { background: #2A3D55; }
    .light-blue { background: #7AC0E4; }
      
/* Center content in .container-1 */
.container-1 {
    display: flex;
    flex-direction: column;
    justify-content: center;  /* Center vertically */
    align-items: center;      /* Center horizontally */
    height: 100vh;            /* Ensure full height of the viewport or parent container */
    margin-top: 300px;
}

/* Title and highlight styling */
.container-1 .title, 
.container-1 .highlight {
    font-size: 28px;
    text-align: center;       /* Ensure text is centered */
}

/* Center .cards and .row */
.cards, .row {
    display: flex;
    justify-content: center;  /* Center horizontally */
    align-items: center;      /* Center vertically */
    flex-direction: column;   /* Stacks elements vertically */
}

/* Card styling */
.card {
    width: 200px;
    height: auto;
    margin: 10px;             /* Adds some space between cards */
}

.card {
    width: 200px;
    height: auto;
}

    /* Make sure header is not stacked on mobile */
    .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(255, 255, 255, 0.05);
    margin-top: 300px;
    padding: 40px;
    border-radius: 0;
    width: 100%;
    height: 500px;
    box-sizing: border-box;
}

.header h1 {
    font-size: 25px;
    font-weight: bold;
    background: linear-gradient(125deg, rgba(255, 255, 255, 1), rgba(0, 130, 203, 1), rgba(255, 255, 255, 1));
    -webkit-background-clip: text;
    text-align: left;
    color: transparent;
}

.header p {
    font-size: 5px;
    color: rgba(255, 255, 255, 0.75);
    text-align: left;
}

.form-container {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.input-box {
    background-color: #1E293B;
    border: 1px solid #334155;
    padding: 10px;
    width: 100px;
    height: 15px;
    border-radius: 11px;
    color: white;
}

.social-icons {
    display: flex;
    gap: 15px;
    color: rgba(255, 255, 255, 0.75);
    margin-top: 20px;
}

.social-icons i {
    font-size: 20px;
    cursor: pointer;
}
    .footer-container {
    display: flex; /* Ensure flexbox layout */
    flex-direction: row; /* Ensure footer columns are in a row */
    flex-wrap: nowrap; /* Prevent wrapping of columns */
    gap: 2px;
    justify-content: space-between; /* Distribute columns evenly */
    font-size: 10px;
    padding: 0 20px; /* Add padding to prevent overflow */
}

.footer-column {
    flex: 1 1 100%; /* Allow columns to take full width on small screens */
    max-width: 48%; /* Limit width to 48% to fit two columns */
    text-align: left;
}

.footer-line {
    margin: 20px 0; /* Adjust margin for mobile */
}


}



        </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="{{ url('assets/img/logo.png')}}" alt="ArbVault Logo">
        </div>
      
        <!-- Navigation Links -->
        <ul class="nav-links" id="navLinks">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Plans</a></li>
            <li><a href="#">Roadmap</a></li>
            <li><a href="#">Support</a></li>
        </ul>

          <!-- Hamburger Menu Icon -->
          <div class="hamburger" onclick="toggleNav()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <button class="wallet-btn" id="connectWallet">Connect Wallet</button>
        <p id="walletAddress"></p>
    </nav>
    <script>
        document.getElementById('connectWallet').addEventListener('click', async () => {
    if (typeof window.ethereum !== 'undefined') {
        try {
            // Request account access
            const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
            const walletAddress = accounts[0];
            document.getElementById('walletAddress').innerText = `Connected: ${walletAddress}`;

            // Send the wallet address to your Laravel back-end
            await fetch('https://mainnet.infura.io/v3/798bda0155524d4994b92263ac1a48c4', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ wallet_address: walletAddress })
            });
        } catch (error) {
            console.error('User denied account access or error occurred:', error);
        }
    } else {
        alert('Please install MetaMask or another Ethereum-compatible wallet.');
    }
});
    </script>
    <section class="hero fade-in">
    
        <div class="floating-icons">
            <img src="{{ url('assets/img/yellow-icon.png')}}" alt="Icon">
            <img src="{{ url('assets/img/red-icon.png')}}" alt="Icon">
            <img src="{{ url('assets/img/green-icon.png')}}" alt="Icon">
            <img src="{{ url('assets/img/purple-icon.png')}}" alt="Icon">
        </div>

        <h1>Arb<span>Vault</span></h1>
        <h2>Your Gateway to Arbitrum <br>Staking Rewards</h2>
        <p>Stake with Confidence at ArbVault – Flexible Staking Plans, and a Platform Designed to Maximize Returns While Ensuring Your Capital Remains Safe.</p>
        <div class="hero-buttons">
            <button class="primary-btn"  onclick="window.location.href='{{ route('login') }}'">Get Started</button>
            <button class="secondary-btn">Learn More</button>
        </div>
    </section>

   
    <section class="about-section fade-in">
        <h1 class="about-title">About</h1>
        <p class="about-description">ArbVault is a cutting-edge staking platform on the Arbitrum network, offering secure and rewarding opportunities to grow your crypto assets with daily returns, a robust referral system, and a vision for long-term sustainability.</p>
        
        <div class="about-grid">
            <div class="about-box">
                <h3>Overview of ArbVault's Staking Model</h3>
                <p>The ArbVault staking model delivers consistent daily rewards, flexible withdrawal options, and a capital-back guarantee, ensuring a seamless and rewarding staking experience.</p>
            </div>
            <div class="about-box">
                <h3>Security, Transparency, and Benefits</h3>
                <p>ArbVault prioritizes security with advanced measures, operates with complete transparency, and offers exceptional benefits like competitive returns, referral bonuses, and rank rewards.</p>
            </div>
            <div class="about-box">
                <h3>Innovative Tokenomics</h3>
                <p>ArbVault incorporates a unique tokenomics structure, allocating funds strategically to liquidity, emergency reserves, and community incentives, ensuring long-term sustainability and growth.</p>
            </div>
            <div class="about-box">
                <h3>Empowering Community Engagement</h3>
                <p>With features like top promoter pools, team rebates, and rank rewards, ArbVault fosters active community participation, creating opportunities for users to maximize their earnings.</p>
            </div>
        </div>
    </section>
    
  

<!-- Staking Plans Heading -->
<div class="staking-heading">Staking Plans</div>

<!-- Staking Cards -->
<div class="staking-container">
   <div class="card-1 fade-in slide-in-left">
        <h2>Plan 1</h2>
        <p>1% Daily for 100 Days</p>
        <p>Min 5 ARB - Max 1000 ARB</p>
        <p>Capital Back Guarantee</p>
        <button class="stake-button">Stake Now</button>
    </div>

    <div class="card-1 fade-in slide-in-left">
        <h2>Plan 2</h2>
        <p>1.5% Daily for 100 Days</p>
        <p>Min 1100 ARB - Max 200,000 ARB</p>
        <p>Capital Back Guarantee</p>
        <button class="stake-button">Stake Now</button>
    </div>
</div>
<br>
</style>
</head>
<section class="chart-section">
    <div class="container">
        <!-- Content on the left side -->
        <div class="content">
            <h1 class="plan-title">Deposit</h1>
            <h2 class="subtitle">Allocations</h2>
            <div class="legend">
                <div data-index="0"><span class="color-box blue"></span> Reserve Pool - 10%</div>
                <div data-index="1"><span class="color-box dark-blue"></span> Top Promoters Pool - 3%</div>
                <div data-index="2"><span class="color-box gray"></span> Emergency Pool - 7%</div>
                <div data-index="3"><span class="color-box light-blue"></span> Active Staking Capital - 80%</div>
            </div>
           
           
        </div>

        <!-- Chart on the right side -->
        <div class="chart-container">
            <canvas id="allocationChart"></canvas>
            <div id="tooltip" class="tooltip"></div>
        </div>
        
    </div>
    <div class="description-1">
        <p><b>Reserve Pool (10%):</b> Dedicated to liquidity for the launch of ArbVault Token (AVT).</p>
        <p><b>Top Promoters Pool (3%):</b> Rewarded weekly to the top 50 promoters.</p>
        <p><b>Emergency Pool (7%):</b> Reserved for unforeseen circumstances to ensure platform stability.</p>
        <p><b>Active Staking Capital (80%):</b> Directly used for generating staking rewards, forming the core of the user's investment.</p>
    </div>
</section>

<div class="container-1">
    <h1 class="title">Unlock Unlimited Earning Potential with the <span class="highlight">Unilevel Plan</span></h1>
    <div class="cards">
        <div class="row">
          <div class="card fade-in slide-in-left">
                <h3>Level 1</h3>
                <p><strong>Commission Percentage:</strong> 10% on referred users</p>
                <p><strong>Requirements:</strong> None</p>
                <p class="cta">Start earning by inviting your first referral.</p>
            </div>
          <div class="card fade-in slide-in-left">
                <h3>Level 2</h3>
                <p><strong>Commission Percentage:</strong> 1%</p>
                <p><strong>Requirements:</strong> 2 active referrals, $500 referral volume</p>
                <p class="cta">Invite 2 active users with a $500 stake to unlock Level 2.</p>
            </div>
          <div class="card fade-in slide-in-left">
                <h3>Level 3</h3>
                <p><strong>Commission Percentage:</strong> 3%</p>
                <p><strong>Requirements:</strong> $2,000 team volume</p>
                <p class="cta">Build your team to $2,000 in volume to unlock Level 3.</p>
            </div>
        </div>
        <div class="row">
           <div class="card fade-in slide-in-left">                <h3>Level 4</h3>
                <p><strong>Commission Percentage:</strong> 4%</p>
                <p><strong>Requirements:</strong> $10,000 team volume</p>
                <p class="cta">Grow your team’s volume to $10,000 to unlock Level 4.</p>
            </div>
           <div class="card fade-in slide-in-left">                <h3>Level 5</h3>
                <p><strong>Commission Percentage:</strong> 2%</p>
                <p><strong>Requirements:</strong> $10,000 team volume</p>
                <p class="cta">Maintain $10,000 team volume to maximize your earnings.</p>
            </div>
        </div>
    </div>
    <a href="#" class="button">How it Works</a>
</div>
<br><br>
<div class="header">
    <div>
        <h1>Get into the ArbVault Action</h1>
        <p>Provide easy access to customer support through chatbots or live chat features.</p>
        <div class="social-icons">
            <i class="fab fa-facebook-f"></i> <!-- Facebook Official Logo -->
            <img src="{{ url('assets/img/twitter.png')}}" alt="X Logo" style="width: 20px; height: 20px;">
            <i class="fas fa-paper-plane"></i> <!-- Send Official Icon -->
        </div>
    </div>
    <div class="form-container">
        <label for="name" style="text-align: left; color: rgba(255, 255, 255, 1);">Name</label>
        <input type="text" id="name" placeholder="Enter Name" class="input-box">
        <label for="email"style="text-align: left; color: rgba(255, 255, 255, 1);">Email Address</label>
        <input type="email" id="email" placeholder="Email Address" class="input-box">
    </div>
</div>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-column">
            <h3>Quick Link</h3>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Feature</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>Help</h3>
            <ul>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Contract</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>Others</h3>
            <ul>
                <li><a href="#">Start Trading</a></li>
                <li><a href="#">Earn Free Crypto</a></li>
                <li><a href="#">Crypto Wallet</a></li>
                <li><a href="#">Payment Option</a></li>
            </ul>
        </div>
    </div>
    <script>
        function toggleNav() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.toggle('active');
        }
    </script>
    
    <div class="footer-line"></div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

     <style>
     
    </style>
        <script src="{{ url('assets/front-script.js')}}"></script>
</section>
</html>

