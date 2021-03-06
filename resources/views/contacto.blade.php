@extends('layouts.principal')
	@section('content')
	@include('alerts.success')
		<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>PCMI</p>
				</div>
			
				<div class="clearfix"></div>
			</div>
			<!---contact-->
<div class="main-contact">
		 <h3 class="head">CONTACTO</h3>
		 <p>¡Siempre podremos ayudarte!</p>
		 <div class="contact-form">
			 {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
					 	<div class="col-md-6 contact-left">
					 		{!!Form::text('name',null,['placeholder' => 'Nombre'])!!}
					 		{!!Form::text('email',null,['placeholder' => 'Email'])!!}
							 
						</div>
						<div class="col-md-6 contact-right">
							{!!Form::textarea('mensaje',null,['placeholder' => 'Mensaje'])!!}
						</div>
						{!!Form::submit('Enviar')!!}
					 {!!Form::close()!!}
	     </div>
</div>
	@endsection