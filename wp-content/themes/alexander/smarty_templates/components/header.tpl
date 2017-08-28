<header>
  <section class="FlexContainer NoPadding">

    <!-- ROW -->
    <section class="row">

      <!-- COLUMN -->
      <section class="column SocialMediaIcons RightAlign NoPadding">

        <a href="{$LinkedIn}" target="_blank" class="SocialMediaIcon" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="3866.22 86.4 31 31">
            <path d="M3881.72 86.4a15.5 15.5 0 1 0 15.5 15.5 15.5 15.5 0 0 0-15.5-15.5zm-4.108 23.13h-3.692V98.38h3.694zm-1.83-12.67a1.94 1.94 0 1 1 .038-3.866 1.925 1.925 0 0 1 2.07 1.933 1.975 1.975 0 0 1-2.108 1.933zm15.19 12.67h-3.694v-5.973c0-1.484-.518-2.52-1.864-2.52a2.027 2.027 0 0 0-1.9 1.346 1.97 1.97 0 0 0-.138.932v6.214h-3.727s.033-10.08 0-11.15h3.692v1.586a3.677 3.677 0 0 1 3.35-1.83c2.45 0 4.245 1.588 4.245 5.006v6.386z"/>
          </svg>
        </a>
        <a href="{$Twitter}" target="_blank" class="SocialMediaIcon" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="3808.581 86.4 31 31">
          <path d="M3824.08 86.4a15.5 15.5 0 1 0 15.5 15.5 15.5 15.5 0 0 0-15.5-15.5zm7.63 13.05v.482a10.522 10.522 0 0 1-16.19 8.868 7.508 7.508 0 0 0 .9.035 7.33 7.33 0 0 0 4.59-1.588 3.692 3.692 0 0 1-3.454-2.547 4.68 4.68 0 0 0 .69.07 2.978 2.978 0 0 0 .967-.14 3.7 3.7 0 0 1-2.97-3.63v-.035a3.43 3.43 0 0 0 1.693.45 3.673 3.673 0 0 1-1.656-3.07 3.445 3.445 0 0 1 .518-1.865 10.45 10.45 0 0 0 7.63 3.866 3.4 3.4 0 0 1-.1-.83 3.7 3.7 0 0 1 3.693-3.693 3.62 3.62 0 0 1 2.69 1.177 8.064 8.064 0 0 0 2.347-.9 3.672 3.672 0 0 1-1.622 2.037 7.57 7.57 0 0 0 2.14-.587 8.112 8.112 0 0 1-1.864 1.9z"/>
          </svg>
        </a>
        <a href="{$Facebook}" target="_blank" class="SocialMediaIcon" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="8178 57.477 30.992 30.992">
          <path d="M8193.5 57.477a15.5 15.5 0 1 0 15.5 15.5 15.487 15.487 0 0 0-15.5-15.5zm3.816 16.04h-2.496v8.96h-3.738v-8.96h-1.79v-3.19h1.79V68.3a3.47 3.47 0 0 1 3.738-3.737h2.725v3.114h-2.024a.75.75 0 0 0-.777.857v1.87h2.8zm0 0"/>
          </svg>
        </a>

      </section>
      <!-- /COLUMN -->

      </section>
      <!-- /ROW -->

      <!-- ROW -->
      <section class="row">

        <!-- COLUMN -->
        <section class="column SiteLogo">
          <a href="{$homeURL}">{$SiteLogo}</a>
        </section>
        <!-- /COLUMN -->

        <!-- COLUMN -->
        <section class="column Navigation Primary RightAlign NoPadding">
          {nav->displayPrimaryMenu}
          <section class="HamburgerContainer box">
            <section class="HamburgerMenuTitle">
              Menu
            </section>
            <section class="Hamburger">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </section>
          </section>
          <!--/Hamburger Menu-->

        </section>
        <!-- /COLUMN -->

      </section>
      <!-- /ROW -->

  </section>
</header>


<section class="Navigation Mobile">
  <section class="close">Close Menu</section>
  {nav->displayPrimaryMenu}
</section>
