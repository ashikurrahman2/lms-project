{{-- <footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
        <div class="row">
            <div class="col my-1">
                    <p>&copy; {{ date('Y') }} <a href="{{ route('index') }}">{{ $seo->meta_title }} Limited</a>, All Right Reserved.</p>
            </div>
            <div class="col-auto my-1">
                <p>Designed & Developed By <a href="https://www.tradingtechlimited.com/">Trading Tech IT</a></p>
            </div>
        </div>
    </div>
</footer> --}}


    <!-- Footer Start -->
    <div class="wrapper">
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start">
                                {{-- <script>
                                    document.write(new Date().getFullYear())
                                </script> --}}
                               {{ date('Y') }} © LearnStack - By <span class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Ashikur Rahman</span>
                            </div>
                            <div class="col-md-6">
                                <div class="d-none d-md-flex justify-content-end gap-3">
                                    <a href="javascript: void(0);" class="link-reset">About</a>
                                    <a href="javascript: void(0);" class="link-reset">Support</a>
                                    <a href="javascript: void(0);" class="link-reset">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->
                  <div class="offcanvas-footer border-top p-3 text-center">
                <div class="row justify-content-end">
                    <div class="col-6">
                        <a href="#" class="btn btn-success fw-semibold py-2 w-100" target="_blank"><i class="ti ti-basket me-2 fs-md"></i> Buy Now</a>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-danger fw-semibold py-2 w-100" id="reset-layout"><i class="ti ti-refresh me-2 fs-md"></i> Reset</button>
                    </div>
                </div>
            </div>
    </div>