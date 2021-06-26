$(function () {
  var videos = $(".mainInfo__contain__video");

  videos.on("click", function () {
    var elm = $(this),
      conts = elm.contents(),
      le = conts.length,
      ifr = null;

    for (var i = 0; i < le; i++) {
      if (conts[i].nodeType == 8) ifr = conts[i].textContent;
    }

    elm.addClass("player").html(ifr);
    elm.off("click");
  });
});

let tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});
