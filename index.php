<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootswatch: Default</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link id="currtheme" rel="stylesheet" href="./css/bootstrap.css" media="screen">
    <!-- <link rel="stylesheet" href="./css/custom.min.css"> -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="./" class="navbar-brand">Bootswatch</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Themes <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="javascript:;" name="">Default</a></li>
                <li class="divider"></li>
                <li><a href="javascript:;" name="-cerulean">Cerulean</a></li>
                <li><a href="javascript:;" name="-cosmo">Cosmo</a></li>
                <li><a href="javascript:;" name="-cyborg">Cyborg</a></li>
                <li><a href="javascript:;" name="-darkly">Darkly</a></li>
                <li><a href="javascript:;" name="-flatly">Flatly</a></li>
                <li><a href="javascript:;" name="-journal">Journal</a></li>
                <li><a href="javascript:;" name="-lumen">Lumen</a></li>
                <li><a href="javascript:;" name="-paper">Paper</a></li>
                <li><a href="javascript:;" name="-readable">Readable</a></li>
                <li><a href="javascript:;" name="-sandstone">Sandstone</a></li>
                <li><a href="javascript:;" name="-simplex">Simplex</a></li>
                <li><a href="javascript:;" name="-slate">Slate</a></li>
                <li><a href="javascript:;" name="-spacelab">Spacelab</a></li>
                <li><a href="javascript:;" name="-superhero">Superhero</a></li>
                <li><a href="javascript:;" name="-united">United</a></li>
                <li><a href="javascript:;" name="-yeti">Yeti</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>


    <div class="container" style="margin-bottom:120px;">

      <div class="page-header" id="banner" style="margin:72px 0px 0px;">
        <div class="row">
          <div class="col-xs-12 text-center">
            <h1>Default Theme</h1>
          </div>
        </div>
      </div>

      <!-- Forms
      ================================================== -->
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
              <h1 id="forms">Forms</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="well bs-component">
              <form class="form-horizontal">
                <fieldset>
                  <legend>Legend</legend>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                    <div class="col-lg-10">
                      <textarea class="form-control" rows="3" id="textArea"></textarea>
                      <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Selects</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="select">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-default">Cancel</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
          <div class="col-lg-4 col-lg-offset-1">

              <form class="bs-component">
                <div class="form-group">
                  <label class="control-label" for="inputSmall">Small input</label>
                  <input class="form-control input-sm" type="text" id="inputSmall">
                </div>

                <div class="form-group">
                  <label class="control-label" for="inputDefault">Default input</label>
                  <input type="text" class="form-control" id="inputDefault">
                </div>

                <div class="form-group">
                  <label class="control-label" for="inputLarge">Large input</label>
                  <input class="form-control input-lg" type="text" id="inputLarge">
                </div>

                <div class="form-group has-warning">
                  <label class="control-label" for="inputWarning">Input warning</label>
                  <input type="text" class="form-control" id="inputWarning">
                </div>

                <div class="form-group has-error">
                  <label class="control-label" for="inputError">Input error</label>
                  <input type="text" class="form-control" id="inputError">
                </div>

                <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess">Input success</label>
                  <input type="text" class="form-control" id="inputSuccess">
                </div>
              </form>

          </div>
        </div>
      </div>

      <footer>
        <div class="row">
          <div class="col-xs-12">
          </div>
        </div>

      </footer>


    </div>


    <script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/custom.js"></script>
</body>
</html>
