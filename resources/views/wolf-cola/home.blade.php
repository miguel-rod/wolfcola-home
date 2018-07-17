<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/skeleton.css') }}" rel="stylesheet">

        <title>welcome</title>

    </head>
    <body>
      <section class="header">
        <div class="header__banner">
          <div class="header__text">
            <span class="header__text--main">
              Wolf-Cola ...
            </span>
            <span class="header__text--sub">
             The right cola for closure
            </span>
          </div>
        </div>
      </section>
      <section class="quote u-top-border">
        <div class="quote__text">
          <div class="quote__text--main">
            The only cola for true refreshment. <br> Splash into the beast.
          </div>
          <div class="quote__text--sub">
            The official drink of Ass Kickers United.
          </div>
        </div>
      </section>

       <section class="merch u-top-border">
        <div class="container">
          <div class="merch__img">
            <span class="merch__text">

            </span>
          </div>
        </div>
      </section>

      <!-- <header class="navbar">
        <div class="navbar__logo">
          <img class="navbar__logo- -pic" src="{{ asset('images/wolfcolalogo.png') }}" alt="">
        </div>
        <div class="navbar__products">
          products
        </div>
        <div class="navbar__social-media">
          social-media
        </div>
      </header> -->
      <section class="mission u-top-border">
        <div class="container">
          <div class="row">
            <div class="seven columns mission__statement">
                You gotta to understand that Boko Haram did not do 911, that was Al Qaeda.. ,
                Paris that was done by Isis.
                Boko Haram is just concentrated, they doing Africa.
                I mean... there's mosquitoes down there that are bigger terrorist than Boko Haram
            </div>
            <div class="five columns mission__pictures">
                <img class="mission__pictures--back" src="{{ asset('images/stpic1.jpg') }}" alt="pic 1">
                <img class="mission__pictures--front" src="{{ asset('images/stpic2.jpg') }}" alt="pic 2">
            </div>
          </div>
        </div>
      </section>

      <section class="profiles u-top-border u-bottom-border">
        <div class="container">
          <div class="row">
            <div class="four columns">
              <div class="profiles__card profiles__card--odd">
                <div class="photo">
                  <a href="https://www.reddit.com/r/The_Dennis/">
                    <img src="{{ asset('images/Dennis-BW.jpg') }}" alt="dennis">
                  </a>
                </div>
                <p>
                  Dennis
                  <br>
                  <i>Executive VP of <br> World Distribution</i>
                </p>
              </div>
            </div>
            <div class="four columns">
              <div class="profiles__card profiles__card--even">
              <div class="photo">
                  <img src="{{ asset('images/mac.jpg') }}" alt="dennis">
                </div>
                <p>
                  Mac
                  <br>
                  <i>Security</i>
                </p>
              </div>
            </div>
            <div class="four columns">
              <div class="profiles__card profiles__card--odd">
              <div class="photo">
                  <img src="{{ asset('images/Charlie.jpg') }}" alt="dennis">
                </div>
                <p>
                 Charlie
                  <br>
                  <i>Janitor</i>
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="four columns">
              <div class="profiles__card profiles__card--empty">
                
              </div>
            </div>
            <div class="four columns">
              <div class="profiles__card profiles__card--odd">
              <div class="photo">
                  <img src="{{ asset('images/frank.jpg') }}" alt="dennis">
                </div>
                <p>
                  Frank
                  <br>
                  <i>President</i>
                </p>
              </div>
            </div>
            <div class="four columns">
              <div class="profiles__card profiles__card--empty">
                
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="products">
        <div class="container">
          <div class="row">
            <div class="four columns">
              <div class="products__card">
                 kitten mittons
              </div>
             
            </div>
            <div class="four columns">
            <div class="products__card">
                 fight milk
              </div>
            </div>
            <div class="four columns">
              <div class="products__card">
              other
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="social-media">

      </section>

    </body>
</html>
