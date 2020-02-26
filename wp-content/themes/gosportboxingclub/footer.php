      <footer>
        <img src="<?= get_template_directory_uri() ?>/img/logo--white.svg" alt="Gosport Boxing Club logo in white" />

        <div>
          <div class="footer__contact">
            <a href="<?php the_field('phone_number', 'option') ?>">
              <p>
                <?php the_field('phone_number', 'option') ?>
              </p>
            </a>
            <a href="mailto:<?php the_field('email_address', 'option') ?>">
              <p>
                <?php the_field('email_address', 'option') ?>
              </p>
            </a>
          </div>
          <div class="social-icons">
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-twitter-square"></i>
          </div>
          <small>Copyright &copy; 2020 Gosport Boxing Club</small>
        </div>
      </footer>
    </div>
    <?php $js = new Asset('main.js'); ?>
    <script src='<?= $js() ?>'></script>
  </body>
</html>
