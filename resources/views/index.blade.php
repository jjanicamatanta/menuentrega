@extends('layouts.main')
@section('title', 'Menu Entrega | Entrega de Menú a donde quieras')
@section('content')
	<section class="banner-area">		
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-between">
				<div class="col-lg-12 banner-content">
					<h6 class="text-white">Aliviamos tu rutina</h6>
					<h1 class="text-white">¿Que quieres comer hoy?</h1>
					<div class="row">
						<div class="col-sm-6">
							<input type="text" name="" class="form-control" placeholder="Lomo saltado, ají de gallina, ceviche, rocoto relleno, papa a la huanaína...">
						</div>
						<div class="col-sm-6">
							<a href="#" class="primary-btn text-uppercase">Buscar</a>		
						</div>
					</div>

				</div>
			</div>
		</div>					
	</section>
    <section class="menu-area section-gap" id="menu">
        <div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Listos en cualquier momento del día</h1>
						<p>Fácil, sencillo y rápido</p>
					</div>
				</div>
			</div>	
            <ul class="filter-wrap filters col-lg-12 no-padding">
                <li data-filter=".breakfast">Desayuno</li>
                <li data-filter=".lunch">Almuerzo</li>
                <li data-filter=".dinner">Cena</li>
            </ul>
            <div class="filters-content">
                <div class="row grid">
                    <div class="col-md-6 all breakfast">
						<div class="single-menu">
							<div class="title-wrap d-flex justify-content-between">
								<h4>Cappuccion</h4>
								<h4 class="price">$49</h4>
							</div>			
							<p>
								Usage of the Internet is becoming more common due to rapid advance.
							</p>									
						</div>					                               
                    </div>                           
                    <div class="col-md-6 all dinner">
						<div class="single-menu">
							<div class="title-wrap d-flex justify-content-between">
								<h4>Americano</h4>
								<h4 class="price">$49</h4>
							</div>			
							<p>
								Usage of the Internet is becoming more common due to rapid advance.
							</p>									
						</div>
                    </div>
                    <div class="col-md-6 all budget-meal">
						<div class="single-menu">
							<div class="title-wrap d-flex justify-content-between">
								<h4>Macchiato</h4>
								<h4 class="price">$49</h4>
							</div>			
							<p>
								Usage of the Internet is becoming more common due to rapid advance.
							</p>									
						</div>
                    </div>
                    <div class="col-md-6 all breakfast">
						<div class="single-menu">
							<div class="title-wrap d-flex justify-content-between">
								<h4>Mocha</h4>
								<h4 class="price">$49</h4>
							</div>
							<p>
								Usage of the Internet is becoming more common due to rapid advance.
							</p>									
						</div>
                    </div>
                    <div class="col-md-6 all lunch">
						<div class="single-menu">
							<div class="title-wrap d-flex justify-content-between">
								<h4>Piccolo Latte</h4>
								<h4 class="price">$49</h4>
							</div>
							<p>
								Usage of the Internet is becoming more common due to rapid advance.
							</p>									
						</div>
                    </div>
                    <div class="col-md-6 all buffet">
						<div class="single-menu">
							<div class="title-wrap d-flex justify-content-between">
								<h4>Ristretto</h4>
								<h4 class="price">$49</h4>
							</div>
							<p>
								Usage of the Internet is becoming more common due to rapid advance.
							</p>									
						</div>
                    </div>                            
                </div>
            </div>
        </div>
    </section>
@stop