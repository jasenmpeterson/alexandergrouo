<section class="expertise--page--banner page--banner interior--page--banner row center-xs middle-xs">
    <div class="col-xs-1 dark--blue"></div>
    <div class="col-xs">
        <section class="page--banner--image" style="background: url({$featured_image})"></section>
        <div class="col-xs page--banner--content">
            <h1>{$page_title}</h1>
        </div>
    </div>
</section>

<div class="row expertise--row">
    <div class="col-xs-1 dark--blue"></div>
    <div class="col-xs-3 baby--blue--gradient expertise--headline">
        <div class="box">
            {$headline}
        </div>
    </div>
    <div class="col-xs-1 silver" style="margin-left: auto;"></div>
</div>

<div class="row expertise--row">
    <div class="col-xs-1 dark--blue"></div>
    <div class="col-xs">
        <div class="row middle-xs center-xs">
            <div class="col-xs-4">
                <div class="box expertise--hero--text">
                    {$hero_text}
                </div>
            </div>
            <div class="col-xs-4">
                <div class="box expertise--content--block">
                    {$content_block}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-1 silver"></div>
</div>

<div class="row expertise--row">
    <div class="col-xs-1 dark--blue"></div>
    <div class="col-xs">
        <div class="row center-xs">
            <div class="col-xs-4">
                <div class="box expertise--content--block">
                    {$content_block_two}
                </div>
            </div>
            <div class="col-xs-4">
                <div class="box expertise--content--block final--content--block">
                    {$content_block_three}
                </div>
                <section class="page--banner--image--container">
                    <section class="content--block--page--banner page--banner--image about--page--image" style="background: url({$content_block_image})"></section>
                </section>
            </div>
        </div>
    </div>
    <div class="col-xs-1 silver"></div>
</div>

<div class="row expertise--stats center-xs">
    <div class="col-xs-1 dark--blue"></div>
    <div class="col-xs">
        <div class="row">
            {foreach $experience_stats as $experience_stat}
                <div class="col-xs-4">
                    <section class="expertise--stat">
                        <h2>{$experience_stat['label']}</h2>
                        {$experience_stat['content']}
                    </section>
                </div>
            {/foreach}
        </div>
    </div>
    <div class="col-xs-1 silver"></div>
</div>