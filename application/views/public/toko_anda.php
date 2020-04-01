<?php 
	include ("part/head.php");
?>
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php 
			include ("part/header.php");
			//$user = $this->session->userdata();

			$q = $this->m_pengguna->by_id($this->session->userdata('id_pengguna'));
			$user = $q->result_array()[0];
		?>

		

<!-- Content
		============================================= -->
		<div class="clear"></div>
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="row clearfix">

						<div class="col-md-9">


							<div class="heading-block noborder">
								<h3><?php echo $user['nama']?></h3>
								<span><?php echo $user['perusahaan']?></span>
							</div>

							<div class="clear"></div>

							<div class="row clearfix">

								<div class="col-lg-12">

									<div class="tabs tabs-alt clearfix" id="tabs-profile">

										<ul class="tab-nav clearfix">
											<li><a href="#tab-feeds"><i class="icon-user"></i> Profil</a></li>
											<li><a href="#tab-posts"><i class="icon-pencil2"></i> Posts</a></li>
											<li><a href="#tab-replies"><i class="icon-reply"></i> Replies</a></li>
											<li><a href="#tab-connections"><i class="icon-users"></i> Connections</a></li>
										</ul>

										<div class="tab-container">

											<div class="tab-content clearfix" id="tab-feeds">

												<p class="">Hi <b><?php echo $user['nama']?>..</b> selamat data di okiklan.com, silahkan pastikan profil anda sesuai dibawah ini.</p>

												<form id="form_profile_anda">
								                    <input type="hidden" name="id_pengguna" id="id_pengguna" value="<?php echo $user['id_pengguna']?>">
								                    
								                    <div class="form-group">
								                        <label class="control-label">email</label>
								                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $user['email']?>">
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">nama</label>
								                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $user['nama']?>">
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">perusahaan</label>
								                        <input type="text" class="form-control" name="perusahaan" id="perusahaan" value="<?php echo $user['perusahaan']?>">
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">nama_bank</label>
								                        <select type="text" class="form-control" name="nama_bank" id="nama_bank" value="<?php echo $user['nama_bank']?>">
								                            <?php 
								                                foreach ($this->m_util->all_bank()->result() as $bank) {
								                                    echo "<option value='$bank->nama'>$bank->nama</option>";
								                                }
								                            ?>
								                        </select>
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">no_rekening</label>
								                        <input type="text" class="form-control nomor" name="no_rekening" id="no_rekening" value="<?php echo $user['no_rekening']?>">
								                    </div>
								                    <div class="form-group">
								                    	<?php $tgl_lahir = $user['tgl_lahir']=="0000-00-00"?"1980-01-01":$user['tgl_lahir'];?>
								                        <label class="control-label">tgl_lahir</label>
								                        <input type="text" class="form-control datepicker" name="tgl_lahir" id="tgl_lahir" value="<?php echo $tgl_lahir?>">
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">jenis_kelamin</label>
								                        <select type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $user['jenis_kelamin']?>">
								                            <option value="L">L</option>
								                            <option value="P">P</option>
								                        </select>
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">no_hp</label>
								                        <input type="text" class="form-control nomor" name="no_hp" id="no_hp" value="<?php echo $user['no_hp']?>">
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">alamat</label>
								                        <textarea type="text" class="form-control" name="alamat" id="alamat"><?php echo $user['alamat']?>
								                        </textarea>
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">ktp</label>
								                        <input type="text" class="form-control nomor" name="ktp" id="ktp" value="<?php echo $user['ktp']?>">
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">npwp</label>
								                        <input type="text" class="form-control nomor" name="npwp" id="npwp" value="<?php echo $user['npwp']?>">
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">password</label>
								                        <input type="password" class="form-control" name="password" id="password" value="<?php echo $user['password']?>">
								                    </div>

								                    
								                    <div id="info_update_profil"></div>
								                    <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
								                </form>

											</div>
											<div class="tab-content clearfix" id="tab-posts">

												<div class="row topmargin-sm clearfix">

													<div class="col-12 bottommargin-sm">
														<div class="ipost clearfix">
															<div class="row clearfix">
																<div class="col-md-4">
																	<div class="entry-image">
																		<a href="images/portfolio/full/17.jpg" data-lightbox="image"><img class="image_fade" src="images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
																	</div>
																</div>
																<div class="col-md-8">
																	<div class="entry-title">
																		<h3><a href="blog-single.html">This is a Standard post with a Preview Image</a></h3>
																	</div>
																	<ul class="entry-meta clearfix">
																		<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
																		<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
																		<li><a href="#"><i class="icon-camera-retro"></i></a></li>
																	</ul>
																	<div class="entry-content">
																		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="col-12 bottommargin-sm">
														<div class="ipost clearfix">
															<div class="row clearfix">
																<div class="col-md-4">
																	<div class="entry-image">
																		<iframe src="https://player.vimeo.com/video/87701971" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
																	</div>
																</div>
																<div class="col-md-8">
																	<div class="entry-title">
																		<h3><a href="blog-single.html">This is a Standard post with a Embed Video</a></h3>
																	</div>
																	<ul class="entry-meta clearfix">
																		<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
																		<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
																		<li><a href="#"><i class="icon-camera-retro"></i></a></li>
																	</ul>
																	<div class="entry-content">
																		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="col-12 bottommargin-sm">
														<div class="ipost clearfix">
															<div class="row clearfix">
																<div class="col-md-4">
																	<div class="entry-image">
																		<div class="fslider" data-arrows="false">
																			<div class="flexslider">
																				<div class="slider-wrap">
																					<div class="slide"><img class="image_fade" src="images/blog/grid/10.jpg" alt="Standard Post with Gallery"></div>
																					<div class="slide"><img class="image_fade" src="images/blog/grid/20.jpg" alt="Standard Post with Gallery"></div>
																					<div class="slide"><img class="image_fade" src="images/blog/grid/21.jpg" alt="Standard Post with Gallery"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-md-8">
																	<div class="entry-title">
																		<h3><a href="blog-single.html">This is a Standard post with a Slider Gallery</a></h3>
																	</div>
																	<ul class="entry-meta clearfix">
																		<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
																		<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
																		<li><a href="#"><i class="icon-camera-retro"></i></a></li>
																	</ul>
																	<div class="entry-content">
																		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>

												</div>

											</div>
											<div class="tab-content clearfix" id="tab-replies">

												<div class="clear topmargin-sm"></div>
												<ol class="commentlist noborder nomargin nopadding clearfix">
													<li class="comment even thread-even depth-1" id="li-comment-1">
														<div id="comment-1" class="comment-wrap clearfix">
															<div class="comment-meta">
																<div class="comment-author vcard">
																	<span class="comment-avatar clearfix">
																	<img alt='' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>
																</div>
															</div>
															<div class="comment-content clearfix">
																<div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span></div>
																<p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
																<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>
															</div>
															<div class="clear"></div>
														</div>
														<ul class='children'>
															<li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">
																<div id="comment-3" class="comment-wrap clearfix">
																	<div class="comment-meta">
																		<div class="comment-author vcard">

																			<span class="comment-avatar clearfix">
																			<img alt='' src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G' class='avatar avatar-40 photo' height='40' width='40' /></span>

																		</div>
																	</div>
																	<div class="comment-content clearfix">
																		<div class="comment-author"><a href='#' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

																		<p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

																		<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>
																	</div>
																	<div class="clear"></div>
																</div>
															</li>
														</ul>
													</li>

													<li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">
														<div class="comment-wrap clearfix">
															<div class="comment-meta">
																<div class="comment-author vcard">
																	<span class="comment-avatar clearfix">
																	<img alt='' src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' /></span>
																</div>
															</div>
															<div class="comment-content clearfix">
																<div class="comment-author"><a href='https://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

																<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

																<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>
															</div>
															<div class="clear"></div>
														</div>
													</li>

												</ol>

											</div>
											<div class="tab-content clearfix" id="tab-connections">

												<div class="row topmargin-sm">
													<div class="col-lg-3 col-md-6 bottommargin">

														<div class="team">
															<div class="team-image">
																<img src="images/team/3.jpg" alt="John Doe">
															</div>
															<div class="team-desc">
																<div class="team-title"><h4>John Doe</h4><span>CEO</span></div>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
																	<i class="icon-facebook"></i>
																	<i class="icon-facebook"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
																	<i class="icon-twitter"></i>
																	<i class="icon-twitter"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
																	<i class="icon-gplus"></i>
																	<i class="icon-gplus"></i>
																</a>
															</div>
														</div>

													</div>

													<div class="col-lg-3 col-md-6 bottommargin">

														<div class="team">
															<div class="team-image">
																<img src="images/team/2.jpg" alt="Josh Clark">
															</div>
															<div class="team-desc">
																<div class="team-title"><h4>Josh Clark</h4><span>Co-Founder</span></div>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
																	<i class="icon-facebook"></i>
																	<i class="icon-facebook"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
																	<i class="icon-twitter"></i>
																	<i class="icon-twitter"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
																	<i class="icon-gplus"></i>
																	<i class="icon-gplus"></i>
																</a>
															</div>
														</div>

													</div>

													<div class="col-lg-3 col-md-6 bottommargin">

														<div class="team">
															<div class="team-image">
																<img src="images/team/8.jpg" alt="Mary Jane">
															</div>
															<div class="team-desc">
																<div class="team-title"><h4>Mary Jane</h4><span>Sales</span></div>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
																	<i class="icon-facebook"></i>
																	<i class="icon-facebook"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
																	<i class="icon-twitter"></i>
																	<i class="icon-twitter"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
																	<i class="icon-gplus"></i>
																	<i class="icon-gplus"></i>
																</a>
															</div>
														</div>

													</div>

													<div class="col-lg-3 col-md-6">

														<div class="team">
															<div class="team-image">
																<img src="images/team/4.jpg" alt="Nix Maxwell">
															</div>
															<div class="team-desc">
																<div class="team-title"><h4>Nix Maxwell</h4><span>Support</span></div>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
																	<i class="icon-facebook"></i>
																	<i class="icon-facebook"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
																	<i class="icon-twitter"></i>
																	<i class="icon-twitter"></i>
																</a>
																<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
																	<i class="icon-gplus"></i>
																	<i class="icon-gplus"></i>
																</a>
															</div>
														</div>

													</div>
												</div>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="w-100 line d-block d-md-none"></div>

						<div class="col-md-3 clearfix">

							<div class="list-group">
								<a href="#" class="list-group-item list-group-item-action clearfix">Profile <i class="icon-user float-right"></i></a>
								<a href="#" class="list-group-item list-group-item-action clearfix">Servers <i class="icon-laptop2 float-right"></i></a>
								<a href="#" class="list-group-item list-group-item-action clearfix">Messages <i class="icon-envelope2 float-right"></i></a>
								<a href="#" class="list-group-item list-group-item-action clearfix">Billing <i class="icon-credit-cards float-right"></i></a>
								<a href="#" class="list-group-item list-group-item-action clearfix">Settings <i class="icon-cog float-right"></i></a>
								<a href="#" class="list-group-item list-group-item-action clearfix">Logout <i class="icon-line2-logout float-right"></i></a>
							</div>

							<div class="fancy-title topmargin title-border">
								<h4>About Me</h4>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum laboriosam, dignissimos veniam obcaecati. Quasi eaque, odio assumenda porro explicabo laborum!</p>

							<div class="fancy-title topmargin title-border">
								<h4>Social Profiles</h4>
							</div>

							<a href="#" class="social-icon si-facebook si-small si-rounded si-light" title="Facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-gplus si-small si-rounded si-light" title="Google+">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-dribbble si-small si-rounded si-light" title="Dribbble">
								<i class="icon-dribbble"></i>
								<i class="icon-dribbble"></i>
							</a>

							<a href="#" class="social-icon si-flickr si-small si-rounded si-light" title="Flickr">
								<i class="icon-flickr"></i>
								<i class="icon-flickr"></i>
							</a>

							<a href="#" class="social-icon si-linkedin si-small si-rounded si-light" title="LinkedIn">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>

							<a href="#" class="social-icon si-twitter si-small si-rounded si-light" title="Twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->



<?php 
include ("part/footer.php");
?>

<script type="text/javascript">
$('#tgl_lahir').datepicker({
	autoclose: true,	
	format: "yyyy-mm-dd",


});
hanya_nomor(".nomor");	


$("#form_profile_anda").on("submit",function(){
	$.post("<?php echo base_url()?>index.php/welcome/update_profil",$(this).serialize(),function(e){
		console.log(e);
		$("#info_update_profil").html("<div class='alert alert-success'>Berhasil update profil.</div>");
	})
	return false;
})
</script>

</body>
</html>