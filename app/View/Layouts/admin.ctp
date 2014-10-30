<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout;?></title>
<?php echo $this->Html->css("style"); // link oi file style.css (app/webroot/css/style.css)?>
<?php echo $this->Html->css("bootstrap"); // link oi file style.css (app/webroot/css/bootstrap.css)?>
<?php echo $this->Html->css("bootstrap.min"); // link oi file style.css (app/webroot/css/bootstrap.css)?>
<?php echo $this->Html->css("bootstrap-theme"); // link oi file style.css (app/webroot/css/bootstrap.css)?>
<?php echo $this->Html->css("bootstrap-theme.min"); // link oi file style.css (app/webroot/css/bootstrap.css)?>

<?php $general = $this->Common->general(); // Lấy các giá trị của thành phần tĩnh : header,footer ?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <script src="http://maxcdn
 .bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> </head> <body> <div id="top">

</div>

<div id="main">
    <div id="menu">
          <ul class="nav nav-pills nav-stacked">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1 <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Submenu 1-1</a></li>
                        <li><a href="#">Submenu 1-2</a></li>
                        <li><a href="#">Submenu 1-3</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Menu 2</a></li>
                    <li><a href="#">Menu 3</a></li>
          </ul>
    </div>
    <div id="content">
        <h1><?php echo $content; // Thành phần động ?></h1>
    </div>
</div>
<div class="xoa"></div>
<div id="footer">
footter
</div>
</body>
</html>