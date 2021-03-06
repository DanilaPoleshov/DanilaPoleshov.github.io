<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/normalize.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/light-theme.css">
  <link rel="icon" href="img/logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="styles/mediaRequests.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <title>VimeWorld</title>

</head>

<body>
  <div class="wrapper">

    <header class="header">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/header-logo.png" class='header-logo animate__fadeInLeft animate__animated wow' alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse animate__fadeInRight animate__animated wow" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <form class="d-flex">
              <img src="img/player-skin.png" class="player-skin" alt="">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">

                  <a class="nav-link player dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="player-status">гл. админ</span><br>
                    <span class="player-nick">xtrafrancyz</span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Личный кабинет</a></li>
                    <li><a class="dropdown-item" href="#">Выйти</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a href="#" class="dropdown-item">Сменить тему</a>
                    </li>
                  </ul>
                </li>

              </ul>
            </form>

          </div>
        </div>
      </nav>


      <ul class="nav justify-content-center second-navbar " data-wow-duration='1.5s'>
        <li class="nav-item animate__fadeIn animate__animated wow">
          <a class="nav-link dropdown-toggle second-navbar-link" href="#" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            О серверах
          </a>
          <ul class="dropdown-menu dropdown-servers" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">CivCraft</a></li>
            <li><a class="dropdown-item" href="#">Vime</a></li>
            <li><a class="dropdown-item" href="#">Explore</a></li>
            <li><a class="dropdown-item" href="#">Discover</a></li>
            <li><a class="dropdown-item" href="#">Empire</a></li>
            <li><a class="dropdown-item" href="#">Wurst</a></li>
            <li><a class="dropdown-item" href="#">Flair</a></li>
            <li><a class="dropdown-item" href="#">Hoden</a></li>

        </li>
      </ul>
      </li>
      <li class="nav-item animate__fadeIn animate__animated wow">
        <a class="nav-link second-navbar-link" href="#">Новости</a>
      </li>
      <li class="nav-item animate__fadeIn animate__animated wow">
        <a class="nav-link second-navbar-link" href="#">Наш Discord</a>
      </li>
      <li class="nav-item animate__fadeIn animate__animated wow">
        <a class="nav-link second-navbar-link" href="#">Форум</a>
      </li>
      <li class="nav-item animate__fadeIn animate__animated wow">
        <a class="nav-link second-navbar-link" href="https://vk.com/@vimeworld-account-security" target="_blank">Безопасность</a>
      </li>
      </ul>



      <!-- <div class="header-main">
        <div class="header-main-contain">
          <div class="header-main-info">
            <img src="img/logo.png" alt="">
            <span class="header-main-info-vime">VimeWorld</span>
          </div>
          <div class="header-main-btn">
            <a class="header-btn" href="#">
                <span class="header-btn-play">Начать играть</span>
            </a>
        </div>
        </div>
      </div> -->



      <!-- <div class="vimeworld">
        <img class="vimeworld-mainImg" alt="">
            <div class="vimeworld-main-info">
                <div class="vimeworld-main-contain">
                  <div class="vimeworld-main-info-logo">
                    <img src="img/logo.png" class="vimeworld-logo" alt=""> 
                  </div>
                  <div class="vimeworld-main-info-text">
                      VimeWorld
                  </div>
                </div>
                <div class="vimeworld-main-btn">
                  <a class="vimeworld-btn" href="">
                      <span class="vimeworld-btn-play">Начать играть</span>
                  </a>
              </div>
            </div>

            
        

    </div>  -->

      <div class="vimeworld">
        <div class="vimeworld__blur">
          <div class="vimeworld__main-info animate__fadeIn animate__animated wow" data-wow-duration='1.5s'>
            <div class="vimeworld__main-info__logo">

            </div>
            <div class="vimeworld__main-info__text">
              VimeWorld
            </div>

          </div>

          <div class="vimeworld__main-btn animate__fadeIn animate__animated wow">
            <a class="vimeworld__btn" href="#">
              <span class="vimeworld__btn__play">Начать играть</span>
            </a>
          </div>
        </div>

      </div>
    </header>

    <section class="mainInfo">
      <div class="container">
        <div class="mainInfo__heading wow animate__animated animate__fadeInUp">
          <h1 class="mainInfo__heading__txt">Добро пожаловать на VimeWorld!</h1>
        </div>

        <div class="mainInfo__info animate__animated animate__fadeInLeft wow">
          Здесь собраны лучшие сервера Minecraft с модами и без, на которых может играть каждый. Наша команда следит за
          порядком на серверах и каждый день добавляет новые возможности.
          На наших MiniGames установлена уникальная система персонализации игрока: можно установить себе шляпу, крылья,
          либо же питомца.
        </div>

        <div class="mainInfo__contain">
          <div class="mainInfo__contain__txt animate__animated animate__fadeInLeft wow">
            Тут будет какая-то инфа про ролик справа.
            На видео Вы можете посмотреть историю создания нашего сервера,
            как он развивался и стал лучшим СНГ проектом.

          </div>
          <div class="mainInfo__contain__video animate__animated animate__fadeInRight wow">
            <img src="img/preview.png" class="mainInfo__contain__video__player" alt="">
            <!-- <iframe class="mainInfo__contain__video__player" src="https://www.youtube.com/embed/LaGBFwis594" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
          </div>
        </div>
      </div>

    </section>

    <section class="mg">
      <div class="container">
        <div class="mainInfo__heading animate__animated animate__fadeIn wow" data-wow-duration='1.5s'>
          <h1 class="mainInfo__heading__txt mg-heading">Главный сервер MiniGames</h1>
          <div class="mg__wrap">
            <div class="mg__wrapIcons animate__animated animate__fadeInLeft wow">

              <div class="mg__icon f-row" data-bs-toggle="modal" data-bs-target="#ann">
                <img src="img/ann.png" alt="" class="mg__icon__img hello" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="Annihilation">
              </div>
              <div class="mg__icon f-row" data-bs-toggle="modal" data-bs-target="#bw">
                <img src="img/bw.png" alt="" class="mg__icon__img" data-bs-toggle="tooltip" data-bs-placement="top"
                  title="BedWars">
              </div>
              <div class="mg__icon f-row" data-bs-toggle="modal" data-bs-target="#sw">
                <img src="img/sw.png" alt="" class="mg__icon__img" data-bs-toggle="tooltip" data-bs-placement="top"
                  title="SkyWars">
              </div>
              <div class="mg__icon f-row">
                <img src="img/duels.png" alt="" class="mg__icon__img" data-bs-toggle="tooltip" data-bs-placement="top"
                  title="Duels">
              </div>
              <div class="mg__icon f-row">
                <img src="img/hg.png" alt="" class="mg__icon__img" data-bs-toggle="tooltip" data-bs-placement="top"
                  title="HungerGames">
              </div>
              <div class="mg__icon s-row mg__icon-2Child" data-bs-toggle="modal" data-bs-target="#mw">
                <img src="img/mw.png" alt="" class="mg__icon__img" data-bs-toggle="tooltip" data-bs-placement="top"
                  title="MobWars">
              </div>
              <div class="mg__icon s-row">
                <img src="img/bb.png" alt="" class="mg__icon__img" data-bs-toggle="tooltip" data-bs-placement="top"
                  title="BuildBattle">
              </div>
              <div class="mg__icon s-row">
                <img src="img/prison.png" alt="" class="mg__icon__img" data-bs-toggle="tooltip" data-bs-placement="top"
                  title="Prison">
              </div>
              <div class="mg__icon s-row">
                <img src="img/arc.png" alt="" class="mg__icon__img" data-bs-toggle="tooltip" data-bs-placement="top"
                  title="Аркады">
              </div>
              <div class="mg__icon s-row" data-bs-toggle="modal" data-bs-target="#kpvp">
                <img src="img/kpvp.png" alt="" class="mg__icon__img" data-bs-toggle="tooltip" data-bs-placement="top"
                  title="KitPvP">
              </div>
              <div class="mg__icon t-row mg__icon-2Child" data-bs-toggle="modal" data-bs-target="#bp">
                <img src="img/bp.png" alt="" class="mg__icon__img" data-bs-toggle="tooltip" data-bs-placement="top"
                  title="BlockParty">
              </div>
              <div class="mg__icon t-row">
                <img src="img/cp.png" alt="" class="mg__icon__img" data-bs-toggle="tooltip" data-bs-placement="top"
                  title="ClashPoint">
              </div>
              <div class="mg__icon t-row">
                <img src="img/gg.png" alt="" class="mg__icon__img" data-bs-toggle="tooltip" data-bs-placement="top"
                  title="GunGame">
              </div>
              <div class="mg__icon t-row" data-bs-toggle="modal" data-bs-target="#dr">
                <img src="img/dr.png" alt="" class="mg__icon__img" data-bs-toggle="tooltip" data-bs-placement="top"
                  title="DeathRun">
              </div>
            </div>
            <div class="mg-monitor animate__animated animate__fadeInRight wow">

            <?php
            function maxOnlineMG($arg) {
              $online = $arg;
              $max;
              if ($online % 1000 == 0) {
                $max = $online;
              } else {
                $result = (int)($online / 1000);
                $max = $result * 1000 + 1000;
              }
              return $max;
            };
            $request = curl_init("http://mc.vimeworld.ru/mon/min.json");
            curl_setopt($request, CURLOPT_CONNECTTIMEOUT, 4);
            curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
            $response = json_decode(curl_exec($request), true);
            curl_close($request);
            $onlineMiniGames = $response['MiniGames']['online'] .'/'. maxOnlineMG($response['MiniGames']['online']);
            $onlineCivCraft = $response['CivCraft']['online'] .'/'. $response['CivCraft']['max'];
            $onlineVime = $response['Vime']['online'] .'/'. $response['Vime']['max'];
            $onlineExplore = $response['Explore']['online'] .'/'. $response['Explore']['max'];
            $onlineDiscover = $response['Discover']['online'] .'/'. $response['Discover']['max'];
            $onlineEmpire = $response['Empire']['online'] .'/'. $response['Empire']['max'];
            $onlineWurst = $response['Wurst']['online'] .'/'. $response['Wurst']['max'];
            $onlineFlair = $response['Flair']['online'] .'/'. $response['Flair']['max'];
            $onlineHoden = $response['Hoden']['online'] .'/'. $response['Hoden']['max'];
            $progressMG = $response['MiniGames']['online'] / maxOnlineMG($response['MiniGames']['online']) * 100 . '%';          
            $progressCiv = ($response['CivCraft']['online'] / $response['CivCraft']['max']) * 100 . '%';
            $progressVime = ($response['Vime']['online'] / $response['Vime']['max']) * 100 . '%'; 
            $progressExplore = ($response['Explore']['online'] / $response['Explore']['max']) * 100 . '%';    
            $progressDiscover = ($response['Discover']['online'] / $response['Discover']['max']) * 100 . '%'; 
            $progressEmpire = ($response['Empire']['online'] / $response['Empire']['max']) * 100 . '%';
            $progressWurst = ($response['Wurst']['online'] / $response['Wurst']['max']) * 100 . '%';
            $progressFlair = ($response['Flair']['online'] / $response['Flair']['max']) * 100 . '%';
            $progressHoden = ($response['Hoden']['online'] / $response['Hoden']['max']) * 100 . '%';?>


              <div class="container mg-monitor-container">
                <div class="mg-monitor-heading">Мониторинг</div>
                <div class="mg-monitor-heading mg-monitor-heading-small">Общий онлайн: 9999</div>
                <div class="mg-monitor-wrap  mg-monitor-wrap-first">
                  <div class="mg-monitor-info">
                    <div class="mg-monitor-info-serv">
                      <div class="mg-monitor-info-name">MiniGames</div>
                      <div class="mg-monitor-info-online"><?php echo $onlineMiniGames;?></span></div>
                    </div>
                  </div>
                  <div class="mg-monitor-progress-wrap">
                    <div class="mg-monitor-progress" style="width: <?php echo $progressMG?>;">

                    </div>
                  </div>
                </div>

                <div class="mg-monitor-wrap">
                  <div class="mg-monitor-info mg-monitor-info-first">
                    <div class="mg-monitor-info-serv">
                      <div class="mg-monitor-info-name">CivCraft</div>
                      <div class="mg-monitor-info-online"><?php echo $onlineCivCraft?></div>
                    </div>
                  </div>
                  <div class="mg-monitor-progress-wrap">
                    <div class="mg-monitor-progress" style="width: <?php echo $progressCiv?>;">

                    </div>
                  </div>
                </div>

                <div class="mg-monitor-wrap">
                  <div class="mg-monitor-info mg-monitor-info-first">
                    <div class="mg-monitor-info-serv">
                      <div class="mg-monitor-info-name">Vime</div>
                      <div class="mg-monitor-info-online"><?php echo $onlineVime?></div>
                    </div>
                  </div>
                  <div class="mg-monitor-progress-wrap">
                    <div class="mg-monitor-progress" style="width: <?php echo $progressVime?>;">

                    </div>
                  </div>
                </div>

                <div class="mg-monitor-wrap">
                  <div class="mg-monitor-info mg-monitor-info-first">
                    <div class="mg-monitor-info-serv">
                      <div class="mg-monitor-info-name">Explore</div>
                      <div class="mg-monitor-info-online"><?php echo $onlineExplore?></div>
                    </div>
                  </div>
                  <div class="mg-monitor-progress-wrap">
                    <div class="mg-monitor-progress" style="width: <?php echo $progressExplore?>;">

                    </div>
                  </div>
                </div>
                <div class="mg-monitor-wrap">
                  <div class="mg-monitor-info mg-monitor-info-first">
                    <div class="mg-monitor-info-serv">
                      <div class="mg-monitor-info-name">Discover</div>
                      <div class="mg-monitor-info-online"><?php echo $onlineDiscover?></div>
                    </div>
                  </div>
                  <div class="mg-monitor-progress-wrap">
                    <div class="mg-monitor-progress" style="width: <?php echo $progressDiscover?>;">

                    </div>
                  </div>
                </div>
                <div class="mg-monitor-wrap">
                  <div class="mg-monitor-info mg-monitor-info-first">
                    <div class="mg-monitor-info-serv">
                      <div class="mg-monitor-info-name">Empire</div>
                      <div class="mg-monitor-info-online"><?php echo $onlineEmpire?></div>
                    </div>
                  </div>
                  <div class="mg-monitor-progress-wrap">
                    <div class="mg-monitor-progress" style="width: <?php echo $progressEmpire?>;">

                    </div>
                  </div>
                </div>
                <div class="mg-monitor-wrap">
                  <div class="mg-monitor-info mg-monitor-info-first">
                    <div class="mg-monitor-info-serv">
                      <div class="mg-monitor-info-name">Wurst</div>
                      <div class="mg-monitor-info-online"><?php echo $onlineWurst?></div>
                    </div>
                  </div>
                  <div class="mg-monitor-progress-wrap">
                    <div class="mg-monitor-progress" style="width: <?php echo $progressWurst?>;">

                    </div>
                  </div>
                </div>
                <div class="mg-monitor-wrap">
                  <div class="mg-monitor-info mg-monitor-info-first">
                    <div class="mg-monitor-info-serv">
                      <div class="mg-monitor-info-name">Flair</div>
                      <div class="mg-monitor-info-online"><?php echo $onlineFlair?></div>
                    </div>
                  </div>
                  <div class="mg-monitor-progress-wrap">
                    <div class="mg-monitor-progress" style="width: <?php echo $progressFlair?>;">

                    </div>
                  </div>
                </div>
                <div class="mg-monitor-wrap">
                  <div class="mg-monitor-info mg-monitor-info-first">
                    <div class="mg-monitor-info-serv">
                      <div class="mg-monitor-info-name">Hoden</div>
                      <div class="mg-monitor-info-online"><?php echo $onlineHoden?></div>
                    </div>
                  </div>
                  <div class="mg-monitor-progress-wrap">
                    <div class="mg-monitor-progress" style="width: <?php echo $progressHoden?>;">

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="mg-task animate__animated animate__fadeInLeft wow">
          <h3 class="mg-task-header">Ежедневные задания</h3>
          <div class="mg-task-body">
            Заходи каждый день и получай по 2 задания, а если повезёт, то можно получить удвоенные коины или чего получше!
          </div>
        </div>
        </div>
    </section>

    <section class="team">
      <div class="container">
        <div class="mainInfo__heading team-heading">
          <h1 class="mainInfo__heading__txt">Команда проекта</h1>
        </div>
        <div class="team-wrap">
          <div class="team-main">
            <div class="team-main-head animate__animated animate__fadeInLeft wow" >
                <img class="team-main-head-img head-xtrafrancyz" src="https://skin.vimeworld.ru/helm/3d/xtrafrancyz.png" alt="head" />
            </div>
            <div class="team-main-wrap">
              <div class="team-main-nick animate__animated animate__fadeIn wow" data-wow-duration='2.5s'>
                <span class="admin">xtrafrancyz</span>
              </div>
              <div class="team-main-place animate__animated animate__fadeInRight wow">
                <i>Директор, Технический администратор, Тыжпрограммист</i>
              </div>
              <div class="team-main-info animate__animated animate__fadeInRight wow">
                Занимается созданием сборок серверов, написанием различных плагинов и модов. Это он виновен в появлении новых багов и исправлении старых. На форум заходит очень редко, да и только за тем, чтобы отметить все сообщения прочитанными.
              </div>
            </div>
          </div>
          <div class="team-main">
            <div class="team-main-head animate__animated animate__fadeInLeft wow">
              <img class="team-main-head-img head-lucy" src="https://skin.vimeworld.ru/helm/3d/Lucy.png" alt="head" />
            </div>
            <div class="team-main-wrap">
              <div class="team-main-nick animate__animated animate__fadeIn wow" data-wow-duration="2.5s">
                <span class="admin">Lucy</span>
              </div>
              <div class="team-main-place animate__animated animate__fadeInRight wow">
                <i>Главный администратор</i>
              </div>
              <div class="team-main-info animate__animated animate__fadeInRight wow">
                Милая, добрая и отзывчивая! Поможет каждому в любой сложной ситуации, является душой проекта! Иногда за неё работает её кот.              </div>
            </div>
          </div>
          <div class="team-main">
            <div class="team-main-head animate__animated animate__fadeInLeft wow">
              <img class="team-main-head-img head-okssi" src="https://skin.vimeworld.ru/helm/3d/Okssi.png" alt="head" />
            </div>
            <div class="team-main-wrap">
              <div class="team-main-nick animate__animated animate__fadeIn wow" data-wow-duration="2.5s">
                <span class="moder">Okssi</span>
              </div>
              <div class="team-main-place animate__animated animate__fadeInRight wow">
                <i>Главный модератор</i>
              </div>
              <div class="team-main-info animate__animated animate__fadeInRight wow">
                А это Настя, она по-умолчанию ненавидит вас, даже если вы радужный пони! Самая активная и строгая на этом проекте. Тщательно следит за работой Хелперов и Модераторов, отвечает за них. Она всё видит!              </div>
            </div>
          </div>
          <div class="team-main">
            <div class="team-main-head animate__animated animate__fadeInLeft wow">
              <img class="team-main-head-img head-lexant" src="https://skin.vimeworld.ru/helm/3d/LexaNT.png" alt="head" />         
            </div>
            <div class="team-main-wrap">
              <div class="team-main-nick animate__animated animate__fadeIn wow" data-wow-duration="2.5s">
                <span class="moder">LexaNT</span>
              </div>
              <div class="team-main-place animate__animated animate__fadeInRight wow">
                <i>Главный модератор</i>
              </div>
              <div class="team-main-info animate__animated animate__fadeInRight wow">
                Алексей - малоизвестный и скрытный лис. На проекте отвечает за обнуление статистики игроков, а именно раздел «Буст и мультиаккаунты» на форуме. В его вердиктах нет ни капли сожаления. Удаляет всё под чистую даже за самые мелкие провинности, будьте начеку!               </div>
            </div>
          </div>
          <div class="team-main">
            <div class="team-main-head animate__animated animate__fadeInLeft wow">
              <img class="team-main-head-img head-rsboe" src="https://skin.vimeworld.ru/helm/3d/rsboe.png" alt="head" />
            </div>
            <div class="team-main-wrap">
              <div class="team-main-nick animate__animated animate__fadeIn wow" data-wow-duration="2.5s">
                <span class="builder">rsboe</span>
              </div>
              <div class="team-main-place animate__animated animate__fadeInRight wow">
                <i>Главный строитель</i>
              </div>
              <div class="team-main-info animate__animated animate__fadeInRight wow">
                Руководит процессом постройки новых карт, перестройкой старых карт и выслушиванием нытья игроков по поводу тех же самых карт. Даниил создавать разную активность на проекте.              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

  <div class="modal fade" id="ann" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Annihilation</h5>
          <img src="img/ann-ico.png" class="modal-title-img" alt="">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Цель игры</h3>
          </div>
          Вы должны разрушить все вражеские базы. Под башней в каждом углу карты есть подвал, где находится «ядро» базы
          (эндер камень), которое нужно сломать киркой.<br />
          После разрушения базы игроки из той команды не смогут больше возрождаться.
          <div class="modal-header modal-heading">
            <h3 class="modal-title" id="exampleModalLabel">Команды</h3>
          </div>
          Есть четыре команды: Красные, Синие, Желтые и Зеленые Вы выбираете одну из них и воюете против других: <br />
          Выбрать команду можно с помощью Бирки [первый слот] или с помощью команды <span
            class="highLight">/team</span>. Бить игроков из своей команды запрещено.
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Роли</h3>
          </div>
          Вы можете выбрать доступную роль нажав правой кнопкой по Золотому мечу [второй слот] или написав команду
          <span class="highLight">/role</span>. <br />
          У каждой роли свои уникальные способности и начальные предметы, так что играть будет весело.
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Внутриигровой магазин</h3>
          </div>
          Он доступен по нажатию на Око Эндера или по команде <span class="highLight">/shop</span>. При старте оно
          появляется у вас в последнем слоте
          на панели. В нём можно купить разные ценности, которые будут доступны только на протяжении вашей жизни, после
          смерти купленные вещи выпадают.<br />
          Деньги для покупки в магазине можно получить следующими способами: <br />
          <div class="modal-body-info">
            <img src="img/square.png" alt="square" />За убийство игрока: 8<br />
            <img src="img/square.png" alt="">За удар по базе: 4<br />
            <img src="img/square.png" alt="">За алмазную руду: 2<br />
            <img src="img/square.png" alt="">За другую руду: 1<br />
          </div>
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Фазы</h3>
          </div>
          Вся игра делится на 6 фаз: <br /><br />
          <div class="modal-body-info">
            <b>1 Фаза</b>
            <div class="modal-body-info"><img src="img/square.png" alt="square" />Все игроки телепортируются по своим
              базам и начинают развиваться.</div>
            <b>2 Фаза</b>
            <div class="modal-body-info"><img src="img/square.png" alt="square" />Базу (эндер камень) теперь можно бить.
              За каждый удар разрушение блока
              снимается одна прочность базы.</div>
            <b>3 Фаза</b>
            <div class="modal-body-info"><img src="img/square.png" alt="square" />В центре карты появляется алмазная
              руда. Все на мид! Но не забывайте защищать
              свою базу.</div>
            <b>4 Фаза</b>
            <div class="modal-body-info"><img src="img/square.png" alt="square" />Ничего не происходит, играем, добываем
              алмазы, ломаем чужие базы.</div>
            <b>5 Фаза</b>
            <div class="modal-body-info"><img src="img/square.png" alt="square" />За удар по базе теперь снимается 2
              еденицы прочности базы.</div>
            <b>6 Фаза</b>
            <div class="modal-body-info"><img src="img/square.png" alt="square" />База начинает постепенно разрушаться.
            </div>
          </div>
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Чат</h3>
          </div>
          Доступен командный и общий чат: <br /><br />
          <div class="modal-body-info">
            <img src="img/square.png" alt="">Командный чат видит только ваша команда
            Общий чат доступен через <span class="highLight">!</span>. Пример: <span class="highLight">!Привет</span>
          </div>
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Разные плюшки</h3>
          </div>
          Можно сделать батут: <br />
          <div class="modal-body-info">
            <img src="img/square.png" alt="square" />Для этого на блок угля нужно поставить каменную нажимную плиту.
            Когда вы наступите на нажимную плиту то вас
            бросит вперёд (сила почти такая же как и у прыжка акробата)
          </div>
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Преимущества статусов</h3>
          </div>
          К основным преимущетсвам добавляются следующие:
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title modal-title-small" id="exampleModalLabel">Статус <span class="vip">vip</span></h3>
          </div>
          <div class="modal-body-info">
            <img src="img/square.png" alt="square" />Полоска сытости не убывает <br />
            <img src="img/square.png" alt="square" />Возможность открыть верстак в любом месте <span
              class="highLight">/wb</span><br />
            <img src="img/square.png" alt="square" />Становятся доступными роли: Воин, Дровосек <br />
            <img src="img/square.png" alt="square" />Заход в переполненную команду <br />
            <img src="img/square.png" alt="square" />Дополнительный слот в эндер сундуке
          </div>
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title modal-title-small" id="exampleModalLabel">Статус <span class="premium">Premium</span>
            </h3>
          </div>
          <div class="modal-body-info">
            <img src="img/square.png" alt="square" />Полоска сытости не убывает <br />
            <img src="img/square.png" alt="square" />Возможность открыть верстак в любом месте <span
              class="highLight">/wb</span><br />
            <img src="img/square.png" alt="square" />Возможность открыть эндер печку в любом месте <span
              class="highLight">/fur</span><br />
            <img src="img/square.png" alt="square" />Становятся доступными роли: Лучник, Шахтёр, Копатель <br />
            <img src="img/square.png" alt="square" />Смена команды во время игры <br />
            <img src="img/square.png" alt="square" />Заход в переполненную команду <br />
            <img src="img/square.png" alt="square" />2 дополнительных слота в эндер сундуке <br />
          </div>
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title modal-title-small" id="exampleModalLabel">Статус <span class="holy">Holy</span></h3>
          </div>
          <div class="modal-body-info">
            <img src="img/square.png" alt="square" />Полоска сытости не убывает <br />
            <img src="img/square.png" alt="square" />Возможность открыть верстак в любом месте <span
              class="highLight">/wb</span><br />
            <img src="img/square.png" alt="square" />Возможность открыть эндер печку в любом месте <span
              class="highLight">/fur</span> <br />
            <img src="img/square.png" alt="square" />Возможность открыть стол зачарования в любом месте <span
              class="highLight">/et</span><br />
            <img src="img/square.png" alt="square" />Становятся доступными роли: Воин, Дровосек, Лучник, Шахтёр,
            Копатель <br />
            <img src="img/square.png" alt="square" />Заход в переполненную команду <br />
            <img src="img/square.png" alt="square" />Смена команды во время игры <br />
            <img src="img/square.png" alt="square" />3 дополнительных слота в эндер сундуке <br />
          </div>
        </div>
        <div class="modal-footer">
          <div class="modal-body-info-down">
            На все награды действуют множители от статусов (<span class="vip">VIP</span>, <span
              class="premium">Premium</span>, <span class="holy">Holy</span>, <span class="immortal">Immortal</span>).
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="bw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">BedWars</h5>
          <img src="img/bed.png" class="modal-title-img" alt="">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Описание</h3>
          </div>
          Игроки делятся на четыре команды, и появляются на воздушных островах, которые отдалены на определённое
          расстояние. На базе есть торговец (Житель), который продаёт блоки, оружие, броню, зелья за валюту - золото,
          железо и бронзу.
          <br />
          <br />
          Бронзу добыть очень просто, ибо они спавнятся часто и искать их очень просто, обычно рудники кирпича
          расположены на самом видном месте.
          <br />
          <br />
          С железом возникнут проблемы, так как оно спавнится не так часто и на некоторых картах рудники с железом
          расположены на отдельных островах.
          <br />
          <br />
          А с золотом придётся попотеть, его можно добыть в центре карты и спавнится оно тоже не очень часто. Есть
          альтернативный способ получить золото - обменять его за железо у торговца.
          <br />
          <br />
          Так же команды имеют кровати. На каждой базе по 1 кровати, которую необходимо защищать любой ценой, потому что
          если её сломают - вся команда не сможет респавниться на своём острове и если игрока убьют, после того, как его
          кровать сломают, он больше не сможет играть.
          <div class="modal-header modal-heading">
            <h3 class="modal-title" id="exampleModalLabel">Награды</h3>
          </div>
          За разрушение вражеской кровати: 20 коинов <br />
          За убийство игрока: 4 коина <br />
          За победу: 30 коинов За поражение: 7 коинов <br />
        </div>
        <div class="modal-footer">
          <div class="modal-body-info-down">
            На все награды действуют множители от статусов (<span class="vip">VIP</span>, <span
              class="premium">Premium</span>, <span class="holy">Holy</span>, <span class="immortal">Immortal</span>).
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="sw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">SkyWars</h5>
          <img src="img/sw-ico.png" class="modal-title-img" alt="">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Описание</h3>
          </div>
          В начале игры, каждый игрок появляется на своём острове, где по стандарту есть 3 сундука с базовыми вещами.
          Остров наполовину состоит из руд, дроп которых изменён: <br /><br />
          <div class="modal-body-info">
            <img src="img/square.png" alt="square" />Золотая руда: дроп аналогичен вещам в начальных сундуках. Может
            попасться крипер<br />
            <img src="img/square.png" alt="square" />Железная руда: алмазы, железо, стрелы, палки, кремень, перья и
            т.д.<br />
            <img src="img/square.png" alt="square" />Лазуритовая руда: накладывает на вас случайный эффект от
            зелья.<br />
            <img src="img/square.png" alt="square" />Алмазная руда: случайная алмазная вещь.<br />
            <img src="img/square.png" alt="square" />Изумрудная руда: добавляет 1 или 2 уровня.<br />
            <img src="img/square.png" alt="square" />Руда красного камня: увеличивает или уменьшает максимальное
            здоровье на 1 сердечко.
          </div><br />
          Между вашим островом и центром есть еще один маленький островок с обычным сундуком. Иногда там могут лежать
          полезные вещи. <br />
          На центральном обычно находятся 4 сундука с разными зачарованными вещами и оружием, которые просто необходимы
          для победы, так что старайтесь как можно быстрее добраться до центра!<br />
          Раз в 3 минуты на 30 секунд открывается мистический сундук, в котором лежат самые лучшие вещи во всей игре, а
          также жемчуг эндера и зачарованные золотые яблоки.<br />
          <div class="modal-header modal-heading">
            <h3 class="modal-title" id="exampleModalLabel">Награды</h3>
          </div>
          За убийство игрока: 5 коинов <br />
          За победу: убийства×5 + 50 коинов <br />
          За поражение: убийства×4 + 5 коинов <br />
        </div>
        <div class="modal-footer">
          <div class="modal-body-info-down">
            На все награды действуют множители от статусов (<span class="vip">VIP</span>, <span
              class="premium">Premium</span>, <span class="holy">Holy</span>, <span class="immortal">Immortal</span>).
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="mw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">MobWars</h5>
          <img src="img/mw-ico.png" class="modal-title-img" alt="">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Цель игры</h3>
          </div>
          Mob Wars - командная игра, целью которой является не допустить к своему фонтану вражеских мобов. Вы посылаете
          друг другу мобов и одновременно защищаетесь от мобов, которых посылают Вам. Игра заканчивается, когда у
          какой-нибудь команды заканчиваются жизни.
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Доход</h3>
          </div>
          Игра разделена на волны. Каждую волну, которая длится 25 секунд, игра выдаёт всем количество денег, равное их
          доходу. Чтобы увеличить его, необходимо посылать мобов противникам (в описании каждого моба написано
          Увеличение дохода), то есть чем больше мобов посылаете, тем больше денег имеете. Выгоднее сначала посылать
          мобов, а только потом покупать себе оружие или броню.
          Сверху, над качелькой HP команды, есть таймер волны. Когда он доходит до конца, все получают свой доход.
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">HP команд</h3>
          </div>
          Изначально каждая команда имеет по 50 HP, если она пропускает моба, то теряет 2 HP, а вражеская команда
          получает 1 HP.
          Сине-красная качелька в верхней части экрана показывает баланс HP между командами. Ваша команда всегда
          находится слева.
          <div class="modal-header modal-heading">
            <h3 class="modal-title" id="exampleModalLabel">Микропрокачки</h3>
          </div>
          На данный момент в игре есть 7 микропрокачек:
          <div class="modal-body-info modal-body-info-mw">
            <img src="img/square.png" alt="square" />Шанс нанести критический удар. Максимальная прокачка <span
              class="highLight">10%</span><br />
            <img src="img/square.png" alt="square" />Увеличение шанса выпадения бонусов. Максимальная прокачка <span
              class="highLight">130%</span><br />
            <img src="img/square.png" alt="square" />Улучшение скорости бега. Максимальная прокачка <span
              class="highLight">25%</span><br />
            <img src="img/square.png" alt="square" />Шанс моментально возродиться. Максимальная прокачка <span
              class="highLight">10%</span><br />
            <img src="img/square.png" alt="square" />Уменьшение времени возрождения. Максимальная прокачка <span
              class="highLight">3 сек.</span><br />
            <img src="img/square.png" alt="square" />Шанс откидывания моба при ударе. Максимальная прокачка <span
              class="highLight">20%</span><br />
            <img src="img/square.png" alt="square" />Шанс вернуть мобу 50% урона. Максимальная прокачка <span
              class="highLight">10%</span><br />
          </div>
        </div>
        <div class="modal-footer">
          <div class="modal-body-info-down">
            На все награды действуют множители от статусов (<span class="vip">VIP</span>, <span
              class="premium">Premium</span>, <span class="holy">Holy</span>, <span class="immortal">Immortal</span>).
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="kpvp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">KitPvP</h5>
          <img src="img/kpvp-ico.png" class="modal-title-img" alt="">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Цель игры</h3>
          </div>
          Суть игры довольно проста, нужно убить как можно больше игроков и погибать как можно меньше, чем больше вы
          убиваете игроков, тем больше вы получаете очков и тем выше вы поднимаетесь в рейтинге, но не всё так просто,
          так как каждый игрок - ваш враг, и у каждого игрока свои уникальные способности, которые зависят от его
          набора, выживать будет довольно сложно. <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Наборы</h3>
          </div>
          Наборы, в большинстве своём, очень похожи на роли из игры Annihilation, но многие сильно изменены. Цена на них
          меньше и Вы можете опробовать их в бою, а также сравнить с другими.
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Очки</h3>
          </div>
          За каждое убийство Вам начисляются очки и их количество зависит от Вашего текущего количества и количества
          очков у убитого игрока.
          Если количество Ваших очков выше на 500 (и более), то за убийство даётся 1 очко.
          Если количество Ваших очков меньше на 300 (и более), то за убийство Вы получите 3 очка.<br />
          За каждую же смерть, количество очков будет уменьшаться, чтобы учитывать Ваши реальные умения. Чем больше
          очков, тем больше снимается за смерть, что ограничивает максимальное количество очков.
        </div>
        <div class="modal-footer">
          <div class="modal-body-info-down">
            На все награды действуют множители от статусов (<span class="vip">VIP</span>, <span
              class="premium">Premium</span>, <span class="holy">Holy</span>, <span class="immortal">Immortal</span>).
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="bp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">BlockParty</h5>
          <img src="img/bp-ico.png" class="modal-title-img" alt="">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Описание</h3>
          </div>
          Это игра на скорость и сообразительность.<br />
          Вам дается в руки пример цветного блока, на который вы должны успеть встать. Если вы не встали на нужный блок
          - вы проиграли. С каждой волной время поиска цвета уменьшается.<br />
          Кто последний останется на карте - тот и выиграет.
          <div class="modal-header modal-heading">
            <h3 class="modal-title" id="exampleModalLabel">Награды</h3>
          </div>
          За каждю выдержанную волну всем выжившим выдаётся 1 коин.<br />
          После окончания игры все получают по 4 коина, а победитель - 15 коинов.
        </div>
        <div class="modal-footer">
          <div class="modal-body-info-down">
            На все награды действуют множители от статусов (<span class="vip">VIP</span>, <span
              class="premium">Premium</span>, <span class="holy">Holy</span>, <span class="immortal">Immortal</span>).
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="dr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DeathRun</h5>
          <img src="img/dr-ico.png" class="modal-title-img" alt="">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="modal-header modal-heading modal-header-upper">
            <h3 class="modal-title" id="exampleModalLabel">Описание</h3>
          </div>
          Видели ли вы когда нибудь фильмы про апокалипсис? А хотели бы побывать на месте главных героев? Тогда эта игра
          для вас!<br />
          Вам необходимо успеть добежать до конца карты, пока земля под вашими ногами не рассыпалась. Будьте первыми
          среди других игроков и получите свою заработанную награду.
          <div class="modal-header modal-heading">
            <h3 class="modal-title" id="exampleModalLabel">Награды</h3>
          </div>
          За каждый пройденный чекпоинт: 1 коин. На каждой карте их около 10-20.<br />
          За победу: 60, 45, 30 коинов за 1, 2, 3 места соответственно.<br />
          За смерть: 10 коинов.<br />

        </div>
        <div class="modal-footer">
          <div class="modal-body-info-down">
            На все награды действуют множители от статусов (<span class="vip">VIP</span>, <span
              class="premium">Premium</span>, <span class="holy">Holy</span>, <span class="immortal">Immortal</span>).
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="preloader">
    <img src="img/loading.gif" alt="" />
  </div>

  <script src="/scripts/wow.min.js"></script>
  <script>new WOW().init();</script>
  <script src="scripts/preloader.js"></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src="scripts/changeImages.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
  <script src="scripts/preview.js"></script>
  <script src="/scripts/getOnline.js"></script>
</body>

</html>