<div class="container detail">
	<div class="profil-user">
		<div class="aside">
			<div class="aside-profile-picture">
				<img src="<?php echo CHtml::normalizeUrl(array('/image/default/create','id'=>$model->profile->id_image,'version'=>'smallprofile'))?>" alt="Vanbungkring">
			</div>
			<div class="name"> <?php echo $model->profile->firstname.' '.$model->profile->lastname ?> </div>
			<div class="location">Jakarta, Indonesia</div>
			<div class="list-ver">
				<table class="table">
					<tr>
						<td colspan="2"><div class="user-location"><i class="icon-map-marker"></i> Malang, Indonesia</div></td>
					
					</tr>
					<tr>
						<td colspan="2"><div class="user-location">User Rating : 9.6</div></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="profile-middle">
			<ul class="nav nav-tabs" id="profiletabs">
				<li class="active"><a href="#myprofiles" data-toggle="tab">Profil <?php echo $model->profile->firstname; ?></a></li>
				<li><a href="#trip" data-toggle="tab"> Tripku </a></li>
				<li><a href="#review" data-toggle="tab"> Testimonial </a></li>
	
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="myprofiles">
					<h3>Halo, Nama saya <?php echo $model->profile->firstname.' '.$model->profile->lastname ?></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="tab-pane" id="trip">
					<div class="user-trip">
						<img src="http://www.photoshelter.com/img-get/I0000qlJ1FH_YGsw/s/590/392/North-Maluku-104.jpg" alt="">
						<div class="title"> Lorem Ipsum Dolor Sit Amet</div>
						<div class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</div>
						<div class="price">Rp 560.000</div>
					</div>
					<div class="user-trip">
						<img src="http://www.photoshelter.com/img-get/I0000qlJ1FH_YGsw/s/590/392/North-Maluku-104.jpg" alt="">
						<div class="title"> Lorem Ipsum Dolor Sit Amet</div>
						<div class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</div>
						<div class="price">Rp 560.000</div>
					</div>
					<div class="user-trip">
						<img src="http://www.photoshelter.com/img-get/I0000qlJ1FH_YGsw/s/590/392/North-Maluku-104.jpg" alt="">
						<div class="title"> Lorem Ipsum Dolor Sit Amet</div>
						<div class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</div>
						<div class="price">Rp 560.000</div>
					</div>
					<div class="user-trip">
						<img src="http://www.photoshelter.com/img-get/I0000qlJ1FH_YGsw/s/590/392/North-Maluku-104.jpg" alt="">
						<div class="title"> Lorem Ipsum Dolor Sit Amet</div>
						<div class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</div>
						<div class="price">Rp 560.000</div>
					</div>
				</div>
				<div class="tab-pane" id="review">
					<section class="comments">
			<article class="comment">
				<a class="comment-img" href="#non">
					<img src="http://lorempixum.com/50/50/people/1" alt="" width="50" height="50" />
				</a>

				<div class="comment-body">
					<div class="text">
						<p>Hello, this is an example comment</p>
					</div>
					<p class="attribution">by <a href="#non">Joe Bloggs</a> at 2:20pm, 4th Dec 2012</p>
				</div>
			</article>

			<article class="comment">
				<a class="comment-img" href="#non">
					<img src="http://lorempixum.com/50/50/people/7" alt="" width="50" height="50">
				</a>

				<div class="comment-body">
					<div class="text">
						<p>This is a much longer one that will go on for a few lines.</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
					<p class="attribution">Oleh <a href="#non">Joe Bloggs</a> at 2:23pm, 4th Dec 2012</p>
				</div>
			</article>

			<article class="comment">
				<a class="comment-img" href="#non">
					<img src="http://profile.ak.fbcdn.net/hprofile-ak-snc4/572942_100000672487970_422966851_q.jpg" alt="" width="50" height="50">
				</a>

				<div class="comment-body">
					<div class="text">
						<p>Originally from <a href="http://cssdeck.com/item/301/timeline-style-blog-comments#comment_289">cssdeck.com</a> this presentation has been updated 
							to looks more precisely to the facebook timeline</p>
						</div>
						<p class="attribution">by <a href="http://www.facebook.com/luky.TikTek">Luky Vj</a> at 2:44pm, 14th Apr 2012</p>
					</div>
				</article>
			</section>​
				</div>

			</div>
		</div>

	</div>
</div>