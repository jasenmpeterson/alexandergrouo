<section class="page--banner home--banner row center-xs middle-xs swatch color-dark background-light-400">
    <div class="col-xs">
        {$content}
    </div>
</section>

<section class="home--about--section row">
    <div class="col-xs">
        <div class="row">
            <div class="col-xs-2 swatch color-dark background-light-400"></div>
            <div class="col-xs">
                <div class="row">
                    <div class="col-xs">

                    </div>
                    <div class="col-xs-6 swatch color-dark background-light-400">
                        {$about_content}
                    </div>
                </div>
            </div>
        </div>
        <div class="row company--motto middle-xs center-xs">
            <section class="col-xs-12">
                {$company_motto}
            </section>
        </div>
    </div>
    <div class="col-xs-3">
        {foreach $posts as $post}
            {$post->post_excerpt}
        {/foreach}
    </div>
    <div class="col-xs-1 swatch color-dark background-light-400"></div>
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
        <div class="col-xs-4">
            <span class="date--object">{$news->post_date|date_format}</span>
            <h3>{$news->post_title}</h3>
        </div>
    {/foreach}
</section>