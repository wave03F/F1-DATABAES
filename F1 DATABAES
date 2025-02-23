<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1 Cars Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Orbitron', sans-serif;
            background: #FFCC00;
            color: black;
        }
        .header-image {
            background-image: url('https://www.f1-fansite.com/wp-content/uploads/2024/08/4-sunday-spa-francorchamps-2024.jpg');
            background-size: cover;
            background-position: center;
            height: 550px;
            border-radius: 30px;
            box-shadow: 0 8px 16px rgba(255, 0, 0, 0.5);
        }
        .navbar {
            background: rgba(255, 0, 0, 0.8);
            backdrop-filter: blur(5px);
            padding: 15px 20px;
            border-radius: 10px;
        }
        .btn-primary {
            background: #cc0000;
            border: none;
        }
        .btn-primary:hover {
            background: #990000;
            transform: scale(1.05);
        }
        .table th {
            background: #ff0000;
            color: white;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">🏎️ F1 Database</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" onclick="showHome()">🏁 Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="showCars()">🚗 Cars</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">🔧 Teams</a></li>
                    <li class="nav-item" id="registerNavItem">
                        <button class="nav-link btn btn-secondary text-white px-4" onclick="showRegisterForm()">Register</button>
                    </li>
                    <li class="nav-item" id="loginNavItem">
                        <button class="nav-link btn btn-warning text-dark px-4" onclick="showLoginForm()">Login</button>
                    </li>
                    <li class="nav-item" id="logoutNavItem" style="display: none;">
                        <button class="btn btn-danger text-light px-4" onclick="handleLogout()">Logout</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <div class="container mt-4">
        <div class="header-image mb-4"></div>

        <div id="registerForm" class="card mb-4" style="display: none;">
            <div class="card-header">Register for F1 Car Database</div>
            <div class="card-body">
                <form onsubmit="handleRegister(event)">
                    <div class="mb-3">
                        <label for="regUsername" class="form-label">Username</label>
                        <input type="text" id="regUsername" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="regPassword" class="form-label">Password</label>
                        <input type="password" id="regPassword" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>

        <div id="loginForm" class="card mb-4" style="display: none;">
            <div class="card-header">Login to F1 Car Database</div>
            <div class="card-body">
                <form onsubmit="handleLogin(event)">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>

        <!-- Cars Table -->
        <div id="f1CarsTable" class="card" style="display: none;">
            <div class="card-header">F1 Cars Database</div>
            <div class="card-body">
                <h3>List of F1 Cars</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Year</th>
                            <th>Team</th>
                            <th>Engine</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody id="carTableBody"></tbody> <!-- ต้องมี -->
                    </table>                
                        <tr><td colspan="7" class="text-center">Loading data...</td></tr>
                    </tbody>
                </table>
                <button class="btn btn-success" onclick="addNewCar()">Add New Car</button>
            </div>
        </div>
    </div>

    <script>
       function handleLogin(event) {
    event.preventDefault();
    document.getElementById("registerNavItem").style.display = "none";
    document.getElementById("loginNavItem").style.display = "none";
    document.getElementById("logoutNavItem").style.display = "block";
    document.getElementById("loginForm").style.display = "none";
    document.getElementById("f1CarsTable").style.display = "block";
    document.querySelector(".header-image").style.display = "none"; // ซ่อน Header หลัง Login
    fetchCars();
}


        function showRegisterForm() {
            document.getElementById("registerForm").style.display = "block";
            document.getElementById("loginForm").style.display = "none";
        }

        function showLoginForm() {
            document.getElementById("loginForm").style.display = "block";
            document.getElementById("registerForm").style.display = "none";
        }

        function handleRegister(event) {
            event.preventDefault();
            alert("Registered successfully! You can now login.");
            showLoginForm();
        }

        function handleLogin(event) {
            event.preventDefault();
            document.getElementById("registerNavItem").style.display = "none";
            document.getElementById("loginNavItem").style.display = "none";
            document.getElementById("logoutNavItem").style.display = "block";
            document.getElementById("loginForm").style.display = "none";
            document.getElementById("f1CarsTable").style.display = "block";
            document.querySelector(".header-image").style.display = "none"; // ซ่อน Header หลัง Login
            fetchCars();
        } 
        function showCars() {
            document.getElementById("registerForm").style.display = "none";
            document.getElementById("loginForm").style.display = "none";
            document.getElementById("f1CarsTable").style.display = "block";
            fetchCars(); // โหลดข้อมูลใหม่
            }

            window.onload = function() {
                    showHome(); // แสดงหน้า Home ก่อน
                    fetchCars(); // โหลดข้อมูลรถ
        };

        function handleLogout() {
            alert("Logged out successfully!");
            document.getElementById("registerNavItem").style.display = "block";
            document.getElementById("loginNavItem").style.display = "block";
            document.getElementById("logoutNavItem").style.display = "none";
            document.getElementById("f1CarsTable").style.display = "none";
        }

        function addNewCar() {
            let name = prompt("Enter Car Name:");
            let year = prompt("Enter Year:");
            let team = prompt("Enter Team:");
            let engine = prompt("Enter Engine:");
            let imageUrl = prompt("Enter Image URL:");

            if (!name || !year || !team || !engine || !imageUrl) {
                alert("All fields are required!");
                return;
            }
            if (!/^https?:\/\/.+\.(jpg|jpeg|png|gif)$/i.test(imageUrl)) {
                alert("Invalid image URL. Must end with .jpg, .jpeg, .png, or .gif");
                return;
            }

            let formData = new FormData();
            formData.append("name", name);
            formData.append("year", year);
            formData.append("team", team);
            formData.append("engine", engine);
            formData.append("image_url", imageUrl);

            fetch("add_car.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Car added successfully!");
                    fetchCars();
                } else {
                    alert("Error: " + data.message);
                }
            })
            .catch(error => console.error("Error:", error));
        }


        function deleteCar(id) {
            if (!confirm("Are you sure you want to delete this car?")) return;
            let formData = new FormData();
            formData.append("id", id);
            fetch("delete_car.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Car deleted successfully!");
                    fetchCars();
                } else {
                    alert("Error: " + data.message);
                }
            })
            .catch(error => console.error("Error:", error));
        }
    // ฟังก์ชันที่แสดงตารางรถเมื่อคลิกปุ่ม "Cars"
    function showCars() {
        // ซ่อนฟอร์มการสมัครและการเข้าสู่ระบบ
        document.getElementById("registerForm").style.display = "none";
        document.getElementById("loginForm").style.display = "none";
        
        // แสดงตารางของรถ F1
        document.getElementById("f1CarsTable").style.display = "block";
        
        // ดึงข้อมูลรถ
        fetchCars();
    }

    function fetchCars() {
    fetch("http://localhost/F1/get_cars.php")
        .then(response => response.json())
        .then(data => {
            let carTableBody = document.getElementById("carTableBody");

            if (!carTableBody) {
                console.error("Error: carTableBody not found in HTML");
                return;
            }

            carTableBody.innerHTML = ""; // ล้างข้อมูลเก่า

            if (data.success && data.cars.length > 0) {
                data.cars.forEach(car => {
                    let row = `<tr>
                        <td>${car.name}</td>
                        <td>${car.year}</td>
                        <td>${car.team}</td>
                        <td>${car.engine}</td>
                        <td><img src="${car.image}" width="100"></td>
                    </tr>`;
                    carTableBody.innerHTML += row;
                });
            } else {
                carTableBody.innerHTML = "<tr><td colspan='5' class='text-center'>No cars found</td></tr>";
            }
        })
        .catch(error => console.error("Error fetching cars:", error));
}

window.onload = function() {
    showHome();
    fetchCars(); 
};
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
