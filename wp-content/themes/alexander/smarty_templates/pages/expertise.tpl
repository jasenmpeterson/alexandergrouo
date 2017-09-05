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
    <div class="col-xs-4 baby--blue--gradient expertise--headline">
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
            <div class="col-xs-6">
                <div class="box expertise--content--block final--content--block box--shadow--all">
                    {$content_block_three}
                </div>
                <section class="page--banner--image--container">
                    <section class="content--block--page--banner page--banner--image box--shadow--all" style="background: url({$content_block_image})"></section>
                </section>
            </div>
        </div>
    </div>
    <div class="col-xs-1 silver"></div>
</div>

<section class="expertise--background--image--wrap" style="background: url({$expertise_image})">
    <section class="row">
        <div class="col-xs-1 dark--blue"></div>
        <div class="col-xs">
            <div class="box expertise--title">
                <h2>{$experience_title}</h2>
            </div>
        </div>
    </section>
    <div class="row expertise--stats center-xs">
        <div class="col-xs-1 dark--blue"></div>
        <div class="col-xs">
            <div class="row">
                {foreach $experience_stats as $experience_stat}
                    <div class="col-xs-4">
                        <section class="expertise--stat">
                            <h1>{$experience_stat['label']}</h1>
                            {$experience_stat['content']}
                        </section>
                    </div>
                {/foreach}
            </div>
        </div>
        <div class="col-xs-1 silver"></div>
    </div>
</section>

<section class="expertise--content--blocks expertise--content--block--four row">
    <div class="col-xs-1 dark--blue"></div>
    <div class="col-xs-6">
        <div class="box">
            {$content_block_four}
        </div>
        <div class="box">
            {$content_block_five}
        </div>
        <div class="box">
            {$content_block_six}
        </div>
    </div>
</section>