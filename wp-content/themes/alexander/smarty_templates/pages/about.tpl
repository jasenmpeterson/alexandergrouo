<section class="expertise--background--image--wrap" style="background: url({$stats_image})">
    <section class="row">
        <div class="col-xs">
            <div class="box expertise--title">
                <h2>{$stats_title}</h2>
            </div>
        </div>
    </section>
    <div class="row expertise--stats center-xs">
        {foreach $stats as $stat}
            <div class="col-md-3 col-sm-12">
                <section class="expertise--stat">
                    <h1>{$stat['label']}</h1>
                    {$stat['content']}
                </section>
            </div>
        {/foreach}
    </div>
</section>

<section class="video--wrapper--container about--video--wrapper--container">
    <div class="about--page--video--wrapper video--wrapper js--video--wrapper">
        <iframe class="video--iframe js--video--iframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="{$about_us_video}"></iframe>
        <button class="video--poster" style="background:url({$about_us_video_poster});">
            Play Video
        </button>
    </div>
</section>

<section class="page--banner--image--container content--image--block">
    <section class="page--banner--image" style="background: url({$content_block_image_three})"></section>
</section>

<div class="row">
    <div class="col-md-3 col-sm-1 silver"></div>
    <div class="col-md-6 col-sm-10 box--shadow--all">
        <div class="box about--box">
            {$content_block}
        </div>
    </div>
    <div class="col-md-3 col-sm-1 dark--gray"></div>
</div>

<div class="row">
    <div class="col-md-6 col-sm-12 baby--blue">
        <div class="row">
            <section class="page--banner--image--container content--image--block content--image--block--one">
                <section class="page--banner--image" style="background: url({$content_block_image})"></section>
            </section>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="box content--box">
                    {$content_block_three}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 silver">
        <div class="row">
            <div class="col-sm">
                <div class="box content--box silver--content">
                    {$content_block_two}
                </div>
            </div>
        </div>
        <div class="row">
            <section class="page--banner--image--container content--image--block content--image--block--one">
                <section class="page--banner--image" style="background: url({$content_block_image_two})"></section>
            </section>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="box about--box">
            {$content_block_four}
        </div>
    </div>
    <div class="col-md-6 col-sm-12 silver"></div>
</div>

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