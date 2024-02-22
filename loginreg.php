<?php
    session_start();
    if(isset($_SESSION["customerinfo_tbl"])){
        header("Location: Home.html");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginreg.css">
    <title>Laundry Shop</title>

</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form id="loginForm" onsubmit="return false;">
            <input type="text" id="loginUsername" placeholder="Username" required>
            <input type="password" id="loginPassword" placeholder="Password" required>
            <input type="submit" value="Login" onclick="login()">
        </form>
        <hr>
        <div class="dropdown">
            <button onclick="toggleDropdown()" class="dropbtn">Sign Up</button>
            <div id="signupDropdown" class="dropdown-content">
                <h2>Sign Up</h2>
                <form id="signupForm" onsubmit="return false;">
                    <input type="text" id="signupFirstName" placeholder="First Name" required>
                    <input type="text" id="signupMiddleName" placeholder="Middle Name">
                    <input type="text" id="signupLastName" placeholder="Last Name" required>
                    <input type="text" id="signupBlkLot" placeholder="Blk/Lot">
                    <input type="text" id="signupStreet" placeholder="Street">
                    <input type="text" id="signupBarangay" placeholder="Barangay">
                    <input type="text" id="signupCity" placeholder="City">
                    <input type="text" id="signupUsername" placeholder="Username">
                    <input type="text" id="signupPassword" placeholder="Password">
                    <select id="signupGender" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <input type="date" id="signupDOB" placeholder="Date of Birth" required>
                    <input type="text" id="signupContact" placeholder="Contact" required>
                    <input type="submit" value="Sign Up" onclick="signup()">
                </form>
            </div>
        </div>
    </div>

    <script>
        function login() {
            var username = document.getElementById("loginUsername").value;
            var password = document.getElementById("loginPassword").value;

            console.log("Login clicked with username: " + username + " and password: " + password);
        }

        function signup() {
            var firstName = document.getElementById("signupFirstName").value;
            var middleName = document.getElementById("signupMiddleName").value;
            var lastName = document.getElementById("signupLastName").value;
            var blkLot = document.getElementById("signupBlkLot").value;
            var street = document.getElementById("signupStreet").value;
            var barangay = document.getElementById("signupBarangay").value;
            var city = document.getElementById("signupCity").value;
            var gender = document.getElementById("signupGender").value;
            var dob = document.getElementById("signupDOB").value;
            var contact = document.getElementById("signupContact").value;

            console.log("Sign Up clicked with data: ", {
                firstName: firstName,
                middleName: middleName,
                lastName: lastName,
                blkLot: blkLot,
                street: street,
                barangay: barangay,
                city: city,
                gender: gender,
                dob: dob,
                contact: contact
            });
        }

        function toggleDropdown() {
            var dropdownContent = document.getElementById("signupDropdown");
            dropdownContent.classList.toggle("show");
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

        document.getElementById("signupForm").onclick = function(event) {
            event.stopPropagation();
        };
    </script>
</body>
</html>
