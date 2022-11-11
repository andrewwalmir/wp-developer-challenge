$(document).ready(function () {
  $(".js-image").each(function () {
    var dataImage = $(this).attr("data-bg");
    $(this).css(
      "background-image",
      "linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)), url(" +
        dataImage +
        ")"
    );
  });

  const swiperFilmes = new Swiper(".carrossel", {
    slidesPerView: 2,
    spaceBetween: 24,
    allowTouchMove: true,
    pauseOnMouseEnter: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: true,
    },
    breakpoints: {
      576: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
    },
  });
});
