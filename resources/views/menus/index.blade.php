@extends('layouts.main')
@section('title', 'Menú Entrega | MenuEntrega.com')
@section('content')
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Menús				
					</h1>	
					<p class="text-white link-nav"><a href="index.html">MenuEntrega</a>  <span class="lnr lnr-arrow-right"></span>  <a href="menu.html"> Menus</a></p>
				</div>	
			</div>
		</div>
	</section>
			
    <section class="menu-area" id="menu" style="margin-bottom: 50px">
        <div class="container">
        	<div class="col-sm-12 row">
	        	<div class="col-sm-3">
	        		<div class="card filters-content">
						<div class="card-header">Categorías</div>
						<div class="card-body" style="padding: 0px!important">
							<ul class="list-group">
								<a href="#">
									<li class="list-group-item active" style="border-radius: 0px">
										<i class="fa fa-coffee"></i> Desayuno	
									</li>
								</a>
								<a href="#">
									<li class="list-group-item"  style="border-radius: 0px">
										<i class="fa fa-sun"></i> Almuerzo
									</li>	
								</a>
								<a href="#">
									<li class="list-group-item"  style="border-radius: 0px">
										<i class="fa fa-moon"></i> Cena
									</li>
								</a>
							</ul>
						</div> 
					</div>
	        		<div class="card filters-content">
						<div class="card-header">Filtros</div>
						<div class="card-body" style="padding: 0px!important">
							<div class="input-group-icon mt-10">
								<div class="icon">
									<i class="fa fa-plane" aria-hidden="true"></i>
								</div>
								<div class="form-select" id="default-select">
									<select style="display: none;">
										<option value="">[Seleccione segundo]</option>
										<option value="1">City</option>
										<option value="1">City</option>
										<option value="1">Dhaka</option>
										<option value="1">Dilli</option>
										<option value="1">Newyork</option>
										<option value="1">Islamabad</option>
									</select>
								</div>
							</div>
							<div class="input-group-icon mt-10">
								<div class="icon">
									<i class="fa fa-plane" aria-hidden="true"></i>
								</div>
								<div class="form-select" id="default-select">
									<select style="display: none;">
										<option value="">[Seleccione entrada]</option>
										<option value="1">City</option>
										<option value="1">City</option>
										<option value="1">Dhaka</option>
										<option value="1">Dilli</option>
										<option value="1">Newyork</option>
										<option value="1">Islamabad</option>
									</select>
								</div>
							</div>
						</div> 
					</div>
	        		
	        	</div>
	        	<div class="col-sm-9">
	        		<div class="filters-content">
		                <div class="row grid">
		                    <div class="col-md-12 all breakfast">
								<div class="single-menu" style="margin-top: 0px!important">
									<div class="title-wrap d-flex justify-content-between">
										<h4>Cappuccion</h4>
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
        	</div>
        	
        </div>
    </section>
@stop