<header>
<div class="header">
	<nav class="navbar-fixed-top" id="head">
		
			{{ HTML::image('img/GMT.png', 'GMT logo', array('width'=>'175')) }}
			{{ Form::text('search', null, array('id'=>'searchbox')) }}
			{{ HTML::linkRoute('home', 'HOME') }}
			{{ HTML::linkRoute('product', 'PRODUCT') }}
	</nav>
</div>
</header>