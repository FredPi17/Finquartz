<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/jpg" href="img/logo.jpg" />
    <title>Finquartz</title>
    <!--<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">-->
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <script>
    draggableElement.addEventListener('dragstart', function(e) {
    e.dataTransfer.setData('text/plain', "Ce texte sera transmis à l'élément HTML de réception");
    });
    var dragImg = new Image(); // Il est conseillé de précharger l'image, sinon elle risque de ne pas s'afficher pendant le déplacement
    dragImg.src = 'drag_img.png';
    document.querySelector('*[draggable="true"]').addEventListener('dragstart', function(e) {
    e.dataTransfer.setDragImage(dragImg, 40, 40); // Une position de 40x40 pixels centrera l'image (de 80x80 pixels) sous le curseur
    });
    </script>
    <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
          <div class="row column">
            <br>
            <img class="thumbnail" id="perso" src="img/face.jpg" width="80px" height="80px">
            <h5>Samy Zayani</h5>
            <p></p>
            <a># DISCOVER</a><br />
            <a># EXPORT</a>
            <p>PORTFOLIO</p>
            <button class="dropdown button small ">Dropdown Button</button>
          </div>
        </div>
        <div class="off-canvas-content" data-off-canvas-content>
          <div class="title-bar hide-for-large">
            <div class="title-bar-left">
              <button class="menu-icon" type="button" data-open="my-info"></button>
              <span class="title-bar-title">Samy Zayani</span>
            </div>
          </div>
          <div class="callout primary">
            <div class="row column">
              <a href="index.php"><h1>FINQUARTZ</h1></a>
              <p class="lead">THE ESSENTIAL OF YOUR PORTFOLIO</p>
            </div>
          </div>
          <div class="row small-up-2 medium-up-3 large-up-4 ">
            <div class="column">
              <p class="top">USD 520 &uarr; +84%</p>
                <div class="card">
                <img src="img/1.jpg">
                <div class="description">
                  <a href="article.php?id=5"><h4>This is a card.</h4>
                  <p>It has an easy to override visual style, and is appropriately subdued.</p></a>
                  <ul class="menu">
                    <li><a href="#">26 <br />SIMILAR<br /> POST</a></li>
                    <li>3min<br />READ</li>
                    <li><a href="#" class="fa fa-info-circle"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="column">
              <p class="top">USD 520 &uarr; +84%</p>
                <div class="card">
                <img src="img/2.jpg">
                <div class="description">
                  <a href=""><h4>This is a card.</h4>
                  <p>It has an easy to override visual style, and is appropriately subdued.</p></a>
                  <ul class="menu">
                    <li><a href="#">26 <br />SIMILAR<br /> POST</a></li>
                    <li>3min<br />READ</li>
                    <li><a href="#" class="fa fa-info-circle"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="column">
              <p class="top">USD 520 &uarr; +84%</p>
                <div class="card">
                <img src="img/3.jpg">
                <div class="description">
                  <a href=""><h4>This is a card.</h4>
                  <p>It has an easy to override visual style, and is appropriately subdued.</p></a>
                  <ul class="menu">
                    <li><a href="#">26 <br />SIMILAR<br /> POST</a></li>
                    <li>3min<br />READ</li>
                    <li><a href="#" class="fa fa-info-circle"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="column">
              <p class="top">USD 520 &uarr; +84%</p>
                <div class="card">
                <img src="img/4.jpg">
                <div class="description">
                  <a href=""><h4>This is a card.</h4>
                  <p>It has an easy to override visual style, and is appropriately subdued.</p></a>
                  <ul class="menu">
                    <li><a href="#">26 <br />SIMILAR<br /> POST</a></li>
                    <li>3min<br />READ</li>
                    <li><a href="#" class="fa fa-info-circle"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="column">
              <p class="top">USD 520 &uarr; +84%</p>
                <div class="card">
                <img src="img/5.jpg">
                <div class="description">
                  <a href=""><h4>This is a card.</h4>
                  <p>It has an easy to override visual style, and is appropriately subdued.</p></a>
                  <ul class="menu">
                    <li><a href="#">26 <br />SIMILAR<br /> POST</a></li>
                    <li>3min<br />READ</li>
                    <li><a href="#" class="fa fa-info-circle"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="column">
              <p class="top">USD 520 &uarr; +84%</p>
                <div class="card">
                <img src="img/6.jpg">
                <div class="description">
                  <a href=""><h4>This is a card.</h4>
                  <p>It has an easy to override visual style, and is appropriately subdued.</p></a>
                  <ul class="menu">
                    <li><a href="#">26 <br />SIMILAR<br /> POST</a></li>
                    <li>3min<br />READ</li>
                    <li><a href="#" class="fa fa-info-circle"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <hr>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
