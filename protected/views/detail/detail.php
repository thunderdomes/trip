<?php 
	/* @var $objek Experience 
	 * @var $otherObject Experience
	 */

?>
<div class="container detail">
	<div class="detail-aside">
		<div class="aside-content">
			<div class="price-area">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'kelas-form',
				'enableAjaxValidation'=>false,
				 'action'=>array('/pesan'),
				 'method'=>'GET'
			)); ?>
				<?php echo $form->hiddenField($pesan,'id'); ?>
				<h2 class="price">Rp <?php echo number_format($objek->price, 0, '', '.'); ?></h2>
				<div class="top-label">Jumlah Traveller</div>
				<div class="form-input"><?php echo $form->textField($pesan,'jumlah',array('id'=>'tanggal','class'=>'input-block-level')); ?></div>
				<div class="top-label">Tanggal Berangkat</div>
				<div class="form-input"><?php echo $form->textField($pesan,'tanggal',array('id'=>'order-date','class'=>'input-block-level','readonly'=>'readonly')); ?></div>
			</div>
			<button class="orange-button" type="submit">Pemesanan Cepat</button>
			<?php $this->endWidget(); ?>
		</div>
		<div class="aside-content">
			<div class="price-area">
				<div class="profile-picture">
					<a href="<?php echo CHtml::normalizeUrl(array('/profile/index','id'=>CHtml::value($objek,'author.id'))); ?>">
						<img src="<?php echo CHtml::normalizeUrl(array('/image/default/create','id'=>CHtml::value($objek,'author.profile.id_image'),'version'=>'smallprofile')); ?>" alt="<?php echo CHtml::value($objek,'author.profile.firstname'); ?>" />
					</a>
				</div>
				<div class="provider-name"> <?php echo CHtml::value($objek,'author.profile.firstname'); ?></div>
				<div class="provider-location">Jakarta, Indonesia</div>
			</div>

			<a href="#myModal" role="button" class="green-button" data-toggle="modal">Hubungi <?php echo CHtml::value($objek, 'author.profile.firstname'); ?></a>
		</div>
		<div class="aside-other-trip">
			<div class="header-vans"> <?php echo CHtml::value($objek,'author.profile.firstname'); ?>'s Other Trip</div>
			<ul>
				<?php foreach($objek->author->recentexperience as $otherObject): ?>
				<li>
					<img src="https://a2.muscache.com/airbnb/static/whois/wmpw/pay_your-en-d666a151dc6e5a4c9b7d4b0dbd392662.png">
					<div class="title"> <?php echo $otherObject->experience_title; ?></div>
					<div class="location">Jakarta, Indonesia</div>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<script src="http://www.wego.com/wegobox_cj/wegobox_cj/300x250/flights-hotels/theme=wego?ts_code=4e7d2"></script>
	</div>
	<div class="detail-content">

		<div class="top-artisan"><h1><?php echo  $objek->experience_title;?></h1></div>
		<div class="trip-info">
			<div class="trip-details"><i class="icon-map-marker"></i> Malang, Indonesia</div>
			<div class="trip-details"><i class="icon-time"></i>1 Hari</div>
			<div class="trip-details"><i class="icon-tags"></i> Kegiatan Outdoor</div>
			<div class="trip-details"><i class="icon-heart"></i> 120 Komentar</div>
		</div>
		<div class="image-slider"></div>
	</div>

	<div class="detail-content-bottom">
		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a href="#home">Rincian Perjalanan</a></li>
			<li><a href="#profile">Itenerary</a></li>
			<li><a href="#messages">Rincian harga</a></li>

		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="home">
				<p><?php echo  $objek->description; ?></p>

			</div>
			<div class="tab-pane" id="profile"><p><?php echo  $objek->itinerary; ?></p></div>
			<div class="tab-pane" id="messages"><p><?php //echo  $objek->content_3; ?></p></div>

		</div>
	</div>
	<div class="detail-content">
		<h3>Testimonials</h3>
		<section class="comments">
			<?php foreach($objek->comments as $comment):?>
			<article class="comment">
				<a class="comment-img" href="#non">
					<img src="<?php echo CHtml::normalizeUrl(array('/image/default/create',
						 'id'=>$comment->commentor->profile->id_image,'version'=>'commentprofile')); ?>" alt="" width="50" height="50" />
				</a>

				<div class="comment-body">
					<div class="text">
						<p><?php echo CHtml::encode($comment->content);?></p>
					</div>
					<p class="attribution">by <a href="#non"><?php echo $comment->commentor->profile->firstname; ?></a> at <?php echo date("h:ia, tS M Y", strtotime($comment->time)); ?></p>
				</div>
			</article>
			<?php endforeach; ?>
			</section>​
		</div>

	</div>
	<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Kirim Pesan kepada Vanbungkring</h3>
		</div>
		<div class="modal-body">
			<h3> Judul Pesan</h3>
			<input class="input-block-level" type="text" placeholder="Judul">
			<h3> Yang ingin anda Tanyakan</h3>
			<p>Tanyakan kepada Vanbungkring apa yang anda inginkan, seperti: diskon jika peserta perjalanan lebih dari 1 orang, penginapan, transportasi dan lain-lain...</p>
			<textarea rows="3"></textarea>
		</div>
		<div class="modal-footer">
			
			<button class="btn btn-success">Kirim Pesan anda</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Batalkan</button>
		</div>
	</div>