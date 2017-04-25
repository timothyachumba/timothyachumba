      </div>
    </div>
  </main>
  <footer class="footer cf" role="contentinfo">
  </footer>


  <?php
    if($_SERVER['SERVER_NAME'] == 'timothy.localhost') {
      echo js('assets/js/index.dev.js', true);
    } else {
      echo js('assets/build/index.min.js', true);
    }
  ?>

</body>
</html>
