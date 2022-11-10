$(document).ready(function () {
  $("#carrossel-filmes").slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $("#carrossel-documentarios").slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
  });

  $("#carrossel-series").slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
  });

  // $("#videos-gallery").slick({
  //   infinite: true,
  //   slidesToShow: 4,
  //   slidesToScroll: 1,
  //   dots: true,
  //   infinite: true,
  // });

  $(".js-image").each(function () {
    var dataImage = $(this).attr("data-bg");
    $(this).css(
      "background-image",
      "linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)), url(" +
        dataImage +
        ")"
    );
  });
});
