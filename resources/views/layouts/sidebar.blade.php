<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    {{-- Custom styles --}}
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    @stack('css')
</head>

<body>
    {{-- sidebar --}}
    <div class="custom">
        <div class="overlay"></div>
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <span class="menu-text">NextNote</span> <!-- Plain text -->
                </div>
                <button class="toggle-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <a href="/dashboard" class="menu-item">
                <i class="fas fa-chart-simple"></i>
                <span class="menu-text">Dashboard</span> <!-- Plain text -->
            </a>
            <a href="/all-tasks" class="menu-item">
                <i class="fas fa-list-check"></i>
                <span class="menu-text">All Tasks</span> <!-- Plain text -->
            </a>
        </div>

        <div class="main">
            @yield('content')
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>

    {{-- sidebar script --}}
    <script>
        const toggleBtn = document.querySelector(".toggle-btn");
        const mobileToggle = document.querySelector(".mobile-toggle");
        const sidebar = document.querySelector(".sidebar");
        const container = document.querySelector(".custom");
        const overlay = document.querySelector(".overlay");

        toggleBtn.addEventListener("click", () => {
            container.classList.toggle("collapsed");
        });

        mobileToggle.addEventListener("click", () => {
            sidebar.classList.add("active");
            overlay.style.display = "block";
        });

        overlay.addEventListener("click", () => {
            sidebar.classList.remove("active");
            overlay.style.display = "none";
        });

        const menuItems = document.querySelectorAll(".menu-item");
        menuItems.forEach((item) => {
            item.addEventListener("click", () => {
                menuItems.forEach((i) => i.classList.remove("active"));
                item.classList.add("active");

                if (window.innerWidth < 1024) {
                    sidebar.classList.remove("active");
                    overlay.style.display = "none";
                }
            });
        });

        window.addEventListener("resize", () => {
            if (window.innerWidth >= 1024) {
                overlay.style.display = "none";
                sidebar.classList.remove("active");
            }
        });

        function toggleDropdown() {
            const dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
        }

        window.onclick = function(event) {
            if (!event.target.matches(".profile-pic")) {
                const dropdowns = document.getElementsByClassName("dropdown-menu");
                for (let i = 0; i < dropdowns.length; i++) {
                    const openDropdown = dropdowns[i];
                    if (openDropdown.style.display === "block") {
                        openDropdown.style.display = "none";
                    }
                }
            }
        };
    </script>

    <script>
        window.onload = function() {
            // Menampilkan notifikasi jika ada session success
            const successAlert = document.querySelector('.alert');

            if (successAlert) {
                successAlert.classList.add('show');

                // Menghilangkan notifikasi setelah 5 detik
                setTimeout(() => {
                    successAlert.classList.remove('show');
                }, 5000); // Ganti 5000 jika ingin menyesuaikan waktu tampilan
            }
        };
    </script>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @stack('js')

</body>

</html>
