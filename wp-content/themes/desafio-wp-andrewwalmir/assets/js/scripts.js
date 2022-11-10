$(document).ready(function () {
  //   $("#videos-carrossel").slick({
  //     dots: true,
  //     infinite: false,
  //     // slidesToShow: 4,
  //     slidesToScroll: 1,
  //     autoplay: true,
  //     autoplaySpeed: 2000,
  //   });

  // window.onscroll = function () {
  //   myFunction();
  // };

  // var div = document.getElementById("left");
  // var sticky = div.offsetTop;

  // function myFunction() {
  //   if (window.pageYOffset > sticky) {
  //     div.classList.add("sticky");
  //   } else {
  //     div.classList.remove("sticky");
  //   }
  // }

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
