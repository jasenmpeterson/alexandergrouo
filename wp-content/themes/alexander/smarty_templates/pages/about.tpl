<section class="video--wrapper--container">
    <div class="about--page--video--wrapper video--wrapper js--video--wrapper">
        <iframe class="video--iframe js--video--iframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="{$about_us_video}"></iframe>
        <button class="video--poster" style="background-image:url(http://i2.wp.com/www.cgmeetup.net/home/wp-content/uploads/2015/05/Avengers-Age-of-Ultron-UI-Reel-1.jpg);">
            Play Video
        </button>
    </div>
</section>

<section class="about--us--container row">
    <section class="col-xs-4 silver"></section>
    <section class="col-xs-7">
        <div class="row about--us--content middle-xs">
            <section class="col-xs">

                <div class="row middle-xs">
                    <section class="col-xs-6">
                        <div class="box">
                            <h1>{$about_us_title}</h1>
                        </div>
                    </section>
                    <section class="col-xs-6">
                        <div class="box">
                            {$about_us_content}
                        </div>
                    </section>
                </div>

                <div class="row middle-xs search-types">
                    <section class="col-xs-9">
                        {foreach $searches as $search}
                            <div class="box">
                                <h1>{$search['label']}</h1>
                                {$search['content']}
                            </div>
                        {/foreach}
                    </section>
                    <section class="col-xs-3"></section>
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
            <button class="video--poster" style="background-image:url(http://i2.wp.com/www.cgmeetup.net/home/wp-content/uploads/2015/05/Avengers-Age-of-Ultron-UI-Reel-1.jpg);">
                Play Video
            </button>
        </div>
    </section>
    <div class="row our--culture--quote">
        <div class="col-xs-1 dark--blue"></div>
        <div class="col-xs-4 dark--gray">
            <div class="box">
                {$our_culture_quote}
            </div>
        </div>
        <div class="col-xs-7 baby--blue"></div>
    </div>
    <div class="row our--culture--content">
        <div class="col-xs-1"></div>
        <div class="col-xs-6">
            <div class="box">
                {$our_culture_content}
            </div>
        </div>
    </div>
</section>