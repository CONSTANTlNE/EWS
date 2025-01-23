

<footer id="bringer-footer" data-appear="fade-up" data-unload="fade-down">

    @if(!request()->routeIs('portfolio'))
    <div class="bringer-footer-widgets">
        <div class="stg-container">
            <div style="display:flex ; justify-content: center"  data-stagger-appear="fade-left" data-stagger-delay="100">
                <div style="width: max-content" class="stg-col-5 stg-tp-col-12 stg-tp-bottom-gap-l">
                    <div class="bringer-info-widget">

                        <ul class="bringer-socials-list" data-stagger-appear="fade-up" data-stagger-delay="75">
                            <li>
                                <a href="#" target="_blank" class="bringer-socials-facebook">
                                    <i></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" class="bringer-socials-instagram">
                                    <i></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" class="bringer-socials-x">
                                    <i></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" class="bringer-socials-tiktok">
                                    <i></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" class="bringer-socials-patreon">
                                    <i></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div><!-- .stg-row -->
        </div><!-- .stg-container -->
    </div>
    @endif



    <!-- Footer Copyright Line -->
    <div style="max-height: 60px" class="bringer-footer-line stg-container">
        <div class="align-center">
            Copyright &copy; 2024. All Rights Reserved.
        </div>
    </div><!-- bringer-footer-line -->
</footer>
