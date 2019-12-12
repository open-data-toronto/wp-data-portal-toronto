<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

  <section class="content-area">
    <div class="container">
      <div class="hero" aria-label="Introduction">

        <!-- Jumbotron echoes featured image for Homepage -->
        <div class="jumbotron text-center" style="background-image:url('https://open.toronto.ca/wp-content/uploads/2019/09/toronto-the-good.jpg');">

          <div class="row">
            <h1>Search the City of Toronto's Open Data Portal</h1>
            <div class="col-md-6 offset-md-3">
              <form id="dataset-search" class="form-inline" role="search">
                <div class="input-group">
                  <label for="search" class="sr-only">Search Dataset Catalogue</label>
                  <input type="text" class="form-control" name="search" id="search" placeholder="Search datasets"/>
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit">Search</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <section id="about" aria-label="About City of Toronto Open Data">
              <div class="col-md-12">
              <h2>Recently Added Datasets</h2>
              <div class="newsfeed"></div>
              <a class="btn btn-md" href="/catalogue/">Explore the Catalogue</a>
            </div>
          </div>
        </div>
      </section>



    </div>
  </section>
</div><!-- end row -->
</div><!-- ends container-->

<script type="text/javascript">
    jQuery(document).ready(function($) { init(); });
</script>

<?php get_footer(); ?>
