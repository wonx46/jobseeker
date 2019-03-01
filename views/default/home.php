<?php include 'header.php'; ?>
<div class="banner-outer">
    <div id="banner" class="element"><img src="<?php echo ASSET_URL ."images/banner-img-1.png"; ?>"> </div>
    <div class="caption">
        <div class="holder">
            <h1>Bursa Lowongan Kerja DEPNAKER Terbaru</h1>
        </div>
    </div>
    <div class="browse-job-section">
        <div class="container">
            <div class="holder"> <strong class="title">Cari pekerjaan di kementrian, BANK, BUMN, CPNS, di situs resmi pencarian kerja dari pemerintah </strong> </div>
        </div>
    </div>
</div>
<section class="process-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="icon-box"><i class="fa fa-money"></i></div>
                <div class="text-box">
                    <h4>Tanpa Dipungut Biaya</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box"><i class="fa fa-user-secret"></i></div>
                <div class="text-box">
                    <h4>Keamanan Data</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box"><i class="fa fa-check-square-o"></i></div>
                <div class="text-box">
                    <h4>Transparan</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <?php foreach($categories as $category): ?>

<a name="<?php _e($category->url); ?>"></a>
<h3><?php _e($category->name); ?> <?php echo $lang->t('jobs|jobs'); ?> <a href="<?php _e(BASE_URL ."categories/{$category->id}/{$category->url}/rss"); ?>" target="_blank" class="badge job-rss">RSS</a></h3>
<div class="list-group">
<?php foreach($jobs[$category->id] as $job): ?>
    <a class="list-group-item <?php if ($job->is_featured): ?>job-highlight<?php endif; ?>" href="<?php _e(BASE_URL ."jobs/{$job->id}/". slugify($job->title ." {$lang->t('jobs|at')} ". $job->company_name)); ?>">
    <h4>
        <span class="job-title"><?php _e($job->title); ?></span>&nbsp;
        <span class="job-company"><?php _e($job->company_name); ?></span>
        <span class="badge pull-right"><?php niceDate($job->created); ?></span>
    </h4>
    </a>
<?php endforeach; ?>
    <a class="list-group-item" href="<?php _e(BASE_URL ."categories/{$category->id}/{$category->url}"); ?>">
        <h5><?php echo $lang->t('jobs|view_all', $category->name); ?></h5>
    </a>
    
</div>

