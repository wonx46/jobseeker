<?php include 'header.php'; ?>
<?php include 'search-form.php'; ?>

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
                                    <h4><a >Marketing Graphic Design / 2D Artist</a></h4>
                                    <p>Kementrian Pertanian</p>
                                    <a href="#" class="text"><i class="fa fa-map-marker"></i>Jakarta</a> <a href="#" class="text"><i class="fa fa-calendar"></i>Dec 30, 2018 - Feb 20, 2019 </a> 
                                </div>
                                <a href="#" class="btn-1 btn-color-2 ripple">Full Time</a>  
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <div class="text-col">
                                    <h4><a >Marketing Graphic Design / 2D Artist</a></h4>
                                    <p>Bank Mandiri</p>
                                    <a href="#" class="text"><i class="fa fa-map-marker"></i>Riau</a> <a href="#" class="text"><i class="fa fa-calendar"></i>Dec 30, 2018- Feb 20, 2019 </a> 
                                </div>
                                <a href="#" class="btn-1 btn-color-2 ripple">Full Time</a> 
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <div class="text-col">
                                    <h4><a >Marketing Graphic Design / 2D Artist</a></h4>
                                    <p>Perusahan Listrik Negara</p>
                                    <a href="#" class="text"><i class="fa fa-map-marker"></i>Medan</a> <a href="#" class="text"><i class="fa fa-calendar"></i>Dec 30, 2018 - Feb 20, 2019 </a> 
                                </div>
                                <a href="#" class="btn-1 btn-color-3 ripple">Magang</a> 
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <h2>Jobs Gallery</h2>
                <aside>
                    <div class="sidebar">
                        <div class="sidebar-jobs">
                            <ul>
                                <li> <a>General Compliance Officer</a> <span><i class="fa fa-map-marker"></i>Jakarta </span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                <li> <a>Medical Transcrption</a> <span><i class="fa fa-map-marker"></i>Surabaya</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                <li> <a>Support Coordinator</a> <span><i class="fa fa-map-marker"></i>Palembang</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                <li> <a>Mobile Application Developer</a> <span><i class="fa fa-map-marker"></i>Jakarta</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                <li> <a>2D/3D Graphic Designer</a> <span><i class="fa fa-map-marker"></i>Medan</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                <li> <a>Corporate Sales Executive</a> <span><i class="fa fa-map-marker"></i>Jakarta</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<h4><?php _e($count); ?> <?php echo $lang->t('search|jobs_found'); ?> "<?php _e($terms); ?>"</h4>
<?php foreach($categories as $category): ?>
<h3><?php _e($category->name); ?> <?php echo $lang->t('jobs|jobs'); ?></h3>
<div class="list-group">
<?php if (isset($jobs[$category->id])):
foreach($jobs[$category->id] as $job): ?>
    <a class="list-group-item <?php if ($job->is_featured): ?>job-highlight<?php endif; ?>" href="<?php _e(BASE_URL ."jobs/{$job->id}/". slugify($job->title ." {$lang->t('jobs|at')} ". $job->company_name)); ?>">
    <h4>
        <span class="job-title"><?php _e($job->title); ?></span>&nbsp;
        <span class="job-company"><?php _e($job->company_name); ?></span>
        <span class="badge pull-right"><?php niceDate($job->created); ?></span>
    </h4>
    </a>
<?php endforeach; 
endif; ?>
    <a class="list-group-item" href="<?php _e(BASE_URL ."categories/{$category->id}/{$category->url}"); ?>">
        <h5><?php echo $lang->t('jobs|view_all', $category->name); ?></h5>
    </a>
</div>
<?php endforeach; ?>

<div class="pull-right"><a href="#top"><?php echo $lang->t('jobs|back_to_top'); ?></a></div>
<?php include 'footer.php'; ?>