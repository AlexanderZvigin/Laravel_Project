@extends('app')
@section('title')Страница текущей игры@endsection
@section('content')
<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">

						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						</ul>

					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$game->name}}</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">Сюда вставить количество ревью</span>
						</div>
						<p class="product-description">{{$game->Description}}</p>
						<p class="vote"><strong>Рейтинг:</strong> {{$game->Rating}}</strong></p>
            	<p class="vote"><strong>Разработчик:</strong> {{$game->Developers}}</strong></p>
                <p class="vote"><strong>Дата выхода:</strong> {{$game->OutDate}}</strong></p>
                  <p class="vote"><strong>Платформы:</strong> {{$game->Platform}}</strong></p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="inline">
	<section class="gradient-custom">
	  <div class="container my-5 py-5">
	    <div class="row d-flex justify-content-center">
	      <div class="col-md-12 col-lg-10 col-xl-8">
	        <div class="card">
	          <div class="card-body p-4">
	            <h4 class="text-center mb-4 pb-2">Отзывы пользователей</h4>

	            <div class="row">
	              <div class="col">
	                <div class="d-flex flex-start">
							@foreach($GameComments as $comment)
	                  <div class="flex-grow-1 flex-shrink-1">
	                    <div>
	                      <div class="d-flex justify-content-between align-items-center">
	                        <p class="mb-1">
	                         <strong>{{$comment->username}}</strong>
	                        </p>
	                      </div>
												<div class="text-break">
	                      <p class="small mb-0">
	                       {{$comment->comment}}
	                      </p>
											</div>
												<p class="small mb-0">
	                       <strong>Моя оценка игре:{{$comment->score}}</strong>
	                      </p>
	                    </div>
<br>
@endforeach
	  </div>
	</section>
</div>
  </body>
</html>
@endsection
