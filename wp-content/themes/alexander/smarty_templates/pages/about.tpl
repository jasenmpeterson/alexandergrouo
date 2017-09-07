<section class="video--wrapper--container">
    <div class="about--page--video--wrapper video--wrapper js--video--wrapper">
        <iframe class="video--iframe js--video--iframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="{$about_us_video}"></iframe>
        <button class="video--poster" style="background:url({$about_us_video_poster});">
            Play Video
        </button>
    </div>
</section>

<section class="about--us--container row">
    <section class="col-sm-1 col-md-4 silver"></section>
    <section class="col-sm-12 col-md-7">
        <div class="row middle-xs">
            <section class="col-xs">

                <div class="row middle-xs box--shadow--all">
                    <section class="col-md-6 col-sm-12">
                        <div class="box about--us--title">
                            <h1>{$about_us_title}</h1>
                        </div>
                    </section>
                    <section class="col-md-6 col-sm-12">
                        <div class="box about--us--content">
                            {$about_us_content}
                        </div>
                    </section>
                </div>

                <div class="row search-types">
                    <section class="col-sm-12 col-md-9 dark--gray box--shadow--left">
                        {foreach $searches as $search}
                            <div class="box">
                                <h1>{$search['label']}</h1>
                                {$search['content']}
                            </div>
                        {/foreach}
                    </section>
                    <section class="col-sm-12 col-md-3 page--banner--image--container">
                        <section class="page--banner--image about--page--image" style="background: url({$featured_image})"></section>
                    </section>
                </div>

            </section>
        </div>
    </section>
    <section class="col-xs-1 dark--blue"></section>
</section>

<section class="our--culture--container">
    <section class="video--wrapper--container">
        <div class="our--culture--video--wrapper video--wrapper js--video--wrapper">
            <iframe class="video--iframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="{$our_culture_video}"></iframe>
            <button class="video--poster" style="background:url({$our_culture_video_poster});">
                Play Video
            </button>
        </div>
    </section>
    <div class="row our--culture--quote">
        <div class="col-xs-1 dark--blue"></div>
        <div class="col-md-4 col-sm-10 dark--gray">
            <div class="box">
                {$our_culture_quote}
            </div>
        </div>
        <div class="col-sm-1 col-md-7 baby--blue"></div>
    </div>
    <div class="row our--culture--content">
        <div class="col-xs-1"></div>
        <div class="col-sm-12 col-md-6">
            <div class="box">
                {$our_culture_content}
            </div>
        </div>
    </div>
</section>