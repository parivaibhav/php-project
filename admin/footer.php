

<footer id="footer" class="footer">

    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-geo-alt icon"></i>
                <div class="address">
                    <h4>Address</h4>
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p></p>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-telephone icon"></i>
                <div>
                    <h4>Contact</h4>
                    <p>
                        <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
                        <strong>Email:</strong> <span>info@example.com</span><br>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-clock icon"></i>
                <div>
                    <h4>Opening Hours</h4>
                    <p>
                        <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
                        <strong>Sunday</strong>: <span>Closed</span>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4>Follow Us</h4>
                <div class="social-links d-flex">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Yummy</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
            Designed by <a href="https://github.com/parivaibhav" class="">Pari Vaibhav</a>
        </div>
    </div>
    <div class="dark-background d-flex align-items-center justify-content-center"></div>
</footer>

<script>
    // Toggle between light and dark mode
    const toggleMode = document.createElement('div');
    toggleMode.style.position = 'fixed';
    toggleMode.style.bottom = '20px';
    toggleMode.style.right = '20px';
    toggleMode.style.cursor = 'pointer';
    toggleMode.style.zIndex = '1000';
    toggleMode.innerHTML = '<i class="bi bi-moon  bg-white text-black" id="mode-icon" style="font-size: 24px;padding:8px 10px; border-radius:50%;"></i>';
    document.body.appendChild(toggleMode);

    const modeIcon = document.getElementById('mode-icon');
    let isDarkMode = true;

    toggleMode.addEventListener('click', () => {
        if (isDarkMode) {
            document.body.classList.remove('dark-background');
            document.body.classList.add('light-background');
            document.getElementById('footer').classList.remove('dark-background');
            document.getElementById('footer').classList.add('light-background');
            modeIcon.classList.remove('bi-moon');
            modeIcon.classList.add('bi-sun');
        } else {
            document.body.classList.remove('light-background');
            document.body.classList.add('dark-background');
            document.getElementById('footer').classList.remove('light-background');
            document.getElementById('footer').classList.add('dark-background');
            modeIcon.classList.remove('bi-sun');
            modeIcon.classList.add('bi-moon');
        }
        isDarkMode = !isDarkMode;
    });

    // Initial mode setup
    document.body.classList.add('dark-background');
</script>
