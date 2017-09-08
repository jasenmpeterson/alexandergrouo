<section class="services--page--banner page--banner interior--page--banner row center-xs middle-xs">
    <div class="col-xs">
        <section class="page--banner--image" style="background: url({$featured_image})"></section>
        <div class="col-xs page--banner--content">
            <h1>{$page_title}</h1>
        </div>
    </div>
</section>

<div class="row">
    <div class="col-md-3 col-sm-1 silver"></div>
    <div class="col-md-6 col-sm-10 box--shadow--all">
        <div class="box services--content">
            {$content}
        </div>
    </div>
    <div class="col-md-3 col-sm-1 dark--gray"></div>
</div>

<div class="row dark--gray">
    <div class="col-md-6 col-sm-12 services--content--image--block services--content--image--block--one">
        <section class="content--block--page--banner page--banner--image box--shadow--all" style="background: url({$content_block_image})"></section>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="row">
            <div class="col-xs services--content--block--one baby--blue">
                <div class="box box--shadow--all expertise--content--block--x-padding">
                    {$content_block}
                </div>
            </div>
        </div>
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

<div class="row baby--blue">
    <div class="col-md-6 col-sm-12">
        <div class="box expertise--content--block--x-padding">
            {$content_block_two}
        </div>
    </div>
    <div class="col-md-6 col-sm-12 services--content--image--block">
        <section class="content--block--page--banner page--banner--image box--shadow--all" style="background: url({$content_block_image_two})"></section>
    </div>
</div>