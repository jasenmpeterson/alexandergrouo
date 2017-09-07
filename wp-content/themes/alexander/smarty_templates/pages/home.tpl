<section class="home--page--banner page--banner row center-xs middle-xs">
    <section class="page--banner--image" style="background: url({$featured_image})"></section>
    <div class="col-xs page--banner--content">
        {$content}
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="926.945 947.945 60.109 60.109" class="scroll--down">
            <g transform="translate(811.5 954.5)">
                <circle cx="28.055" cy="28.055" r="28.055" transform="translate(117.445 -4.555)"></circle>
                <path d="M129.52 21.014l16.336 7.813 16.336-7.813"></path>
            </g>
        </svg>
    </div>
</section>
<section style="visibility: hidden; position: relative; top: -150px" class="hidden-anchor"></section>
<section class="home--about--section row">
    <div class="col-sm">
        <div class="row">
            <div class="col-sm-1 silver"></div>
            <div class="col-sm">
                <div class="row box--shadow--all">
                    <div class="col-sm-12 col-md-4 page--banner--image--container">
                        <section class="page--banner--image about--page--image" style="background: url({$about_page_image['url']})"></section>
                    </div>
                    <div class="col-sm-12 col-md-8 baby--blue--gradient">
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
            <section class="col-sm-12">
                <div class="box">
                    {$company_motto}
                </div>
            </section>
        </div>
    </div>
    <div class="col-sm-12 col-md-4 silver">
        <section class="box">
            <section class="post--list">
                <section class="home--post--title post--title">Blog</section>
                {foreach $posts as $post}
                    <a href="{$post['link']}">
                        <h6>{$post['title']}</h6>
                        {$post['content']}
                    </a>
                {/foreach}
            </section>
            <a href="{$blog_link}blog" class="button--default">
                <span>Read More</span>
                <div class="line"></div>
            </a>
        </section>
    </div>
    <div class="col-xs-1 dark--blue"></div>
</section>

<section class="home--expertise--section row middle-xs">
    <div class="col-sm-12 col-md-6 page--banner--image--container">
        <section class="page--banner--image expertise--page--image" style="background: url({$expertise_image})"></section>
    </div>
    <div class="col-sm-12 col-md-6 home-page-expertise-content">
        <section class="box">
            {$expertise_content}
            <a href="{$expertise_link}" class="button--default">
                <span>Read More</span>
                <div class="line"></div>
            </a>
        </section>
    </div>
</section>

<section class="home--locations--section row">
    <div class="col-sm-12 col-md-6">
        <div class="row">
            <section class="col-sm-12 home--locations--content">
                <div class="box">
                    {$locations_content}
                </div>
            </section>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3 silver"></div>
            <section class="col-sm-9 home--locations-list baby--blue--gradient">
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
    <div class="col-sm-12 col-md-6 page--banner--image--container">
        <section class="page--banner--image locations--page--image" style="background: url({$locations_image})"></section>
    </div>
</section>

<section class="home--tag--news row">
    {foreach $tag_news as $news}
        <div class="col-sm-12 col-md-4">
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