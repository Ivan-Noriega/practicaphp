<section class="section contact-me" data-section="section4">
        <div class="container">
          <div class="section-heading">
            <h2>Contact</h2>
            <div class="line-dec"></div>
            <span>Aenean a consectetur mi, sit amet consequat velit. Mauris vitae nunc viverra, mattis arcu quis, vestibulum eros. </span>
          </div>
          <div class="row">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input name="name" type="text" class="form-control"
                          id="name" placeholder="Your name..." required="" />
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="email" type="text" class="form-control"
                          id="email" placeholder="Your email..." required=""  />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="subject" type="text" class="form-control" 
                          id="subject" placeholder="Subject..." required="" />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control"
                          id="message" placeholder="Your message..." required="" ></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <?php 
                          require ("button1.php");
                        ?>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>