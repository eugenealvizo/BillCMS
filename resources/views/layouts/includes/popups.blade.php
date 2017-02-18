<div class="pop-cover">
<!-- POPUP CONTENT -->
  <div class="pop-holder"></div>
  <div class="pop-up popsearch">
    <div class="close">
      {!!file_get_contents(url('dist/images/right-arrow.svg'))!!}
    </div>
    <div class="search-holder">
    <form id="search-frm">
      <input type="search" id="term" placeholder="TYPE HERE">

      <div class="suggestions">
        <span>Search Suggestions...</span>
        <div class="suggested-search">
          <a href="javascript:void(0);">
            Discounted Accomodations
          </a>
          <a href="javascript:void(0);">
            Family Discounts
          </a>
        </div>
      </div>
    </form>
    </div>
  </div>
  
  <div class="pop-up popdiscover01">
    <div class="close">
      {!!file_get_contents(url('dist/images/close.svg'))!!}
    </div>
    <div class="discover-container">
      <div class="section-article_slide mini-review add_slickPopDiscover01">

          <div class="slide-container">
            <div class="image-output"></div>
          </div>

          <div class="side">
            <div class="description">
              <h2>{{$residence[0]->title}}</h2>
              <!-- <p> -->
                {!!$residence[0]->description!!}
              <!-- </p> -->
              <div class="slide-pagination">
                <?php 
                  $images = json_decode($residence[0]->images);
                  $title = str_replace(' ', '-', preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $residence[0]->title)).'/';
                ?>
                @foreach($images as $k => $v)
                <div class="opt">
                  <div class="img-holder">
                    <img src="{{url('uploads/our-residence/'.strtolower($title).'/'.$v)}}" alt="" class="{{$k == 0 ? 'active-pic' : ''}}">
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="pop-up popdiscover02">
    <div class="close">
      {!!file_get_contents(url('dist/images/close.svg'))!!}
    </div>
    <div class="discover-container">
      <div class="section-article_slide mini-review add_slickPopDiscover02">

          <div class="slide-container">
            <div class="image-output"></div>
          </div>

          <div class="side">
            <div class="description">
              <h2>{{$residence[1]->title}}</h2>
              <!-- <p> -->
                {!!$residence[1]->description!!}
              <!-- </p> -->
              <div class="slide-pagination">
                <?php 
                  $images = json_decode($residence[1]->images);
                  $title = str_replace(' ', '-', preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $residence[1]->title)).'/';
                ?>
                @foreach($images as $k => $v)
                <div class="opt">
                  <div class="img-holder">
                    <img src="{{url('uploads/our-residence/'.strtolower($title).'/'.$v)}}" alt="" class="{{$k == 0 ? 'active-pic' : ''}}">
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  
  <div class="pop-up pop-roomdetail">
    <div class="close">
      {!!file_get_contents(url('dist/images/close.svg'))!!}
    </div>
    <div class="room-detail_container">
       <div class="section-article_slide add_slickPopDetails">

            <div class="slide-container">
              <div class="image-output"></div>
            </div>

            <div class="side">
              <div class="description">
                <div class="room-presentation">
                    <h2>Deluxe King</h2>
                    <!-- capacity -->
                    <div class="cap-details">
                      <h4>CAPACITY: 2 PERSONS(S)</h4>
                      <span>Max: 3 Person(s)</span>
                      <p>Extra person beyond 'room capacity' will be charges PHP 1000/person upon check-in</p>
                    </div>

                    <div class="regular-description">
                      <div class="desc-col">
                        <div class="desc-col-left">
                          <span class="title">Description</span>
                          <ul>
                            <li>
                              Size:40 m2 / 276 ft2
                            </li>
                            <li>
                              View:Trees
                            </li>
                            <li>
                              Bed:King-size
                            </li>
                          </ul>
                        </div>
                        <div class="desc-col-right">
                          <span class="title">Service Room</span>
                          <ul>
                            <li>
                              Oversized work desk
                            </li>
                            <li>
                              Hairdryer
                            </li>
                            <li>
                              Iron/ironing board upon request
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="desc-col">
                        <div class="desc-col-left">
                          <span class="title">Bathroom</span>
                          <ul>
                            <li>
                              Dataport
                            </li>
                            <li>
                              Phone access fees waived
                            </li>
                            <li>
                              24-hour Concierge service
                            </li>
                            <li>
                              Private concierge
                            </li>
                          </ul>
                        </div>
                        <div class="desc-col-right">
                          <span class="title">Oversized work desk</span>
                          <ul>
                            <li>
                              Dataport
                            </li>
                            <li>
                              Phone access fees waived
                            </li>
                            <li>
                              24-hour Concierge service
                            </li>
                            <li>
                              Private concierge
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    
                </div>

                <div class="slide-pagination">
                  <div class="opt">
                    <div class="img-holder">
                      <img src="http://placehold.it/720x582" alt="">
                    </div>
                  </div>
                  <div class="opt">
                    <div class="img-holder">
                      <img src="dist/images/home-bottomstyle.jpg" alt="" class="active-pic">
                    </div>
                  </div>
                  <div class="opt">
                    <div class="img-holder">
                      <img src="http://placehold.it/720x582" alt="">
                    </div>
                  </div>
                  <div class="opt">
                    <div class="img-holder">
                      <img src="dist/images/home-bottomstyle.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</div>