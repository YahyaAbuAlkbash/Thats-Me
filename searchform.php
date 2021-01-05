<form class="flex relative " role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input type="search" id="" class="border px-4 w-full p-2 h-12 rounded-full focus:outline-none focus:border-gray-300" placeholder="<?php _e( 'Search','thats-me') ?>..." value="<?php echo  get_search_query(); ?>" name="s" />
  <button type="submit" class="rounded-full border absolute h-12 w-12 bg-gray-100 hover:bg-gray-200 focus:outline-none hover:border-gray-300 <?php echo is_rtl() ? "left" : "right"; ?>-0">
    <svg class="h-6 w-6 mx-auto" viewBox="0 0 512.005 512.005">
       <path d="M505.749,475.587l-145.6-145.6c28.203-34.837,45.184-79.104,45.184-127.317c0-111.744-90.923-202.667-202.667-202.667
          S0,90.925,0,202.669s90.923,202.667,202.667,202.667c48.213,0,92.48-16.981,127.317-45.184l145.6,145.6
             c4.16,4.16,9.621,6.251,15.083,6.251s10.923-2.091,15.083-6.251C514.091,497.411,514.091,483.928,505.749,475.587z
                M202.667,362.669c-88.235,0-160-71.765-160-160s71.765-160,160-160s160,71.765,160,160S290.901,362.669,202.667,362.669z"/>
    </svg>
  </button>
</form>
