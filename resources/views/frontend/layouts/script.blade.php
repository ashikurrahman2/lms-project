  <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>

    <!-- ===================== Galarry modal JS ===================== -->
<script>
    (function () {
        const stage = document.getElementById('galleryStage');
        const cards = stage.querySelectorAll('.gallery-card');
        const N = cards.length;
        let current = 0; // index 0 থেকে শুরু, প্রথম card center-এ

        // pos=0 → center, pos=1 → right, pos=2 → far-right, pos=3 → left
        const configs = [
            { tx: -100, ty: -150, tz: 80,  scale: 1.00, opacity: 1.00, rotY:   0, zIndex: 3 }, // center
            { tx:  110, ty: -150, tz: 40,  scale: 0.78, opacity: 0.65, rotY:  18, zIndex: 1 }, // right
            { tx:  330, ty: -150, tz: 0,   scale: 0.60, opacity: 0.30, rotY:  30, zIndex: 0 }, // far right
            { tx: -290, ty: -150, tz: 40,  scale: 0.78, opacity: 0.65, rotY: -18, zIndex: 1 }, // left
        ];

        function render() {
            cards.forEach(function (card, i) {
                const pos = ((i - current) % N + N) % N;
                const cfg = configs[pos] !== undefined ? configs[pos] : configs[2];
                card.style.transform =
                    'translate(' + cfg.tx + 'px, ' + cfg.ty + 'px) ' +
                    'translateZ(' + cfg.tz + 'px) ' +
                    'scale(' + cfg.scale + ') ' +
                    'rotateY(' + cfg.rotY + 'deg)';
                card.style.opacity = cfg.opacity;
                card.style.zIndex  = cfg.zIndex;
            });
        }

        // Card click — center-এ থাকলে modal খোলো, না থাকলে center-এ আনো
        cards.forEach(function (card, i) {
            card.addEventListener('click', function () {
                if (i === current) {
                    var img  = card.querySelector('.card-img-wrap img');
                    var name = card.querySelector('.card-name').textContent;
                    var role = card.querySelector('.card-role').textContent;
                    document.getElementById('modalImg').src = img.src;
                    document.getElementById('modalImg').alt = img.alt;
                    document.getElementById('modalName').textContent = name;
                    document.getElementById('modalRole').textContent = role;
                    document.getElementById('teacherModal').classList.add('active');
                    document.body.style.overflow = 'hidden';
                } else {
                    current = i;
                    render();
                }
            });
        });

        document.getElementById('galleryPrev').addEventListener('click', function () {
            current = (current - 1 + N) % N;
            render();
        });

        document.getElementById('galleryNext').addEventListener('click', function () {
            current = (current + 1) % N;
            render();
        });

        render();

        // Modal close
        function closeModal() {
            document.getElementById('teacherModal').classList.remove('active');
            document.body.style.overflow = '';
        }

        document.getElementById('modalClose').addEventListener('click', closeModal);

        document.getElementById('teacherModal').addEventListener('click', function (e) {
            if (e.target === this) closeModal();
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeModal();
        });
    })();
</script>