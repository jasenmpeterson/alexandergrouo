<div class="row">
    <div class="col-sm-1 white"></div>
    <div class="col-xs silver">
        <section class="row center-xs">
            <div class="col-sm-12 col-md-10">
                <section class="breadcrumbs--container">
                    {$breadcrumbs}
                </section>
                <section class="single--post--page--banner page--banner interior--page--banner">
                    <section class="page--banner--image" style="background: url('{$siteURL}/wp-content/uploads/2017/06/pexels-photo-136413.jpg')">
                        <section class="single--post--title baby--blue--gradient">
                            <h1>{$page_title}</h1>
                            <span class="post--author"><a href="{$post_author_link}">Published by: {$post_author}</a></span>
                            <span class="post--date">Published on: {$post_date}</span>
                        </section>
                    </section>
                </section>
                <div class="row between-xs">
                    <div class="col-sm-12 col-md-8 single--post--content">
                        {$post_content}
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="box recent--post">
                            <h2><span>Recent</span> Articles</h2>
                            {$recent_posts}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>