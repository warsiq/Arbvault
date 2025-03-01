<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArbVault-Login</title>
    <link rel="stylesheet" href="{{ url('assets/styles.css')}}">
    <link href="{{ url('assets/img/favicon.png')}}" rel="icon">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
    <style>
 /* Global styles */
/* Global styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: url('assets/img/hero_cleanup.png') no-repeat center center/cover;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Full-screen height */
}

/* Auth container */
.auth-container {
    background-color: rgba(255, 255, 255, 0.3); /* Transparent background */
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3); /* Darker shadow for better contrast */
    max-width: 400px;
    width: 100%;
    text-align: center;
    margin: 0 auto; /* Ensure the form is centered horizontally */
}

/* Heading */
.auth-container h2 {
    font-size: 28px;
    color: white; /* White text for contrast */
    margin-bottom: 20px;
}

/* Form styling */
.form-group {
    margin-bottom: 15px;
    text-align: left;
}

.form-group label {
    font-size: 14px;
    color: #fff; /* Light text color */
    margin-bottom: 5px;
    display: block;
}

.form-group input {
    width: 100%;
    padding: 12px;
    font-size: 16px;
    border: 1px solid #fff; /* Light borders for input fields */
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.6); /* Slight background color for input fields */
    color: #333; /* Dark text inside the input fields for readability */
    transition: border-color 0.3s;
}

.form-group input:focus {
    border-color: #007bff;
    outline: none;
}

/* Button styling */
button.primary-btn {
    width: 100%;
    padding: 12px;
    font-size: 16px;
    color: white;
    background-color: #2563eb;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 15px;
}

button.primary-btn:hover {
    background-color: #0056b3;
}

/* Link to sign up */
.auth-container p {
    margin-top: 20px;
    font-size: 14px;
    color: #fff; /* White color for text */
}

.auth-container a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.auth-container a:hover {
    text-decoration: underline;
}

/* Responsive design */
@media (max-width: 500px) {
    .auth-container {
        padding: 20px;
    }

    .auth-container h2 {
        font-size: 24px;
    }
}

</style>

<body>

<div class="auth-container">
        <h2>Sign Up</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>
            <button type="submit" class="primary-btn">Sign Up</button>
        </form>
        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
</body>
</html>