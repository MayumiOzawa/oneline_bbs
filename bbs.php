<!DOCTYPE HTML>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>セブ掲示板</title>

		<!-- CSS -->
		  <link rel="stylesheet" href="assets/css/bootstrap.css">
		  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
		  <link rel="stylesheet" href="assets/css/form.css">
		  <link rel="stylesheet" href="assets/css/timeline.css">
		  <link rel="stylesheet" href="assets/css/main.css">
  	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#page-top"><span class="strong-title"><i class="fa fa-linux"></i> Oneline bbs</span></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
				</ul>
			</div>
			<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<div class="container">
			<div class="row">
				<!-- 12分割中の４つ分を使用する -->
				<div class="col-md-4 content-margin-top">
					<form method="post" action="">
					<div class="form-group">
						<div class="input-group">
	
	             			<input type="text" name="nickname" class="form-control" id="validate-text" placeholder="nickname" value="" required>
              				<!-- ×＆チェックボタン表示 -->
							<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
						</div>
					</div>

					<div class="form-group">
						<div class="input-group" data-validate="length" data-length="4">
						<!-- <TEXTAREA>←複数行の入力フィールドを作成するタグ -->
						<!-- placeholder←入力欄内に書かれている文字の指定が出来る -->
						<textarea type="text" class="form-control" name="comment" id="validate-length" placeholder="comment" required></textarea>
						<span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
					</div>
					</div>

					<!-- col-xs-12←col-md-4の中の全部の長さを指定 -->
					<!-- disabled←入力・選択不可能にする -->
					<button type="submit" class="btn btn-primary col-xs-12" disabled>つぶやく</button>

					</form>
				</div><!-- col-md-4 -->
				<div class="col-md-8 content-margin-top">

				<div class="timeline-centered">

					<!-- 記事であることを示すタグ -->
					<article class="timeline-entry">

            			<div class="timeline-entry-inner">

                			<div class="timeline-icon bg-success">
			                    <i class="entypo-feather"></i>
			                    <i class="fa fa-cogs"></i>
                			</div>

 							<div class="timeline-label">
 								<!-- href="#" ←「そのページの最上部へのリンク」 -->
			                    <h2><a href="#">はなこ</a> <span>2015-11-10 21:00:00</span></h2>
			                    <p>たろうさん、はじめまして！！</p>
                			</div>

                		</div>

					</article>

					<article class="timeline-entry">

            			<div class="timeline-entry-inner">

                			<div class="timeline-icon bg-success">
			                    <i class="entypo-feather"></i>
			                    <i class="fa fa-cogs"></i>
                			</div>

 							<div class="timeline-label">
 								<!-- href="#" ←「そのページの最上部へのリンク」 -->
			                    <h2><a href="#">たろう</a> <span>2015-11-10 20:53:18</span></h2>
			                    <p>はじめまして！</p>
                			</div>

                		</div>

					</article>

					<article class="timeline-entry begin">

        				<div class="timeline-entry-inner">

            				<div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                				<i class="entypo-flight"></i> +
            				</div>

        				</div>

    				</article>
<!-- 			</ul> -->
				</div><!-- col-md-8 -->
			</div><!-- row -->
		</div><!-- container -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="assets/js/bootstrap.js"></script>
		<script src="assets/js/form.js"></script>
	</body>
</html>