<header>
<div class="header">
	<nav class="navbar-fixed-top" id="head">
			{{ HTML::image('img/GMT.png', 'GMT logo', array('width'=>'175')) }}
			{{ Form::text('search', null, array('id'=>'searchbox')) }}
			{{ HTML::linkRoute('home', 'HOME', array('id'=>'home')) }}
			{{ HTML::linkRoute('product', 'PRODUCT', array('id'=>'home')) }}
	</nav>
</div>
</header>