<?php endforeach; ?> -->
<section class="recent-row padd-tb">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <div id="content-area">
                    <h2>Pekerjaan Terbaru</h2>
                    <ul id="myList">
                        <li>
                            <div class="box">
                                <div class="text-col">
                                    <h4><a <?php if ($job->is_featured): ?>job-highlight<?php endif; ?>" href="<?php _e(BASE_URL ."jobs/{$job->id}/". slugify($job->title ." {$lang->t('jobs|at')} ". $job->company_name)); ?>">Marketing Graphic Design / 2D Artist</a></h4>
                                    <p>Kementrian Pertanian</p>
                                    <a href="#" class="text"><i class="fa fa-map-marker"></i>Jakarta</a> <a href="#" class="text"><i class="fa fa-calendar"></i>Dec 30, 2018 - Feb 20, 2019 </a> 
                                </div>
                                <a href="#" class="btn-1 btn-color-2 ripple">Full Time</a>  
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <div class="text-col">
                                    <h4><a <?php if ($job->is_featured): ?>job-highlight<?php endif; ?>" href="<?php _e(BASE_URL ."jobs/{$job->id}/". slugify($job->title ." {$lang->t('jobs|at')} ". $job->company_name)); ?>">Public Relation Executive Manager</a></h4>
                                    <p>Bank Mandiri</p>
                                    <a href="#" class="text"><i class="fa fa-map-marker"></i>Riau</a> <a href="#" class="text"><i class="fa fa-calendar"></i>Dec 30, 2018- Feb 20, 2019 </a> 
                                </div>
                                <a href="#" class="btn-1 btn-color-2 ripple">Full Time</a> 
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <div class="text-col">
                                    <h4><a <?php if ($job->is_featured): ?>job-highlight<?php endif; ?>" href="<?php _e(BASE_URL ."jobs/{$job->id}/". slugify($job->title ." {$lang->t('jobs|at')} ". $job->company_name)); ?>">Instructor Classroom Head</a></h4>
                                    <p>Perusahan Listrik Negara</p>
                                    <a href="#" class="text"><i class="fa fa-map-marker"></i>Medan</a> <a href="#" class="text"><i class="fa fa-calendar"></i>Dec 30, 2018 - Feb 20, 2019 </a> 
                                </div>
                                <a href="#" class="btn-1 btn-color-3 ripple">Magang</a> 
                            </div>
                        </li>
                    </ul>
                    <div id="loadMore"> <a href="#" class="load-more"><i class="fa fa-user"></i>Load More Jobs</a></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <h2>Jobs Gallery</h2>
                <aside>
                    <div class="sidebar">
                        <div class="sidebar-jobs">
                            <ul>
                                <li> <a <?php if ($job->is_featured): ?>job-highlight<?php endif; ?>" href="<?php _e(BASE_URL ."jobs/{$job->id}/". slugify($job->title ." {$lang->t('jobs|at')} ". $job->company_name)); ?>">General Compliance Officer</a> <span><i class="fa fa-map-marker"></i>Jakarta </span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                <li> <a <?php if ($job->is_featured): ?>job-highlight<?php endif; ?>" href="<?php _e(BASE_URL ."jobs/{$job->id}/". slugify($job->title ." {$lang->t('jobs|at')} ". $job->company_name)); ?>">Medical Transcrption</a> <span><i class="fa fa-map-marker"></i>Surabaya</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                <li> <a <?php if ($job->is_featured): ?>job-highlight<?php endif; ?>" href="<?php _e(BASE_URL ."jobs/{$job->id}/". slugify($job->title ." {$lang->t('jobs|at')} ". $job->company_name)); ?>">Support Coordinator</a> <span><i class="fa fa-map-marker"></i>Palembang</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                <li> <a <?php if ($job->is_featured): ?>job-highlight<?php endif; ?>" href="<?php _e(BASE_URL ."jobs/{$job->id}/". slugify($job->title ." {$lang->t('jobs|at')} ". $job->company_name)); ?>">Mobile Application Developer</a> <span><i class="fa fa-map-marker"></i>Jakarta</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                <li> <a <?php if ($job->is_featured): ?>job-highlight<?php endif; ?>" href="<?php _e(BASE_URL ."jobs/{$job->id}/". slugify($job->title ." {$lang->t('jobs|at')} ". $job->company_name)); ?>">2D/3D Graphic Designer</a> <span><i class="fa fa-map-marker"></i>Medan</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                <li> <a <?php if ($job->is_featured): ?>job-highlight<?php endif; ?>" href="<?php _e(BASE_URL ."jobs/{$job->id}/". slugify($job->title ." {$lang->t('jobs|at')} ". $job->company_name)); ?>">Corporate Sales Executive</a> <span><i class="fa fa-map-marker"></i>Jakarta</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>


<section class="facts-box">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="round-icon"><i class="fa fa-users"></i></div></br>
                <a href="#" class="btn-bg-color-1 facts-btn">Penerimaan CPNS</a> 
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="round-icon"><i class="fa fa-paper-plane"></i></div></br>
                <a href="#" class="btn-bg-color-2 facts-btn">Pengumuman Seleksi</a> 
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="round-icon"><i class="fa fa-check-square-o"></i></div></br>
                <a href="#" class="btn-bg-color-3 facts-btn">Pelatihan Kerja</a> 
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="round-icon"><i class="fa fa-building-o"></i></div></br>
                <a href="#" class="btn-bg-color-4 facts-btn">TKA Online</a> 
            </div>
        </div>
    </div>
</section>

<section class="post-section padd-tb">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="post-box">
                    <div class="text-box"> <strong class="date"><i class="fa fa-calendar"></i>Jan 17, 2019</strong>
                    <h4><a href="#">Dengan Event Rakorwas Itjen kita pertahankan Opini WTP</a></h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant doloremque laudantium, totam rem aperiam eaque ipsa quae.</p>
                    <strong class="name"><span>By</span>digum</strong> </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="post-box">
                    <div class="text-box"> <strong class="date"><i class="fa fa-calendar"></i>Feb 20, 2019 </strong>
                    <h4><a href="#">Revolusi Industri 4.0 Ciptakan 3,7 Juta Pekerjaan Baru</a></h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant doloremque laudantium, totam rem aperiam eaque ipsa quae.</p>
                    <strong class="name"><span>By</span>digum</strong> </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="post-box">
                    <div class="text-box"> <strong class="date"><i class="fa fa-calendar"></i>Feb 09, 2019</strong>
                    <h4><a href="#">Kemnaker Genjot Pelatihan Vokasi </a></h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant doloremque laudantium, totam rem aperiam eaque ipsa quae.</p>
                    <strong class="name"><span>By</span>digum</strong> </div>
                </div>
            </div>
        </div>
    </div>
</section>

  


<?php include 'flash.php'; ?>

<p class="pull-right"><a href="#top"><?php echo $lang->t('jobs|back_to_top'); ?></a></p>
<?php include 'footer.php'; ?>