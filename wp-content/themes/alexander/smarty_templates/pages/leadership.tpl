<section class="leadership--page--banner page--banner interior--page--banner row center-xs middle-xs">
    <section class="page--banner--image" style="background: url({$featured_image})"></section>
    <div class="col-xs page--banner--content">
        <h1>{$page_title}</h1>
    </div>
</section>

<div class="leadership--profiles">
    <div class="row">
        <div class="col-xs-1 dark--blue"></div>
        <div class="col-xs-11">
            <div class="row center-xs leadership--profile--row">
                {foreach $leadership_profiles as $leadership_profile name=loop}
                <div class="col-xs-3 profile--column">
                    <div class="profile box--shadow--all">
                        <section class="profile--image page--banner--image--container">
                            <section class="page--banner--image about--page--image" style="background: url({$leadership_profile['image']['url']})"></section>
                        </section>
                        <section class="profile--content">
                            <div class="box">
                                <h1>{$leadership_profile['name']}</h1>
                                <h2>{$leadership_profile['title']}</h2>
                                {$leadership_profile['description']}
                            </div>
                            <section class="profile--buttons box-shadow-all">
                                <a href="javascript:void(0);" data-id="{$leadership_profile['full_profile']}" class="ajax--button ajax--profile--button">Learn More</a>
                                <a href="javascript:void(0);" class="v--card">Download VCard</a>
                            </section>
                        </section>
                    </div>
                </div>
                {if $smarty.foreach.loop.iteration is even}</div><div class="row center-xs">{/if}
                {/foreach}
            </div>
        </div>
    </div>
</div>

<div class="ajax--profile ajax--container">
    <div class="row">
        <div class="col-xs-3 dark--gray">
            <div class="box name">
                <h1></h1>
            </div>
        </div>
        <div class="col-xs">
            <div class="ajax--close--button">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 640 480">
                    <path d="M319.4 126C256.2 126 205 177.2 205 240.4s51.2 114.4 114.4 114.4 114.4-51.2 114.4-114.4S382.6 126 319.4 126zm0 207.4c-51.3 0-93-41.6-93-93 0-51.3 41.6-93 93-93s93 41.6 93 93-41.6 93-93 93zm20.3-93l20.2-20.2c2.8-2.8 2.8-7.3 0-10.1L349.8 200c-2.8-2.8-7.3-2.8-10.1 0l-20.2 20.2-20.2-20.2c-2.8-2.8-7.3-2.8-10.1 0L279 210c-2.8 2.8-2.8 7.3 0 10.1l20.2 20.2-20.2 20.2c-2.8 2.8-2.8 7.3 0 10.1l10.1 10.1c2.8 2.8 7.3 2.8 10.1 0l20.2-20.2 20.3 20.3c2.8 2.8 7.3 2.8 10.1 0l10.1-10.1c2.8-2.8 2.8-7.3 0-10.1l-20.2-20.2zm0 0" class="st0"></path>
                </svg>
            </div>
        </div>
    </div>
    <div class="row">
        <section class="page--banner--image--container col-xs-3">
            <section class="page--banner--image about--page--image" style="background: url(http://localhost.thealexandergroup:9999/wp-content/uploads/2017/06/headshot_1.jpg)"></section>
        </section>
        <div class="col-xs-9 baby--blue--gradient">
            <div class="ajax--profile--content">
                <div class="box">
                    <h1></h1>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row dark--gray">
        <div class="col-xs-3 dark--blue">
            <div class="box experience--label">
                <h1></h1>
            </div>
        </div>
    </div>
    <div class="row dark--gray">
        <div class="col-xs">
            <div class="box list">
                <ul></ul>
            </div>
        </div>
    </div>
</div>