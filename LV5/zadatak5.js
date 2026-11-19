$(function () {

  let smjesteno = 0;

  $(".kvadrat").draggable({
    revert: "invalid"
  });

  $("#spremnik-crni").droppable({
    accept: "#crni",
    classes: { "ui-droppable-hover": "aktivan" },

    drop: function (event, ui) {

      $(this).css("background-color", "lightgreen");

      ui.draggable.draggable("disable").position({
        of: $(this),
        my: "center",
        at: "center"
      });

      smjesteno++;
      provjeriKraj();
    }
  });

  $("#spremnik-crveni").droppable({
    accept: "#crveni",
    classes: { "ui-droppable-hover": "aktivan" },

    drop: function (event, ui) {

      $(this).css("background-color", "lightgreen");

      ui.draggable.draggable("disable").position({
        of: $(this),
        my: "center",
        at: "center"
      });

      smjesteno++;
      provjeriKraj();
    }
  });

  function provjeriKraj() {
    if (smjesteno === 2) {
      $("#poruka").text("Bravo! Osvježi stranicu za početak.");
    }
  }
});