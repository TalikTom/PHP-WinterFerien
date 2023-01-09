<script>
    $(document).ready(function () {
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });
    });
</script>
<div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!">
        <picture>
            <source media="(max-width:650px)" srcset="/materialize/img/image1-650.jpg">
            <source media="(max-width:450px)" srcset="/materialize/img/image1-450.jpg">
            <img src="/materialize/img/image1.jpg" alt="Elder care">
        </picture>
    </a>
    <a class="carousel-item" href="#two!">
        <picture>
            <source media="(max-width:650px)" srcset="/materialize/img/image2-650.jpg">
            <source media="(max-width:450px)" srcset="/materialize/img/image2-450.jpg">
            <img src="/materialize/img/image2.jpg" alt="Elder care">
        </picture>
    </a>
    <a class="carousel-item" href="#three!">
        <picture>
            <source media="(max-width:650px)" srcset="/materialize/img/image3-650.jpg">
            <source media="(max-width:450px)" srcset="/materialize/img/image3-450.jpg">
            <img src="/materialize/img/image3.jpg" alt="Elder care">
        </picture>
    </a>
</div>