<section class="services--page--banner page--banner interior--page--banner row center-xs middle-xs">
    <div class="col-xs">
        <section class="page--banner--image" style="background: url({$featured_image})"></section>
        <div class="col-xs page--banner--content">
            <h1>{$page_title}</h1>
        </div>
    </div>
</section>

<div class="row">
    <div class="col-xs-3 silver"></div>
    <div class="col-xs-6 box--shadow--all">
        <div class="box services--content">
            {$content}
        </div>
    </div>
    <div class="col-xs-3 dark--gray"></div>
</div>

<div class="row dark--gray">
    <div class="col-xs-6 services--content--image--block services--content--image--block--one">
        <section class="content--block--page--banner page--banner--image box--shadow--all" style="background: url({$content_block_image})"></section>
    </div>
    <div class="col-xs-6">
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
                    {foreach $industries as $industry}
                        <a href="javascript:void(0);" class="button--default" data-name="{$industry['label']} ">
                            <span>{$industry['label']}</span>
                            <div class="line"></div>
                        </a>
                        <div class="services--content" data-name="{$industry['label']} ">
                            <div class="services--close--button">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 640 480">
                                    <path d="M319.4 126C256.2 126 205 177.2 205 240.4s51.2 114.4 114.4 114.4 114.4-51.2 114.4-114.4S382.6 126 319.4 126zm0 207.4c-51.3 0-93-41.6-93-93 0-51.3 41.6-93 93-93s93 41.6 93 93-41.6 93-93 93zm20.3-93l20.2-20.2c2.8-2.8 2.8-7.3 0-10.1L349.8 200c-2.8-2.8-7.3-2.8-10.1 0l-20.2 20.2-20.2-20.2c-2.8-2.8-7.3-2.8-10.1 0L279 210c-2.8 2.8-2.8 7.3 0 10.1l20.2 20.2-20.2 20.2c-2.8 2.8-2.8 7.3 0 10.1l10.1 10.1c2.8 2.8 7.3 2.8 10.1 0l20.2-20.2 20.3 20.3c2.8 2.8 7.3 2.8 10.1 0l10.1-10.1c2.8-2.8 2.8-7.3 0-10.1l-20.2-20.2zm0 0" class="st0"></path>
                                </svg>
                            </div>
                            <h2>{$industry['label']}</h2>
                            {$industry['content']}
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
        <div class="row functions--list services--list">
            <div class="col-xs">
                <div class="box expertise--content--block--x-padding">
                    <h2>{$functions_title} &ndash;</h2>
                    {foreach $functions as $function}
                        <a href="javascript:void(0);" class="button--default" data-name="{$function['label']}">
                            <span>{$function['label']}</span>
                            <div class="line"></div>
                        </a>
                        <div class="services--content" data-name="{$function['label']}">
                            <div class="services--close--button">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 640 480">
                                    <path d="M319.4 126C256.2 126 205 177.2 205 240.4s51.2 114.4 114.4 114.4 114.4-51.2 114.4-114.4S382.6 126 319.4 126zm0 207.4c-51.3 0-93-41.6-93-93 0-51.3 41.6-93 93-93s93 41.6 93 93-41.6 93-93 93zm20.3-93l20.2-20.2c2.8-2.8 2.8-7.3 0-10.1L349.8 200c-2.8-2.8-7.3-2.8-10.1 0l-20.2 20.2-20.2-20.2c-2.8-2.8-7.3-2.8-10.1 0L279 210c-2.8 2.8-2.8 7.3 0 10.1l20.2 20.2-20.2 20.2c-2.8 2.8-2.8 7.3 0 10.1l10.1 10.1c2.8 2.8 7.3 2.8 10.1 0l20.2-20.2 20.3 20.3c2.8 2.8 7.3 2.8 10.1 0l10.1-10.1c2.8-2.8 2.8-7.3 0-10.1l-20.2-20.2zm0 0" class="st0"></path>
                                </svg>
                            </div>
                            <h2>{$function['label']}</h2>
                            {$function['content']}
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row baby--blue">
    <div class="col-xs-6">
        <div class="box expertise--content--block--x-padding">
            {$content_block_two}
        </div>
    </div>
    <div class="col-xs-6 services--content--image--block">
        <section class="content--block--page--banner page--banner--image box--shadow--all" style="background: url({$content_block_image_two})"></section>
    </div>
</div>