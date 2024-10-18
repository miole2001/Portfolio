<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register.css">
    <script src="./js/register.js" defer></script>
    <title>Customer Registration</title>
</head>

<body>
    <form action="register.php" method="post" class="form-wizard">
        <h1>Registration</h1>
        <div class="progress-container">
            <div class="progress"></div>
            <ol>
                <li class="current">Personal Info</li>
                <li>Contact Info</li>
                <li>Account Info</li>
            </ol>
        </div>

        <div class="steps-container">
            <div class="step">
                <h3>Personal Information</h3>

                <div class="form-control">
                    <label for="image">Profile picture</label>
                    <input type="file" id="image" name="image" required />
                </div>

                <div class="form-control">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first-name" required />
                </div>

                <div class="form-control">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last-name" required />
                </div>

                <div class="form-control">
                    <label for="date-of-birth">Date of birth</label>
                    <input type="date" id="date-of-birth" name="date-of-birth" required />
                </div>

                <div class="form-control">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" required>
                        <option value="" disabled selected>Select your gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>

            <div class="step">
                <h3>Contact Information</h3>

                <div class="form-control">
                    <label for="address">Current Address</label>
                    <input type="address" id="address" name="address" required />
                </div>

                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required />
                </div>

                <div class="form-control">
                    <label for="phone-number">Contact Number</label>
                    <input type="number" id="phone-number" name="phone-number" required />
                </div>
            </div>

            <div class="step">
                <h3>Account Information</h3>

                <div class="form-control">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required />
                </div>

                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required />
                </div>

                <div class="form-control">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required />
                </div>

                <div class="form-control">
                    <label for="gender">Account Type</label>
                    <select name="user_type" id="user_type" required>
                        <option value="" disabled selected>Select Account Type</option>
                        <option value="seller">Seller</option>
                        <option value="customer">Customer</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="controls">
            <button type="button" class="prev-btn">Prev</button>
            <button type="button" class="next-btn">Next</button>
            <button type="submit" class="submit-btn">Submit</button>
        </div>
        <div class="additional-links">
            <p>already have an account? <a href="login.php">Login</a></p>
            <a href="index.php">Back to Home</a>
        </div>
    </form>
</body>

</html>