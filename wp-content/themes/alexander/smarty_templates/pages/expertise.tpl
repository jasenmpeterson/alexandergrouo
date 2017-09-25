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
    <div class="col-md-4 baby--blue--gradient expertise--headline">
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
            <div class="col-md-6 col-sm-12">
                <div class="box expertise--hero--text">
                    {$hero_text}
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
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
            <div class="col-md-6 col-sm-12"></div>
            <div class="col-md-6 col-sm-12">
                <div class="box expertise--content--block final--content--block box--shadow--all">
                    {$content_block_three}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-1 silver"></div>
</div>

<section class="row search-types dark--gray">
    <div class="col-md-1"></div>
    <section class="col-sm-12 col-md-5 box--shadow--left">
        {foreach $searches as $search}
            <div class="box">
                <h1>
                    {if !empty($search['page_link'])}<a href="{$search['page_link']}">{$search['label']}</a>
                        {else}
                        {$search['label']}
                    {/if}
                </h1>
                {$search['content']}
            </div>
        {/foreach}
    </section>
    <section class="col-sm-12 col-md-5 dark--gray box--shadow--left" style="padding: 0;">
        <section class="page--banner--image--container expertise--banner--image--container">
            <section class="content--block--page--banner page--banner--image" style="background: url({$content_block_image})"></section>
        </section>
    </section>
    <div class="col-md-1 col-sm-12 silver"></div>
</section>

<div class="row dark--gray">
    <div class="col-md-6 col-sm-12" style="padding: 0;">
        <section class="page--banner--image--container expertise--banner--image--container">
            <section class="content--block--page--banner page--banner--image" style="background: url({$services_image})"></section>
        </section>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="row industries--list services--list">
            <div class="col-xs">
                <div class="box expertise--content--block--x-padding">
                    <h2>{$industries_title} &ndash;</h2>
                    {foreach $services as $service}
                        {if $service['label'][0]->slug == 'industry'}
                            <a href="{$service['link']}" class="button--default">
                                <span>{$service['title']}</span>
                                <div class="line"></div>
                            </a>
                        {/if}
                    {/foreach}
                </div>
            </div>
        </div>
        <div class="row functions--list services--list">
            <div class="col-xs">
                <div class="box expertise--content--block--x-padding">
                    <h2>{$functions_title} &ndash;</h2>
                    {foreach $services as $service}
                        {if $service['label'][0]->slug == 'function'}
                            <a href="{$service['link']}" class="button--default">
                                <span>{$service['title']}</span>
                                <div class="line"></div>
                            </a>
                        {/if}
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
</div>