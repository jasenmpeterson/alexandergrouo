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

<section class="home--expertise--section row middle-xs">
    <div class="col-xs-6 page--banner--image--container">
        <section class="page--banner--image expertise--page--image" style="background: url({$expertise_image})"></section>
    </div>
    <div class="col-xs home-page-expertise-content">
        <section class="box">
            {$expertise_content}
            <a href="{$exprtise_link}" class="button--default">
                <span>Read More</span>
                <div class="line"></div>
            </a>
        </section>
    </div>
</section>

<section class="home--locations--section row">
    <div class="col-xs-4">
        <div class="row">
            <section class="col-xs-12 home--locations--content">
                <div class="box">
                    {$locations_content}
                </div>
            </section>
        </div>
        <div class="row">
            <div class="col-xs-3 silver"></div>
            <section class="col-xs-9 home--locations-list baby--blue--gradient">
                <div class="box">
                    <ul>
                        {foreach $locations_list as $location}
                            <li>{$location['location']}</li>
                        {/foreach}
                    </ul>
                    <a href="{$locations_link}" class="button--default button--reverse">
                        <span>View all our locations</span>
                        <div class="line"></div>
                    </a>
                </div>
            </section>
        </div>
    </div>
    <div class="col-xs-8 page--banner--image--container">
        <section class="page--banner--image locations--page--image" style="background: url({$locations_image})"></section>
    </div>
</section>

<section class="home--tag--news row">
    {foreach $tag_news as $news}
        <div class="col-xs-4">
            {if {$news['link_or_media']} === 'Media'}
                <a href="{$news['media']}" target="_blank">
                {else}
                <a href="{$news['link']}" target="_blank">
            {/if}
                <span class="post--date">{$news['date']}</span>
                <h1>{$news['title']}</h1>
            </a>
        </div>
    {/foreach}
</section>