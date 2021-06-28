// (function getOnline() {
//   fetch("https://api.vimeworld.ru/online?token=тут мой токен был")
//     .then((data) => {
//       return data.json();
//     })
//     .then((data) => {
//       console.log(data["total"]);
//       document.querySelector(".monitor-mg").innerHTML = data["total"];
//     });

//   setTimeout(getOnline, 11000);
// })();

function maxOnlineMG(arg) {
  let online = arg;
  let max;
  if (online % 1000 == 0) {
    max = online;
  } else {
    max = parseInt(online / 1000) * 1000 + 1000;
  }
  document.querySelector('.max-online-mg').innerHTML = max;
  return max;

}

(function getOnline() {
  fetch("https://api.vimeworld.ru/online?token=DhBr2H8vfauclCeVuHu2PtBYkTwSotS")
    .then((data) => {
      return data.json();
    })
    .then((data) => {
      let totalOnline = document.querySelector(".monitor-mg").innerHTML = data["total"];
      let maxOnline = maxOnlineMG(totalOnline)
      console.log(totalOnline);
      console.log(maxOnline);
      document.querySelector('.progress-mg').style.width = Number(totalOnline / maxOnline * 100) + '%'
    });
  setTimeout(getOnline, 11000);
})();

// function getOnline() {
//   fetch("http://mc.vimeworld.ru/mon/min.json")
//     .then((data) => data)
//     .then((data) => {
//       console.log(data["total"]);
//       document.querySelector(".monitor-mg").innerHTML = data["total"];
//     });

//   setTimeout(getOnline, 11000);
// }
// getOnline()

// document.querySelector('.progress-mg').style.width = document.querySelector('.monitor-mg') / doc

