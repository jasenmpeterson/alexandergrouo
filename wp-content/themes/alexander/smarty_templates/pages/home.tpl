<section class="home--page--banner page--banner row center-xs middle-xs">
    <section class="page--banner--image" style="background: url({$featured_image})"></section>
    <div class="col-xs page--banner--content">
        {$content}
    </div>
</section>

<section class="home--about--section row">
    <div class="col-xs">
        <div class="row">
            <div class="col-xs-2 silver"></div>
            <div class="col-xs">
                <div class="row box--shadow--all">
                    <div class="col-xs page--banner--image--container">
                        <section class="page--banner--image about--page--image" style="background: url({$about_page_image['url']})"></section>
                    </div>
                    <div class="col-xs-4 baby--blue--gradient">
                        <div class="box">
                            {$about_content}
                            <a href="{$about_link}" class="button--default">
                                <span>Learn More</span>
                                <div class="line"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row home--company--motto company--motto middle-xs center-xs">
            <section class="col-xs-12">
                <div class="box">
                    {$company_motto}
                </div>
            </section>
        </div>
    </div>
    <div class="col-xs-3 silver">
        <section class="box">
            <section class="post--list">
                <section class="home--post--title post--title">Blog</section>
                {foreach $posts as $post}
                    <a href="{$post['link']}">
                        {$post['content']}
                    </a>
                {/foreach}
            </section>
            <a href="{$blog_link}" class="button--default">
                <span>Read More</span>
                <div class="line"></div>
            </a>
        </section>
    </div>
    <div class="col-xs-1 dark--blue"></div>
</section>

<section class="home--expertise--section row">
    <div class="col-xs-6">

    </div>
    <div class="col-xs">
        {$expertise_content}
    </div>
</section>

<section class="home--locations--section row">
    <div class="col-xs-6">
        <div class="row">
            <section class="col-xs-12 home--locations--content">
                {$locations_content}
            </section>
        </div>
        <div class="row">
            <div class="col-xs-1 swatch color-dark background-light-400"></div>
            <section class="col-xs-4 home--locations-list">
                <ul>
                    {foreach $locations_list as $location}
                        <li>{$location['location']}</li>
                    {/foreach}
                </ul>
            </section>
        </div>
    </div>
    <div class="col-xs swatch color-dark background-light-400"></div>
</section>

<section class="home--tag--news row">
    {foreach $tag_news as $news}

    {/foreach}
</section>