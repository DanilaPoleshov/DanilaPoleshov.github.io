(function getOnline() {
    fetch('https://api.vimeworld.ru/online?token=DtCrnul2AQXmqVq7xprl14BerySlqLf')
      .then(data => {
        return data.json()
      })
      .then(data => {
        console.log(data['total']);
        document.querySelector('.monitor-mg').innerHTML = data['total']
      })

    setTimeout(getOnline, 11000);
  })();

document.querySelector('.progress-mg').style.width = document.querySelector('.monitor-mg') / doc