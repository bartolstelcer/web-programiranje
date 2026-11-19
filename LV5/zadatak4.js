$(function () {
  $("#zelena").on("click", function () {
    $("ul").first().addClass("zelena");
  });

  $(".slike img")
    .on("mouseenter", function () {
      $(this).addClass("crni-obrub");
    })
    .on("mouseleave", function () {
      $(this).removeClass("crni-obrub");
    })
    .on("click", function () {
      $(this).hide();
    });

  let slikeSkrivene = false;

  $("#abrakadabra").on("click", function () {
    const slike = $(".slike img");
    slike.stop(true, true);

    if (!slikeSkrivene) {
      slike.eq(0).fadeOut("fast");
      slike.eq(1).fadeOut("slow");
      slike.eq(2).fadeOut(5000);
      slikeSkrivene = true;
    } else {
      slike.show();
      slikeSkrivene = false;
    }
  });
});
