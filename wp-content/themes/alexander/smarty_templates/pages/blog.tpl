<div class="row posts--row">
    <div class="col-xs-1 white"></div>
    <div class="col-xs silver">
        <div class="row featured--post center-xs">
            {foreach $posts as $post key=key}
                {if $key < 2}

                    {if $post.link !== ''}
                        {assign 'link' {$post.link} }
                        {assign 'target' '_blank'}
                    {elseif $post.media !== ''}
                        {assign 'link' {$post.media} }
                        {assign 'target' '_blank'}
                    {else}
                        {assign 'link' {$post.post_link} }
                        {assign 'target' '_self'}
                    {/if}

                    <div class="col-md-6 col-lg-5 col-sm-12">
                        <article class="box--shadow--all">
                            <a href="{$link}" data-id="{$post.post_type}" target="{$target}" class="bg--image--container">
                                <section class="page--banner--image" style="background: url('{$siteURL}/wp-content/uploads/2017/06/pexels-photo-136413.jpg')"></section>
                                <section class="post--content">
                                    <h1>{$post.post_name}</h1>
                                    <span class="post--date">{$post.post_date}</span>
                                </section>
                            </a>
                        </article>
                    </div>
                {/if}
            {/foreach}
        </div>
        <div class="row center-md post--pagination">
            <div class="col-sm-12">
                {$pagination->pagination($max_num_pages)}
            </div>
        </div>
        <div class="row standard--post center-xs">
            <div class="col-md-6 post--container">
                {foreach $posts as $post key=key}
                    {if $key > 1}
                        {if $post.link !== ''}
                            {assign 'link' {$post.link} }
                            {assign 'target' '_blank'}
                        {elseif $post.media !== ''}
                            {assign 'link' {$post.media} }
                            {assign 'target' '_blank'}
                        {else}
                            {assign 'link' {$post.post_link} }
                            {assign 'target' '_self'}
                        {/if}
                        <article>
                            <a href="{$link}" class="row box--shadow--all" target="{$target}">
                                <div class="col-xs-3 post--image--container bg--image--container">
                                    <section class="page--banner--image" style="background: url('{$siteURL}/wp-content/uploads/2017/06/pexels-photo-136413.jpg')"></section>
                                </div>
                                <section class="post--content col-xs-9">
                                    <h1>{$post.post_name}</h1>
                                    <span class="post--date">{$post.post_date}</span>
                                </section>
                            </a>
                        </article>
                    {/if}
                {/foreach}
            </div>
            <div class="col-md-4">
                <section class="twitter--feed box box--shadow--all">
                    {foreach $twitter_feed as $feed name=twitterloop}
                        {if $smarty.foreach.twitterloop.iteration == 1}
                            <article class="twitter--name twitter--post">
                                <a href="https://twitter.com/{$feed->user->screen_name}">
            <span class="twitter--icon">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 640 480" class="TwitterIcon">
        <path d="M273.6 341.6c94.3 0 145.9-78.2 145.9-145.9 0-2.2 0-4.4-.1-6.6 10-7.2 18.7-16.3 25.6-26.6-9.2 4.1-19.1 6.8-29.5 8.1 10.6-6.3 18.7-16.4 22.6-28.4-9.9 5.9-20.9 10.1-32.6 12.4-9.4-10-22.7-16.2-37.4-16.2-28.3 0-51.3 23-51.3 51.3 0 4 .5 7.9 1.3 11.7-42.6-2.1-80.4-22.6-105.7-53.6-4.4 7.6-6.9 16.4-6.9 25.8 0 17.8 9.1 33.5 22.8 42.7-8.4-.3-16.3-2.6-23.2-6.4v.7c0 24.8 17.7 45.6 41.1 50.3-4.3 1.2-8.8 1.8-13.5 1.8-3.3 0-6.5-.3-9.6-.9 6.5 20.4 25.5 35.2 47.9 35.6-17.6 13.8-39.7 22-63.7 22-4.1 0-8.2-.2-12.2-.7 22.6 14.4 49.6 22.9 78.5 22.9"></path>
      </svg>
            </span>
                                    <h1>@{$feed->user->screen_name}</h1>
                                </a>
                            </article>
                        {/if}
                        <article class="twitter--post row">
                            <section class="site--logo col-xs-3">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 173.57 145.18">
                                    <path d="M0 0h173.57v145.18H0z" class="cls-1"></path>
                                    <path d="M5.19 5.12h162.72v134.94H5.19z" class="cls-2"></path>
                                    <path d="M74.29 34.68h-1.51v-11h-4.16v-1.4h9.8v1.36h-4.13zm14.52 0v-4.33h-5.19v4.33h-1.43V25h1.43v4.08h5.17V25h1.46v9.69zm7.81-1.28h5.19v1.28h-6.67V25h6.38v1.28h-4.9v2.8h4.4v1.28h-4.4zM33.44 76l5.05-12.41h1.31L44.85 76h-1.64l-1.48-3.7h-5.19L35.06 76zm5.69-10.48q-.83 2.32-1.59 4.21l-.46 1.17h4.11l-.47-1.17q-.76-1.93-1.56-4.21zm10.88.83v8.41h5V76h-6.45v-9.65zm10.31 8.41h5.19V76h-6.65v-9.65h6.38v1.28h-4.92v2.8h4.4v1.28h-4.4zm10.13-8.41l2.62 3.7 2.64-3.7h1.54l-3.39 4.73 3.55 5h-1.52l-2.81-4-2.82 4h-1.64l3.6-5-3.33-4.7zm16.23 6.89h-4.2L81.4 76h-1.49l3.87-9.69h1.6L89.27 76h-1.5zm-2.11-5.45q-.51 1.42-.94 2.52L82.98 72h3.22l-.64-1.65q-.44-1.15-.93-2.52zm13.65 3.74q1.06 1.5 1.71 2.62-.11-1.67-.11-3.69v-4.11h1.46V76h-1.49l-3.75-5.29q-1-1.43-1.71-2.63.1 1.79.1 3.75V76h-1.5v-9.65h1.63zm16.26-.38a4.73 4.73 0 0 1-1 3.15 4.82 4.82 0 0 1-2.81 1.56 8.06 8.06 0 0 1-.94.13h-3.55v-9.64h2.49a10.91 10.91 0 0 1 1.9.14 5.74 5.74 0 0 1 1.43.44 4 4 0 0 1 1.85 1.62 5 5 0 0 1 .63 2.6zm-1.51 0a4.38 4.38 0 0 0-.29-1.7 2.48 2.48 0 0 0-.85-1.08 3.58 3.58 0 0 0-1.37-.57 9.15 9.15 0 0 0-1.85-.17h-1v7.13h1q.59 0 1.14-.05a5.43 5.43 0 0 0 1-.2 3.6 3.6 0 0 0 .89-.39 2.42 2.42 0 0 0 .69-.65 3.09 3.09 0 0 0 .45-1 5 5 0 0 0 .19-1.32zm7.28 3.61h5.19V76h-6.65v-9.65h6.38v1.28h-4.92v2.8h4.37v1.28h-4.4zM134.27 72l3 4.07h-1.65l-2.81-3.9h-1.51V76h-1.46v-9.65h3a8.6 8.6 0 0 1 1.2.07 4.76 4.76 0 0 1 .93.22 2.72 2.72 0 0 1 1.37 1 2.64 2.64 0 0 1 .46 1.56 2.73 2.73 0 0 1-.19 1 2.47 2.47 0 0 1-.52.81 3 3 0 0 1-.79.57 3.75 3.75 0 0 1-1 .33zm-3-4.34v3.23h1.56a3.38 3.38 0 0 0 1.92-.42 1.45 1.45 0 0 0 .59-1.27 1.31 1.31 0 0 0-.58-1.17 3 3 0 0 0-1.63-.37zm-66.56 52.63h-2.82v-1.36h4.33v6a3.19 3.19 0 0 1-.57.21q-.37.11-.86.2c-.32.06-.67.11-1 .15a10.84 10.84 0 0 1-1.09.05 8.33 8.33 0 0 1-2.81-.44 5.62 5.62 0 0 1-2-1.23 5.17 5.17 0 0 1-1.25-1.94 7.21 7.21 0 0 1-.43-2.54 7.79 7.79 0 0 1 .47-2.76 5.85 5.85 0 0 1 1.35-2.12 6.05 6.05 0 0 1 2.14-1.36 7.73 7.73 0 0 1 2.77-.48q.41 0 .82 0t.78.09c.25 0 .48.09.69.14a4 4 0 0 1 .53.18v1.34a8.74 8.74 0 0 0-1.28-.31 8.42 8.42 0 0 0-1.45-.12 6.31 6.31 0 0 0-2 .32 4.83 4.83 0 0 0-1.69 1 4.69 4.69 0 0 0-1.17 1.63 5.59 5.59 0 0 0-.44 2.29 6.17 6.17 0 0 0 .36 2.23 4.06 4.06 0 0 0 1 1.55 4.11 4.11 0 0 0 1.61.9 7.07 7.07 0 0 0 2.1.29 10 10 0 0 0 1.06-.06 6.82 6.82 0 0 0 .93-.16zm10.86.95l3 4.07h-1.7l-2.81-3.9h-1.51v3.9h-1.46v-9.69h3a8.68 8.68 0 0 1 1.2.07 4.68 4.68 0 0 1 .93.22 2.73 2.73 0 0 1 1.37 1 2.65 2.65 0 0 1 .46 1.56 2.74 2.74 0 0 1-.19 1 2.47 2.47 0 0 1-.52.81 3 3 0 0 1-.79.58 3.73 3.73 0 0 1-1 .33zm-3-4.34v3.23h1.56a3.38 3.38 0 0 0 1.92-.42 1.45 1.45 0 0 0 .59-1.27 1.31 1.31 0 0 0-.58-1.17 3 3 0 0 0-1.63-.37zm18.91 3.58a5.78 5.78 0 0 1-.34 2 4.84 4.84 0 0 1-1 1.6 4.33 4.33 0 0 1-1.48 1.06 4.74 4.74 0 0 1-1.92.38 4.92 4.92 0 0 1-2-.38 4.29 4.29 0 0 1-1.5-1.06 4.72 4.72 0 0 1-1-1.6 5.93 5.93 0 0 1-.33-2 5.85 5.85 0 0 1 .34-2 4.84 4.84 0 0 1 1-1.61 4.35 4.35 0 0 1 1.49-1.06 4.76 4.76 0 0 1 1.93-.38 4.87 4.87 0 0 1 2 .38 4.24 4.24 0 0 1 1.49 1.06 4.8 4.8 0 0 1 .95 1.61 6 6 0 0 1 .37 2zm-1.51 0a5 5 0 0 0-.25-1.65 3.44 3.44 0 0 0-.69-1.2 2.83 2.83 0 0 0-1-.72 3.35 3.35 0 0 0-2.5 0 2.84 2.84 0 0 0-1 .72 3.45 3.45 0 0 0-.69 1.2 5 5 0 0 0-.25 1.65 4.86 4.86 0 0 0 .25 1.65 3.42 3.42 0 0 0 .69 1.18 2.84 2.84 0 0 0 1 .71 3.33 3.33 0 0 0 1.26.24 3.22 3.22 0 0 0 1.23-.26 2.87 2.87 0 0 0 1-.71 3.38 3.38 0 0 0 .69-1.18 5 5 0 0 0 .26-1.63zm9.74 3.78a2.66 2.66 0 0 0 1.45-.35 2.12 2.12 0 0 0 .81-.93 2.87 2.87 0 0 0 .21-.73 5.25 5.25 0 0 0 .06-.83v-5.8h1.46v5.94a6.11 6.11 0 0 1-.08 1 3.83 3.83 0 0 1-.27.9 3.13 3.13 0 0 1-1.29 1.47 3.78 3.78 0 0 1-1 .42 5.42 5.42 0 0 1-1.33.15 5.26 5.26 0 0 1-1.41-.17 3.77 3.77 0 0 1-1.08-.48 3 3 0 0 1-.77-.73 3.37 3.37 0 0 1-.48-.94 5.47 5.47 0 0 1-.24-1.69v-5.92h1.46v5.8a5 5 0 0 0 .06.76 3.12 3.12 0 0 0 .18.67 2.1 2.1 0 0 0 .8 1 2.72 2.72 0 0 0 1.46.46zm10.22 1.05h-1.46v-9.69h3.15a5.81 5.81 0 0 1 1.62.2 3.34 3.34 0 0 1 1.17.58 2.43 2.43 0 0 1 .7.89 3 3 0 0 1-.07 2.48 2.82 2.82 0 0 1-.88 1 4.22 4.22 0 0 1-1.39.62 7.21 7.21 0 0 1-1.83.21h-1.01zm0-5.06h.95a6.15 6.15 0 0 0 1.4-.13 2.66 2.66 0 0 0 .91-.37 1.39 1.39 0 0 0 .49-.58 1.9 1.9 0 0 0 .15-.76q0-1.56-2.33-1.56h-1.58z" class="cls-3"></path>
                                    <path d="M5.12 48.16h162.75M5.12 96.32h162.75" class="cls-4"></path>
                                </svg>
                            </section>
                            <section class="twitter--content col-xs-9">
                                <h1>{$feed->user->name}</h1>
                                <p>{$feed->text}</p>
                            </section>
                        </article>
                    {/foreach}
                </section>
            </div>
        </div>
    </div>
</div>